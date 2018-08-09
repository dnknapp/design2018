<?php
$pageTitle = "YRLY";
include("../header.php");

?>

<div class="intro header-grid">  
    <section id="project-intro">
			<h1 class="load-fade-in"><?php echo $pageTitle; ?></h1>
			<p class="load-fade-in">YRLY is a web app, currently under development, designed to help non-profits easily create great-looking online annual reports. I have been responsible for all aspects of design: from branding, to planning the features of a minimum viable product, to designing the user interface.</p>
            
			<div class="load-fade-in">
                <h3>Credits</h3>
                <p class="meta"><strong>Agency:&nbsp;</strong>Impart Creative</p>
                <p class="meta"><strong>Responsibilities:&nbsp;</strong>Competitor Research, Feature Planning, Branding, Content, Sitemap, Wireframes, Website Design, App Design, Illustration, Animation</p>
            </div>
		</section>
</div>
    
<main role="main" class="project-main load-fade-in">

 
  <article class="project">
    
    <div class="project-images">
            <div class="portfolio-img">
                <p>YRLY’s concept is simple: a tool for non-profits to publish a single-page website with everything they need to report for the year. I strived to make the app as intuitive as possible while allowing users of all levels of design and computer skill to create reports easily. Users can work with presets (templates for page layouts, built-in libraries for colors and font sets) or customize them to better suit their organization. Features targeted specifically to non-profit users include the ability to quickly build tables for financial reporting.</p>
                <img src="../assets/img/yrly/yrly-app-diagram.jpg" alt="YRLY App">
            </div>
            <div class="portfolio-img">
                <p>One aspect of the interface that I thought could be improved on from other WYSIWYG apps was to clearly show areas where new content containers can be placed. Below is a user flow showing the creation of a new section in a report. (1) Choosing a layout, (2) adding content boxes, and (3-4) filling boxes with content. </p>
                <img src="../assets/img/yrly/yrly-app-user-flow.jpg" alt="YRLY User Flow">
            </div>
            <div class="portfolio-img">
                <p>Early in the planning process it became obvious that modal windows were the best option for building all of YRLY’s tools within a consistent user interface.</p>
                <img src="../assets/img/yrly/yrly-app-modals.jpg" alt="YRLY Modal Windows">
            </div>
            <div class="portfolio-img">
                <p>The YRLY logo represents a YRLY report: the letters are stacked in the container rectangle like the pages in a report. The logo is responsive so that it can be used in smaller spaces where the primary vertical logo may not function as well, for example, in the app header.</p>
                <img src="../assets/img/yrly/yrly-logos.jpg" alt="YRLY Logos">
            </div>
            <div class="portfolio-img">
                <p>The initial homepage highlights the benefits and features of YRLY. The site will grow with the launch of the app to include a Theme Gallery, Pricing, a thorough Help section, and other pages.</p>
                <img src="../assets/img/yrly/yrly-homepage.jpg" alt="YRLY Homepage">
            </div>
            <div class="portfolio-img yrly-animation">
                <p>The hero image is an SVG that I created in Illustrator and animated using Greensock. The combination of technologies enables me to create complex animations quickly and ensure cross-browser compatibility, while maintaining small file sizes and high frame rates.</p>
                <!-- <img src="../assets/img/yrly/yrly-hero-animation-600px.gif" alt="YRLY Homepage"> -->
                <?php echo file_get_contents('../assets/img/yrly/yrly-hero-anim.svg'); ?> 
            </div>
           
		</div>
		
	</article>

</main>
<?php include('../footer-menu.php'); ?>
<?php include('../footer.php'); ?>