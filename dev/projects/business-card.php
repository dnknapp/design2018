<?php
$pageTitle = "Business Card";
include("../header.php");
?>

<main role="main">


  <article class="project">  
		
    <div class="project-description">
			<h1><?php echo $pageTitle; ?></h1>
			<p>Instead of having a business card that simply stated that I'm an illustrator, designer, and printer, I wanted to show it. That's a lot to accomplish in only a few inches, so I decided to make a miniature book. Stylistically it is influenced by art from the Vienna Secession and the psychedelic concert posters of 60s. I used a primary color palette to gain a quick impact.</p>
		</div>
		<div class="project-images">
			<img class="portfolio-img" src="../assets/img/businesscard/businesscard1design.jpg" alt="Business Card 1">
			<img class="portfolio-img" src="../assets/img/businesscard/businesscard2design.jpg" alt="Business Card 2">
			<img class="portfolio-img" src="../assets/img/businesscard/businesscard3design.jpg" alt="Business Card 3">
			<img class="portfolio-img" src="../assets/img/businesscard/businesscard4design.jpg" alt="Business Card 4">
		</div>
	
		<figure class="explode-container">
      <div id="explode-buttons">
        <div id="explode">Explode the print layers!</div>
        <div id="reset-explode">Reset!</div>
      </div>
      <div id="seps-container" style="width:32%;">
        <div id="print-all">
          <img class="print-layer" id="paper1"	  src="../assets/img/businesscard/businesscardexplode1paper.png" alt="print layer 1">
          <img class="print-layer" id="blue2"	  src="../assets/img/businesscard/businesscardexplode2blue.png" alt="print layer 2">
          <img class="print-layer" id="yellow3"	  src="../assets/img/businesscard/businesscardexplode3yellow.png" alt="print layer 3">
          <img class="print-layer" id="red4" src="../assets/img/businesscard/businesscardexplode4red.png" alt="print layer 4">
        </div>
      </div>
    </figure><!--explode-->  
	</article>

<script>
  $(function() {
    $('#explode').click(function() {
      $('#paper1').css('transform','translateX(105%) rotateY(-45Deg)');
      $('#blue2').css('transform','translateX(35%) rotateY(-45Deg)');
      $('#yellow3').css('transform','translateX(-35%) rotateY(-45Deg)');
      $('#red4').css('transform','translateX(-105%) rotateY(-45Deg)');
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