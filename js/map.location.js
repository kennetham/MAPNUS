var _marker = null;

function locate_on_map(_lat, _lon, _loc) {
  remove_marker();
  map.setView([_lat, _lon], 18);

  _marker = L.userMarker([_lat, _lon], {pulsing:true, smallIcon: false})
  .bindPopup(_loc)
  .addTo(map);
}

function remove_marker(){
  if (_marker) {
    map.removeLayer(_marker);
    marker = null;
  }
}
