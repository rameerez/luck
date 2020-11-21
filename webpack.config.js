var webpack = require("webpack"),
  path = require("path"),
  fileSystem = require("fs"),
  env = require("./utils/env"),
  CleanWebpackPlugin = require("clean-webpack-plugin").CleanWebpackPlugin,
  CopyWebpackPlugin = require("copy-webpack-plugin"),
  WriteFilePlugin = require("write-file-webpack-plugin"),
  MiniCssExtractPlugin = require("mini-css-extract-plugin"),
  OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin"),
  TerserJSPlugin = require("terser-webpack-plugin"),
  ConcatPlugin = require("webpack-concat-plugin");

// load the secrets
var alias = {};

var secretsPath = path.join(__dirname, "secrets." + env.NODE_ENV + ".js");

if (fileSystem.existsSync(secretsPath)) {
  alias["secrets"] = secretsPath;
}

var options = {
  mode: process.env.NODE_ENV || "development",
  entry: {
    default: path.join(
      __dirname,
      "src",
      "js",
      "index.js"
    ),
    css: [
      path.join(__dirname, "src", "css", "styles.css"),
    ],
  },
  output: {
    path: path.join(__dirname, "dist"),
    filename: "[name].bundle.js",
  },
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader, "css-loader"],
        exclude: /node_modules/,
      },
      {
        test: /\.html$/,
        loader: "html-loader",
        exclude: /node_modules/,
      },
      {
        test: /\.js$/,
        loader: "string-replace-loader",
        options: {
          search: "__API_BASE_URL__",
          replace:
            env.NODE_ENV == "development"
              ? "http://localhost:3000"
              : "https://api.rameerez.com",
          flags: "g",
        },
      },
      {
        test: /\.js$/,
        loader: "string-replace-loader",
        options: {
          search: "__AMPLITUDE_API_TOKEN__",
          replace:
            env.NODE_ENV == "development"
              ? "6333f7d626cce986900195555cfe8dfb"
              : "a6cb65685313a454421c32951043673a",
          flags: "g",
        },
      },
    ],
  },
  resolve: {
    alias: alias,
  },
  optimization: {
    minimizer: [
      new TerserJSPlugin({
        terserOptions: {
          compress: {
            // drop_console: env.NODE_ENV != "development",
          },
        },
      }),
      new OptimizeCSSAssetsPlugin({}),
    ],
  },
  plugins: [
    // clean the build folder
    new CleanWebpackPlugin(),
    // expose and write the allowed env vars on the compiled bundle
    new webpack.EnvironmentPlugin(["NODE_ENV"]),
    new CopyWebpackPlugin([
      {
        from: "src/*.php",
        to: "[name].php",
      },
    ]),
    new MiniCssExtractPlugin({
      filename: "[name].bundle.css",
    }),
    new WriteFilePlugin(),
  ],
};

if (env.NODE_ENV === "development") {
  options.devtool = "cheap-module-eval-source-map";
}

module.exports = options;
