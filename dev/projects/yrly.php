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
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 900 675" class="yrly-animation-svg">
                    <defs>
                        <linearGradient id="linear-gradient" x1="-90.03" y1="318.34" x2="289.94" y2="354.44" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#a7bfff"/>
                        <stop offset="1" stop-color="#fff"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="50.2" y1="298.42" x2="612.9" y2="351.89" xlink:href="#linear-gradient"/>
                        <linearGradient id="linear-gradient-3" x1="-152.9" y1="311.84" x2="250.3" y2="350.15" xlink:href="#linear-gradient"/>
                        <linearGradient id="linear-gradient-4" x1="287.26" y1="315.53" x2="662.88" y2="351.22" xlink:href="#linear-gradient"/>
                        <linearGradient id="linear-gradient-5" x1="417.58" y1="317.79" x2="761.45" y2="350.46" xlink:href="#linear-gradient"/>
                        <linearGradient id="linear-gradient-6" x1="-141.27" y1="311.98" x2="326.62" y2="356.44" xlink:href="#linear-gradient"/>
                        <linearGradient id="linear-gradient-7" x1="-29.4" y1="316.67" x2="395.46" y2="357.04" xlink:href="#linear-gradient"/>
                        <linearGradient id="linear-gradient-8" x1="571.27" y1="318.4" x2="872.09" y2="346.99" xlink:href="#linear-gradient"/>
                        <linearGradient id="linear-gradient-9" x1="632.56" y1="329.84" x2="941.64" y2="346.26" xlink:href="#linear-gradient"/>
                        <clipPath id="clip-path">
                        <rect id="planets-mask" y="100" width="900" height="480" fill="none"/>
                        </clipPath>
                        <linearGradient id="New_Gradient_Swatch_copy_2" data-name="New Gradient Swatch copy 2" x1="-44.4" y1="716.88" x2="337.42" y2="433.98" gradientTransform="rotate(-2 -5691.128 -6931.53)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#e3edfe"/>
                        <stop offset="1" stop-color="#a7bfff"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-10" x1="244.3" y1="342.26" x2="568.31" y2="342.26" xlink:href="#New_Gradient_Swatch_copy_2"/>
                        <linearGradient id="linear-gradient-11" x1="-60.82" y1="535.79" x2="302" y2="535.79" gradientTransform="rotate(-17 -444.68 -427.916)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#7273e8"/>
                        <stop offset="1" stop-color="#798eed"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-12" x1="27.08" y1="721" x2="205.33" y2="721" gradientTransform="rotate(-2 -5691.128 -6931.53)" xlink:href="#linear-gradient-11"/>
                        <linearGradient id="New_Gradient_Swatch_copy_2-2" x1="237.37" y1="612" x2="237.37" y2="573.98" gradientTransform="rotate(90 290.47 617.05)" xlink:href="#New_Gradient_Swatch_copy_2"/>
                    </defs>
                    <title>
                        YRLY-Hero-Illo-v8-for-GSAP
                    </title>
                    <g style="isolation:isolate">
                        
                        <g id="background">
                            <rect id="svg-box" width="900" height="675" fill="none"/>
                            <rect y="100" width="275.9" height="480" fill="url(#linear-gradient)"/>
                            <rect x="272.57" y="100" width="430.51" height="480" fill="url(#linear-gradient-2)"/>
                            <path d="M0 580h295.56l-8.66-480H0v40c26-11 66.67-11.11 73 7 9.39 27-53.7 40.56-32 84 12 24 96.4 40.85 61 100.52C85.74 358.85 21.49 347.93 0 399z" fill="url(#linear-gradient-3)"/>
                            <path d="M400.52 100c23.32 12 61.84 11.16 53.31 81.33-6 49.33 42.32 69.67 97.55 54.09 38.26-10.79 28.4-51.42 51.06-51.42s35.32 32.67 10.15 51.62c-9.38 7.06-89.14 69.13-89.45 122.38-.2 34.44 26.4 80.35 19 101-28 78-109-39-149.94 3-25.4 26-26.46 97.65-4 118h224.33l88.55-298.29.31-181.71z" fill="url(#linear-gradient-4)"/>
                            <path d="M594.11 327c-82.21 104.85 56.82 147.67 21 182-22.17 21.24-78 31-80.11 71h282.14l-49.42-480H571.79c2 30 9 54.39 41.32 66.67 19.33 7.33 32.65 26.19 39.32 48C672.09 279 620.77 293 594.11 327z" fill="url(#linear-gradient-5)"/>
                            <path d="M150.41 244.3c7 48.1 52.76 68.25 78.38 82.29 11.29 6.19 49 41.21 52.44 69.41 4.35 35.78-38.38 69-60 50-109-96-207.9-30.68-221.25.72V580h272.59l33.32-104.67L404.52 356l-97.3-256H119.29c-6 32 45.34 36 48 57.33s-23.9 38.87-16.88 86.97z" fill="url(#linear-gradient-6)"/>
                            <path d="M327.21 358c26 34-11.83 109.62-64.48 129-46.7 17.15-75.37-49.18-121.45-37C65.17 470.2 94.46 566.33 116 580h203.88c-21.33-40.67-12.6-91.9 29.32-118 30-18.67 84.54-20.95 106.63-48 23.17-28.38-25.13-46.72-24-78 1.33-36.67 46-32.67 39.32-54.67s-63-4.33-92.63-45.33c-39.84-55.08-6.33-109-62.31-136h-125c-12 52 95 77 69 118-17.12 27-16 67 2 89 15.2 18.54 48.47 29.37 65 51z" fill="url(#linear-gradient-7)"/>
                            <path d="M703 359.68C689.75 339.5 695.08 309 729.06 278s54-67.33 30-83.33c-9-6-38.72-2.86-45.32-22-6.66-19.33 7.33-30 7.33-48s-30-24.67-30-24.67H900v480H697.08c-24.66-88 38.65-124.67 78-138.67 25.62-9.12 35.32-61.33-7.33-56.67-50.66 5.55-64.75-24.98-64.75-24.98z" fill="url(#linear-gradient-8)"/>
                            <path d="M791.44 330.44C778.08 286.09 833.85 261 852.31 230s-6-54.23-45.28-67.45S767.72 100 767.72 100H900v480H747.72c-2.8-15.12 0-109.33 87.22-82.47 36.73-18.86 53.42-80.62 51.39-91.53-8.65-46.67-81.96-32.67-94.89-75.56z" fill="url(#linear-gradient-9)"/>
                        </g>
                        <g id="planets">
                            <g id="planets-clip">
                            <g clip-path="url(#clip-path)">
                                <g id="planet-big">
                                <ellipse id="_Ellipse_" data-name="&lt;Ellipse&gt;" cx="803.45" cy="481.76" rx="162.06" ry="162" fill="#e3edfe"/>
                                <path d="M776.68 430.09L753 453.79c3.1-9.07 13-16.64 23.68-23.7zM795 549a14.8 14.8 0 0 0-.62 1.85l16.39-16.39C804.11 536.9 798.21 541 795 549zm23.64-16.76L794 556.79a21 21 0 0 0 .78 3.46l29.06-29c-1.71.25-3.47.58-5.23.96zm12.1-2.21l-34.31 34.3c.44.93.93 1.86 1.45 2.8l38.46-38.45a50.85 50.85 0 0 1-5.63 1.32zm134.77-45.76q-.08 5.22-.48 10.36-.18 2.35-.44 4.68-.35 3.25-.83 6.47a160.87 160.87 0 0 1-7.12 29q-.56 1.61-1.15 3.21-2.55 6.89-5.7 13.47l-.18.37A161.69 161.69 0 0 1 940 569q-2.59 4-5.41 7.93-1.39 1.92-2.84 3.79l-.1.13q-1.44 1.85-2.92 3.67a163 163 0 0 1-22.5 22.48q-1.68 1.38-3.41 2.72l-.62.48q-1.76 1.35-3.55 2.66-1.83 1.33-3.7 2.61l-.34.24a161.93 161.93 0 0 1-17.17 10.21q-1.82.94-3.67 1.82l-.74.35c-1.24.59-2.48 1.17-3.73 1.72q-7.31 3.25-15 5.79l-1 .33a161.06 161.06 0 0 1-25.82 6q-5.52.82-11.16 1.27-5.14.4-10.37.48H800.32q-2.06 0-4.11-.13-7.22-.32-14.27-1.26-1.86-.25-3.7-.54c-1.61-.25-3.22-.52-4.82-.82q-4.11-.77-8.14-1.75-3.93-1-7.79-2.09-3.78-1.12-7.47-2.41-1.57-.55-3.12-1.13l-2-.75a162 162 0 0 1-41.63-278.38c1.12-.88 2.25-1.74 3.4-2.6A162.24 162.24 0 0 1 723 341.09q4.44-2.54 9.05-4.81 6.63-3.26 13.59-5.92h.08q1.7-.65 3.43-1.26 7-2.47 14.2-4.31 6.19-1.57 12.56-2.67 3.3-.56 6.64-1 7.57-1 15.36-1.23c1.83-.06 3.66-.1 5.5-.1q4.27 0 8.51.22a162.33 162.33 0 0 1 22.65 2.78q6.37 1.24 12.56 3 1.65.46 3.29 1 3.76 1.14 7.44 2.45 3.46 1.23 6.85 2.62l.29.12q3.46 1.42 6.83 3 1.92.89 3.81 1.84l.49.25q4.11 2.07 8.09 4.37l.59.34q6.19 3.61 12 7.74 2.89 2 5.68 4.21 1.59 1.23 3.14 2.5 1.17 1 2.32 1.92 2.67 2.26 5.25 4.64 2.57 2.37 5 4.85 1.65 1.66 3.24 3.36c.53.56 1.06 1.13 1.58 1.7q2.36 2.59 4.6 5.27A162.53 162.53 0 0 1 940.33 395q1.93 3 3.73 6.16 1 1.8 2 3.62.74 1.37 1.46 2.76 1 1.87 1.88 3.76.69 1.43 1.36 2.87 1.57 3.41 3 6.9.82 2 1.58 4.07.58 1.54 1.12 3.1 2 5.84 3.64 11.89.45 1.68.86 3.38.55 2.29 1 4.6.87 4.14 1.53 8.35.29 1.84.53 3.7a163.41 163.41 0 0 1 1.43 21.53v2.47zM798.1 621.9l1.76-1.76c6-3.1 10.59-7 13.11-12a18.08 18.08 0 0 0 .82-1.91l40.34-40.32a24.46 24.46 0 0 1-2.13-3.51l-37.21 37.2a20.5 20.5 0 0 0-.53-3.71l36.55-36.53A20.56 20.56 0 0 1 850 555v-.4l-37.08 37.07c-.4-1-.85-1.94-1.34-2.91L850.26 550c3.85-19.17 38.46-30.67 50.48-56.1l-91.23 91.19q-.78-1.31-1.63-2.62l95.38-95.34c.35-1.26.65-2.54.89-3.87.19-1.09.33-2.11.41-3.07l-98.93 98.89-1.72-2.52L904.53 476a12.1 12.1 0 0 0-1.3-4.35L801.64 573.19c-.57-.86-1.13-1.71-1.67-2.57l101.42-101.39a11.28 11.28 0 0 0-3.46-2.19L845 520a14 14 0 0 0 0-3c0-.37-.1-.72-.15-1.07l49.87-49.85a33.48 33.48 0 0 0-5-.62l-46 45.95a19.84 19.84 0 0 0-1.34-2.91l43.14-43.12c-1.89 0-3.85.1-5.85.2L840 505.18a21.69 21.69 0 0 0-2.13-2.11l37.27-37.26c-2 .11-4 .22-5.93.28l-34.59 34.58c-.87-.54-1.78-1-2.73-1.51l33-33c-1.84 0-3.64-.1-5.38-.27L828 497.45q-1.53-.58-3.15-1.09l31-31a25 25 0 0 1-4.37-1.27l-31.09 31.07q-1.7-.42-3.46-.79l31.72-31.71a14.54 14.54 0 0 1-3.09-2.56l-33.38 33.36q-1.8-.31-3.64-.6l35.24-35.22A15.68 15.68 0 0 1 843 456a22.37 22.37 0 0 1-.87-2.34l-38.46 38.44-3.72-.53 41.43-41.42a19.77 19.77 0 0 1 .18-5.82L795 490.89l-3.69-.55 52.17-52.15c2.05-4.71 5.27-9.35 8.57-14.21l-65.58 65.56q-1.8-.32-3.57-.67l76.22-76.19a49.09 49.09 0 0 0 4-9.62l-84.8 84.77q-1.7-.42-3.34-.9l89.26-89.22a35.14 35.14 0 0 0 .27-5.91l-93.76 93.73q-1.55-.58-3-1.24l96.41-96.37c0-.28-.08-.57-.13-.86a21.11 21.11 0 0 0-1-3.69l-99 99a30 30 0 0 1-2.54-1.7l100.17-100.23a22.65 22.65 0 0 0-2.27-3.37l-101 101a22.26 22.26 0 0 1-1.94-2.3l100.92-100.92a32.66 32.66 0 0 0-3-2.62l-100 100a22.6 22.6 0 0 1-1.19-3.05l98.71-98.67q-1.69-1.11-3.53-2.12l-96.14 96.11a33.07 33.07 0 0 1-.22-4l40.63-40.61c8.57-5.74 15.68-11.46 17.76-17.76l35.18-35.17q-1.88-.92-3.86-1.78L810.75 396a13.56 13.56 0 0 0-1.09-3.15l29-29q-2-.81-4.07-1.57l-27.13 27.12a18.81 18.81 0 0 0-2-2.21l26-26-4.17-1.47-25.09 25.09a21.33 21.33 0 0 0-2.85-1.39l24.83-24.82-4.18-1.47-25 25a36.88 36.88 0 0 0-3.64-.6L816.9 356q-2.07-.77-4.07-1.57l-26.77 26.76c-1.4 0-2.84 0-4.3.06l28.08-28.07q-2-.87-3.85-1.8l-30.26 30.25q-2.31.19-4.68.44l32.18-32.16c-1.22-.69-2.38-1.42-3.47-2.18l-35 35-4.73.49 37.36-37.35a25.05 25.05 0 0 1-2.83-2.79l-40.69 40.68c-1.5.11-3 .19-4.49.25l41.95-41.93q-3.19.27-6.33.69l-41.32 41.3q-2 0-4.06-.18L780 343.5q-3.53.6-7 1.36l-38.45 38.44c-1.2-.19-2.38-.42-3.55-.69l36.4-36.38q-4.08 1.08-8 2.4l-32.72 32.7q-1.54-.54-3-1.21L752.67 351q-5.09 2-10 4.33l-22.83 22.82q-1.29-.79-2.53-1.71l16.39-16.38a140.51 140.51 0 0 0-17.65 12l-1.8 1.8-.21-.2a140.24 140.24 0 0 0 82.26 248.17zm4.15.1h1.21q2.26 0 4.5-.07l50.72-50.7c-.92-1-1.81-2-2.67-3zm16.34-.81l44.74-44.72c-.84-1.05-1.72-2.05-2.61-3l-48.3 48.29c2.06-.16 4.12-.35 6.17-.57zm11.63-1.74l37-36.94a27 27 0 0 0-2-3.6l-41.69 41.67q3.33-.48 6.69-1.13zm37.61-13c.06-.24.11-.47.17-.7l-1.24 1.24zm1.74-12.17l-20 20q4.7-1.63 9.24-3.6l10.29-10.29a41.83 41.83 0 0 0 .48-6.15zm-.23-4a26.32 26.32 0 0 0-1-4.66l-32.74 32.73q3.88-.91 7.68-2z" fill="#a7bfff"/>
                                </g>
                                <g id="planet-med">
                                <ellipse id="_Ellipse_2" data-name="&lt;Ellipse&gt;" cx="225.71" cy="208.1" rx="55.52" ry="55.5" fill="#e3edfe"/>
                                <path d="M226.66 188l-9.66 9.7c.75-5.7 5.54-7.92 9.66-9.7zm12.7 36.72c-2 .91-4.58 1.6-6.84 2.59l-5.32 5.32a7.17 7.17 0 0 0-.16 1.84 5.71 5.71 0 0 0 .48 2.08zm41.86-16.43a55.71 55.71 0 0 1-1.14 11c-.19.92-.41 1.83-.64 2.74l-.11.41q-.35 1.32-.77 2.62a55.19 55.19 0 0 1-5.23 11.52l-.11.19q-.44.72-.9 1.43l-.17.26q-.45.69-.92 1.36l-.19.26q-.48.68-1 1.34l-.16.22c-.35.46-.7.91-1.06 1.35l-.08.09a55.82 55.82 0 0 1-6.48 6.72l-.17.15c-.4.35-.81.69-1.22 1l-.32.26-1.19.93-.39.3-1.19.87-.42.3-1.23.83-.41.26-1.29.81-.32.19c-.47.28-.95.56-1.43.83a55.2 55.2 0 0 1-9.58 4.21l-.4.12c-.87.28-1.74.53-2.63.77l-.42.11a55.33 55.33 0 0 1-9.31 1.59q-1.09.09-2.2.14-1.11 0-2.22.05h-.22q-2.62 0-5.19-.24l-.72-.08-1.31-.15c-.58-.07-1.15-.16-1.72-.25q-2.37-.38-4.68-1a55.5 55.5 0 0 1-1.54-107.19 55.21 55.21 0 0 1 7.17-1.52q2.33-.34 4.72-.48c1.08-.06 2.17-.11 3.27-.11s1.95 0 2.91.08c.7 0 1.39.09 2.08.16l1.35.14c1.65.19 3.28.44 4.89.77.59.12 1.17.25 1.75.4a55.1 55.1 0 0 1 9 3 55.49 55.49 0 0 1 12.39 7.38c1 .83 2.06 1.7 3 2.6q1.11 1 2.16 2.08 1.4 1.42 2.7 2.94a55.69 55.69 0 0 1 4.24 5.65q.84 1.29 1.61 2.63 1 1.81 1.95 3.7c.46 1 .91 1.94 1.31 2.93.56 1.35 1 2.74 1.5 4.15.16.5.32 1 .46 1.51s.34 1.18.49 1.78c.39 1.54.7 3.1 1 4.68q.13.8.23 1.6c0 .27.07.53.1.8.05.45.11.9.15 1.35.16 1.71.25 3.43.25 5.18v.22zm-57.68 47.77l.25-.25c3-1.38 9.3-4.93 10.27-6.85a5.19 5.19 0 0 0 .54-4l6.78-6.77a11.11 11.11 0 0 1-2.84-2.8l-6.3 6.3c-.72-.67-1.5-1.32-2.24-2l7.82-7.82c.39-2 2.2-3.32 4.55-4.55l13.31-13.3a16.94 16.94 0 0 0-.61-4.59c0-.12-.07-.22-.11-.34l-11.96 12a4.07 4.07 0 0 0 0-1.09 9.13 9.13 0 0 0-.63-2.55l11.18-11.18a8.61 8.61 0 0 0-3-2.67L240 214.25a12.16 12.16 0 0 0-2.68-1.56l10.27-10.27a44.44 44.44 0 0 0-4.75-.89L233 211.3c-1.13-.29-2.28-.55-3.44-.81l9.66-9.66a6.56 6.56 0 0 1-3.57-2.07l-10.57 10.57a19.93 19.93 0 0 1-3-1.21l12.56-12.56c-.2-3.8 1.95-6.63 3.93-9.57l-19.7 19.69a8.06 8.06 0 0 1-1.5-2.74l24.31-24.3a11.21 11.21 0 0 0-.8-4.85l-8.28 8.28a7.45 7.45 0 0 0-1-1.78c-.2-.28-.44-.55-.67-.82l8.48-8.47a21 21 0 0 0-2.58-3.06l-8.83 8.84a21.11 21.11 0 0 0-2.62-1.63l9.22-9.15a27.72 27.72 0 0 0-3.37-2.28l-9.77 9.77q-1.56-.54-3.28-1l10.22-10.22a24.75 24.75 0 0 0-4.25-1.39l-10.7 10.69c-1.23-.18-2.49-.33-3.8-.45l10.8-10.79a47.87 47.87 0 0 0-6.92 1.28l-9.24 9.23h-4.26l7.08-7.08a48 48 0 0 0 16.15 92.29zm10.58-.69l12.56-12.55a13.81 13.81 0 0 0-2.86-2.78l-16 16a48.22 48.22 0 0 0 6.3-.63zm5.58-1.33a47.75 47.75 0 0 0 8.07-3.27 10.7 10.7 0 0 0 .24-5z" fill="#a7bfff"/>
                                </g>
                                <g id="planet-small">
                                <ellipse id="_Ellipse_3" data-name="&lt;Ellipse&gt;" cx="113" cy="461.36" rx="26.51" ry="26.5" fill="#e3edfe"/>
                                <path d="M139.43 463.24c0-.62.08-1.25.08-1.88v-1.19s0-.76-.08-1.14a26.38 26.38 0 0 0-.87-4.78 26.29 26.29 0 0 0-1.09-3.15 26.4 26.4 0 0 0-1.93-3.72 26.56 26.56 0 0 0-1.75-2.49 26.66 26.66 0 0 0-2.72-2.93q-.53-.5-1.09-1l-.08-.06a26.55 26.55 0 0 0-4.62-3.08c-.45-.24-.92-.46-1.38-.67l-.15-.07a26.31 26.31 0 0 0-5.81-1.81c-.53-.1-1.06-.18-1.59-.25h-.27c-.55-.06-1.1-.12-1.66-.14s-.93 0-1.39 0a26.61 26.61 0 0 0-5 .48 26.28 26.28 0 0 0-3 .76l-.32.1c-.43.14-.86.3-1.28.46l-.44.18c-.43.17-.85.35-1.27.55a26.49 26.49 0 0 0 1.69 48.68c.4.15.8.3 1.21.43a26.37 26.37 0 0 0 6 1.24c.77.07 1.55.1 2.33.1.63 0 1.26 0 1.88-.08a25.76 25.76 0 0 0 11.17-3.34h.05a26.53 26.53 0 0 0 3.54-2.4 26.63 26.63 0 0 0 4-4l.06-.08a26.51 26.51 0 0 0 2.35-3.47l.06-.1a26.33 26.33 0 0 0 1.8-3.91 26.33 26.33 0 0 0 1.53-7.17zM113 483.31h-1.12a21.94 21.94 0 0 1-2.62-43.54l-4 4a27.54 27.54 0 0 1 3.69.55l4.14-4.14a11.87 11.87 0 0 1 3.62 2l-3.63 3.63a8.52 8.52 0 0 1 2.35 1.9l3.33-3.33a5 5 0 0 1 .38.68c.77 1.73.24 3.47-.68 5.26l-9.43 9.43a6.61 6.61 0 0 0-.7 2.57 7.65 7.65 0 0 0 .18 2.19l6.73-6.73a4.42 4.42 0 0 0 .11 1.11 6.89 6.89 0 0 0 1.44 3l-6 6a12.47 12.47 0 0 0 2.74 1.5l6-6a15.76 15.76 0 0 0 2.35.36 13.31 13.31 0 0 1 2.52.42l-6.83 6.83a3.72 3.72 0 0 1 1.81 1.62 2.51 2.51 0 0 1 .18.63l7.36-7.36a8.42 8.42 0 0 1 1.7 3.94l-13.38 13.37a21.92 21.92 0 0 1-2.24.11zm10-2.41a21.58 21.58 0 0 1-2.21 1l7.12-7.11a15 15 0 0 1-4.91 6.11z" fill="#a7bfff"/>
                                </g>
                            </g>
                            </g>
                        </g>
                        <g id="phone">
                            <g id="phone-illo">
                            <path id="phone-shape" d="M338.54 31.85a32.07 32.07 0 0 0-31 23.72l-127 474a32.07 32.07 0 0 0 22.63 39.19l205.34 55a32 32 0 0 0 39.19-22.63l127-474A32.07 32.07 0 0 0 552.12 88L346.78 33a31.86 31.86 0 0 0-8.24-1.09z" fill="#fff"/>
                            <g id="phone-shadow">
                                <path d="M408.09 616.38L245.7 572.87c-6.52-16.07 10-53.5 45.39-44 104.5 28 72-367 142.46-409.06 19.1-11.41 27.41-29.6 14.09-52.58L548 94.11a27.43 27.43 0 0 1 19.34 33.5L441.59 597a27.43 27.43 0 0 1-33.5 19.38z" fill="url(#New_Gradient_Swatch_copy_2)"/>
                                <path d="M459.62 77.67l86.61 23.21a20.38 20.38 0 0 1 14.39 24.93L434.83 595.23a20.41 20.41 0 0 1-19.7 15.08 20.19 20.19 0 0 1-5.22-.69l-158.48-42.46c-.64-5.23.94-13 5.69-20.07 3.21-4.76 10.45-12.74 23-12.74a35.56 35.56 0 0 1 9.17 1.28 46.69 46.69 0 0 0 12.05 1.66c14.34 0 26.9-7.38 37.35-21.94 8.64-12 16-29.06 22.52-52 11.8-41.63 19-96.82 25.91-150.19 5.84-44.92 11.35-87.34 19.34-121.76 8.44-36.36 18.76-58.41 30.7-65.54 19.7-11.77 27.54-29.13 22.48-48.13m-12-10.46c13.33 23 5 41.17-14.09 52.58-68.05 40.66-40 410.48-132.22 410.48a39.56 39.56 0 0 1-10.24-1.42 42.35 42.35 0 0 0-11-1.52c-27.77 0-40.21 31.23-34.41 45.53l162.4 43.51a27.16 27.16 0 0 0 7 .93A27.46 27.46 0 0 0 441.59 597l125.79-469.39A27.43 27.43 0 0 0 548 94.11l-100.4-26.9z" fill="url(#linear-gradient-10)"/>
                            </g>
                            <rect id="screen-shape" x="254.02" y="112.33" width="247.27" height="432.17" transform="rotate(15 377.64 328.423)" fill="url(#linear-gradient-11)"/>
                            <path id="screen-ref3" d="M486 173.52l-24.89 24.89a49.34 49.34 0 0 1 1.6-5.84l17.83-17.83a39 39 0 0 1 5.46-1.22zM221.17 444l-3.41 3.41-1.55 5.79 7.23-7.23c-.81-.64-1.56-1.3-2.27-1.97zm271.06-271l-32.15 32.15q-.25 2.28-.4 4.64L496.46 173q-2.14-.09-4.23 0zm9.52.37l-42.3 42.3v4.27l46.11-46.11q-1.92-.3-3.82-.49zM226.58 448.5l-12.44 12.44-1.55 5.79L229 450.3c-.82-.6-1.64-1.2-2.42-1.8zm233-218.92l54.26-54.26q-1.75-.38-3.52-.72l-50.86 50.86q.1 2.05.17 4.12zm-108.3 104.1l-25.07 25.07a111 111 0 0 0-6.16 10.4l40.42-40.42a80.74 80.74 0 0 0-9.19 4.95zM460 239.13l61.83-61.83q-1.64-.46-3.35-.89L459.82 235q.08 2.07.18 4.13zm-90.2 85.92l-54.48 54.48c-.88 2.22-1.66 4.43-2.38 6.62l63-63q-3.08.85-6.14 1.9zm13.69-3.8l-72.83 72.83q-.7 2.78-1.27 5.52l79.53-79.53q-2.72.56-5.43 1.18zm76.71-72.47l69.17-69.17q-1.55-.51-3.21-1l-66 66 .04 4.17zm-64.25 69.89l-87.85 87.85q-.41 2.53-.75 5l93.86-93.86zm64.11-59.87l76.61-76.61c-1-.36-2-.75-3.1-1.14l-73.38 73.38q-.04 2.2-.14 4.38zm80.65-75l-81.06 81.06q-.23 2.43-.57 4.81l84.6-84.6c-.36-.17-1.4-.63-2.97-1.27zm-84.77 98.9l84.37-84.37 1.55-5.79-84.1 84.1a58.7 58.7 0 0 1-1.83 6.06zm44.88-39.24L538.25 206l-1.55 5.79-27.82 27.82a46.37 46.37 0 0 1 7.52-1.88l18.24-18.24-1.55 5.79-11.89 11.89a55.23 55.23 0 0 1 5.73-.09L531 233l-1.14 4.28h.17l-88.77 331.4-239-63.55v-.06l1-3.62 2.11-7.76-.07.07 1.55-5.79.11-.11 2.11-7.76-.15.15 1.55-5.79.19-.19 21.65-21.65q1.26.83 2.59 1.66l-22.31 22.31q1.29 1.46 2.78 2.86l23.07-23.07q1.34.77 2.72 1.52l-23.55 23.55q1.5 1.28 3.14 2.5l24.13-24.13q1.42.71 2.87 1.38l-24.47 24.5q1.66 1.13 3.43 2.21l25-25q1.51.63 3 1.2l-25.38 25.38q1.79 1 3.67 2l25.9-25.9q1.64.52 3.28 1l-26.28 26.25q1.91.9 3.9 1.75l27-27q1.84.36 3.65.59l-27.65 27.65q2 .8 4.1 1.54l28.8-28.8a36.8 36.8 0 0 0 4.43-.19l-30.07 30.07q2.13.7 4.31 1.33l33.2-33.2a22.28 22.28 0 0 0 6.83-4.28 25.12 25.12 0 0 0 5.91-8.45l59.56-59.56v-5.67L303 445.53c.38-1.68.71-3.43 1-5.24l56.13-56.13c.15-2.17.37-4.28.69-6.33l-55.94 55.94q.27-2.33.52-4.76l56.5-56.5a39.58 39.58 0 0 1 3.59-9.23L306 422.72q.24-2.34.51-4.76l101.77-101.74q2.78-.6 5.51-1.27l-31.93 31.93a55.59 55.59 0 0 1 11.06-5.42l28.72-28.72c2.29-.74 4.54-1.56 6.73-2.48L399 339.63a71.23 71.23 0 0 1 7-1.35l35.91-35.91c.89-.71 1.77-1.44 2.62-2.22a40.25 40.25 0 0 0 4.79-5.19l42.08-42.08a28.4 28.4 0 0 1 9.42-9.42zM257.71 500.69q2.25.59 4.53 1.11l97.94-97.94q-.12-2.75-.21-5.43zm93.5-28.55a68.81 68.81 0 0 0 4.72-10.36l-40 40a58.48 58.48 0 0 0 9.2-3.56zm6.63-16.51q1-3.59 1.57-7.22l-56 56q3.46-.43 6.77-1.13zm-74.66 49.25q2.72.18 5.41.23l72.34-72.34q.09-2.87.09-5.73zm77.79-82q-.06-2.75-.16-5.48L274.2 504q2.53.34 5.05.59zm-68.15 82.28q3-.05 5.91-.26l61.41-61.41c.25-2.07.43-4.14.57-6.21zm190.4-178.58a18.47 18.47 0 0 0 1.94-3.87l-13 13a25 25 0 0 0 11.06-9.18zm3.53-9.7c.39-2 .67-4.22.88-6.52l-28.19 28.14a50 50 0 0 0 6.57-.93zm1.18-11.06c.09-1.89.14-3.83.16-5.8l-38.71 38.71c1.91.05 3.78.07 5.61 0zm.17-10.05c0-1.85 0-3.71-.07-5.57L440 338.21c1.8.11 3.58.22 5.34.3zm-.16-9.72c0-1.87-.09-3.71-.12-5.52l-57.17 57.17c1.79.09 3.57.2 5.33.31zM360.38 407.91l-94.64 94.64q2.38.48 4.77.87l90.13-90.13-.26-5.38zm127.38-137.27l-66.71 66.71c1.85 0 3.69.05 5.52.12l61.17-61.17c-.02-1.96-.01-3.85.02-5.66zm.92-10.81l-77.89 77.89c2-.17 4-.28 6-.33l71.16-71.16a47.27 47.27 0 0 1 .73-6.39z" fill="#a7bfff"/>
                            <path id="screen-ref2" d="M246.77 339.19c120.22 40.62 22.92-90.62 91.07-94.68 26.14-1.56 92.63 4.71 74.2-54-12.73-40.55 14-72.83 21.54-70.8l-119.42-32z" fill="#a7bfff"/>
                            <path id="screen-ref1" d="M441.22 568.83l26.17-98.57c-20.25-14.43-78.85-32.45-85.72 18.56-4.84 35.89-58.21 41.79-90.59 40z" fill="url(#linear-gradient-12)"/>
                            <circle id="phone-button" cx="314.54" cy="563.95" r="17.51" transform="rotate(-75 314.536 563.954)" fill="#fff" stroke-width="3" stroke="url(#New_Gradient_Swatch_copy_2-2)"/>
                            <line id="phone-speaker" x1="412.59" y1="84.85" x2="469.17" y2="100.02" fill="none" stroke="#a7bfff" stroke-linecap="round" stroke-width="4"/>
                            </g>
                            <g id="phone-text" style="mix-blend-mode:overlay">
                            <path d="M297.2 293.61l5.16-19.26-10.4-28 12.37 3.31 5.34 18.08 13.86-12.94 12.3 3.3-23.08 19.26-5.11 19.08z" fill="#fff"/>
                            <path d="M350.8 295.39l-20.8-5.56c-.36 2.83 2.3 5.34 5.47 6.19a7.28 7.28 0 0 0 6.18-.94c.93 1.25 4.22 5.13 5.52 6.74-4.13 3.22-10 3.13-14.56 1.89-8.33-2.23-13.78-10.22-11.33-19.35s11.11-13.14 19.44-10.91 13.52 9.68 11.07 18.82c-.15.73-.71 2.33-.99 3.12zm-7.72-8a5.87 5.87 0 0 0-4.63-5.83c-1.49-.4-5.18-.79-6.93 2.74z" fill="#fff"/>
                            <path d="M380.78 285l9.88 2.65-7.76 29-9.9-2.72.88-3.29a10 10 0 0 1-9 1.71c-7.15-1.92-12.57-9.5-10.06-18.88s11-13.3 18.17-11.38a10.35 10.35 0 0 1 7 6zm-11.52 18.89a6.24 6.24 0 1 0-4.41-7.64 6.29 6.29 0 0 0 4.41 7.61z" fill="#fff"/>
                            <path d="M399.32 321l-9.88-2.65 7.76-29 9.38 2.51-1.91 7.14c3-5.13 7.52-6.44 11.25-5.44a10 10 0 0 1 4.07 2l-4.92 8.67a12.63 12.63 0 0 0-4.27-1.94c-3.73-1-6.59.5-8.92 9.2z" fill="#fff"/>
                            <path d="M438.65 300.48l9.88 2.65-7.76 29-9.88-2.65zm1.52-9.91a6.08 6.08 0 0 0 4.45 7.25 6 6 0 0 0 7.42-4.07 5.88 5.88 0 0 0-4.4-7.17 6 6 0 0 0-7.47 3.98z" fill="#fff"/>
                            <path d="M457.14 336.47l-9.88-2.65 7.76-29 9.88 2.65-1.21 4.53c2-3.4 7-3.78 9.55-3.1 7.77 2.08 10.14 8.38 7.73 17.39l-4.13 15.41-9.84-2.6 4-15.1c1-3.85-1.32-5.75-3.37-6.3-2.24-.6-5.41-.18-6.41 3.54z" fill="#fff"/>
                            <path d="M270.19 352.14l11.47-42.81 17.71 4.75c10.07 2.7 12.75 11.08 10.83 18.22-1.63 6.09-6.51 11.11-13.93 11l6.48 17.59-12.05-3.23-5.37-16.76-.93-.25-3.83 14.29zm19.42-31l-2.81 10.5 6.83 1.83c3.42.92 5.39-1.49 6.07-4s.16-5.55-3.26-6.47z" fill="#fff"/>
                            <path d="M339 358l-20.75-5.56c-.36 2.83 2.3 5.35 5.47 6.19a7.28 7.28 0 0 0 6.18-.94c.93 1.25 4.22 5.13 5.52 6.74-4.13 3.22-10 3.13-14.56 1.89-8.33-2.23-13.78-10.22-11.33-19.35s11.11-13.14 19.44-10.91 13.52 9.68 11.08 18.82c-.18.75-.74 2.33-1.05 3.12zm-7.71-8a5.87 5.87 0 0 0-4.63-5.84c-1.49-.4-5.18-.79-6.93 2.74z" fill="#fff"/>
                            <path d="M348.28 373.07l-4.55-32.25 10.63 2.85 1.55 18.06 10.25-14.9 10.69 2.86-20.12 25.64z" fill="#fff"/>
                            <path d="M379.85 350.49l9.88 2.65-7.76 29-9.88-2.65zm1.53-9.91a6.07 6.07 0 0 0 4.45 7.25 6 6 0 0 0 7.42-4.07 5.88 5.88 0 0 0-4.4-7.17 6 6 0 0 0-7.47 3.99z" fill="#fff"/>
                            <path d="M420.11 379.73l-20.75-5.56c-.36 2.83 2.3 5.35 5.47 6.19a7.28 7.28 0 0 0 6.18-.94c.93 1.25 4.22 5.13 5.52 6.74-4.13 3.22-10 3.13-14.56 1.89-8.33-2.23-13.78-10.22-11.33-19.35s11.11-13.14 19.44-10.91 13.52 9.68 11.08 18.82c-.21.74-.77 2.33-1.05 3.12zm-7.71-8a5.87 5.87 0 0 0-4.63-5.84c-1.49-.4-5.18-.79-6.93 2.74z" fill="#fff"/>
                            <path d="M471.7 375.1L454 401.4l-8.39-2.25-.2-18.64-9.24 16.1-8.39-2.25-2.5-31.7 10.56 2.83.07 17.14 8.69-14.79 7.77 2.08.13 17.15 8.63-14.8z" fill="#fff"/>
                            </g>
                        </g>
                        <g id="orbit">
                            <g id="orbit-back">
                                <circle id="moon-b-back" cx="588.49" cy="300.67" r="6" fill="#a7bfff"/>
                                <g id="earth-b">
                                    <circle id="_Ellipse_5" data-name="&lt;Ellipse&gt;" cx="566.15" cy="279" r="18" fill="#e3edfe"/>
                                    <path d="M584.15 279q0-.89-.09-1.77t-.25-1.72a17.85 17.85 0 0 0-2.14-5.59q-.39-.67-.83-1.29a18.08 18.08 0 0 0-2.65-3c-.37-.33-.75-.64-1.14-.94A17.93 17.93 0 0 0 572 262a17.91 17.91 0 0 0-4.85-.94h-.95a18 18 0 0 0-3.47.35 17.84 17.84 0 0 0-1.91.49l-.24.07-.79.28-.45.18-.68.29c-.35.16-.69.33-1 .51l-.42.24-.75.46-.36.23c-.36.24-.71.49-1 .76a18 18 0 0 0 7.65 31.8c.55.11 1.11.19 1.68.25.58.06 1.17.09 1.76.09a18 18 0 0 0 17.94-17.56v-.26-.18zm-18.74 14.56a14.58 14.58 0 0 1-1.11-29 4.75 4.75 0 0 0 .2.64l-3.91 3.91c1.38 0 2.83-.14 4.24 0l1.59-1.59a12.77 12.77 0 0 0 4 1.64l-6.27 6.27c-.89 1.36-1.52 2.8-1.14 4.2.09.32.18.62.29.9l10.44-10.44a2.19 2.19 0 0 1-.24 2.39c-1.07 1.55-3.91 2.71-2.86 5.09a5.37 5.37 0 0 0 .45.81l-5.22 5.22c1.06.54 2.08.71 2.59 1.66l5-5c.26.12.52.23.78.33 1.42.53 2.29.91 2.59 1.94l-11 11zm7.37-1.57a14.51 14.51 0 0 1-2 .83l6-6c-.5 1.93-1.78 3.5-4 5.18z" fill="#a7bfff"/>
                                </g>
                                <circle id="moon-b-front" cx="588.49" cy="300.67" r="6" fill="#a7bfff"/>
                            </g>
                            <g id="sun">
                                <circle id="_Ellipse_4" data-name="&lt;Ellipse&gt;" cx="618.16" cy="160.55" r="85" fill="#e3edfe"/>
                                <path d="M610.92 128.89l-14.8 14.81a17 17 0 0 1-.33-3.91l9.41-9.41a59.12 59.12 0 0 1 5.72-1.49zm7-1.4l-20.23 20.23a12.07 12.07 0 0 0 1.92 2.33l23.93-23.93a53.8 53.8 0 0 1-5.54 1.37zm-3.82 67.37l8.21-8.21c-3.4 2.09-6.42 4.67-8.16 8.21zm73.21 15q-1 1.44-2.11 2.83a85.45 85.45 0 0 1-17.75 17l-.21.15q-1.36 1-2.76 1.88l-.2.13q-1.43.93-2.9 1.8l-.11.07q-1.53.9-3.1 1.75a83.26 83.26 0 0 1-24 8.51 85.05 85.05 0 0 1-11.26 1.38l-2.1.09H618.15c-1.71 0-3.41-.07-5.1-.17q-2-.12-3.92-.32c-1.67-.18-3.32-.41-5-.68q-1.8-.3-3.57-.67-4-.84-7.84-2c-1.8-.56-3.59-1.17-5.34-1.85a85 85 0 0 1-21.8-146q1.25-1 2.54-1.92A84.89 84.89 0 0 1 583.43 83q1.71-.76 3.45-1.45h.06a84.34 84.34 0 0 1 13.95-4.15l1.33-.26a85 85 0 0 1 9.55-1.26l1.75-.11c1.53-.08 3.07-.14 4.63-.14s3 0 4.46.12a84.77 84.77 0 0 1 18.66 3.09q3.78 1.07 7.41 2.47 2 .78 4 1.65 1.46.65 2.89 1.35 1.88.92 3.71 1.94c.91.5 1.81 1 2.69 1.55a85.31 85.31 0 0 1 14.45 11 85.49 85.49 0 0 1 6.85 7.27q1.29 1.54 2.51 3.14c1.43 1.88 2.79 3.81 4.07 5.81.34.54.67 1.09 1 1.63q2.19 3.6 4 7.43.92 1.92 1.74 3.9c.42 1 .81 2 1.19 3q.77 2.08 1.44 4.2 1.2 3.85 2 7.84c.25 1.18.47 2.37.67 3.57.27 1.64.51 3.29.68 5 .14 1.3.24 2.61.32 3.92.1 1.69.17 3.39.17 5.1v2.67s-.05 1.39-.09 2.08a84.48 84.48 0 0 1-11.62 38.38l-.09.16q-.86 1.46-1.79 2.88l-.14.21q-.92 1.41-1.89 2.78zM670 174.33a15.19 15.19 0 0 0 1.78-7.42l-20.38 20.35a73.26 73.26 0 0 0 11.06-5.41zm-49.9 59.78L645.19 209c-1.1-.81-2.21-1.59-3.26-2.38l-18 18a9.59 9.59 0 0 0-.09-4.15l15.81-15.81a10.54 10.54 0 0 1-2.4-3.24l-15 15c-.47-.9-1-1.79-1.56-2.68l15.89-15.89c.32-3.1 3.25-5.29 7.29-7.29l27.48-27.48c-.11-.56-.23-1.13-.39-1.73a13.52 13.52 0 0 0-1-2.56l-51.57 51.57c-.58-.85-1.15-1.7-1.7-2.54l51.58-51.58a12.72 12.72 0 0 0-3.09-2.56l-50.58 50.58a16 16 0 0 1-1.18-3.06l20-20c5.53-2.58 9.94-5.2 9.82-9.82l19.08-19.08a28.18 28.18 0 0 0-4.42-1.22l-15.77 15.77a10.66 10.66 0 0 0-1.7-2.55l13.79-13.79c-1.71-.21-3.44-.36-5.14-.5l-11.78 11.78a20.76 20.76 0 0 0-2.84-1.4l10.71-10.71c-1.76-.17-3.43-.37-5-.67l-10 10c-1.11-.29-2.27-.56-3.45-.8l10.11-10.11a8.62 8.62 0 0 1-3.42-2.22L622 157.32l-3.64-.6L632.07 143a7.81 7.81 0 0 1-.18-1 11.49 11.49 0 0 1 .57-5l-18.84 18.84c-1.18-.24-2.34-.49-3.46-.78l33.33-33.33a10.73 10.73 0 0 0 0-5.64l-37.63 37.63a23.86 23.86 0 0 1-2.91-1.33L642.38 113c-.15-.33-.29-.65-.46-1a25.13 25.13 0 0 0-1.54-2.65L628.66 121a7.42 7.42 0 0 0-1.35-2.9l11.25-11.25a29.26 29.26 0 0 0-2.79-2.86l-11.34 11.34a15.08 15.08 0 0 0-2.79-1.45l11.8-11.8c-1.08-.82-2.19-1.59-3.32-2.32l-12.87 12.87c-1.17-.24-2.39-.42-3.67-.57l13.94-13.94L624 96l-15.63 15.63c-1.33-.07-2.68-.13-4.06-.18L621.4 94.4c-1.14-.74-2.25-1.51-3.32-2.32l-19.22 19.22c-1.35-.05-2.71-.11-4.06-.18l21-21a26.87 26.87 0 0 1-2.3-2.36c-.16-.18-.3-.37-.44-.55l-23.45 23.45q-1.9-.2-3.73-.51l22.56-22.56c-2.33.31-4.62.71-6.88 1.23l-20.31 20.31a31 31 0 0 1-3.17-1.08l17.63-17.63a73 73 0 0 0-9.4 3.76l-12 12a18.89 18.89 0 0 1-2.42-1.82l4.2-4.2q-2.48 1.73-4.82 3.66A73.59 73.59 0 0 0 614.4 234l.19-.09-.09.09q1.82.09 3.65.09zm11-1.11l19.2-19.2a17.61 17.61 0 0 0-2.72-2.92l-23 23q3.29-.31 6.49-.88zm5.42-1.17a73 73 0 0 0 8.32-2.67l7.78-7.78a12.59 12.59 0 0 0-.81-4.83z" fill="#a7bfff"/>
                            </g>
                            <g id="orbit-front">
                                <circle id="moon-f-back" cx="588.49" cy="300.67" r="6" fill="#a7bfff"/>
                                <g id="earth-f">
                                    <circle id="_Ellipse_5" data-name="&lt;Ellipse&gt;" cx="566.15" cy="279" r="18" fill="#e3edfe"/>
                                    <path d="M584.15 279q0-.89-.09-1.77t-.25-1.72a17.85 17.85 0 0 0-2.14-5.59q-.39-.67-.83-1.29a18.08 18.08 0 0 0-2.65-3c-.37-.33-.75-.64-1.14-.94A17.93 17.93 0 0 0 572 262a17.91 17.91 0 0 0-4.85-.94h-.95a18 18 0 0 0-3.47.35 17.84 17.84 0 0 0-1.91.49l-.24.07-.79.28-.45.18-.68.29c-.35.16-.69.33-1 .51l-.42.24-.75.46-.36.23c-.36.24-.71.49-1 .76a18 18 0 0 0 7.65 31.8c.55.11 1.11.19 1.68.25.58.06 1.17.09 1.76.09a18 18 0 0 0 17.94-17.56v-.26-.18zm-18.74 14.56a14.58 14.58 0 0 1-1.11-29 4.75 4.75 0 0 0 .2.64l-3.91 3.91c1.38 0 2.83-.14 4.24 0l1.59-1.59a12.77 12.77 0 0 0 4 1.64l-6.27 6.27c-.89 1.36-1.52 2.8-1.14 4.2.09.32.18.62.29.9l10.44-10.44a2.19 2.19 0 0 1-.24 2.39c-1.07 1.55-3.91 2.71-2.86 5.09a5.37 5.37 0 0 0 .45.81l-5.22 5.22c1.06.54 2.08.71 2.59 1.66l5-5c.26.12.52.23.78.33 1.42.53 2.29.91 2.59 1.94l-11 11zm7.37-1.57a14.51 14.51 0 0 1-2 .83l6-6c-.5 1.93-1.78 3.5-4 5.18z" fill="#a7bfff"/>
                                </g>
                                <circle id="moon-f-front" cx="588.49" cy="300.67" r="6" fill="#a7bfff"/>
                            </g>
                        </g>
                    </g>

                </svg>
            </div>
           
		</div>
		
	</article>

</main>
<?php include('../footer-menu.php'); ?>
<?php include('../footer.php'); ?>