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
    </div> <!--  end of [CONTAINER] -->

    <div class="col-md-4">
        <?php
            $mylist = simplexml_load_file('data.xml');
            echo "<ul id="songlist">n";
            foreach ($mylist as $info):
                $img=$info->name;
                echo "<li>",$img,"</li>";
            endforeach;
            echo "</ul>";
        ?>
    </div>

</div> <!-- end of [FULL CONTAINER] -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- Import Bootstrap JavaScript -->
  <script src="includes/js/bootstrap.min.js"></script>
</body>
</html>