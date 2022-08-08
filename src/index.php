<html>
  <head>
    <title>Success: effort or luck? How succesful people reach the top - rameerez</title>
    <?php include('./_head_imports.php') ?>
    <?php include('./_metadata.php') ?>
  </head>
  
  <body class="dark">

    <?php include('./_ph_bar.php') ?>

    <?php include('./_navbar.php') ?>


    <div id="dark-mode-toggle">
      <?php include('./_dark_mode_toggle.php') ?>
    </div>

    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center">
              <h1><span class="success">Success</span><div class="success-subtitle">is it really hard work – or just luck?</div></h1>
              <a href="#step-" type="button" class="btn-next btn btn-primary mt-3" onclick="signatureTriggerUserEngagementAction()">🍀 Play</a>
              </div>
              <div class="mt-2 text-center" style="font-size: 12px; opacity: 0.3;">
                <a href="https://github.com/rameerez/luck">Fork me on <i class="fab fa-github"></i> GitHub</a>
              </div>
              <div class="mt-2 text-center" style="font-size: 12px; opacity: 0.8;">
                <a href="http://buymeacoffee.com/rameerez">☕️ Buy me a coffee</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 offset-md-3">
            <div class="text-center">
              <p>Entrepreneurs, athletes, artists, politicians, astronauts... there's one thing they all have in common: <b>success</b>. Most will say this is just the product of skill, hard work and dedication: <b>but is it really?</b></p>
              <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="">Let's find out</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 offset-md-3">
            <div class="text-center">
              <div id="toggle-random-self-explanation" class="d-none" style="cursor: pointer;" onclick="toggleRandomSelfExplanation();">
                <i class="far fa-question-circle"></i>
              </div>
              <div id="random-self-explanation">
                <p>Let's take one random person as an example. <b>This will be you</b>.</p>
                <p>You will be represented by a random <b>🏋️ hard work score</b> (skill) and a random <b>🍀 luck score</b>. Your <b>🏆 total success</b> will be calculated as <span id="effort-impact"></span>% hard work and <span class="luck-impact">0</span>% luck.</p>
              </div>
              <a type="button" id="toggle-random-self-btn" class="btn btn-primary" onclick="generateRandomSelf(); toggleRandomSelf();">Generate your random self</a>
            </div>
          </div>
        </div>
        <div class="row d-none" id="random-self-row">
          <div class="col-sm-12 col-md-2 offset-md-5">
            <div id="random-self">
              <?php $subject_type = "random"; include('./_subject_box.php') ?>
            </div>
          </div>
          <div class="col-sm-12 col-md-8 offset-md-2 text-center">
            <p><a onclick="generateRandomSelf()">Re-generate your random self</a></p>
            <p>Play with the random generator until you're happy and ready to move on.</a>
          </div>

          <div class="col-12 text-center">
            <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="generateRandomSubjects();">Meet the rest</a>
          </div>
        </div>
      </div>
    </section>


    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 offset-md-2 text-center">
            <p>But you're not alone in the world, aren't you? These are <b><span class="number-of-people-in-simulation">0</span> more random people</b>, representing the rest of the population – the people you have to compete with. They have been randomly generated, just like you.</p>
          </div>
        </div>

        <div id="first-12-candidates" class="row">
          <?php foreach (range(1, 6) as $subject_id) { ?>
            <div class="col-6 col-md-2 mt-0 mt-md-5">
              <?php $subject_type = "random"; include('./_subject_box.php') ?>
            </div>
          <?php } ?>
        </div>

        <div id="remaining-candidates" class="row d-none">
          <?php foreach (range(7, 30) as $subject_id) { ?>
            <div class="col-6 col-md-2 mt-5">
              <?php $subject_type = "random"; include('./_subject_box.php') ?>
            </div>
          <?php } ?>
        </div>

        <div class="row">
          <div class="col text-center">
            <p><a onclick="showAllSubjects()">See the first 30</a></p>
            <p><a onclick="generateRandomSubjects();">Generate new <span class="number-of-people-in-simulation">0</span> subjects</a></p>
            <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="">Next step</a>
          </div>
        </div>
      </div>
    </section>

    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 offset-md-3 text-center">
            <p>Okay, your peers seem pretty random, but... is there any pattern we can see? What if we sort all people by <b>🏆 total success</b> and look just at the top 10 performers?</p>
            <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="sortAndUpdateSubjects()">Sort and reveal the top 10 people</a>
          </div>
        </div>
      </div>
    </section>

    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 offset-md-3 text-center">
            <h2>The top 10 performers</h2>
            <p>These are the top 10 performers. Do you see <b>the pattern</b> among them? <a onclick="updateTopMetrics(); revealPattern(); ">Reveal the pattern</a></p>
          </div>
        </div>

        <div id="hidden-pattern" class="row my-3 d-none">
          <div class="col-4 text-center">
            <p class="key-metric"><span class="big-figure"><span id="average-effort">0</span>%</span> <br />Average effort</p>
          </div>
          <div class="col-4 text-center">
            <p class="key-metric important-metric"><span class="big-figure"><span id="average-luck">0</span>%</span> <br />Average luck</p>
          </div>
          <div class="col-4 text-center">
            <p class="key-metric"><span class="big-figure"><span id="average-success">0</span>%</span> <br />Average success</p>
          </div>
          <div class="col-12 text-center">
            <p>People in the top 10 tend to be way luckier than average.</p>
          </div>
        </div>

        <div class="row my-md-5">

          <?php foreach (range(0, 9) as $subject_id) { ?>
            <div class="col-6 col-md-2 my-0 first-top-6 <?php echo $subject_id >= 6 ? "remaining-top-subjects d-none" : "" ?>">
              <?php $subject_type = "sorted"; include('./_subject_box.php'); ?>
            </div>
          <?php } ?>

        </div>

        <div class="row my-md-5">
          <div class="col text-center">
            <p><a onclick="showAllTopSubjects()">Show all 10</a></p>
          </div>
        </div>

        <div class="row">
          <div class="col text-center">
            <!-- <p>Reveal the rest of the <span class="number-of-people-in-simulation">0</span> candidates</p> -->
            <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="">So... what now?</a>
          </div>
        </div>
      </div>
    </section>

    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3 text-center">
            <div class="text-center">
              <p>Top candidates have a <b>📈 very consistent good deal of luck</b>, even though luck only accounts for <span class="luck-impact">0</span>% of the overall success.</p>
              <p>🙅‍♂️ <b>No one reaches the top by luck alone</b>: working hard is just a pre-requisite. Luck just stacks on top of hard work.</p>
              <p>Is this fair? What if we removed luck?</p>
              <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="onRemoveLuck()">Discover what happens if we remove luck</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="step-" class="vertical-center">
      <div class="container">

        <div class="row">

          <div class="col-12 col-md-6 offset-md-3 text-center">
            <h2>The top 10 performers <br/>if luck was not considered</h2>
            <p>Imagine a world where luck was not even a concept and success was entirely determined by hard work alone. These would be the top 10 performers if luck was not considered.</p>
          </div>
        </div>

        <div class="row my-4">

          <div class="col text-right" style="opacity: 0.3;">
            <h3>Original top 10</h3>
            <ol class="subject-list">
              <?php foreach (range(0, 9) as $subject_id) { ?>
                <li>
                  <?php $subject_type = "sorted-2"; ?>
                  <?php echo $subject_id == 0 ? '🥇' : ($subject_id == 1 ? '🥈' : ($subject_id == 2 ? '🥉' : $subject_id+1 . '.' )) ?>&nbsp;
                  <span class="subject-name" id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-name"></span>
                  <span class="d-none" style="opacity: 0.2">(<span class="subject"></span>#<span id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-id">0</span>)</span>
                </li>
              <?php } ?>
            </ol>
          </div>

          <div class="col">
            <h3>Top 10 "no luck"</h3>
            <ol class="subject-list">
              <?php foreach (range(0, 9) as $subject_id) { ?>
                <li>
                  <?php $subject_type = "noluck"; #include('./_subject_box.php') ?>
                  <?php echo $subject_id == 0 ? '🥇' : ($subject_id == 1 ? '🥈' : ($subject_id == 2 ? '🥉' : $subject_id+1 . '.' )) ?>&nbsp;
                  <span class="subject-name" id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-name"></span>
                  <span class="d-none" style="opacity: 0.2">(<span class="subject"></span>#<span id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-id">0</span>)</span>
                </li>
                <!-- <div class="col-6 col-md my-0 my-md-5 tiny-subject-box">
                </div> -->
              <?php } ?>
            </ol>
          </div>

        </div>

        <div class="row">
          <div class="col-12 col-md-6 offset-md-3 text-center">
            <p><span id="number-of-same-subjects">0</span> out of 10 of them are different people – <b>only <span id="number-of-different-subjects">0</span> remain the same</b> when we take luck out of the equation.</p>

            <p class="d-none">For reference, these were original the top 10 performers:</p>
          </div>
        </div>

        <div class="row d-none">
          <?php foreach (range(0, 9) as $subject_id) { ?>
            <div class="col-6 col-md my-0 my-md-5 tiny-subject-box">
              <?php $subject_type = "sorted-2"; include('./_subject_box.php') ?>
            </div>
          <?php } ?>
        </div>

        <div class="row">
          <div class="col-12 col-md-6 offset-md-3 text-center">
            <!-- <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="">But the world is big enough...</a> -->
            <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="">Is there anything we can do?</a>
          </div>
        </div>
      </div>
    </section>


    <!-- <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3">
            <div class="text-center">
              <p>Or is it? Turns out as the number of people in the simulation increases, luck only becomes more and more important...</p>
              <p>Todo graph</p>
              <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="">Is there anything we can do?</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3">
            <div class="text-center">
              <p>While there's not much we can do to compensate this effect, this experiment allows to draw two key conclusions:</p>

              <ol class="my-5">
                <li>You need to <b>🏋️ work at 100%</b> of your abilities to even stand a chance.</li>
                <li>You need to <b>🍀 maximize your luck</b> by maximizing the opportunities you're exposed to, if you want to get to the top.</li>
              </ol>

              <p>Another interesting observation is that successful people are probably not even aware of their own survivorship bias: they just feel it's all been hard work.</p>

              <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="">How would you compare to others?</a>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">

          <div class="col-12 col-md-6 offset-md-3 text-center">
            <h2>You would have scored <span class="position-in-simulation">0</span>/<span class="number-of-people-in-simulation">0</span></h2>
            <p>You would have been more successful than <span class="percentile-below">0</span>% of all people</div>
          </div>

          <div class="col-12 col-md-6 offset-md-3 text-center">

            <div class="row">
              <?php foreach (range(0, 2) as $subject_id) { ?>
                <div class="col-sm-12 col-md <?php echo $subject_id == 1 ? "self-subject-box" : "" ?> <?php echo $subject_id != 1 ? "d-none d-md-block" : "" ?>">
                  <?php $subject_type = "player-position"; include('./_subject_box.php') ?>
                </div>
              <?php } ?>
            </div>

            <div class="row">
              <div class="col text-center">
                <b>↑ You ↑</b>
              </div>
            </div>


          </div>

          <div class="col-12 col-md-6 offset-md-3 text-center mt-0 mt-md-5">

            <p>You only can maximize success in your life by maximizing opportunities, and do that by getting out there and making your voice heard.</p>

            <p>So go ahead and <b>share this thought experiment</b> – and make other people think, too.</p>
            
            <div class="row mt-4 mb-5">
              <div class="col text-center text-md-right">
                <a class="share-button copy-share-link"
                  href="javascript:void(null)" data-copy="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" onclick="copyIt(this)">
                  🔗 <span>Copy link</span>
                </a>
              </div>
              <div class="col text-center text-md-left">
                <a class="share-button"
                  onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); ga('send', 'event', 'LuckSuccessExperiment', 'share', 'tweetThis'); return false;" href="https://twitter.com/intent/tweet?text=I just learned success has more to do with luck than hard work 🤔 %0a%0aCheck it out yourself here — https://rameerez.com/success-hard-work-vs-luck via @rameerez">
                  🐦 Tweet this
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 offset-md-3 text-center mt-3">

            <p class="mt-5"><b>Check out the other products I make ✨</b></p>

            <div class="row mt-4 mb-5 my-md-3">
              
              <div class="col-12 col-md-6">

                <a class="product-snippet" href="https://gohustl.co/?ref=rameerez&utm_source=rameerez.com&utm_medium=referral&utm_campaign=success-hard-work-vs-luck">
                  <div class="product-logo" style='background-image: url("https://gohustl.co/images/apple-touch-icon.png"); background-size: cover;'></div>
                  <div class="text-left">
                    <span class="product-name">Hustl</span>
                    <div class="product-description">Create screen time-lapses</div>
                  </div>
                </a>

              </div>

              <div class="col-12 col-md-6 mt-4 mt-md-0">
                <a class="product-snippet" href="https://goedit.me/?ref=rameerez&utm_source=rameerez.com&utm_medium=referral&utm_campaign=success-hard-work-vs-luck">
                  <div class="product-logo" style='background-image: url("https://goedit.me/images/apple-touch-icon.png"); background-size: cover;'></div>
                  <div class="text-left">
                    <span class="product-name">Edit</span>
                    <div class="product-description">Edit any website without code</div>
                  </div>
                </a>
              </div>

            </div>

            <p class="mt-5 mb-3"><b>Did you like this? Support my work 🎉</b></p>

            <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="rameerez" data-color="#FF5F5F" data-emoji=""  data-font="Cookie" data-text="Buy me a coffee" data-outline-color="#000000" data-font-color="#ffffff" data-coffee-color="#FFDD00" ></script>

            <!-- <input type="email" placeholder="newsletter" /> -->
          </div>

          <div class="col-12 col-md-6 offset-md-3 text-center my-5 my-md-5">
            <?php include('_newsletter.php') ?>
          </div>

          <div class="col-12 col-md-6 offset-md-3 text-center my-3 my-md-5">
            <?php include('_footer_signature.php') ?>
          </div>

        </div>
      </div>
    </section>

    <section id="step-" class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3">
            <div class="text-center">
              <p>This experiment is somewhat simplistic. There are a wide variety of factors we've simplified into "luck": health, family, country, environment...</p>

              <p>So, does luck really account for only 5% of total success – or is it really more? Play yourself with the numbers – or move on to the next step.</p>

              <input type="range" class="custom-range my-5" id="luck-selector" min="0" max="100" value="5" step="1">

              <a href="#step-2" class="btn btn-next mb-3">Re-play with a <span class="luck-impact">0</span>% luck</a>
              <a href="#step-" type="button" class="btn-next btn btn-primary" onclick="">How would you compare to others?</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php include('_made_by.php') ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/locales/en_US/faker.en_US.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./assets/clipboard.min.js"></script>
    <script src="./js/navigation.js"></script>
    <script src="./js/index.js"></script>

  </body>
</html>