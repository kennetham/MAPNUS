/*globals L $*/

// This demo is based off of cibi.me by OpenPlans and my earlier visualization
// at http://github.com/openplans/cibi_animation

(function(){
  var bike_icon = L.icon({
    iconUrl: 'marker-bike-green-shadowed.png',
    iconSize: [25, 39],
    iconAnchor: [12, 39],
    shadowUrl: null
  });

  var config = {
    tileUrl : 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    overlayTileUrl : 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    tileAttrib : 'Imagery &copy; <a href="http://mapbox.com" target="_blank">Mapbox</a>',
    initLatLng : new L.LatLng(1.2963, 103.7769), // NUS
    initZoom : 16,
    minZoom : 13,
    maxZoom : 18
  };

  var map = L.map('map', {minZoom: config.minZoom, maxZoom: config.maxZoom}),
      routeLines = [L.polyline([[1.29633, 103.77324], [1.29621, 103.77344], [1.29594, 103.7737], [1.29573, 103.77366], [1.29559, 103.77357], [1.29472, 103.77431]])],
      markers = [];

  map.addLayer(new L.TileLayer(config.tileUrl, {attribution: config.tileAttrib}));
  map.addLayer(new L.TileLayer(config.overlayTileUrl));
  map.setView(config.initLatLng, config.initZoom);

  var base_layer = L.tileLayer.provider('OpenStreetMap.Mapnik').addTo(map);


  $.each(routeLines, function(i, routeLine) {
    var marker = L.animatedMarker(routeLine.getLatLngs(), {
      icon: bikeIcon,
      distance: 100,
      interval: 2500,
      autoStart: true,
    });

    map.addLayer(marker);
    markers.push(marker);
  });

 $(function() {
  $('#start').click(function() {
    console.log('start');
    $.each(markers, function(i, marker) {
      marker.start();
    });

    $(this).hide();
  });
 });
}());
