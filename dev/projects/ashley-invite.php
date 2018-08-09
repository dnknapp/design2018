<?php
$pageTitle = "Ashley & John's Wedding Invitation";
include("../header.php");
?>

<div class="intro header-grid">  
    <section id="project-intro">
        <h1 class="load-fade-in"><?php echo $pageTitle; ?></h1>
        <p class="load-fade-in">Ashley and John are longtime friends and I was happy to create a screen printed wedding invitation for them. The wedding was held at the Horticultural Center in Fairmount Park, so I drew inspiration from the original Horticultural Hall of the Centennial Exhibition for the Victorian-style invitation.</p>
    </section>
</div>
    
<main role="main" class="project-main load-fade-in">

  <article class="project">  	
		<div class="project-images">
			<div class="portfolio-img">
                <p>The lettering of Ashley and John's names is custom, complemented by an eclectic mix of fonts. The purple color palette and delphinium were also central themes of the wedding.</p>
                <img src="../assets/img/ashleyinvite/ashleyinvite1design.jpg" alt="Ashley and John's Wedding Invitation 1">
            </div>
		</div>
		
		<figure class="explode-container">
      <div id="explode-buttons">
        <div id="explode">Explode the print layers!</div>
        <div id="reset-explode">Reset!</div>
      </div>
      <div id="seps-container" style="width:38%;">
        <div id="print-all">
          <img class="print-layer" id="paper1"	  src="../assets/img/ashleyinvite/ashleyexplode1paper.png" alt="print layer 1">
          <img class="print-layer" id="gold2"	  src="../assets/img/ashleyinvite/ashleyexplode2gold.png" alt="print layer 2">
          <img class="print-layer" id="purple3"	  src="../assets/img/ashleyinvite/ashleyexplode3purple.png" alt="print layer 3">
          <img class="print-layer" id="lavender4" src="../assets/img/ashleyinvite/ashleyexplode4lavender.png" alt="print layer 4">
        </div>
      </div>
    </figure><!--explode-->  
	</article>

<script>
  $(function() {
    $('#explode').click(function() {
      $('#paper1').css('transform','translateX(90%) rotateY(-45Deg)');
      $('#gold2').css('transform','translateX(30%) rotateY(-45Deg)');
      $('#purple3').css('transform','translateX(-30%) rotateY(-45Deg)');
      $('#lavender4').css('transform','translateX(-90%) rotateY(-45Deg)');
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