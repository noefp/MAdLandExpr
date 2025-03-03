<br>
<img class="float-right" style="z-index:0;height:150px" src="<?php echo $images_path.'/species/'.$sps_img ?>" >
<h1><?php echo $sps_subtitle ?></h1>
<h3 style="color:#666"><i><?php echo $sps_title ?></i></h3>
<a href="https://bioinformatics.psb.ugent.be/orcae/overview/Chbra" class="btn btn-info sps-btn" role="button" target="_blank">ORCAE</a>
<a href="https://bioinformatics.psb.ugent.be/blast/moderated/?project=orcae_Chbra" class="btn btn-info sps-btn" role="button" target="_blank">BLAST</a>
<a href="https://bioinformatics.psb.ugent.be/gdb/Chara_braunii/" class="btn btn-info sps-btn" role="button" target="_blank">Downloads</a>
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#expr_atlas">
  Expression Atlas
</button>
<br style="clear:both"/>

<p>
  <i>Chara braunii</i> is a streptophyte algae that exhibits several distinctive characteristics, making it significant from both an evolutionary and biological perspective:
</p>
<ul>
  <li><b>Complex Morphology:</b> <i>C. braunii</i> has a multicellular body structure with specialized tissues, resembling the complexity of early land plants. It possesses differentiated regions such as nodes and internodes, along with branching filaments.</li>
  <li><b>Close Relation to Land Plants:</b> Phylogenetically, <i>C. braunii</i> is part of the Charophytes, one of the closest group to land plants (Embryophytes), making it a key species for understanding the evolution of terrestrial plants.</li>
  <li><b>Reproductive Features:</b> <i>C. braunii</i> exhibits oogamy, where it produces large non-motile eggs and small motile sperm. This is an advanced reproductive strategy compared to other algae and mirrors the reproductive system of early land plants.</li>
  <li><b>Apical Growth:</b> Like land plants, <i>C. braunii</i> grows from an apical meristem, a feature linked to the development of complex body plans and tissue differentiation.</li>
  <li><b>Plasmodesmata:</b> <i>C. braunii</i> cells are connected by plasmodesmata, which facilitate intercellular communication, a characteristic crucial for tissue and organ development in land plants.</li>
  <li>Genome:</b> The genome of <i>C. braunii</i> provides insights into key evolutionary innovations, such as genes associated with hormone signaling, stress responses, and cell wall formation, which were essential for the transition to terrestrial life.</li>
</ul>
</p>
  These features highlight <i>Chara braunii</i> as a model organism for studying the evolutionary steps leading from aquatic algae to the complex land plants we see today.
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
<?php include_once("chara_classification_table.php");?>
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
