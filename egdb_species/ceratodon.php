<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><i><?php echo $sps_title ?></i></h3>
<a href="https://phytozome-next.jgi.doe.gov/info/CpurpureusGG1_v1_1" class="btn btn-info sps-btn" role="button" target="_blank">Genome GG1 v1.1</a>
<a href="https://phytozome-next.jgi.doe.gov/info/CpurpureusR40_v1_1" class="btn btn-info sps-btn" role="button" target="_blank">Genome R40 v1.1</a>
<a href="https://phytozome-next.jgi.doe.gov/jbrowse/index.html?data=genomes%2FCpurpureusGG1_v1_1&loc=U%3A400001..500000&tracks=Transcripts%2CAlt_Transcripts%2CPASA_assembly%2CBlastx_protein%2CBlatx_BasalEmbryophyte&highlight=" class="btn btn-info sps-btn jbrowse_link" role="button" target="_blank">Genome Browser GG1 v1.1</a>
<a href="https://phytozome-next.jgi.doe.gov/jbrowse/index.html?data=genomes%2FCpurpureusR40_v1_1&loc=V%3A100001..200000&tracks=Transcripts%2CAlt_Transcripts%2CPASA_assembly%2CBlastx_protein%2CBlatx_BasalEmbryophyte&highlight=" class="btn btn-info sps-btn jbrowse_link" role="button" target="_blank">Genome Browser R40 v1.1</a>
<a href="https://phytozome-next.jgi.doe.gov/blast-search" class="btn btn-info sps-btn" role="button" target="_blank">BLAST</a>
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#expr_atlas">
  Expression Atlas
</button><br>
<br style="clear:both"/>

<p>
	<i>Ceratodon purpureus</i> commonly known as the "purple horn-toothed moss" due to its distinctive purple or reddish sporophytes (spore capsules), is a member of the species-rich moss order Dicraniidae. <i>C. purpureus</i> has several key characteristics:
</p>
    <ul>
        <li><strong>Widespread Moss Species:</strong> <em>Ceratodon purpureus</em> is a  moss found in a wide variety of environments, including urban areas, disturbed habitats, and extreme environments like polar regions.</li>
        <li><strong>Adaptability:</strong> It is highly adaptable and can tolerate diverse conditions such as drought, temperature extremes, high levels of pollution and heavy metal contamination, making it one of the most resilient moss species.</li>
        <li><strong>Life Cycle:</strong> Like other mosses, <em>C. purpureus</em> has a dominant gametophyte phase, and it can reproduce both sexually through spores and asexually through fragmentation. It is dioicous, having distinct male and female plants.</li>
        <li><strong>Model for Genetic Studies:</strong> <em>C. purpureus</em> has been used as a model organism for studying genetic and physiological responses to environmental stress, due to its ability to withstand harsh conditions. The species is easily cultivated in sterile conditions, is readily clonally propagated, and is amenable to genetic manipulation using modern CRISPR approaches as well as classical mutagens. It is an emerging model system for the study of several evolutionary genetic phenomena, including the evolution of reproductive isolation, sex chromosomes, and sexual dimorphism, and also interesting for the study of gravitropism and phototropism</li>
    </ul>
    
<!-- <h1 class="text-center"> Work in progress... </h1>
<br>


<h3>Documents</h3>
<br>
<br> -->

The available <i>Ceratodon purpureous</i> genomes were published at <a href="https://doi.org/10.1126/sciadv.abh2488" target="_blank">Carey et al. 2021.</a>
<br>
<br>

<h3>Genome assembly stats</h3>
<?php include_once("ceratodon_genome_table.php");?>
<br>


<h3>Taxonomy</h3>
<?php include_once("ceratodon_classification_table.php");?>
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
