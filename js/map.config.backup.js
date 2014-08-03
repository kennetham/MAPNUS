// check for Geolocation support
if (Modernizr.geolocation && geoPosition.init()) {
  geoPosition.getCurrentPosition(current_location);
  console.log('Geolocation is supported!');
} else {
  console.log('Geolocation is not supported for this Browser/OS version yet.');
}

function calculateDistance(start_lat, start_lon, end_lat, end_lon) {
  var earth_radius = 6371; // km
  var distance_lat = (end_lat - start_lat).toRad();
  var distance_lon = (end_lon - start_lon).toRad();
  var a = Math.sin(distance_lat / 2) * Math.sin(distance_lat / 2) +
  Math.cos(start_lat.toRad()) * Math.cos(end_lat.toRad()) *
  Math.sin(distance_lon / 2) * Math.sin(distance_lon / 2);
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  var d = earth_radius * c;

  return d;
}

Number.prototype.toRad = function() {
  return this * Math.PI / 180;
}

var _flag = 1;

var walk_icon = L.icon({
  iconUrl: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAACvElEQVRYR+2YUYRVURSGZzQiolFPKTL0kEmRUqKHUYzoIWXSaMRQeugpEVEaIjH0MKREKVFKDylRjCJGlHqKMSkiRaQxKaXI9P3cw5rtnHvOunvfcWk2P/vsve9Z311r77XXve1tLd7aW5yvbQ4wNkL/vQeX4cELaDsaQ4fRG49Xm+3BB8DsMEDj9Fe3EuB3YBYGQEt5/lwVstkefA7IRgPzif4K9LdVALsBUZi70Be0u7YXq/I1JQ+uwfpxJLh36Ax6j75VpjILU4Z4Pe89gXYFIArn6ZrcjCkAN2P1FFIqqdd6mRz1EsYCXsbggYpGBSdIV4sFnDbW7tK/gnQo8tokg0tcdCxOBaiDMITuIZuYQ55NDLzwQKYA1CHoQNqLz0qMv2Z+A/pTFTIFoNJHJ7qF9uYYVqoRWHa6n9LfiSqlnRSAuh2Wo59oQQ7gQcZuordIxYPaB6Qtca3MkykAlYTXoakCY9m+W8n8VbTFrHtFX/OFV18M4Hxe/BvJyLYCQBlW+H8YKO3VQdSH5P219bwYAziPFytBn0fa9HkezMJfFsnC+RhA+9JFBYAqEFReVa5eQtJUgIt58dcCN4wwfqRRF6YC3A/A9ToQSiv3G4FMBRgWpiGL9uKq4LBU4k0BqDLrpbH2iP5FdAfppGftJB1dia6WAlC5bdBYzfLePsZumHEdGJX7vzyEsYA6HB9RdoPoGusxAKqsz5rnfvq3ZxPwGMaGjUEl7CcBwGOet9bGdOUNzBagEvUE0hWmFnov4zhE51LtwZ24Y0KsEv9hifc0HR4il03X4iA09l+DIu/pI+Et47LpWmwAFVaFV2FWy9t79vuoqMhSjsuma7GxeJT+uZK9ZwFVSMiTai6brsXGokom/f5QTutBqgnrNV2DqrZ13e0pWTtjulFAj42otXOAUe7zbthYY418/h9e1nUpt3rqQQAAAABJRU5ErkJggg==',
  iconSize: [32, 32],
  iconAnchor: [16, 28],
  shadowUrl: null
});

var pointA = new L.LatLng(1.29632, 103.77325);
var pointB = new L.LatLng(1.29627, 103.77336);
var pointC = new L.LatLng(1.29617, 103.77348);
var pointD = new L.LatLng(1.29607, 103.7736);
var pointE = new L.LatLng(1.29597, 103.77369);
var pointF = new L.LatLng(1.2959, 103.77369);
var pointG = new L.LatLng(1.29579, 103.77367);
var pointH = new L.LatLng(1.29574, 103.77366);
var pointI = new L.LatLng(1.2956, 103.77358);
var pointJ = new L.LatLng(1.2956, 103.77358);
var pointK = new L.LatLng(1.29546, 103.77371);
var pointL = new L.LatLng(1.29526, 103.77388);
var pointM = new L.LatLng(1.29471, 103.77433);
var pointN = new L.LatLng(1.29454, 103.77442);
var pointO = new L.LatLng(1.29444, 103.77419);
var pointP = new L.LatLng(1.29443, 103.77409);
var pointQ = new L.LatLng(1.29405, 103.77396);
var pointR = new L.LatLng(1.29334, 103.77429);

var point_list = [pointA, pointB, pointC, pointD, pointE, pointF,
pointG, pointH, pointI, pointJ, pointK, pointL, pointM, pointN,
pointO, pointP, pointQ, pointR];

var tiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: 'Imagery &copy; <a href="http://mapbox.com" target="_blank">Mapbox</a>',
});

