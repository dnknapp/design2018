<?php
$pageTitle = "Or Opossums Will Eat Your Face";
include("../header.php");
?>

<div class="intro header-grid">  
    <section id="project-intro">
        <h1 class="load-fade-in"><?php echo $pageTitle; ?></h1>
        <p class="load-fade-in">A WPA-style propaganda poster, featuring Fishtown's favorite sugar drink and litter: Arctic Splash Iced Tea. And the much-hated opossum.</p>
    </section>
</div>
    
<main role="main" class="project-main load-fade-in">

  <article class="project">  


		<div class="project-images">
			<img class="portfolio-img" src="../assets/img/opossum/opossum1design.jpg" alt="Or Opossums Will Eat Your Face 1">
			<img class="portfolio-img" src="../assets/img/opossum/opossum2design.jpg" alt="Or Opossums Will Eat Your Face 2">
			<img class="portfolio-img" src="../assets/img/opossum/opossum3design.jpg" alt="Or Opossums Will Eat Your Face 3">
		</div>
		
		<figure class="explode-container">
      <div id="explode-buttons">
        <div id="explode">Explode the print layers!</div>
        <div id="reset-explode">Reset!</div>
      </div>
      <div id="seps-container" style="width:36%;">
        <div id="print-all">
          <img class="print-layer" id="paper1"	  src="../assets/img/opossum/opossumexplode1paper.png" alt="print layer 1">
          <img class="print-layer" id="brown2"	  src="../assets/img/opossum/opossumexplode2brown.png" alt="print layer 2">
          <img class="print-layer" id="pink3"	  src="../assets/img/opossum/opossumexplode3pink.png" alt="print layer 3">
          <img class="print-layer" id="gray4"    src="../assets/img/opossum/opossumexplode4gray.png" alt="print layer 4">
        </div>
      </div>
    </figure><!--explode-->  
	</article>

<script>
  $(function() {
    $('#explode').click(function() {
      $('#paper1').css('transform','translateX(90%) rotateY(-45Deg)');
      $('#brown2').css('transform','translateX(30%) rotateY(-45Deg)');
      $('#pink3').css('transform','translateX(-30%) rotateY(-45Deg)');
      $('#gray4').css('transform','translateX(-90%) rotateY(-45Deg)');
    });
    
    $('#reset-explode').click(function() {
      $('.print-layer').css('transform','none');
    });
    
    //Give the print background a height
    function explodeH() {
      var paperH = $('#paper1').outerHeight();
      $('#seps-container').css('height',paperH);
    }
  
      $(window).on('load', function() {
        explodeH();
      }); 
       
      $(window).resize(function() {
        explodeH();
      });
  });
</script>

</main>
<?php include('../footer-menu.php'); ?> 
<?php include('../footer.php'); ?>