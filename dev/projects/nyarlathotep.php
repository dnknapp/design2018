<?php
$pageTitle = "Nyarlathotep";
include("../header.php");
?>

<div class="intro header-grid">  
    <section id="project-intro">
        <h1 class="load-fade-in"><?php echo $pageTitle; ?></h1>
        <p class="load-fade-in">A screen printed book cover for Masthead Print Studio's Halloween art show.</p>
        
    </section>
</div>

<main role="main" class="project-main load-fade-in">

  <article class="project">

		<div class="project-images">
			<div class="portfolio-img">
                <p>The concept of the cover is an H.P. Lovecraft story transposed into the style of a 1960s pulp novel. In the original 1920 short story, Nyarlathotep is described as resembling a Pharaoh, traveling the world and gaining followers through demonstrations of magical powers and electricity.</p>
                
                <img src="../assets/img/nyarlathotep/nyarlathotep1design.jpg" alt="Nyarlathotep 1">
            </div>    
			<img class="portfolio-img" src="../assets/img/nyarlathotep/nyarlathotep2design.jpg" alt="Nyarlathotep 2">
		</div>
		
		<figure class="explode-container">
          <div id="explode-buttons">
            <div id="explode">Explode the print layers!</div>
            <div id="reset-explode">Reset!</div>
          </div>
          <div id="seps-container" style="width:32%;">
            <div id="print-all">
              <img class="print-layer" id="paper1"	  src="../assets/img/nyarlathotep/nyarlathotepexplode1paper.png" alt="print layer 1">
              <img class="print-layer" id="purple2"	  src="../assets/img/nyarlathotep/nyarlathotepexplode2purple.png" alt="print layer 2">
              <img class="print-layer" id="green3"	  src="../assets/img/nyarlathotep/nyarlathotepexplode3green.png" alt="print layer 3">
              <img class="print-layer" id="black4" src="../assets/img/nyarlathotep/nyarlathotepexplode4black.png" alt="print layer 4">
            </div>
          </div>
        </figure><!--explode-->  
		
		<div class="project-images">
            <div class="portfolio-img">
                <p>An eye in a crown serves as a period-appropriate publisher logo. An old book with green edges was the perfect match for the cover, and I distressed the edges of the new cover to complete the look.</p>
                <img src="../assets/img/nyarlathotep/nyarlathotep3design.jpg" alt="Nyarlathotep 3">
            </div>
		</div>
	</article>

<script>
  $(function() {
    $('#explode').click(function() {
      $('#paper1').css('transform','translateX(110%) rotateY(-45Deg)');
      $('#purple2').css('transform','translateX(35%) rotateY(-45Deg)');
      $('#green3').css('transform','translateX(-35%) rotateY(-45Deg)');
      $('#black4').css('transform','translateX(-105%) rotateY(-45Deg)');
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