var map = L.map('map').setView([1.2963, 103.7769], 16).addLayer(tiles),
route_lines = [L.polyline(point_list)],
markers = [];

// var tiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//   attribution: 'Imagery &copy; <a href="http://mapbox.com" target="_blank">Mapbox</a>',
// }).addTo(map);

var base_layer = L.tileLayer.provider('OpenStreetMap.Mapnik').addTo(map);
var map_hash = new L.Hash(map)

var address_points = [
              // [1.294555 , 103.772697],
              // [1.294560 , 103.772678],
              // [1.294557 , 103.772665],
              // [1.294627 , 103.772592],
              // [1.294635 , 103.772581],
              // [1.294643 , 103.772557],
              // [1.294638 , 103.772549],
              // [1.294635 , 103.772542],
              // [1.294628 , 103.772531],
              // [1.294624 , 103.772522],
              [1.2947, 103.77246],
              [1.29467, 103.77249],
              [1.29466, 103.77241],
              [1.29475, 103.77253],
              [1.29477, 103.77242],
              [1.29477, 103.77259],
              [1.29482, 103.77248],
              [1.29454, 103.77232],
              [1.29455, 103.77245],
              [1.29451, 103.77259],
              [1.298, 103.7712],
              [1.298, 103.77145],
              [1.29801, 103.77151],
              [1.29795, 103.77146]
              ];

var heat_layer = L.heatLayer(address_points,
  { radius: 9, blur: 16, gradient:
    { 0.2: 'blue', 0.4: 'cyan', 0.5: 'lime', 0.6: 'yellow', 0.8: 'red' }
  })
.addTo(map);

var marker_icon = L.icon({
  iconUrl: 'http://mapnus.blob.core.windows.net/wawswebfront/images/pin24.png',
  iconRetinaUrl: 'http://mapnus.blob.core.windows.net/wawswebfront/images/pin48.png',
  iconSize: [29, 24],
  iconAnchor: [9, 21],
  popupAnchor: [0, -14]
});

var popup = L.popup();

function onMapClick(e) {
  popup
  .setLatLng(e.latlng)
  .setContent("You clicked the map at " + e.latlng.toString())
  .openOn(map);
}

map.on('click', onMapClick);

function current_location(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;

  L.marker([latitude, longitude], { icon: marker_icon })
  .addTo(map)
  .bindPopup("You are here")
  .update();
}

L.marker([1.29665, 103.77343], { icon: marker_icon })
.addTo(map)
.bindPopup("<img src=\"http://nus.edu.sg/osa/images/iss/images/being_nus_international_student/the_forum_bookstore.jpg\" height=\"100\" width=\"150\"><hr><p>Eskimo")
.update();

$.each(route_lines, function(i, route_line) {
  var animated_marker = L.animatedMarker(route_line.getLatLngs(), {
    icon: walk_icon,
    distance: 50,
    interval: 5000,
    autoStart: false,
  });

  function pan_map(){
    map.panTo({ lat: animated_marker['_latlng'].lat, lon: animated_marker['_latlng'].lng });
  }

  pan_map();

  var f_interval = setInterval(function() {
    if (_flag == 1) {
      animated_marker.stop();
      clearInterval(f_interval);
    }

    pan_map();
  }, 1000);

// Function to track animatedMarker's position
var checkLatLon = function(e) {
  if (e.latlng === pointJ) { //=== lon && e.latlng.lat === lat) {
  var comp1 = L.marker([pointJ.lat, pointJ.lng], { icon: marker_icon })
  .addTo(map)
  .bindPopup("<img src=\"https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQpYm6qi0r7bvmbajb47TzIVVRR-ZbDldTQu_lgELMaeV-rhKhpXg\" height=\"100\" width=\"150\"><hr><p>Com 1")
  .openPopup()
  .update();
} else if (e.latlng === pointO) {
  var biz_canteen = L.marker([pointO.lat, pointO.lng], { icon: marker_icon })
  .addTo(map)
  .bindPopup("<img src=\"https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTBgm1HVgKX41qnlamTgNRvSxHUdSJowfihCX3ikeGmRRYco-S2cw\" height=\"100\" width=\"150\"><hr><p>NUS Business Canteen:<p>The Terrace")
  .openPopup()
  .update();
} else if(e.latlng === pointR) {
  _flag = 1;
}
}

// event listener to check animatedMarker's position
animated_marker.on('move', checkLatLon);

map.addLayer(animated_marker);
markers.push(animated_marker);
});

$(function() {
$('#start').click(function() {
  console.log('start');
  $.each(markers, function(i, marker) {
    marker.start();
  });

  $(this).hide();
  $('#or').hide();
});
});

var polyline_route_lib_biz = new L.Polyline(point_list, {
color: 'red',
weight: 3,
opacity: 0.5,
smoothFactor: 1
}).addTo(map);

// zoom the map to the polyline
map.fitBounds(polyline_route_lib_biz.getBounds());
