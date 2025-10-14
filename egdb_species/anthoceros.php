<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><i><?php echo $sps_title ?></i></h3>
<a href="https://www.hornworts.uzh.ch/en.html" class="btn btn-info sps-btn" role="button" target="_blank">Anthoceros at UZH</a>
<a href="https://www.hornworts.uzh.ch/en/Blast.html" class="btn btn-info sps-btn" role="button" target="_blank">BLAST</a>
<a href="https://www.hornworts.uzh.ch/en/hornwort-genomes.html" class="btn btn-info sps-btn" role="button" target="_blank">Genome Browser</a>
<a href="https://www.hornworts.uzh.ch/en/download.html" class="btn btn-info sps-btn" role="button" target="_blank">Downloads</a>
<a href="/easy_gdb/tools/expression/expression_input.php" class="btn btn-info sps-btn" role="button">Expression Atlas</a>
<br>
<br style="clear:both"/>

<p>
  Anthoceros agrestis is a species of hornwort, an early-diverging group of non-vascular plants. Here are its main characteristics:
</p>

<ul>
  <li><strong>Thalloid Structure</strong>: It has a flattened, lobed thallus (the plant body) that grows on moist soil surfaces. The thallus contains cavities where cyanobacteria live in symbiosis, helping with nitrogen fixation.
  </li>
  <li><strong>Symbiosis with Cyanobacteria</strong>: <em>A. agrestis</em> forms a mutualistic relationship with nitrogen-fixing cyanobacteria, specifically Nostoc, which live in specialized chambers in the thallus. This relationship is important for nutrient acquisition, particularly in nutrient-poor environments.
  </li>
  <li><strong>Horn-like Sporophyte</strong>: A key characteristic of hornworts, including <em>A. agrestis</em>, is their elongated, horn-shaped sporophyte, which remains attached to the gametophyte and grows continuously. This is different from most other bryophytes where the sporophyte is typically short-lived.
  </li>
  <li><strong>Reproduction</strong>: <em>A. agrestis</em> can reproduce both sexually and asexually. Sexually, it produces antheridia (male structures) and archegonia (female structures), leading to the formation of spores in the sporophyte. Asexually, it can form gemmae, small reproductive bodies that can grow into new plants.
  </li>
  <li><strong>Ecological Role</strong>: It plays a significant role in early succession in disturbed or bare soil environments, where it contributes to soil stabilization and nitrogen cycling due to its cyanobacterial symbiosis.
  </li>
  <li><strong>Model for Evolutionary Studies</strong>: As a member of an ancient plant lineage, <em>A. agrestis</em> is valuable for studying the evolution of plant development and physiology, especially in comparison to vascular plants.
  </li>
</ul>

<p>These characteristics make Anthoceros agrestis an interesting species for understanding early plant evolution and the relationships between plants and microbial symbionts.

</p>

<!-- <h1 class="text-center"> Work in progress... </h1>
<br>
<br>

<h3>Documents</h3>
<br>
<br> -->

The available Anthoceros genomes were published at <a href="https://doi.org/10.1038/s41477-020-0618-2" target="_blank">Li et al. 2020.</a>
<br>
<br>

<h3>Genome assembly stats</h3>
<?php include_once("anthoceros_genome_table.php");?>
<br>

<h3>Taxonomy</h3>
<?php include_once("anthoceros_classification_table.php");?>
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
