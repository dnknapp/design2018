<?php
$pageTitle = "Elton John Poster";
include("../header.php");
?>

<main role="main">


  <article class="project">  
		
    <div class="project-description">
			<h1><?php echo $pageTitle; ?></h1>
			<p>SMG asked me to create a commemorative poster when they booked Elton John's first ever concerts in Alaska. Art direction included giving it the look of a vintage travel poster, featuring Alaskan icons the grizzly bear and salmon, and of course Elton John's famous piano. It was also featured in <a href="//www.amazon.com/The-Art-Classic-Rock-Memorabilia/dp/006199099X/">The Art of Classic Rock</a> by rock historian Paul Grushkin.</p>
		</div>
		<div class="project-images">
			<img class="portfolio-img" src="../assets/img/eltonjohn/eltonjohn1design.jpg" alt="Elton John Poster 1">
		</div>
		
		<figure class="explode-container">
      <div id="explode-buttons">
        <div id="explode">Explode the print layers!</div>
        <div id="reset-explode">Reset!</div>
      </div>
      <div id="seps-container" style="width:41%;">
        <div id="print-all">
          <img class="print-layer" id="paper1"	src="../assets/img/eltonjohn/eltonexplode1paper.png" alt="print layer 1">
          <img class="print-layer" id="red2"	    src="../assets/img/eltonjohn/eltonexplode2red.png" alt="print layer 2">
          <img class="print-layer" id="black3"	src="../assets/img/eltonjohn/eltonexplode3black.png" alt="print layer 3">
        </div>
      </div>
    </figure><!--explode-->  
	</article>

<script>
  $(function() {
    $('#explode').click(function() {
      $('#paper1').css('transform','translateX(66%) rotateY(-45Deg)');
      $('#red2').css('transform','translateX(0%) rotateY(-45Deg)');
      $('#black3').css('transform','translateX(-66%) rotateY(-45Deg)');
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

 
<?php include('../footer.php'); ?>