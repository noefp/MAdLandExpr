<!-- Help -->
<div>
  <a class="float-right" href="https://genome.ucsc.edu/goldenPath/help/hgTracksHelp.html" target="_blank"><i class='fa fa-info' style='font-size:20px;color:#229dff'></i> Help</a>
</div>
<br>

<div class="width900">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <!-- Genome Browser -->
      <h2 class="text-center">Genome Browser</h2>

      <!-- Instructions -->
      <p class="text-center">
        To explore the genomic data of different species, please select one of the options below. Check out the <a href="/easy_gdb/species.php" target="_blank">species page</a> for additional information and options.
      </p>
      <div class="row">
        <div class="row">
          <?php
            if ( file_exists("$species_path/species_list.json") ) {
              $sps_json_file = file_get_contents("$species_path/species_list.json");
              $species_hash = json_decode($sps_json_file, true);

              foreach($species_hash as $key => $value) {
                if ($species_hash[$key]["public"]) {
                  echo '<div class="select">';
                  echo '<a href="'.$species_hash[$key]["jbrowse"].' class="d-flex align-items-center justify-content-center flex-column zoom-img">';
                  echo '<img class="solid alignnone size-medium wp-image-3011 rounded-circle image" alt="'.$species_hash[$key]["sps_name"].'" width="200px" height="220px" src="'.$images_path.'/species/'.$species_hash[$key]["image"].'">';
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

    </div>
  </div>
</div>

<br>