<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><i><?php echo $sps_title ?></i></h3>
<a href="https://phytozome-next.jgi.doe.gov/jbrowse/index.html?data=genomes%2FPpatens_v6_1&loc=Chr01%3A1..100039&tracks=Transcripts%2CAlt_Transcripts%2CPASA_assembly%2CBlastx_protein%2CBlatx_BasalRosid&highlight=" class="btn btn-info sps-btn jbrowse_link" role="button" target="_blank">Genome Browser V6 (Phytozome)</a>
<a href="https://phytozome-next.jgi.doe.gov/jbrowse/index.html?data=genomes%2FPpatens_v3_3&loc=Chr01%3A1..100039&tracks=Transcripts%2CAlt_Transcripts%2CPASA_assembly%2CBlastx_protein%2CBlatx_BasalEmbryophyte&highlight=" class="btn btn-info sps-btn jbrowse_link" role="button" target="_blank">Genome Browser V3 (Phytozome)</a>
<a href="/easy_gdb/tools/blast/blast_input.php" class="btn btn-info sps-btn" role="button">BLAST</a>
<a href="https://genomevolution.org/coge/GenomeView.pl?gid=33928&tracks=sequence%2Cfeature_group130097&loc=1%3A1..150035&highlight=" class="btn btn-info sps-btn jbrowse_link" role="button" target="_blank">Genome Browser V3 (CoGe)</a>
<a href="/easy_gdb/tools/expression/expression_input.php" class="btn btn-info sps-btn" role="button">Expression Atlas</a>
<a href="/easy_gdb/tools/gene_lookup.php" class="btn btn-info sps-btn">Gene Version Lookup</a>
<a href="easy_gdb/downloads/" class="btn btn-info sps-btn" role="button" target="_blank">Downloads</a>
<br style="clear:both"/>

<div class="row" style="max-width:900px;margin-left:0px">
  <h5 style="text-align:left;">
    Genomics tools and data available at:
    <br><br>
    <a href="https://peatmoss.plantcode.cup.uni-freiburg.de" target="_blank">
      <img src='<?php echo "$images_path/PEATmoss_400.png";?>' style="width:30%; max-width:900px; float:left;" class="img-fluid">
    </a>
  </h5>
</div>


<p>
  <em>Physcomitrium patens</em> (previously known as <em>Physcomitrella patens</em>) is widely studied for insights into plant evolution, development, and genetics. It is a bryophyte (a group of non-vascular land plants) used as a model organism due to its simple body plan and genetic tractability, making it ideal for studying plant biology.</p>
</p>

<ul>
  <li><strong>Evolutionary Significance</strong>: As an early-diverging lineage of land plants, <em>P. patens</em> provides insights into the evolution of plant development and physiology, bridging the gap between green algae and vascular plants.</li>
  <li><strong>Life Cycle</strong>: <em>P. patens</em> has a dominant gametophyte stage (haploid), which is unusual compared to the dominant sporophyte stage in most vascular plants. This makes it an important subject for studying plant development and life cycle evolution.</li>
  <li><strong>Regeneration and Totipotency</strong>: It exhibits remarkable regenerative abilities, with individual cells capable of regenerating into new plants, demonstrating totipotency. This feature is significant for genetic studies and transformation experiments.</li>
  <li><strong>Transformation Efficiency</strong>: <em>P. patens</em> is one of the few plants where homologous recombination (gene targeting) works efficiently, making it a powerful system for genetic manipulation and functional genomics.</li>
  <li><strong>Water Dependence</strong>: Like other mosses, <em>P. patens</em> relies heavily on water for reproduction, as its sperm require water to swim to the egg, reflecting early land plant traits that evolved before the development of more sophisticated water-conserving structures.</li>
</ul>

<p>
  These features make Physcomitrium patens an essential tool for studying early land plant evolution, gene function, and plant development under controlled laboratory conditions.
</p>

<div class="row" style="max-width: 900px;">
  <div class="col-md-6 col-12">
    <p>
      Multiple gene model versions have been developed over the last ten years for <i>P. patens</i>. <a href="/easy_gdb/tools/gene_lookup.php" target="_blank">Here</a> we provide a tool to lookup gene versions automatically for multiple genes. Click on the picture to visualize <i>P. patens</i> gene model nomenclature.
    </p>
  </div>

  <div class="col-6" style="margin-top: 10px; padding-right:0px;">
    <a href='<?php echo "$images_path/gene_models.png";?>' target="_blank">
      <img src='<?php echo "$images_path/gene_models.png";?>' class="img-fluid solid2" >
    </a>
  </div>
</div>

<br>

<h3>Documents</h3>
<div class="col" style="padding:0px">
  <div class="card">
    <div class="card-body">
      <a href="https://peatmoss.plantcode.cup.uni-freiburg.de/ppatens_db/links.php" target="_blank"><i class='far fa-link' style='font-size:30px;color:light-blue'></i> External Link to Archives </a>
    </div>
  </div>
</div>
<br>
<br>


<h3>Genome assembly stats</h3>
<p>
  Summary of the <i>Physcomitrium patens</i> genome assembly (Phypa V3), from <a href="https://onlinelibrary.wiley.com/doi/10.1111/tpj.13801" target="_blank"> Lang et al., 2018</a>.
</p>
<?php include_once("ppatens_genome_table.php");?> 
<br>

<h3>Taxonomy</h3>
<?php include_once("ppatens_classification_table.php");?>
<br>
