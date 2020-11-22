<?php if (!isset($subject_id)) { $subject_id = -10; } ?>

<div class="subject-box">
  <p>sub #<?php echo $subject_id + 1 ?>:</p>
  luck: <span id="subject-<?php echo $subject_id ?>-raw-luck"></span>/100
  <div class="progress">
    <div id="subject-<?php echo $subject_id ?>-raw-luck-bar" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  </div>

  hard work: <span id="subject-<?php echo $subject_id ?>-raw-effort"></span>/100
  <div class="progress">
    <div id="subject-<?php echo $subject_id ?>-raw-effort-bar" class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  </div>

  success: <span id="subject-<?php echo $subject_id ?>-result-total-score"></span>/100
  <div class="progress">
    <div id="subject-<?php echo $subject_id ?>-result-effort-component-bar" class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    <div id="subject-<?php echo $subject_id ?>-result-luck-component-bar" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>