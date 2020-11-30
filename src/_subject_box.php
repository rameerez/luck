<?php 
  if (!isset($subject_id)) { $subject_id = 0; }
  if (!isset($subject_type)) { $subject_type = "random"; }
?>

<div class="subject-box">

  <div class="row mb-4">
    <div class="col text-right subject-info">
      <span style="font-size: 14px;" id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-emoji">🧑</span>
      <div>
        <span class="subject-id-wrapper">
          <span class="subject">subject</span> #<span id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-id">0</span>
        </span>
        <br />
        <span class="subject-name" id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-name"></span></div>
    </div>
  </div>

  <div class="luck-bar-wrapper mt-2 <?php echo $subject_type=="noluck" || $subject_type=="sorted-2" ? "d-none" : "" ?>">

    <div class="row">
      <div class="col">
        🍀 <span class="luck">Luck</span>
      </div>
      <div class="col text-right">
        <span class="subject-box-figure" id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-raw-luck"></span><span class="of-100">/100</span>
      </div>
    </div>

    
    <div class="progress">
      <div id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-raw-luck-bar" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>

  <div class="effort-bar-wrapper mt-2 <?php echo $subject_type=="sorted-2" ? "d-none" : "" ?>">
    
    <div class="row">
      <div class="col">
        🏋️ <span class="skill">Skill</span>
      </div>
      <div class="col text-right">
        <span class="subject-box-figure" id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-raw-effort"></span><span class="of-100">/100</span>
      </div>
    </div>

    <div class="progress">
      <div id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-raw-effort-bar" class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>

  <div class="success-bar-wrapper mt-2 <?php echo $subject_type=="noluck" ? "d-none" : "" ?>">

    <div class="row">
      <div class="col">
        🏆 <span class="total">Total</span>
      </div>
      <div class="col text-right">
        <span class="subject-box-figure" id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-result-total-score"></span><span class="of-100">/100</span>
      </div>
    </div>
    
    <div class="progress">
      <div id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-result-effort-component-bar" class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      <div id="subject-<?php echo $subject_type ?>-<?php echo $subject_id ?>-result-luck-component-bar" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>

</div>