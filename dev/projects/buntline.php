<?php
$pageTitle = "Buntline Beer";
include("../header.php");
?>

<div class="intro-container">  
    <section id="intro">
        <h1 class="velocity"><?php echo $pageTitle; ?></h1>
        <p class="velocity">Masthead Print Studio's Shelf Life show paired artists and homebrewers to create small batch beers with custom labels.</p>
        
    </section>
</div>
    
<main role="main" class="project-main velocity">

  <article class="project">  
		
		<div class="project-images">
            <div class="portfolio-img">
                <p>Antique photographs of dime novelist Ned Buntline served as inspiration for the packaging of this black ale. Buntline is responsible for much of the mythology of Buffalo Bill and the American West, and his brash character was a perfect match for the smoky, dark beer. For the show opening, I built an Arts and Crafts style frame from reclaimed quartersawn white oak for a larger version of the label artwork.</p>
                <img src="../assets/img/buntline/buntline1design.jpg" alt="Ned Buntline Beer Packaging 1">
            </div>
			<img class="portfolio-img" src="../assets/img/buntline/buntline2design.jpg" alt="Ned Buntline Beer Packaging 2">
            <img class="portfolio-img" src="../assets/img/buntline/buntline3design.jpg" alt="Ned Buntline Beer Packaging 3">
		</div>
		
      
		<figure class="explode-container">
          <div id="explode-buttons">
            <div id="explode">Explode the print layers!</div>
            <div id="reset-explode">Reset!</div>
          </div>
          <div id="seps-container" style="width:49%;">
            <div id="print-all">
              <img class="print-layer" id="paper1"	src="../assets/img/buntline/buntlineexplode1paper.png" alt="print layer 1">
              <img class="print-layer" id="tan2"    src="../assets/img/buntline/buntlineexplode2tan.png" alt="print layer 2">
              <img class="print-layer" id="brown3"	src="../assets/img/buntline/buntlineexplode3brown.png" alt="print layer 3">
            </div>
          </div>
    </figure><!--explode-->  
		
     <div class="project-images">
        <div class="portfolio-img">
			<p>A six pack carrier modeled after a buckskin bag emphasizes the Western theme. For the carrier to include fringe, I had to develop a new folding template and build several prototypes to find which was sturdiest.</p>
		    <img src="../assets/img/buntline/buntline4design.jpg" alt="Ned Buntline Beer Packaging 4">
		</div>
      </div>

	</article>

<script>
  $(function() {
    $('#explode').click(function() {
      $('#paper1').css('transform','translateX(66%) rotateY(-45Deg)');
      $('#tan2').css('transform','translateX(0%) rotateY(-45Deg)');
      $('#brown3').css('transform','translateX(-66%) rotateY(-45Deg)');
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