<div class="width900">
  <br>

  <h1 style="font-size:32px;" class="text-center">Welcome to </span>MAdLand<span style="color:yellowgreen;">Expression</span> </h1>

  <p style="font-size:18px;margin-top: 20px;" class="text-justify">
    <strong></span>MAdLand<span style="color:yellowgreen;">Expression</span></strong> includes expression and genomics data from non-seed plants studied in <a href="https://madland.science/" target="_blank">MAdLand</a>. This site is the successor of PEATmoss, with several genomic tools to access gene expression data, sequences and annotations. External resources are linked for many of these species.
  </p>
  <br>

  <div class="row">
      <?php
        if ( file_exists($json_files_path."/customization/species_list.json") ) {
          $sps_json_file = file_get_contents($json_files_path."/customization/species_list.json");
          $species_hash = json_decode($sps_json_file, true);

          foreach($species_hash as $key => $value) {
            if ($species_hash[$key]["public"]) {
              echo '<div class="select">';
              echo '<a href="species_view.php?sps_key='.$key.'" class="d-flex align-items-center justify-content-center flex-column zoom-img">';
              echo '<img src="'.$images_path.'/species/'.$species_hash[$key]["image"].'" alt="'.$species_hash[$key]["card_title"].'"width="250px" height="250px" class="solid alignnone size-medium wp-image-3011 rounded-circle image">';
              echo '</a>';
              echo '<div class="text-center" style="color:#b52b27; font-size:18px">';
              echo '<strong><em>'.$species_hash[$key]["card_title"].'</em></strong>';
              echo '<br>';
              echo '</div>';
              echo '</div>';
            }
          }
        }
      ?>
  </div>
  <br>

  <?php 
    include_once realpath("$custom_text_path/db_citation.php");
  ?>

  <br>
</div>