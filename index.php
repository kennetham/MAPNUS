<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <!--  Mobile Viewport Fix -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- Site Properities -->
  <title id="hopscotch-title">MAPNUS | Your One Stop Guide!</title>

  <!-- Google WebFonts -->
  <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Dancing+Script:700'>

  <!-- Font Awesome Styles -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

  <!-- Hopscotch Style -->
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/hopscotch.css">
  <link rel="stylesheet" type="text/css" href="css/hopscotch-demo.css">

  <!-- Semantic Styles -->
  <link rel="stylesheet" type="text/css" href="css/semantic.css">
  <link rel="stylesheet" type="text/css" href="css/mapnus-homepage.css">

  <!-- Leaflet styles -->
  <link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />

  <!-- Leaflet Usermarker styles -->
  <link rel="stylesheet" href="css/leaflet.usermarker.css" />

  <!-- Custom Dropdown Style -->
  <link rel="stylesheet" type="text/css" href="css/customdd-style.css" />
  <noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript>

  <!-- Bootstrap Tour styles -->
  <!-- <link rel="stylesheet" href="css/bootstrap-tour.css" /> -->
  <!-- <link rel="stylesheet" href="css/demo.css" /> -->

  <!-- Add IntroJs styles -->
  <!-- <link rel="stylesheet" href="css/introjs.css" /> -->
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />

  <!-- Add Leaflet Animated Marker styles -->
  <!-- <link rel="stylesheet" href="css/leaflet-animatedmarkerstyle.css" /> -->

  <style>
  #map { width: 650px; height: 450px; }
  body { font: 16px/1.4 "Helvetica Neue", Arial, sans-serif; }
  .ghbtns { position: relative; top: 4px; margin-left: 5px; }
  a { color: #0077ff; }

  .mapContainer {
    border-radius: 8px;
    z-index: 5000;
  }
  .navbar .popover {
      width: 400px;
      -webkit-border-top-left-radius: 0px;
      -webkit-border-bottom-left-radius: 0px;
      border-top-left-radius: 0px;
      border-bottom-left-radius: 0px;
      overflow: hidden;
  }

  .navbar .popover-content {
      text-align: center;
  }

  .navbar .popover-content img {
      height: 212px;
      max-width: 250px;
  }

  .navbar .dropdown-menu {
      -webkit-border-top-right-radius: 0px;
      -webkit-border-bottom-right-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-right-radius: 0px;

      -webkit-box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
      -moz-box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
  }

  .navbar .dropdown-menu > li > a:hover {
      background-image: none;
      color: white;
      background-color: rgb(0, 129, 194);
      background-color: rgba(0, 129, 194, 0.5);
  }

  .navbar .dropdown-menu > li > a.maintainHover {
      color: white;
      background-color: #0081C2;
  }
  </style>
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>

<body id="home" style="padding-top:0">
  <div class="ui inverted page orange grid masthead segment">
    <div class="column">
      <div class="inverted secondary pointing ui menu">
        <a class="header item" href="index.php">MAPNUS | Your One Stop Guide!</a>
        <div class="right menu">
          <div class="ui top right pointing mobile dropdown link item">
            Menu
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item">About Us</a>
            </div>
          </div>
          <a class="item">About Us</a>
        </div>
      </div>

      <div>
        <!-- JQuery -->
        <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery/2.1.1/jquery.min.js"></script>

        <!-- Leaflet JS -->
        <script type='text/javascript' src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
        <script type='text/javascript' src="js/leaflet.location-share.js"></script>
        <!-- <script type='text/javascript' src="js/leaflet-image.js"></script> -->
        <script type='text/javascript' src="js/leaflet-heat.js"></script>
        <script type='text/javascript' src="js/leaflet-hash.js"></script>
        <script type='text/javascript' src="js/leaflet-providers.js"></script>
        <script type='text/javascript' src="js/AnimatedMarker.js"></script>

        <!-- Semantic JS -->
        <script type='text/javascript' src="js/semantic.js"></script>
        <!-- <script type='text/javascript' src="js/bootstrap-tour.js"></script>
        <script type='text/javascript' src="js/intro.js"></script> -->

        <!-- GeoLocation JS -->
        <script type='text/javascript' src="js/geoPosition.js"></script>

        <!-- Modernizr JS -->
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js'></script>

        <!-- Knockout JS -->
        <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js"></script>

        <!-- JQuery Menu Aim JS -->
        <script type='text/javascript' src="js/jquery.menu-aim.js"></script>

        <!-- Custom Dropdown JS -->
        <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

        <!-- Map Location Init JS -->
        <script type="text/javascript" src="js/map.location.js"></script>

        <!-- Leaflet Usermarker JS -->
        <script type="text/javascript" src="js/leaflet.usermarker.js"></script>

        <div class="ui message">
          <i class="close icon"></i>
          <div class="header">
            Welcome back!
          </div>
          <p>This is your one stop navigation around NUS. Close to dismiss this message.</p>
        </div>
        <script type='text/javascript'>
        $('.message .close').on('click', function() {
          $(this).closest('.message').fadeOut();
        });
        </script>
      </div>
      <div class="ui page grid overview ">
        <div class="ui four wide column"></div>
        <div class="ui eight wide column">
          <div class="ui huge buttons">
            <div class="ui teal button" id="startTourBtn">Show me how</div> <!-- href="javascript:void(0);" onclick="javascript:introJs().setOption('showBullets', false).start();">Show me how</div> -->
            <div class="or" id="or"></div>
            <div class="ui red button" id="start" href="javascript:void(0);">Start</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ui page grid overview segment">
    <div class="row">
      <div class="ui two wide column"></div>
      <div class="twelve wide column">
        <div class="ui icon input">
          <input type="text" placeholder="Search..." style="
          height: 41.5px;
          width: 812px;
          ">
          <i class="search icon"></i>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="ui three wide column">
        <div id="dd" class="wrapper-dropdown-3">
          <span>NUS Around!</span>
          <ul class="scrolling dropdown">
            <li id="#lt1" data-submenu-id="submenu-lt1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 1');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 1</a>
            </li>
            <li id="#lt2" data-submenu-id="submenu-lt2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 2');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 2</a>
            </li>
            <li id="#lt3" data-submenu-id="submenu-lt3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 3');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 3</a>
            </li>
            <li id="#lt4" data-submenu-id="submenu-lt4">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT4/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt4" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 4');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 4</a>
            </li>
            <li id="#lt5" data-submenu-id="submenu-lt5">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT5/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt5" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 5');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 5</a>
            </li>
            <li id="#lt6" data-submenu-id="submenu-lt6">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT6/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt6" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 6');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 6</a>
            </li>
            <li id="#lt7" data-submenu-id="submenu-lt7">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT7/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt7" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 7');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 7</a>
            </li>
            <li id="#lt7a" data-submenu-id="submenu-lt7a">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT7A/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt7a" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 7A');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 7A</a>
            </li>
            <li id="#lt8" data-submenu-id="submenu-lt8">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT8/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt8" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 8');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 8</a>
            </li>
            <li id="#lt9" data-submenu-id="submenu-lt9">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT9/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt9" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 9');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 9</a>
            </li>
            <li id="#lt10" data-submenu-id="submenu-lt10">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT10/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt10" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 10');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 10</a>
            </li>
            <li id="#lt11" data-submenu-id="submenu-lt11">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT11/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt11" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 11');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 11</a>
            </li>
            <li id="#lt12" data-submenu-id="submenu-lt12">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT12/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt12" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 12');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 12</a>
            </li>
            <li id="#lt13" data-submenu-id="submenu-lt13">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT13/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt13" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 13');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 13</a>
            </li>
            <li id="#lt14" data-submenu-id="submenu-lt14">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT14/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt14" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 14');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 14</a>
            </li>
            <li id="#lt15" data-submenu-id="submenu-lt15">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT15/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt15" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 15');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 15</a>
            </li>
            <li id="#lt16" data-submenu-id="submenu-lt16">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT16/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt16" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 16');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 16</a>
            </li>
            <li id="#lt17" data-submenu-id="submenu-lt17">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT17/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt17" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 17');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 17</a>
            </li>
            <li id="#lt18" data-submenu-id="submenu-lt18">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT18/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt18" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 18');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 18</a>
            </li>
            <li id="#lt19" data-submenu-id="submenu-lt19">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT19/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt19" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 19');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 19</a>
            </li>
            <li id="#lt20" data-submenu-id="submenu-lt20">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT20/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt20" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 20');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 20</a>
            </li>
            <li id="#lt21" data-submenu-id="submenu-lt21">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT21/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt21" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 21');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 21</a>
            </li>
            <li id="#lt22" data-submenu-id="submenu-lt22">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT22/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt22" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 22');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 22</a>
            </li>
            <li id="#lt23" data-submenu-id="submenu-lt23">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT23/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt23" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 23');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 23</a>
            </li>
            <li id="#lt24" data-submenu-id="submenu-lt24">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT24/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt24" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 24');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 24</a>
            </li>
            <li id="#lt25" data-submenu-id="submenu-lt25">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT25/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt25" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 25');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 25</a>
            </li>
            <li id="#lt26" data-submenu-id="submenu-lt26">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT26/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt26" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 26');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 26</a>
            </li>
            <li id="#lt27" data-submenu-id="submenu-lt27">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT27/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt27" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 27');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 27</a>
            </li>
            <li id="#lt28" data-submenu-id="submenu-lt28">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT28/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt28" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 28');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 28</a>
            </li>
            <li id="#lt29" data-submenu-id="submenu-lt29">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT29/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt29" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 29');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 29</a>
            </li>
            <li id="#lt31" data-submenu-id="submenu-lt31">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT31/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt31" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 31');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 31</a>
            </li>
            <li id="#lt32" data-submenu-id="submenu-lt32">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT32/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt32" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 32');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 32</a>
            </li>
            <li id="#lt33" data-submenu-id="submenu-lt33">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT33/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt33" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 33');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 33</a>
            </li>
            <li id="#lt34" data-submenu-id="submenu-lt34">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT34/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt34" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 34');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 34</a>
            </li>
            <li id="#lt35" data-submenu-id="submenu-lt35">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT35/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt35" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 35');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 35</a>
            </li>
            <li id="#lt36" data-submenu-id="submenu-lt36">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT36/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt36" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 36');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 36</a>
            </li>
            <li id="#lt50" data-submenu-id="submenu-lt50">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT50/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt50" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 50');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 50</a>
            </li>
            <li id="#lt51" data-submenu-id="submenu-lt51">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT51/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt51" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 51');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 51</a>
            </li>
            <li id="#lt52" data-submenu-id="submenu-lt52">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT52/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt52" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 52');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 52</a>
            </li>
            <li id="#lt53" data-submenu-id="submenu-lt53">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/LT53/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#lt53" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Lecture Theatre 53');">
              <i class="icon-map-marker icon-large"></i>Lecture Theatre 53</a>
            </li>
            <li id="#eaudi" data-submenu-id="submenu-eaudi">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/EAUDI/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#eaudi" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Engineering Auditorium');">
              <i class="icon-map-marker icon-large"></i>Engineering Auditorium</a>
            </li>
            <li id="#hssaudi" data-submenu-id="submenu-hssaudi">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/HSSAUDI/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#hssaudi" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Hon Sui Sen Auditorium');">
              <i class="icon-map-marker icon-large"></i>Hon Sui Sen Auditorium</a>
            </li>
            <li id="#naksaudi" data-submenu-id="submenu-naksaudi">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/NAKSAUDI/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#naksaudi" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Ngee Ann Kongsi Auditorium');">
              <i class="icon-map-marker icon-large"></i>Ngee Ann Kongsi Auditorium</a>
            </li>
            <li id="#utaudi1" data-submenu-id="submenu-utaudi1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTAUDI1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utaudi1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'UTown Auditorium 1');">
              <i class="icon-map-marker icon-large"></i>UTown Auditorium 1</a>
            </li>
            <li id="#utaudi2" data-submenu-id="submenu-utaudi2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTAUDI2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utaudi2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'UTown Auditorium 2');">
              <i class="icon-map-marker icon-large"></i>UTown Auditorium 2</a>
            </li>
            <li id="#utaudi3" data-submenu-id="submenu-utaudi3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTAUDI3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utaudi3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'UTown Auditorium 3');">
              <i class="icon-map-marker icon-large"></i>UTown Auditorium 3</a>
            </li>
            <li id="#md1" data-submenu-id="submenu-md1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD1');">
              <i class="icon-map-marker icon-large"></i>MD1</a>
            </li>
            <li id="#md2" data-submenu-id="submenu-md2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD2');">
              <i class="icon-map-marker icon-large"></i>MD2</a>
            </li>
            <li id="#md3" data-submenu-id="submenu-md3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD3');">
              <i class="icon-map-marker icon-large"></i>MD3</a>
            </li>
            <li id="#md4" data-submenu-id="submenu-md4">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD4/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md4" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD4');">
              <i class="icon-map-marker icon-large"></i>MD4</a>
            </li>
            <li id="#md4a" data-submenu-id="submenu-md4a">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD4A/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md4a" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD4A');">
              <i class="icon-map-marker icon-large"></i>MD4A</a>
            </li>
            <li id="#md5" data-submenu-id="submenu-md5">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD5/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md5" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD5');">
              <i class="icon-map-marker icon-large"></i>MD5</a>
            </li>
            <li id="#md7" data-submenu-id="submenu-md7">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD7/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md7" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD7');">
              <i class="icon-map-marker icon-large"></i>MD7</a>
            </li>
            <li id="#md8" data-submenu-id="submenu-md8">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD8/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md8" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD8');">
              <i class="icon-map-marker icon-large"></i>MD8</a>
            </li>
            <li id="#md10" data-submenu-id="submenu-md10">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD10/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md10" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD10');">
              <i class="icon-map-marker icon-large"></i>MD10</a>
            </li>
            <li id="#md11" data-submenu-id="submenu-md11">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MD11/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#md11" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MD11');">
              <i class="icon-map-marker icon-large"></i>MD11</a>
            </li>
            <li id="#s1" data-submenu-id="submenu-s1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S1');">
              <i class="icon-map-marker icon-large"></i>S1</a>
            </li>
            <li id="#s2" data-submenu-id="submenu-s2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S2');">
              <i class="icon-map-marker icon-large"></i>S2</a>
            </li>
            <li id="#s3" data-submenu-id="submenu-s3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S3');">
              <i class="icon-map-marker icon-large"></i>S3</a>
            </li>
            <li id="#s4" data-submenu-id="submenu-s4">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S4/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s4" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S4');">
              <i class="icon-map-marker icon-large"></i>S4</a>
            </li>
            <li id="#s4a" data-submenu-id="submenu-s4a">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S4A/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s4a" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S4A');">
              <i class="icon-map-marker icon-large"></i>S4A</a>
            </li>
            <li id="#s5" data-submenu-id="submenu-s5">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S5/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s5" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S5');">
              <i class="icon-map-marker icon-large"></i>S5</a>
            </li>
            <li id="#s7" data-submenu-id="submenu-s7">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S7/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s7" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S7');">
              <i class="icon-map-marker icon-large"></i>S7</a>
            </li>
            <li id="#s8" data-submenu-id="submenu-s8">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S8/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s8" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S8');">
              <i class="icon-map-marker icon-large"></i>S8</a>
            </li>
            <li id="#s9" data-submenu-id="submenu-s9">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S9/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s9" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S9');">
              <i class="icon-map-marker icon-large"></i>S9</a>
            </li>
            <li id="#s9a" data-submenu-id="submenu-s9a">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S9A/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s9a" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S9A');">
              <i class="icon-map-marker icon-large"></i>S9A</a>
            </li>
            <li id="#s10" data-submenu-id="submenu-s10">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S10/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s10" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S10');">
              <i class="icon-map-marker icon-large"></i>S10</a>
            </li>
            <li id="#s11" data-submenu-id="submenu-s11">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S11/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s11" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S11');">
              <i class="icon-map-marker icon-large"></i>S11</a>
            </li>
            <li id="#s12" data-submenu-id="submenu-s12">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S12/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s12" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S12');">
              <i class="icon-map-marker icon-large"></i>S12</a>
            </li>
            <li id="#s13" data-submenu-id="submenu-s13">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S13/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s13" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S13');">
              <i class="icon-map-marker icon-large"></i>S13</a>
            </li>
            <li id="#s14" data-submenu-id="submenu-s14">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S14/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s14" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S14');">
              <i class="icon-map-marker icon-large"></i>S14</a>
            </li>
            <li id="#s15" data-submenu-id="submenu-s15">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S15/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s15" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S15');">
              <i class="icon-map-marker icon-large"></i>S15</a>
            </li>
            <li id="#s16" data-submenu-id="submenu-s16">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S16/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s16" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S16');">
              <i class="icon-map-marker icon-large"></i>S16</a>
            </li>
            <li id="#s17" data-submenu-id="submenu-s17">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/S17/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#s17" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'S17');">
              <i class="icon-map-marker icon-large"></i>S17</a>
            </li>
            <li id="#ew1" data-submenu-id="submenu-ew1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/EW1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#ew1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'EW1');">
              <i class="icon-map-marker icon-large"></i>EW1</a>
            </li>
            <li id="#ew2" data-submenu-id="submenu-ew2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/EW2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#ew2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'EW2');">
              <i class="icon-map-marker icon-large"></i>EW2</a>
            </li>
            <li id="#e1" data-submenu-id="submenu-e1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/E1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#e1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'E1');">
              <i class="icon-map-marker icon-large"></i>E1</a>
            </li>
            <li id="#e1a" data-submenu-id="submenu-e1a">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/E1A/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#e1a" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'E1A');">
              <i class="icon-map-marker icon-large"></i>E1A</a>
            </li>
            <li id="#e2" data-submenu-id="submenu-e2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/E2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#e2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'E2');">
              <i class="icon-map-marker icon-large"></i>E2</a>
            </li>
            <li id="#e3" data-submenu-id="submenu-e3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/E3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#e3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'E3');">
              <i class="icon-map-marker icon-large"></i>E3</a>
            </li>
            <li id="#e3a" data-submenu-id="submenu-e3a">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/E3A/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#e3a" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'E3A');">
              <i class="icon-map-marker icon-large"></i>E3A</a>
            </li>
            <li id="#e4" data-submenu-id="submenu-e4">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/E4/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#e4" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'E4');">
              <i class="icon-map-marker icon-large"></i>E4</a>
            </li>
            <li id="#e4a" data-submenu-id="submenu-e4a">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/E4A/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#e4a" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'E4A');">
              <i class="icon-map-marker icon-large"></i>E4A</a>
            </li>
            <li id="#e5" data-submenu-id="submenu-e5">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/E5/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#e5" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'E5');">
              <i class="icon-map-marker icon-large"></i>E5</a>
            </li>
            <li id="#e5a" data-submenu-id="submenu-e5a">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/E5A/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#e5a" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'E5A');">
              <i class="icon-map-marker icon-large"></i>E5A</a>
            </li>
            <li id="#tlab" data-submenu-id="submenu-tlab">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/TLAB/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#tlab" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'TLAB');">
              <i class="icon-map-marker icon-large"></i>TLAB</a>
            </li>
            <li id="#as1" data-submenu-id="submenu-as1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/AS1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#as1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'AS1');">
              <i class="icon-map-marker icon-large"></i>AS1</a>
            </li>
            <li id="#as2" data-submenu-id="submenu-as2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/AS2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#as2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'AS2');">
              <i class="icon-map-marker icon-large"></i>AS2</a>
            </li>
            <li id="#as3" data-submenu-id="submenu-as3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/AS3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#as3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'AS3');">
              <i class="icon-map-marker icon-large"></i>AS3</a>
            </li>
            <li id="#as4" data-submenu-id="submenu-as4">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/AS4/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#as4" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'AS4');">
              <i class="icon-map-marker icon-large"></i>AS4</a>
            </li>
            <li id="#as5" data-submenu-id="submenu-as5">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/AS5/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#as5" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'AS5');">
              <i class="icon-map-marker icon-large"></i>AS5</a>
            </li>
            <li id="#as6" data-submenu-id="submenu-as6">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/AS6/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#as6" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'AS6');">
              <i class="icon-map-marker icon-large"></i>AS6</a>
            </li>
            <li id="#as7" data-submenu-id="submenu-as7">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/AS7/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#as7" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'AS7');">
              <i class="icon-map-marker icon-large"></i>AS7</a>
            </li>
            <li id="#com1" data-submenu-id="submenu-com1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/COM1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#com1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'COM1');">
              <i class="icon-map-marker icon-large"></i>COM1</a>
            </li>
            <li id="#com2" data-submenu-id="submenu-com2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/COM2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#com2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'COM2');">
              <i class="icon-map-marker icon-large"></i>COM2</a>
            </li>
            <li id="#biz2" data-submenu-id="submenu-biz2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/BIZ2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#biz2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'BIZ2');">
              <i class="icon-map-marker icon-large"></i>BIZ2</a>
            </li>
            <li id="#mrb" data-submenu-id="submenu-mrb">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MRB/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#mrb" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Mochtar Riady Building');">
              <i class="icon-map-marker icon-large"></i>Mochtar Riady Building</a>
            </li>
            <li id="#i3" data-submenu-id="submenu-i3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/I3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#i3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'I3');">
              <i class="icon-map-marker icon-large"></i>I3</a>
            </li>
            <li id="#medscilib" data-submenu-id="submenu-medscilib">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MEDSCILIB/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#medscilib" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Medical / Science Library');">
              <i class="icon-book icon-large"></i>Medical / Science Library</a>
            </li>
            <li id="#medicallib" data-submenu-id="submenu-medicallib">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MEDICALLIB/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#medicallib" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Medical Library');">
              <i class="icon-book icon-large"></i>Medical Library</a>
            </li>
            <li id="#crisp" data-submenu-id="submenu-crisp">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/CRISP/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#crisp" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'CRISP');">
              <i class="icon-map-marker icon-large"></i>CRISP</a>
            </li>
            <li id="#centrallib" data-submenu-id="submenu-centrallib">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/CENTRALLIB/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#centrallib" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Central Library');">
              <i class="icon-book icon-large"></i>Central Library</a>
            </li>
            <li id="#centrallibannexe" data-submenu-id="submenu-centrallibannexe">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/CENTRALLIBANNEXE/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#centrallibannexe" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Central Library Annexe');">
              <i class="icon-book icon-large"></i>Central Library Annexe</a>
            </li>
            <li id="#chineselib" data-submenu-id="submenu-chineselib">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/CHINESELIB/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#chineselib" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Chinese Library');">
              <i class="icon-book icon-large"></i>Chinese Library</a>
            </li>
            <li id="#honsuisenlib" data-submenu-id="submenu-honsuisenlib">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/HONSUISENLIB/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#honsuisenlib" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Hon Sui Sen Library');">
              <i class="icon-book icon-large"></i>Hon Sui Sen Library</a>
            </li>
            <li id="#sciencecoop" data-submenu-id="submenu-sciencecoop">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/SCIENCECOOP/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#sciencecoop" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Science Co-Op');">
              <i class="icon-shopping-cart icon-large"></i>Science Co-Op</a>
            </li>
            <li id="#nusforumcoop" data-submenu-id="submenu-nusforumcoop">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/NUSFORUMCOOP/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#nusforumcoop" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Forum Co-Op');">
              <i class="icon-shopping-cart icon-large"></i>Forum Co-Op</a>
            </li>
            <li id="#utbookhaven" data-submenu-id="submenu-utbookhaven">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTBOOKHAVEN/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utbookhaven" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'UTown Book Haven');">
              <i class="icon-shopping-cart icon-large"></i>UTown Book Haven</a>
            </li>
            <li id="#rvr" data-submenu-id="submenu-rvr">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/RVR/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#rvr" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Ridge View Residence');">
              <i class="icon-home icon-large"></i>Ridge View Residence</a>
            </li>
            <li id="#rafflesh" data-submenu-id="submenu-rafflesh">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/RAFFLESH/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#rafflesh" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Raffles Hall');">
              <i class="icon-home icon-large"></i>Raffles Hall</a>
            </li>
            <li id="#kentridgeh" data-submenu-id="submenu-kentridgeh">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/KENTRIDGEH/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#kentridgeh" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Kent Ridge Hall');">
              <i class="icon-home icon-large"></i>Kent Ridge Hall</a>
            </li>
            <li id="#shearesh" data-submenu-id="submenu-shearesh">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/SHEARESH/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#shearesh" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Sheares Hall');">
              <i class="icon-home icon-large"></i>Sheares Hall</a>
            </li>
            <li id="#temasekh" data-submenu-id="submenu-temasekh">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/TEMASEKH/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#temasekh" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Temasek Hall');">
              <i class="icon-home icon-large"></i>Temasek Hall</a>
            </li>
            <li id="#eusoffh" data-submenu-id="submenu-eusoffh">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/EUSOFFH/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#eusoffh" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Eusoff Hall');">
              <i class="icon-home icon-large"></i>Eusoff Hall</a>
            </li>
            <li id="#kingedwardviih" data-submenu-id="submenu-kingedwardviih">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/KINGEDWARDVIIH/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#kingedwardviih" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'King Edward VII Hall');">
              <i class="icon-home icon-large"></i>King Edward VII Hall</a>
            </li>
            <li id="#kfh" data-submenu-id="submenu-kfh">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/KFH/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#kfh" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Kuok Foundation House');">
              <i class="icon-home icon-large"></i>Kuok Foundation House</a>
            </li>
            <li id="#pgpr1" data-submenu-id="submenu-pgpr1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/PGPR1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#pgpr1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Prince George\'s Park Residences 1');">
              <i class="icon-home icon-large"></i>Prince George's Park Residences 1</a>
            </li>
            <li id="#pgpr2" data-submenu-id="submenu-pgpr2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/PGPR2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#pgpr2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Prince George\'s Park Residences 2');">
              <i class="icon-home icon-large"></i>Prince George's Park Residences 2</a>
            </li>
            <li id="#pgpr3" data-submenu-id="submenu-pgpr3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/PGPR3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#pgpr3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Prince George\'s Park Residences 3');">
              <i class="icon-home icon-large"></i>Prince George's Park Residences 3</a>
            </li>
            <li id="#pgpr4" data-submenu-id="submenu-pgpr4">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/PGPR4/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#pgpr4" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Prince George\'s Park Residences 4');">
              <i class="icon-home icon-large"></i>Prince George's Park Residences 4</a>
            </li>
            <li id="#pgpr5" data-submenu-id="submenu-pgpr5">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/PGPR5/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#pgpr5" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Prince George\'s Park Residences 5');">
              <i class="icon-home icon-large"></i>Prince George's Park Residences 5</a>
            </li>
            <li id="#pgpr6" data-submenu-id="submenu-pgpr6">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/PGPR6/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#pgpr6" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Prince George\'s Park Residences 6');">
              <i class="icon-home icon-large"></i>Prince George's Park Residences 6</a>
            </li>
            <li id="#uhc" data-submenu-id="submenu-uhc">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UHC/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#uhc" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'University Health Centre');">
              <i class="fa fa-medkit icon-large"></i>University Health Centre</a>
            </li>
            <li id="#nussportscomplex" data-submenu-id="submenu-nussportscomplex">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/NUSSPORTSCOMPLEX/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#nussportscomplex" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'NUS Sports Complex');">
              <i class="icon-trophy icon-large"></i>NUS Sports Complex</a>
            </li>
            <li id="#nussportsfield" data-submenu-id="submenu-nussportsfield">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/NUSSPORTSFIELD/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#nussportsfield" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'NUS Sports Complex II');">
              <i class="icon-trophy icon-large"></i>NUS Sports Complex II</a>
            </li>
            <li id="#nusswimmingpool" data-submenu-id="submenu-nusswimmingpool">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/NUSSWIMMINGPOOL/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#nusswimmingpool" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'NUS Swimming Pool');">
              <i class="icon-tint icon-large"></i>NUS Swimming Pool</a>
            </li>
            <li id="#mpsh1" data-submenu-id="submenu-mpsh1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MPSH1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#mpsh1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MPSH1');">
              <i class="icon-pencil icon-large"></i>MPSH1</a>
            </li>
            <li id="#mpsh2" data-submenu-id="submenu-mpsh2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MPSH2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#mpsh2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MPSH2');">
              <i class="icon-pencil icon-large"></i>MPSH2</a>
            </li>
            <li id="#mpsh3" data-submenu-id="submenu-mpsh3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MPSH3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#mpsh3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MPSH3');">
              <i class="icon-pencil icon-large"></i>MPSH3</a>
            </li>
            <li id="#mpsh4" data-submenu-id="submenu-mpsh4">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MPSH4/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#mpsh4" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MPSH4');">
              <i class="icon-pencil icon-large"></i>MPSH4</a>
            </li>
            <li id="#mpsh5" data-submenu-id="submenu-mpsh5">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MPSH5/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#mpsh5" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MPSH5');">
              <i class="icon-pencil icon-large"></i>MPSH5</a>
            </li>
            <li id="#mpsh6" data-submenu-id="submenu-mpsh6">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MPSH6/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#mpsh6" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'MPSH6');">
              <i class="icon-pencil icon-large"></i>MPSH6</a>
            </li>
            <li id="#oed" data-submenu-id="submenu-oed">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/OED/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#oed" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Office of Estate Development');">
              <i class="fa fa-building icon-large"></i>Office of Estate Development</a>
            </li>
            <li id="#ucc" data-submenu-id="submenu-ucc">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UCC/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#ucc" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'University Cultural Centre');">
              <i class="fa fa-graduation-cap icon-large"></i>University Cultural Centre</a>
            </li>
            <li id="#nussu" data-submenu-id="submenu-nussu">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/NUSSU/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#nussu" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'NUS Student Union');">
              <i class="icon-group icon-large"></i>NUS Student Union</a>
            </li>
            <li id="#visitorslodge" data-submenu-id="submenu-visitorslodge">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/VISITORSLODGE/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#visitorslodge" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Visitors\' Lodge');">
              <i class="icon-home icon-large"></i>Visitors' Lodge</a>
            </li>
            <li id="#computercenter" data-submenu-id="submenu-computercenter">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/COMPUTERCENTER/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#computercenter" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Computer Center');">
              <i class="fa fa-support icon-large"></i>Computer Center</a>
            </li>
            <li id="#celc" data-submenu-id="submenu-celc">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/CELC/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#celc" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'CELC');">
              <i class="fa fa-university icon-large"></i>CELC</a>
            </li>
            <li id="#sde1" data-submenu-id="submenu-sde1">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/SDE1/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#sde1" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'SDE1');">
              <i class="fa fa-university icon-large"></i>SDE1</a>
            </li>
            <li id="#sde2" data-submenu-id="submenu-sde2">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/SDE2/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#sde2" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'SDE2');">
              <i class="fa fa-university icon-large"></i>SDE2</a>
            </li>
            <li id="#sde3" data-submenu-id="submenu-sde3">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/SDE3/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#sde3" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'SDE3');">
              <i class="fa fa-university icon-large"></i>SDE3</a>
            </li>
            <li id="#ventus" data-submenu-id="submenu-ventus">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/VENTUS/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#ventus" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'VENTUS');">
              <i class="fa fa-building icon-large"></i>VENTUS</a>
            </li>
            <li id="#imre" data-submenu-id="submenu-imre">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/IMRE/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#imre" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'IMRE');">
              <i class="fa fa-building icon-large"></i>IMRE</a>
            </li>
            <li id="#temaseklifesciencelab" data-submenu-id="submenu-temaseklifesciencelab">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/TEMASEKLIFESCIENCELAB/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#temaseklifesciencelab" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Temasek Life Sciences Laboratory');">
              <i class="fa fa-flask icon-large"></i>Temasek Life Sciences Laboratory</a>
            </li>
            <li id="#frontier" data-submenu-id="submenu-frontier">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/FRONTIER/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#frontier" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Frontier');">
              <i class="icon-map-marker icon-large"></i>Frontier</a>
            </li>
            <li id="#yihfoodjunction" data-submenu-id="submenu-yihfoodjunction">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/YIHFOODJUNCTION/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#yihfoodjunction" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Food Junction @ YIH');">
              <i class="icon-map-marker icon-large"></i>Food Junction @ YIH</a>
            </li>
            <li id="#yihsubway" data-submenu-id="submenu-yihsubway">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/YIHSUBWAY/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#yihsubway" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Subway @ YIH');">
              <i class="icon-map-marker icon-large"></i>Subway @ YIH</a>
            </li>
            <li id="#yihstarbucks" data-submenu-id="submenu-yihstarbucks">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/YIHSTARBUCKS/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#yihstarbucks" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Starbucks @ YIH');">
              <i class="icon-map-marker icon-large"></i>Starbucks @ YIH</a>
            </li>
            <li id="#yih711" data-submenu-id="submenu-yih711">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/YIH711/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#yih711" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, '7-11 @ YIH');">
              <i class="icon-map-marker icon-large"></i>7-11 @ YIH</a>
            </li>
            <li id="#yihsarpino" data-submenu-id="submenu-yihsarpino">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/YIHSARPINO/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#yihsarpino" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Sarpino @ YIH');">
              <i class="icon-map-marker icon-large"></i>Sarpino @ YIH</a>
            </li>
            <li id="#yiholdchangkee" data-submenu-id="submenu-yiholdchangkee">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/YIHOLDCHANGKEE/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#yiholdchangkee" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Old Chang Kee @ YIH');">
              <i class="icon-map-marker icon-large"></i>Old Chang Kee @ YIH</a>
            </li>
            <li id="#eskimo" data-submenu-id="submenu-eskimo">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/ESKIMO/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#eskimo" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Eskimo');">
              <i class="icon-map-marker icon-large"></i>Eskimo</a>
            </li>
            <li id="#uccalcove" data-submenu-id="submenu-uccalcove">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UCCALCOVE/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#uccalcove" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Alcove. Asian Restaurant');">
              <i class="icon-map-marker icon-large"></i>Alcove. Asian Restaurant</a>
            </li>
            <li id="#technoedge" data-submenu-id="submenu-technoedge">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/TECHNOEDGE/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#technoedge" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Techno Edge');">
              <i class="icon-map-marker icon-large"></i>Techno Edge</a>
            </li>
            <li id="#engmac" data-submenu-id="submenu-engmac">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/ENGMAC/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#engmac" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Macdonalds');">
              <i class="icon-map-marker icon-large"></i>Macdonalds</a>
            </li>
            <li id="#theterrace" data-submenu-id="submenu-theterrace">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/THETERRACE/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#theterrace" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'The Terrace');">
              <i class="icon-map-marker icon-large"></i>The Terrace</a>
            </li>
            <li id="#thedeck" data-submenu-id="submenu-thedeck">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/THEDECK/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#thedeck" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'The Deck');">
              <i class="icon-map-marker icon-large"></i>The Deck</a>
            </li>
            <li id="#mrbreedz" data-submenu-id="submenu-mrbreedz">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/MRBREEDZ/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#mrbreedz" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Reedz Cafe');">
              <i class="icon-map-marker icon-large"></i>Reedz Cafe</a>
            </li>
            <li id="#pgprsupersnacks" data-submenu-id="submenu-pgprsupersnacks">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/PGPRSUPERSNACKS/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#pgprsupersnacks" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Super Snacks');">
              <i class="icon-map-marker icon-large"></i>Super Snacks</a>
            </li>
            <li id="#pgprfoodglehub" data-submenu-id="submenu-pgprfoodglehub">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/PGPRFOODGLEHUB/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#pgprfoodglehub" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Foodgle Hub');">
              <i class="icon-map-marker icon-large"></i>Foodgle Hub</a>
            </li>
            <li id="#utowncheers" data-submenu-id="submenu-utowncheers">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTOWNCHEERS/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utowncheers" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Cheers @ UTown');">
              <i class="icon-map-marker icon-large"></i>Cheers @ UTown</a>
            </li>
            <li id="#utsubway" data-submenu-id="submenu-utsubway">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTSUBWAY/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utsubway" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Subway @ UTown');">
              <i class="icon-map-marker icon-large"></i>Subway @ UTown</a>
            </li>
            <li id="#utwendys" data-submenu-id="submenu-utwendys">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTWENDYS/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utwendys" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Wendy\'s @ UTown');">
              <i class="icon-map-marker icon-large"></i>Wendy's @ UTown</a>
            </li>
            <li id="#utspicetable" data-submenu-id="submenu-utspicetable">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTSPICETABLE/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utspicetable" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Spice Table');">
              <i class="icon-map-marker icon-large"></i>Spice Table</a>
            </li>
            <li id="#uthwangskr" data-submenu-id="submenu-uthwangskr">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTHWANGSKR/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#uthwangskr" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Hwang\'s Korean Restaurant');">
              <i class="icon-map-marker icon-large"></i>Hwang's Korean Restaurant</a>
            </li>
            <li id="#utsaporeit" data-submenu-id="submenu-utsaporeit">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTSAPOREIT/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utsaporeit" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Sapore Italian Restaurant');">
              <i class="icon-map-marker icon-large"></i>Sapore Italian Restaurant</a>
            </li>
            <li id="#utkoufu" data-submenu-id="submenu-utkoufu">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTKOUFU/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utkoufu" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Koufu');">
              <i class="icon-map-marker icon-large"></i>Koufu</a>
            </li>
            <li id="#utstarbucks" data-submenu-id="submenu-utstarbucks">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTSTARBUCKS/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utstarbucks" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Starbucks @ UTown');">
              <i class="icon-map-marker icon-large"></i>Starbucks @ UTown</a>
            </li>
            <li id="#utflavors" data-submenu-id="submenu-utflavors">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTFLAVORS/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utflavors" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Flavors');">
              <i class="icon-map-marker icon-large"></i>Flavors</a>
            </li>
            <li id="#utsakaesushi" data-submenu-id="submenu-utsakaesushi">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTSAKAESUSHI/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utsakaesushi" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Sakae Sushi');">
              <i class="icon-map-marker icon-large"></i>Sakae Sushi</a>
            </li>
            <li id="#utfortunevillage" data-submenu-id="submenu-utfortunevillage">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTFORTUNEVILLAGE/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utfortunevillage" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Fortune Village');">
              <i class="icon-map-marker icon-large"></i>Fortune Village</a>
            </li>
            <li id="#utbinbingicecream" data-submenu-id="submenu-utbinbingicecream">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/UTBINBINGICECREAM/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#utbinbingicecream" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Bing Bing Ice Cream');">
              <i class="icon-map-marker icon-large"></i>Bing Bing Ice Cream</a>
            </li>
            <li id="#artscrucorner" data-submenu-id="submenu-artscrucorner">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/ARTSCRUCORNER/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#artscrucorner" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Arts Cru Corner');">
              <i class="fa fa-cubes icon-large"></i>Arts Cru Corner</a>
            </li>
            <li id="#engcrucorner" data-submenu-id="submenu-engcrucorner">
              <?php
                $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/ENGCRUCORNER/get';
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);
              ?>
              <a href="#engcrucorner" onclick="locate_on_map(<?php echo $json_obj['lat']; ?>, <?php echo $json_obj['lon']; ?>, 'Engine Cru Corner');">
              <i class="fa fa-cubes icon-large"></i>Engine Cru Corner</a>
            </li>
					</ul>
        </div>
        <script type="text/javascript">
    			function DropDown(el) {
    				this.dd = el;
    				this.placeholder = this.dd.children('span');
    				this.opts = this.dd.find('ul.dropdown > li');
    				this.val = '';
    				this.index = -1;
    				this.initEvents();
    			}
    			DropDown.prototype = {
    				initEvents : function() {
    					var obj = this;

    					obj.dd.on('click', function(event){
    						$(this).toggleClass('active');
    						return false;
    					});

    					obj.opts.on('click',function(){
    						var opt = $(this);
    						obj.val = opt.text();
    						obj.index = opt.index();
    						obj.placeholder.text(obj.val);
    					});
    				},
    				getValue : function() {
    					return this.val;
    				},
    				getIndex : function() {
    					return this.index;
    				}
    			}

    			$(function() {
    				var dd = new DropDown( $('#dd') );

    				$(document).click(function() {
    					// all dropdowns
    					$('.wrapper-dropdown-3').removeClass('active');
    				});
    			});
		    </script>
            <script type='text/javascript' src="js/jquery.menu-config.js"></script>
        <!-- <div class="ui basic segment" id="tripmeter">
          <p>
            Starting Location (lat, lon):<br/>
            <span data-bind="text: start_lat" id="startLat"></span>°, <span data-bind="text: start_lon" id="startLon"></span>°
          </p>
          <p>
            Distance from starting location:<br/>
            <span data-bind="text: calDistance" id="distance">0</span> km
          </p>
        </div> -->
      </div>
      <div class="ui ten wide column">
        <div id="map"></div>
      </div>
      <div class="ui three wide column">
      </div>
    </div>
  </div>
  <script type='text/javascript' src="js/map.config.js"></script>

  <div class="ui page grid segment">
    <div class="column" style="height: 5em"></div>
  </div>

  <div class="ui inverted page grid segment">
    <div class="six wide left floated aligned column">
      <h3 class="ui header">© Copyright 2014, MAPNUS.</h3>
      <p>Kenneth Ham & Jireh Tan.</p>
    </div>
  </div>

  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <!-- Hopscotch JS -->
  <script type='text/javascript' src="js/hopscotch.js"></script>
  <script type='text/javascript' src="js/hopscotch-demo.js"></script>

</body>

</html>
