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
			<p class="meta"><strong>Agency:&nbsp;</strong>Impart Creative</p>
			<p class="meta"><strong>Responsibilities:&nbsp;</strong>UX Design</p>
		</div>
		<div class="project-images">
            <div class="portfolio-img">
                <img class="portfolio-img" src="../assets/img/" alt="Image Description">
                <div class="caption">caption</div>
            </div>
            <div> <!-- container div for nth selector -->
                <div class="portfolio-img-half" ><img src="../assets/img/" alt="Image Description">
                <div class="caption">caption</div></div>
            </div>
		</div>
		
	</article>

<?php include('../footer.php'); ?>