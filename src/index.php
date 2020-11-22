<html>
  <head>
    <?php include('./_head_imports.php') ?>
  </head>

  <body>

    <section id="step-0" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <h1><span class="success">Success</span><div class="success-subtitle">is it really hard work – or just luck?</div></h1>
              <a href="#step-1" type="button" class="btn btn-primary mt-3" onclick="">Play game</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="step-1" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 offset-md-3">
            <div class="text-center">
              <p>Entrepreneurs, athletes, artists, politicians, astronauts... there's one thing they all have in common: success. Most will say this is just the product of skill, hard work and dedication: <b>but is it really?</b></p>
              <a href="#step-2" type="button" class="btn btn-primary" onclick="">Let's find out</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="step-2" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 offset-md-2">
            <div class="text-center">
              <p>Let's take one random person as an example. <b>This will be you</b>.</p>
              <p>You will be represented by a random <b>🏋️ hard work score</b> (skill) and a random <b>🍀 luck score</b>. Your <b>🏆 total success</b> will be calculated as <span id="effort-impact"></span>% hard work and <span id="luck-impact"></span>% luck.</p>
              <a href="#step-3" type="button" class="btn btn-primary" onclick="generateRandomSelf()">Generate your random self</a>
            </div>
          </div>
        </div>
        <div class="row" id="random-self-row">
          <div class="col-sm-12 col-md-2 offset-md-5">
            <div id="random-self">
              <?php include('./_subject_box.php') ?>
            </div>
          </div>
          <div class="col-sm-12 col-md-8 offset-md-2 text-center">
            <p><a onclick="generateRandomSelf()">Re-generate your random self</a></p>
            <p>Play with the random generator until you're happy and ready to move on.</a>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <a href="#step-3" type="button" class="btn btn-primary" onclick="">Meet the rest</a>
          </div>
        </div>
      </div>
    </section>


    <section id="step-3" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 offset-md-2 text-center">
            <p>But you're not alone in the world, aren't you? These are <b>100 more random people</b>, representing the rest of the population – and the people you have to compete with. They have been randomly generated, just like you.</p>
          </div>
        </div>

        <div id="first-12-candidates" class="row">
          <?php foreach (range(1, 12) as $subject_id) { ?>
            <div class="col-6 col-md-2 mt-5">
              <?php include('./_subject_box.php') ?>
            </div>
          <?php } ?>
        </div>

        <div id="remaining-candidates" class="row d-none">
          <?php foreach (range(13, 100) as $subject_id) { ?>
            <div class="col-6 col-md-2 mt-5">
              <?php include('./_subject_box.php') ?>
            </div>
          <?php } ?>
        </div>

        <div class="row">
          <div class="col text-center">
            <p><a onclick="showAllSubjects()">See all 100</a></p>
            <p><a>Generate new 100 subjects</a></p>
            <a href="#step-3" type="button" class="btn btn-primary" onclick="">Next step</a>
          </div>
        </div>
      </div>
    </section>

    <section id="step-4" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 offset-md-2 text-center">
            <p>Okay, your peers seem pretty random, but... is there any pattern we can see? What if we sort all people by <b>🏆 total success</b> and look just at the top 10 performers?</p>
            <a href="#step-2" type="button" class="btn btn-primary" onclick="">Sort and reveal the top 10 people</a>
          </div>
        </div>
      </div>
    </section>

    <section id="step-3" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>The top 10 performers</h2>
            <p>These are the top 10 performers. Do you see <b>the partern</b> among them? <a onclick="revealPattern()">Reveal the pattern</a></p>
          </div>
        </div>

        <div id="hidden-pattern" class="row my-3 d-none">
          <div class="col-4 text-center">
            <p class="key-metric"><span class="big-figure">99.7%</span> <br />Average effort</p>
          </div>
          <div class="col-4 text-center">
            <p class="key-metric important-metric"><span class="big-figure">99.7%</span> <br />Average luck</p>
          </div>
          <div class="col-4 text-center">
            <p class="key-metric"><span class="big-figure">99.7%</span> <br />Average success</p>
          </div>
          <div class="col-12 text-center">
            <p>Most people in the top 10 are extremely lucky.</p>
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
          <div class="col-sm-12 col-md-6 offset-md-3 text-center">
            <div class="text-center">
              <p>Top candidates have a <b>very consistent good deal of luck</b>, even though luck only accounts for 5% of the overall success.</p>
              <p>Another interesting point is that <b>no one reaches the top by luck alone</b>: working hard is just a pre-requisite. Luck just stacks on top of hard work.</p>
              <p>Is this fair? What if we removed luck?</p>
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
            <h2>The top 10 performers – if luck was not a factor</h2>
            <p>Imagine a world where luck was not even a concept and success was entirely determined by hard work alone. These would be the top 10 performers if luck was not considered.</p>
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
              <p>Does it get better with time? Well the answer is no. While there's not much we can do, we can argue if luck really accounts for 5% of the total success – or is it more...?</p>
              <p>Todo graph</p>
              <p>Also there's more - probably also health, family, country, environment. And the worst thing is, successful people aren't even aware of their survivorship bias.</p>
              <a href="#step-2" type="button" class="btn btn-primary" onclick="">Is luck really just 5%?</a>
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
              <p>Does luck really accounts for 5% of the total success – or is it more...?</p>
              <label for="customRange1">Example range</label>
              <input type="range" class="custom-range" id="customRange1">

              <a href="#step-2" type="button" class="btn btn-primary" onclick="">Re-play with a 20% luck</a>
              <a href="#step-2" type="button" class="btn btn-primary" onclick="">How would you compare to the others?</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="step-4" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>You would have scored 231/1000 (top 50%)</h2>
          </div>

          <div class="col-sm-12 text-center">
            <div class="row">
              <div class="col offset-md-4">
                <div class="row">
                  <?php foreach (range(0, 2) as $subject_id) { ?>
                    <div class="col-sm-12 col-md-2 my-5">
                      <?php include('./_subject_box.php') ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <p>The only thing you can do to maximize success is by maximizing opportunities, and you only can do that by getting out there and making your voice heard.</p>
            <p>So go ahead and share this to prove you're more intelligent.</p>
            
            <p>Buy me a coffee. / patreon?</p>
            <p>Check out my products</p>
            <input type="email" placeholder="newsletter" />
            <br />
            <a href="#step-2" type="button" class="btn btn-primary" onclick="">share here there TW FB IG LN etc</a>
          </div>
        </div>
      </div>
    </section>


    <?php #include('_made_by.php') ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="./js/navigation.js"></script>
    <script src="./js/index.js"></script>
  </body>
</html>