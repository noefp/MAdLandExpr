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

  <h4>Please, when using this web site or its data, cite us using the reference:</h4>

    <div class="card bg-light">
      <div class= "card-body" style="padding: 1rem;">
        Fernandez-Pozo, N., Haas, F.B., Meyberg, R., Ullrich, K.K., Hiss, M., Perroud, P.F., Hanke, S., Kratz, V., Powell, A.F., Vesty, E.F., Daum, C.G., Zane, M., Lipzen, A., Sreedasyam, A., Grimwood, J., Coates, J.C., Barry, K., Schmutz, J., Mueller, L.A. and   Rensing, S.A. (2020).
        PEATmoss (Physcomitrella Expression Atlas Tool): a unified gene expression atlas for the model plant <i>Physcomitrella patens</i> .<br>
        <a href="https://doi.org/10.1111/tpj.14607" target="_blank">Plant J., 102:165</a><br>
      </div>
    </div>

  <br>
</div>