<?php
   $logos_json = file_get_contents($json_files_path."/customization/logos.json");
   $jlogo = json_decode($logos_json, true);

   foreach($jlogo["logos"] as $logo) {
      echo "<a href='".$logo["link"]."' target='_blank'><img class='m-2' height='".$logo["height"]."' src='".$images_path."/logos/".$logo["image"]."'></a>";
   }
?>

<br>

<p style="display:inline">
   <a href="https://tapscan.plantcode.cup.uni-freiburg.de/impressum.html">Impressum & Datenschutz </a> 
</p>
