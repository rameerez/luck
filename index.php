<html>
  <head>
    <?php include('_head_imports.php') ?>
  </head>

  <body>
    <!-- <div class="col">
      <label for="customRange1">Example range</label>
      <input type="range" class="custom-range" id="customRange1">
    </div> -->

    <div class="container">

      <div class="row">
        <div class="col">
          <p>luck: <span id="luck-impact"></span>%; effort: <span id="effort-impact"></span>%</p>
        </div>
      </div>

      <div class="row">
        <?php foreach (range(0, 99) as $subject_id) { ?>
          <div class="col-2 mt-5">
            <p>random person #<?php echo $subject_id + 1 ?>:</p>
            luck: <span id="subject-<?php echo $subject_id ?>-raw-luck"></span>/100
            <div class="progress">
              <div id="subject-<?php echo $subject_id ?>-raw-luck-bar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            effort: <span id="subject-<?php echo $subject_id ?>-raw-effort"></span>/100
            <div class="progress">
              <div id="subject-<?php echo $subject_id ?>-raw-effort-bar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            total score: <span id="subject-<?php echo $subject_id ?>-result-total-score"></span>/100
            <div class="progress">
              <div id="subject-<?php echo $subject_id ?>-result-effort-component-bar" class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              <div id="subject-<?php echo $subject_id ?>-result-luck-component-bar" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        <?php } ?>

      </div>

      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" onclick="onNewSubjectButtonClick()">Generate new</button>
        </div>
      </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="/index.js"></script>
  </body>
</html>