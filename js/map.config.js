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

var tiles = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: 'Imagery &copy; <a href="http://mapbox.com" target="_blank">Mapbox</a>'
});
var overlay_tiles = L.tileLayer('http://{s}.tile2.opencyclemap.org/transport/{z}/{x}/{y}.png', {
  attribution: 'Imagery &copy; <a href="http://mapbox.com" target="_blank">Mapbox</a>'
});

var cafes = new L.LayerGroup();
L.marker([1.2982282673334569, 103.77490818500519]).bindPopup('Starbucks').addTo(cafes);
L.marker([1.305559533784965, 103.77301454544067]).bindPopup('Starbucks').addTo(cafes);
L.marker([1.2966086284209712, 103.77344906330109]).bindPopup('Eskimo Cafe').addTo(cafes);

var restaurants = new L.LayerGroup();
L.marker([1.301875132607609, 103.77247273921965]).bindPopup('Aclove .Asian Restaurant. Bar').addTo(restaurants);
L.marker([1.3036556590317512, 103.77432882785796]).bindPopup('Spice Table').addTo(restaurants);
L.marker([1.3038433650573493, 103.77415716648102]).bindPopup('Hwang\'s Korean Restaurant').addTo(restaurants);
L.marker([1.3040793383268146, 103.77395331859589]).bindPopup('Sapore Italiano').addTo(restaurants);
L.marker([1.3048462512997316, 103.77226889133453]).bindPopup('Sakae Sushi').addTo(restaurants);
L.marker([1.3048462512997316, 103.77226889133453]).bindPopup('Fortune Village').addTo(restaurants);

var canteens = new L.LayerGroup();
L.marker([1.29424, 103.77436]).bindPopup('The Terrace').addTo(canteens);
L.marker([1.29466, 103.77249]).bindPopup('The Deck').addTo(canteens);
L.marker([1.29733, 103.77151]).bindPopup('Techno Edge').addTo(canteens);
L.marker([1.29661, 103.78072]).bindPopup('The Frontier').addTo(canteens);
L.marker([1.2984, 103.77483]).bindPopup('Food Junction').addTo(canteens);
L.marker([1.3042455922079204, 103.77300918102264]).bindPopup('Koufu').addTo(canteens);
L.marker([1.3048462512997316, 103.77226889133453]).bindPopup('Flavors').addTo(canteens);
L.marker([1.2911168649320313, 103.78032624721527]).bindPopup('Super Snacks').addTo(canteens);
L.marker([1.290591285381571, 103.78090023994446]).bindPopup('Foodgle Hub').addTo(canteens);

var fastfoods = new L.LayerGroup();
L.marker([1.2985768649769729, 103.77496182918549]).bindPopup('Old Change Kee').addTo(fastfoods);
L.marker([1.29804, 103.77118]).bindPopup('MacDonald\'s').addTo(fastfoods);
L.marker([12923879089058972., 103.77432882785796]).bindPopup('Reedz Cafe').addTo(fastfoods);
L.marker([12984266998441307., 103.77516567707062]).bindPopup('Subway').addTo(fastfoods);
L.marker([1.2986251323392202, 103.77501547336578]).bindPopup('Sarpino').addTo(fastfoods);
L.marker([1.3036985632674172, 103.77380311489104]).bindPopup('Subway').addTo(fastfoods);
L.marker([1.3037629196195102, 103.77379238605499]).bindPopup('Wendy\'s').addTo(fastfoods);

var libraries = new L.LayerGroup();
L.marker([1.2951391538090273, 103.78011167049408]).bindPopup('Medical / Science Library').addTo(libraries);
L.marker([1.2952303256163356, 103.78164052963255]).bindPopup('Medical Library').addTo(libraries);
L.marker([1.296474552305595, 103.77306818962097]).bindPopup('Central Library').addTo(libraries);
L.marker([1.2968606914986518, 103.77380311489104]).bindPopup('Central Library Annexe').addTo(libraries);
L.marker([1.2969089588936331, 103.77339541912079]).bindPopup('Chinese Library').addTo(libraries);
L.marker([1.2929403033460443, 103.2929403033460443]).bindPopup('Hon Sui Sen Library').addTo(libraries);

var halls = new L.LayerGroup();
L.marker([1.291513731051205, 103.77456486225128]).bindPopup('Kent Ridge Hall').addTo(halls);
L.marker([1.291122227988106, 103.77566456794739]).bindPopup('Sheares Hall').addTo(halls);
L.marker([1.2925970679798886, 103.77129793167114]).bindPopup('Temasek Hall').addTo(halls);
L.marker([1.293321080026087, 103.77027869224547]).bindPopup('Eusoff Hall').addTo(halls);
L.marker([1.2997996378694927, 103.77388358116148]).bindPopup('Raffles Hall').addTo(halls);
L.marker([1.2923074631036173, 103.78086805343628]).bindPopup('King Edward VII Hall').addTo(halls);
L.marker([1.300276948180059, 103.77360999584198]).bindPopup('Kuok Foundation House').addTo(halls);
L.marker([1.2981049173865384, 103.7762439250946]).bindPopup('Ridge View Residences').addTo(halls);
L.marker([1.29095, 103.78114]).bindPopup('Prince George\'s Park Residence').addTo(halls);
L.marker([1.30588, 103.77378]).bindPopup('Tembusu College').addTo(halls);
L.marker([1.3067, 103.77346]).bindPopup('Cinnamon College').addTo(halls);
L.marker([1.30763, 103.77309]).bindPopup('Angsana College').addTo(halls);
L.marker([1.30827, 103.77325]).bindPopup('Residential College 4').addTo(halls);

var map = L.map('map').setView([1.2963, 103.7769], 16).addLayer(tiles),
route_lines = [],
markers = [];

var base_layer = L.tileLayer.provider('OpenStreetMap.Mapnik');
var over_layer = L.tileLayer.provider('OpenStreetMap.Cycle');

var address_points = [
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
  });

var baseLayers = {
	"Street View": base_layer,
  "Bus Route View": over_layer
};

var overlays = {
  "Heat Map": heat_layer
};

// Overlay layers are grouped
var grouped_overlays = {
  "Crowd Density": {
    "Heat Map": heat_layer
  },
  "Places to Stay": {
    "Halls & Residences": halls
  },
  "Places to Eat": {
    "Restaurants": restaurants,
    "Canteens": canteens,
    "Fast Foods": fastfoods,
    "Cafes": cafes
  },
  "Places to Read": {
    "Libraries": libraries
  }
};

// Use the custom grouped layer control, not "L.control.layers"
var layer_control = L.control.groupedLayers(baseLayers, grouped_overlays);
map.addControl(layer_control);

function searchMapAjax(text, callResponse) //callback for 3rd party ajax requests
{
	$.ajax({
		url: 'search.php',
		type: 'GET',
		data: {q: text},
		dataType: 'json',
		success: function(json) {
			callResponse(json);
		}
	});
}

map.addControl(new L.Control.Search({ callData: searchMapAjax, text:'Search...', markerLocation: true }));

// L.control.layers(baseLayers, overlays).addTo(map);

var map_hash = new L.Hash(map);

var _locate = L.control.locate({
	follow: true
}).addTo(map);

map.on('startfollowing', function() {
    map.on('dragstart', _locate.stopFollowing);
}).on('stopfollowing', function() {
    map.off('dragstart', _locate.stopFollowing);
});

var popup = L.popup();

function onMapClick(e) {
  popup
  .setLatLng(e.latlng)
  .setContent(e.latlng.toString())
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
