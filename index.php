<!DOCTYPE html>
<html lang="en">
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <!--  Mobile Viewport Fix -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- Site Properities -->
  <title id="hopscotch-title">MAPNUS | Your One Stop Guide!</title>

  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.min.js"></script>
  <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://mapnus.blob.core.windows.net/wawswebfront/css/hopscotch.css" />
  <link rel="stylesheet" type="text/css" href="https://mapnus.blob.core.windows.net/wawswebfront/css/hopscotch-demo.css" />
  <link rel="stylesheet" type="text/css" href="https://mapnus.blob.core.windows.net/wawswebfront/css/semantic.css" />

  <script type="text/javascript">
    head.load("http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css",
    "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css",
    "https://mapnus.blob.core.windows.net/wawswebfront/css/mapnus-homepage.css",
    "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css",
    "https://mapnus.blob.core.windows.net/wawswebfront/css/leaflet.usermarker.css",
    "https://mapnus.blob.core.windows.net/wawswebfront/css/leaflet.groupedlayercontrol.css",
    "https://mapnus.blob.core.windows.net/wawswebfront/css/leaflet-search.css");
  </script>
  <link rel="stylesheet" type="text/css" href="https://mapnus.blob.core.windows.net/wawswebfront/css/customdd-style.css" />
  <noscript><link rel="stylesheet" type="text/css" href="https://mapnus.blob.core.windows.net/wawswebfront/css/noJS.css" /></noscript>

  <link rel='stylesheet' href='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.24.0/L.Control.Locate.css' />
  <!--[if lt IE 9]>
  <link href='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.21.0/L.Control.Locate.ie.css' rel='stylesheet' />
  <![endif]-->

  <style>
    .leaflet-control-locate {
      border:1px solid rgba(0,0,0,0.4);
    }
    .leaflet-control-locate a {
      background-color:#fff;
      background-position:-3px, -2px;
    }
    .leaflet-control-locate.active a {
      background-position:-33px -2px;
    }

    #map{width:650px;height:450px}body{font:16px/1.4 "Helvetica Neue",Arial,sans-serif}.ghbtns{position:relative;top:4px;margin-left:5px}a{color:#07f}.mapContainer{border-radius:8px;z-index:5000}.navbar .popover{width:400px;-webkit-border-top-left-radius:0;-webkit-border-bottom-left-radius:0;border-top-left-radius:0;border-bottom-left-radius:0;overflow:hidden}.navbar
    .popover-content{text-align:center}.navbar .popover-content img{height:212px;max-width:250px}.navbar .dropdown-menu{-webkit-border-top-right-radius:0;-webkit-border-bottom-right-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;-webkit-box-shadow:5px 5px 10px rgba(0,0,0,.2);-moz-box-shadow:5px 5px 10px rgba(0,0,0,.2);box-shadow:5px 5px 10px rgba(0,0,0,.2)}.navbar
    .dropdown-menu>li>a:hover{background-image:none;color:#fff;background-color:#0081c2;background-color:rgba(0,129,194,.5)}.navbar .dropdown-menu>li>a.maintainHover{color:#fff;background-color:#0081C2}
  </style>
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>

<body id="home" style="padding-top:0">
  <script type="text/javascript" src="https://mapnus.blob.core.windows.net/wawswebfront/js/semantic.js"></script>
  <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
  <script type='text/javascript' src="https://mapnus.blob.core.windows.net/wawswebfront/js/modernizr.custom.79639.js"></script>
  <script type='text/javascript' src="https://mapnus.blob.core.windows.net/wawswebfront/js/jquery.menu-aim.js"></script>
  <script type="text/javascript" src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
  <script type="text/javascript">
    head.load("https://mapnus.blob.core.windows.net/wawswebfront/js/leaflet.groupedlayercontrol.js",
    // "js/leaflet.location-share.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/leaflet-heat.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/leaflet-hash.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/leaflet-providers.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/Polyline.encoded.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/AnimatedMarker.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/geoPosition.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/map.location.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/leaflet.usermarker.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/leaflet-search.js");
  </script>
  <div class="ui inverted page orange grid masthead segment">
    <div class="column">
      <div class="inverted secondary pointing ui menu">
        <a class="header item" href="index.php">MAPNUS | Your One Stop Guide!</a>
        <div class="right menu">
          <div class="ui top right pointing mobile dropdown link item">
            Menu
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item">Feedback</a>
            </div>
          </div>
          <a href="http://amberonyx.cloudapp.net" class="item">Feedback</a>
        </div>
      </div>

      <div>
        <div class="ui message">
          <i class="close icon"></i>
          <div class="header">
            Welcome back!
          </div>
          <p>This is your one stop navigation around NUS. Close to dismiss this message.</p>
        </div>
        <script type="text/javascript">
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
            <!-- <div class="or" id="or"></div>
            <div class="ui red button" id="start" href="javascript:void(0);">Start</div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ui page grid overview segment">
    <div class="row">
      <div class="ui two wide column"></div>
      <div class="twelve wide column">
      </div>
    </div>
    <div class="row">
      <div class="ui three wide column">
        <div id="dd" class="wrapper-dropdown-3">
          <span>NUS Around!</span>
          <ul class="scrolling dropdown">
            <?php
              $url = 'http://mapnus-wsapi.cloudapp.net/api/map_api/location_svc/all';
              if (isDomainAvailible($url)) {
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);

                foreach ($json_obj as $json_data => $d_obj) {
                  $loc_name = str_replace("'s", "\'s", $d_obj["lname"]);
                  echo '<li id="#'. strtolower($d_obj["lcode"]) . '" data-submenu-id="submenu-' . strtolower($d_obj["lcode"]) . '">';
                  echo '<a href="#' . $d_obj["lcode"] . '" onclick="locate_on_map('. $d_obj["lat"] . ', ' . $d_obj["lon"] . ', \'' . $loc_name . '\');">';
                  echo '<i class="icon-map-marker icon-large"></i>' . $d_obj["lname"] . '</a>';
                  echo '</li>';
                }
              } else {
                echo 'MAPNUS Web Service is currently <b><font color="red">DOWN</font></b>.<br>';
                echo 'Please <i>try</i> again later.';
              }

              function isDomainAvailible($domain) {
                //check, if a valid url is provided
                if(!filter_var($domain, FILTER_VALIDATE_URL)) {
                  return false;
                }

                //initialize curl
                $curlInit = curl_init($domain);
                curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($curlInit,CURLOPT_HEADER,true);
                curl_setopt($curlInit,CURLOPT_NOBODY,true);
                curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

                $response = curl_exec($curlInit);

                curl_close($curlInit);

                if ($response) return true;

                return false;
              }
            ?>
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
      </div>
      <div class="ui ten wide column">
        <div id="map"></div>
      </div>
      <div class="ui three wide column">
        <div class="ui green button" id="start" href="javascript:void(0);">Start</div>
        <div class="ui red button" id="stop" href="javascript:void(0);">Stop</div>
        <div id="dd1" class="wrapper-dropdown-3">
          <span>Directions (Walk)</span>
          <ul class="scrolling dropdown">
            <?php
              $url = 'http://mapnus-wsapi.cloudapp.net/api/route_api/route_svc/callback';
              if (isDomainAvailible($url)) {
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $data = curl_exec($ch);
                curl_close($ch);

                $json_obj = json_decode($data, true);

                foreach ($json_obj as $json_data => $d_obj) {
                  $loc_name = str_replace("'s", "\'s", $d_obj["route_desc"]);
                  echo '<li id="#'. strtolower($d_obj["route_code"]) . '" data-submenu-id="submenu-' . strtolower($d_obj["route_code"]) . '">';
                  echo '<a href="#' . $d_obj["route_code"] . '" onclick="clear_polyline();direction_route(\''.$d_obj["route_encoded"].'\');">';
                  echo '<i class="icon-map-marker icon-large"></i>' . $d_obj["route_code"] . '</a>';
                  echo '</li>';
                }
              } else {
                echo 'MAPNUS Web Service is currently <b><font color="red">DOWN</font></b>.<br>';
                echo 'Please <i>try</i> again later.';
              }
            ?>
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
            var dd = new DropDown( $('#dd1') );

            $(document).click(function() {
              // all dropdowns
              $('.wrapper-dropdown-3').removeClass('active');
            });
          });
        </script>
      </div>
    </div>
  </div>

  <script type="text/javascript" src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.24.0/L.Control.Locate.js'></script>
  <script type="text/javascript">
    head.load("https://mapnus.blob.core.windows.net/wawswebfront/js/jquery.menu-config.js",
    "https://mapnus.blob.core.windows.net/wawswebfront/js/map.config.js",
    "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js");
  </script>

  <script type='text/javascript' src="https://mapnus.blob.core.windows.net/wawswebfront/js/map.route.js"></script>
  <script type='text/javascript' src="https://mapnus.blob.core.windows.net/wawswebfront/js/hopscotch.js"></script>
  <script type='text/javascript' src="https://mapnus.blob.core.windows.net/wawswebfront/js/hopscotch-demo.js"></script>

  <div class="ui page grid segment">
    <div class="column" style="height: 5em"></div>
  </div>

  <div class="ui inverted page grid segment">
    <div class="six wide left floated aligned column">
      <h3 class="ui header">© Copyright 2014, MAPNUS.</h3>
      <p>Kenneth Ham & Jireh Tan.</p>
    </div>
  </div>
</body>
</html>
