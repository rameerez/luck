<html>
  <head>
    <?php include('./_head_imports.php') ?>
  </head>

  <body>
    <!-- <div class="col">
      <label for="customRange1">Example range</label>
      <input type="range" class="custom-range" id="customRange1">
    </div> -->

    <section id="step-0" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <h1>Success<div class="">is it really hard work or just luck?</div></h1>
              <a href="#step-1" type="button" class="btn btn-primary" onclick="">Play game</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="step-1" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <p>Explainatory text</p>
              <a href="#step-2" type="button" class="btn btn-primary" onclick="">Next step</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="step-2" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <p>Let's take only one subject as an example.</p>
              <p>Their total success is calculated as <span id="effort-impact"></span>% hard work and <span id="luck-impact"></span>% luck.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-2 offset-md-5">
            <?php include('./_subject_box.php') ?>
          </div>
          <div class="col-12 text-center">
            <p>Play with the.. until you're ready to move on.</a>
            <p><a>Generate new data</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <a href="#step-3" type="button" class="btn btn-primary" onclick="">Next step</a>
          </div>
        </div>
      </div>
    </section>


    <section id="step-3" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p>If we now do this over 100 subjects...</p>
          </div>
        </div>
        <div class="row">
          <?php foreach (range(0, 11) as $subject_id) { ?>
            <div class="col-sm-6 col-md-2 mt-5">
              <?php include('./_subject_box.php') ?>
            </div>
          <?php } ?>
        </div>

        <div class="row">
          <div class="col text-center">
            <p>Generate new 100 subjects</p>
            <p>You get the idea</p>
            <a href="#step-3" type="button" class="btn btn-primary" onclick="">Next step</a>
          </div>
        </div>
      </div>
    </section>

    <section id="step-4" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <p>That seemed pretty random, but... can we see a pattern? What if we sort and ... just the top 10. Explainatory text</p>
              <a href="#step-2" type="button" class="btn btn-primary" onclick="">Sort and reveal top 10 candidates</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="step-3" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>The top 10 candidates</h2>
            <p>These are... the top 10 candidates. can you see the partern?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-4 text-center">
            <p>99.7% <br />Average effort</p>
          </div>
          <div class="col-4 text-center">
            <p>99.7% <br />Average luck</p>
          </div>
          <div class="col-4 text-center">
            <p>99.7% <br />Average success</p>
          </div>
        </div>
        <div class="row">
          <?php foreach (range(0, 9) as $subject_id) { ?>
            <div class="col my-5">
              <?php include('./_subject_box.php') ?>
            </div>
          <?php } ?>
        </div>

        <div class="row">
          <div class="col text-center">
            <p>Reveal the rest of the 100 candidates</p>
            <a href="#step-3" type="button" class="btn btn-primary" onclick="">Next step</a>
          </div>
        </div>
      </div>
    </section>

    <section id="step-4" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <p>Top candidates consistently have a good deal of luck, even though it only accounts for 5% of the...</p>
              <p>A question may arise: what if we removed luck?</p>
              <a href="#step-2" type="button" class="btn btn-primary" onclick="">Discover what happens if we remove luck</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="step-3" class="vertical-center">
      <div class="container">

        <div class="row">
          <div class="col-12 text-center">
            <h2>The top 10 candidates – if luck was not a factor</h2>
            <p>These are what the top 10 candidates would be if luck was not a considered.</p>
          </div>
        </div>
        <div class="row">
          <?php foreach (range(0, 9) as $subject_id) { ?>
            <div class="col my-5">
              <?php include('./_subject_box.php') ?>
            </div>
          <?php } ?>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <p>And, for reference, these were the top 10 with luck.</p>
          </div>
        </div>
        <div class="row">
          <?php foreach (range(0, 9) as $subject_id) { ?>
            <div class="col my-5">
              <?php include('./_subject_box.php') ?>
            </div>
          <?php } ?>
        </div>

        <div class="row">
          <div class="col text-center">
            <p>8 out of 10 of them are different people. Only 2 remain the same.</p>
            <a href="#step-3" type="button" class="btn btn-primary" onclick="">Is it fair?</a>
          </div>
        </div>
      </div>
    </section>


    <section id="step-4" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <p>Well, if we run the simulation more times, luck only becomes more and more important...</p>
              <p>Todo graph</p>
              <a href="#step-2" type="button" class="btn btn-primary" onclick="">Is there anything we can do?</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="step-4" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <p>While there's not much we can do, we can argue if luck really accounts for 5% of the total success – or is it more?</p>
              <p>Todo graph</p>
              <a href="#step-2" type="button" class="btn btn-primary" onclick="">Is there anything we can do?</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
  </body>
</html>