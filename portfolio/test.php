<!DOCTYPE html>
<html lang="en">

<!--

      Your Personal Gardener, LLC
      Mukwonago, Wisconsin

      Developer: Tom Egan (tom-egan.com)
      Created: May 2014
      Last Modified: 24 April 2016

      Dependencies:
      - - includes/header_navbar.php
      - - includes/footer_links.php
      - - includes/footer_awards.php

-->

<head>
    <title>Tree Service Portfolio | Your Personal Gardener</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.65, maximum-scale=0.65">
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Based out of Mukwonago, Wisconsin, YPG proudly serves the commercial and residential communities of Southeastern Wisconsin with year-round outdoor services.">
    <meta name="keywords" content="landscape, landscaping, garden, hardscape, concrete, lawn, turf, mowing, tree removal, firewood, snow removal, tree cutting, mukwonago, wisconsin">

    <!-- Facebook -->
    <meta property="og:title" content="Your Personal Gardener | Southeast Wisconsin's Premier Design, Build, & Maintain Firm"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://yourpersonalgardenerllc.com/facebook-thumb.png"/>
    <meta property="og:url" content="http://yourpersonalgardenerllc.com"/>
    <meta property="og:description" content="Based out of Mukwonago, Wisconsin, YPG proudly serves the commercial and residential communities of Southeastern Wisconsin with year-round outdoor services."/>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Norican" />
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/ypg-styles.css">

    <link rel="stylesheet" href="../css/lightbox.css" />

    <!-- favicons and touch icons-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
       <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-32-precomposed.png">
                                    <link rel="shortcut icon" href="../assets/ico/apple-touch-icon-32-precomposed.png">
                                                            <link rel="shortcut icon" href="../assets/ico/favicon.png"> 



</head>

<body>
<?php include '../includes/header_navbar_portfolio.php'; ?>
<!-- [FULL CONTAINER] -->
<div class="container-fluid subpage-wrap">
    <!-- [CONTAINER] -->
    <div class="container subpage-body">
        <!-- [TITLE] -->
        <div class="row">
            <div class="col-md-6">
                <h1 class="page-title portfolio-title-fix "><span class="accent"> Tree Service</span></h1>
                <!-- page title underline -->
                <div class="subpage-underline"></div>
                <br><br>
            </div>
            <div class="col-md-6 return-port">
                <a href="../portfolio.php">Return to Portfolio</a>
            </div>
        </div> <!--/end row 1 -->

        <!-- [GRID] -->
        <div class="col-row">
        <!-- 

            [1] Start XML-PHP Parser to dynamically generate grid 
            [2] Image file names stored in XML file 
            [3] Runs a for loop and generates a new 'col-md-3' (container div) each pass
            [4] Data pulled from XML, placed into link paths and css class names of nested div struct
        
        -->

            <?php
                // load XML file containing image filenames
                $xml=simplexml_load_file("data.xml") or die("XML Error: Cannot create object");

                // for loop to parse through XML data and pull image paths
                foreach ($xml as $imgPath):
                    // Assign variable $image_name to XML <img> attribute
                    $image_name=$imgPath->img;
                    // [+1 div] Create container div for nested structure
                    echo "<div class='col-md-3 servicebox'>";
                    // [+2] anchor link to lightbox image
                    echo "<a href='images/tree_service/",$image_name,".jpg' data-lightbox='delivery-main' title=''>";
                    // [+3] XML data turned into CSS class name, uses image name as bg image
                    echo "<div class='portfolio-zoom ",$image_name,"'>";
                    // [+4] div for hover effect + icon
                    echo "<div class='servicebox-hover'>";
                    // hover effect => magnifying glass icon
                    echo "<span class='glyphicon glyphicon-search'></span>";
                    // [-4] end of hover effect div
                    echo "</div>";
                    // [-3] end of inner div
                    echo "</div>";
                    // [-2] end of link
                     echo "</a>";
                    // [-1] end of col-md-3
                    echo "</div>";
                // end of for loop
                endforeach;
            ?>
        </div> <!-- end of [GRID] -->
    </div> <!--  end of [CONTAINER] -->
</div> <!-- end of [FULL CONTAINER] -->

<?php include '../includes/footer_links_portfolio.php'; ?>
<?php include '../includes/footer_lightbox.php'; ?>