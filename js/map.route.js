function direction_route(_encoded) {
  clear_polyline();

  var point_list = L.Polyline.fromEncoded(_encoded).addTo(map);

  var points_temp = [];
  var last_point = [point_list._latlngs[point_list._latlngs.length - 1].lat, point_list._latlngs[point_list._latlngs.length - 1].lng];

	for (i = 0; i < point_list._latlngs.length; i++){
		var lat = point_list._latlngs[i].lat,
	    	lon = point_list._latlngs[i].lng;
		points_temp.push([lat, lon]);
	}

  route_lines = [L.polyline(points_temp)],
  markers = [];

  _flag = 0;

  $.each(route_lines, function(i, route_line) {
    var line = new L.polyline(points_temp),
      animated_marker = L.animatedMarker(route_line.getLatLngs(), {
        icon: walk_icon,
        distance: 50,
        interval: 5000,
        autoStart: false,
        onEnd: function() {
          $(this._shadow).fadeOut();
          $(this._icon).fadeOut(1000, function(){
            map.removeLayer(this);
          });
        }
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

    // function to track animated_marker's position
    var checkLatLon = function(e) {
      if (e.latlng.lng === last_point && e.latlng.lat === last_point){
          _flag = 1; // signals the animation can be stopped
      }
    }

    // event listener to check animatedMarker's position
    animated_marker.on('move', checkLatLon);

    map.addLayer(animated_marker);
    markers.push(animated_marker);
  });

  $(function() {
    $('#start').click(function() {
      // console.log('start');
      $.each(markers, function(i, marker) {
        marker.start();
      });

      // $(this).hide();
    });
  });

  var polyline_route = new L.Polyline(points_temp, {
    color: 'red',
    weight: 3,
    opacity: 0.5,
    smoothFactor: 1
  }).addTo(map);

  // zoom the map to the polyline
  map.fitBounds(polyline_route.getBounds());
}

function clear_polyline() {
  _flag = 1;

  for(i in map._layers) {
    if(map._layers[i]._path != undefined) {
      try {
        map.removeLayer(map._layers[i]);
      }
      catch(e) {
        console.log("Error: " + e + map._layers[i]);
      }
    }
  }
}
