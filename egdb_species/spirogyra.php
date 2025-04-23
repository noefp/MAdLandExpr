<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><i><?php echo $sps_title ?></i></h3>
<a href="/easy_gdb/tools/blast/blast_input.php" class="btn btn-info sps-btn" role="button" target="_blank">BLAST</a>
<a href="easy_gdb/downloads/" class="btn btn-info sps-btn" role="button" target="_blank">Downloads</a>
<a href="/easy_gdb/tools/expression/expression_input.php" class="btn btn-info sps-btn" role="button">Expression Atlas</a>
<br style="clear:both"/>

<p>
<em>Spirogyra pratensis</em> is a filamentous green alga that belongs to the group known as Charophytes, closely related to land plants. Its main characteristics are:
</p>

<ul>
  <li><strong>Filamentous Structure</strong>: <em>S. pratensis</em> forms long, unbranched filaments made up of cylindrical cells arranged end-to-end, giving it a thread-like appearance.</li>
  <li><strong>Chloroplast Arrangement</strong>: Its most distinctive feature is the spiral arrangement of chloroplasts within each cell, which is where its genus name "Spirogyra" originates. This spiral chloroplast structure is essential for photosynthesis.</li>
  <li><strong>Reproduction</strong>: <em>S. pratensis</em> reproduces both sexually and asexually. Sexual reproduction occurs through a process called conjugation, where adjacent filaments form bridges through which genetic material is exchanged.</li>
  <li><strong>Cell Structure</strong>: Each cell has a large central vacuole, with the nucleus suspended in the center, and cell walls made of cellulose. The helical chloroplast contains pyrenoids, which are involved in the synthesis and storage of starch.</li>
</ul>

<p>
These characteristics make <em>Spirogyra pratensis</em> a well-known organism in the study of algae and an example of early plant-like features in aquatic species.
</p>

<h1 class="text-center"> Work in progress... </h1>
<br>

<h3>Documents</h3>
<br>
<br>

<h3>Genome assembly stats</h3>
<br>
<br>

<h3>Taxonomy</h3>
<?php include_once("spirogyra_classification_table.php");?>
<br>

<!-- Modal -->
<div class="modal fade" id="expr_atlas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Currently unavailable</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        The Expression data will be included in <strong></span>MAdLand<span style="color:yellowgreen;">Expression</span></strong> in the next version.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
