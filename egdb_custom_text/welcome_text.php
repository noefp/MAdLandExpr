<div class="width900">
  <br>

  <h1 class="text-center">Welcome to </span>MAdLand<span style="color:yellowgreen;">Expression</span> </h1>

  <p class="text-justify">
    <strong></span>MAdLand<span style="color:yellowgreen;">Expression</span></strong> includes expression and genomics data from non-seed plants studied in <a href="https://madland.science/" target="_blank">MAdLand</a>. This site is the successor of PEATmoss, with several genomic tools to access gene expression data, sequences and annotations. External resources are linked for many of these species.
  </p>
  <br>

  <div class="row">
    <div class="row">

      <?php
        if ( file_exists($json_files_path."/customization/species_list.json") ) {
          $sps_json_file = file_get_contents($json_files_path."/customization/species_list.json");
          $species_hash = json_decode($sps_json_file, true);

          foreach($species_hash as $key => $value) {
            if ($species_hash[$key]["public"]) {
              echo '<div class="select">';
              echo '<a href="species_view.php?sps_name='.$key.'&common_name='.$species_hash[$key]["common_name"].'&sps_img='.$species_hash[$key]["image"].'" class="d-flex align-items-center justify-content-center flex-column zoom-img">';
              echo '<img src="'.$images_path.'/species/'.$species_hash[$key]["image"].'" alt="'.$species_hash[$key]["sps_name"].'"width="200px" height="220px" class="solid alignnone size-medium wp-image-3011 rounded-circle image">';
              echo '</a>';
              echo '<div class="text-center">';
              echo '<strong><em>'.$species_hash[$key]["sps_name"].'</em></strong>';
              echo '<br>';
              echo '</div>';
              echo '</div>';
            }
          }
        }
      ?>

    </div>
  </div>
  <br>

  <?php 
    include_once realpath("$custom_text_path/db_citation.php");
  ?>

  <br>
</div>