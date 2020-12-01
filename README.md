!["Success: is it really hard work – or just luck?"](https://github.com/rameerez/luck/blob/master/src/images/success-title.jpg?raw=true)

# Live webapp: [🔗 rameerez.com/luck](https://rameerez.com/luck)

This is a web experiment aimed to explore the idea of randomness in life, especially in regards to success.

It's a guided web experience that shows that if you randomly generate "luck" and "hard work" scores ranging from 0 to 100 for 1.000 subjects and then sort them by "total score" (a weighted sum of 95% hard work + 5% luck), the top performers tend to have a significant good luck score, well above average.

This is not intended to prove anything – but rather to reflect about the idea of luck and maybe help spark a few interesting conversations with friends.

!["The top 3 performers among 1.000 randomly generated subjects tend to share a significantly high luck score"](https://github.com/rameerez/luck/blob/master/src/images/top-3.jpg?raw=true)

## Technologies used

I'm not specially proud of the code in this repo. I just wanted to quickly sketch out an idea and I used the tools I had at hand that allowed me to move the fastest. So I started coding the idea in PHP and then added JS (jQuery) for functionality.

I know this would have been more elegant in React / using HTML-in-JS, instead of first templating with PHP and then filling in the missing functionality with plain jQuery, but hey, this needn't to be a software engineering project nor I did it for portfolio / skill showcasing purposes, so it is what it is.

PRs are more than welcome!

## How to develop

Code is in the `src` folder.

All DOM elements are generated with PHP.

Then content and functionality is generated and added via jQuery.

You can just `cd` into `src` 


## TO-DO

  - [ ] Use npm packages instead of inline script imports
  - [ ] Make Webpack compile + minmize JS into a nice bundle
  - [ ] Make Webpack pre-compile all PHP into a static HTML file
  - [ ] Make Webpack create a ready-to-deploy `/dist`

## Translating

If you'd like to translate this, please hit me up and/or modify the code to allow for localized strings, add your translation and submit a PR!