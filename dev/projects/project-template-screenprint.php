<?php
$pageTitle = "Title";
include("../header.php");
?>

<main role="main">


  <article class="project">  
		
    <div class="project-description">
			<h1><?php echo $pageTitle; ?></h1>
			<p>Lorem ipsum dolor sent.</p>
			<h3>Credits</h3>
			<p class="meta"><strong>Agency:&nbsp;</strong>Mighty Engine</p>
			<p class="meta"><strong>Role:&nbsp;</strong>Designer</p>
		</div>
		<div class="project-images">
			<img class="portfolio-img" src="/design/images/buntline/buntline1design.jpg" alt="Ned Buntline Beer Packaging 1">
		</div>
		
		<figure class="explode-container">
      <div id="explode-buttons">
        <div id="explode">Explode the print layers!</div>
        <div id="reset-explode">Reset!</div>
      </div>
      <div id="seps-container" style="width:49%;">
        <div id="print-all">
          <img class="print-layer" id="paper1"	src="/design/images/buntline/buntlineexplode1paper.png" alt="print layer 1">
          <img class="print-layer" id="tan2"    src="/design/images/buntline/buntlineexplode2tan.png" alt="print layer 2">
          <img class="print-layer" id="brown3"	src="/design/images/buntline/buntlineexplode3brown.png" alt="print layer 3">
        </div>
      </div>
    </figure><!--explode-->  
	</article>

<script>
  <!-- Explode Script here -->
</script>

 
<?php include('../footer.php'); ?>