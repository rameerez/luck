<?php 
  if (!isset($subject_id)) { $subject_id = 0; }
  if (!isset($subject_type)) { $subject_type = "random"; }
?>

<div class="subject-box">

  <div class="row mb-4">
    <div class="col text-right subject-info">
      <span style="font-size: 14px;" id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-emoji">🧑</span>
      <!-- <div id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-name" class="<?php echo $subject_id == 0 ? "" : "d-none" ?>"><b>You</b></div> -->
      <div><span class="subject">subject</span> #<span id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-id">0<span></div>
    </div>
  </div>

  <p class="d-none">:</p>

  <div class="luck-bar-wrapper mt-2">

    <div class="row">
      <div class="col">
        🍀 <span class="luck">Luck</span>
      </div>
      <div class="col text-right">
        <span id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-raw-luck"></span><span class="of-100">/100</span>
      </div>
    </div>

    
    <div class="progress">
      <div id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-raw-luck-bar" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>

  <div class="effort-bar-wrapper mt-2">
    
    <div class="row">
      <div class="col">
        🏋️ <span class="skill">Skill</span>
      </div>
      <div class="col text-right">
        <span id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-raw-effort"></span><span class="of-100">/100</span>
      </div>
    </div>

    <div class="progress">
      <div id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-raw-effort-bar" class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>

  <div class="success-bar-wrapper mt-2">

    <div class="row">
      <div class="col">
        🏆 <span class="total">Tot.</span>
      </div>
      <div class="col text-right">
        <span id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-result-total-score"></span><span class="of-100">/100</span>
      </div>
    </div>
    
    <div class="progress">
      <div id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-result-effort-component-bar" class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      <div id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-result-luck-component-bar" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>

</div>