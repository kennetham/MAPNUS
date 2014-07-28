
L.LocShare = {}
var LS = L.LocShare

LS.Send = {}
LS.Send.Marker = {}
LS.Send.Popup = L.popup().setContent('<div><input id="sendText" type="text" style="border-color:#a7a7a7;border:solid;border-width:2px;border-radius:5px;height:30px;" size="30" onkeyup="L.LocShare.Send.UpdateMessage( this )" placeholder="enter your message"/></div><div style="height:35px;"><button style="border-style:solid;border-radius:5px;border-color:#3d94f6;float:right;color:white;background-color:#3d94f6;height:35px;font-size:15px;line-height:3px;margin:5px;" onclick="copyPrompt()">get url</button></div></div>')
LS.Receive = {}
LS.Receive.Marker = {}
LS.Receive.Popup = L.popup()

var sendIcon = L.icon({
  iconUrl: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAlCAYAAAAjt+tHAAAE40lEQVRYR71YXWgcVRQ+Mzuzs53dzcZNQwsmxp9YEErSEvuwRmliIv6VCrWKpn3QB599ERGrqCi+iCC++VQV05b+KCj2QSqJQg2SxLXblkJeNDaVhrXLbvZ3dmd2/M7sTybZzWTabHLhMjP353zfOffMvedcgSpFGBoa8iwsLHi6urpkSZI82WzWo6qqUO3f0COXy5l+v9/Qdd0ARgkYxuTkpAGhJgMIAwMDUqlU8nZ2dvpM0/RhoFcURQ+KuCHk6mTDMMooBhQrCoJQiMfjBVmWi7OzszprLiUSCSUUCqlobAOwCgIK5kqtALfJ0EFAA5EclF1KpVK5cDisCb29vUpPT08Amrejs9Pr9U6BAIEpoY1AyHpy5TautcJtTsU+FqCkaRr5fL4IZMbRl5yfn8+wBQJoCKGG0RgbecCkZ3bp1N3eWv2vJ4nOz0n0XTRNwWCwD8omUFPC6OhoqFgshkGgA3X6swPlloPXVGESr/9gWXYfwG/B2gkhEomEFUUJY9B2ON3U2SPsnJtXXjwpE5YjAoT/sCQJYWRkpAMfHfDUMJxk6syYvnnokHx43EPAikDZBD5vbTmBF05IBCdvTmArlqClFlAfewvbmEi5Xz92vWwtIaD0jdG2gdd4J63t5JSf+YK0y6fWJXLHBASljdT9x0i+ex/v3msC6f/OUHbyQzK1paZjbtsHBF+I/MMfkLSzbw1gtkIjIf1mjLIT75FZwM9vK44WsDuhGOomdfBNknbsXiHASP5N+sLvVLhymgSPXOkr6+R98GmSux8h8a77SZD4KKl2Ld2gzIW3qZz6x2pwZQF18A3y7nq2LkRfvGw5Wjlz02oT1e0kKEG8VM8rs0xmMYP+xcocwUP+oXdJvnd/XUZx7jzlLn7ivA/YLaCygHseJTJKlBo/QN7eJ8m35xUSgzsdHc3Mxqlw9SxpV09T+6sTli9kf/mI9BvT1jzXSyDfN0ylvyaIfcAspCxhy2X1uuO73lTxh+TxYRIDO5atUp3s+i9QHjpE2rVv65jOBOzcwAQckscfb2op1xYIPPUpvPh9mDBtCVpJgFuaxQJA5hjBNCj51RMbIxAa+56yP79D+mKs4lfwbFPXHNe/1uk01vEvsJ+GoaM/UiH6JZzpjCtQt4Nc/YYe7AHBQ19T6fpvlL1wzK1sV+McfQAR0dS5o2VXgu50kKMFtoJAgwXsIdlWREQ1C8CClZDMHpSicfrzg7S1Qak9LEc6Fnuu37+pYflPc2XONZbD8tWJST6fn0LyQMiSVvjZS30GPb/bORGpTTh3RaCTl8R6csMJCsJwqxvPhsRkzdQMh5OAGN7a3CHk4sv95XVJMPiJP60pg9V5JqJgZt48NWPZ6ySnfOZKYC7DdDNOJBj8VMwKux/G2BKDcnVMTqtma5qeI2Hh7FiCMIWzZtRteI+O7TEbLFHTHET3wlp5zoLxznu3Dm8vO6XnTnuKZR3kchziBLhiWVQIvnRkL9VJMPg3f5iEvn5om8O4DNd0Oq1xCo73NZ3HzQVEAwkmAg2jTILLeJQPQZO/LGC34JaPOKlv61tBApq2ATCAm49ZHoOblAEQykB7DoVdaV6T7ZaARba2HMimVeyafhDxcgeAi0i3ssh2c27Mblf6dgjUSfB1DpxKgdZWVApr6NjEtNq1i9Oar7b4/85lXQMbIBxZAAAAAElFTkSuQmCC",
  iconSize:     [40, 40], // size of the icon
  iconAnchor:   [20, 40], // point of the icon which will correspond to marker's location
  popupAnchor:  [0, -30] // point from which the popup should open relative to the iconAnchor
})

receiveIcon = L.icon({
  iconUrl: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAlCAYAAAAjt+tHAAAE40lEQVRYR71YXWgcVRQ+Mzuzs53dzcZNQwsmxp9YEErSEvuwRmliIv6VCrWKpn3QB599ERGrqCi+iCC++VQV05b+KCj2QSqJQg2SxLXblkJeNDaVhrXLbvZ3dmd2/M7sTybZzWTabHLhMjP353zfOffMvedcgSpFGBoa8iwsLHi6urpkSZI82WzWo6qqUO3f0COXy5l+v9/Qdd0ARgkYxuTkpAGhJgMIAwMDUqlU8nZ2dvpM0/RhoFcURQ+KuCHk6mTDMMooBhQrCoJQiMfjBVmWi7OzszprLiUSCSUUCqlobAOwCgIK5kqtALfJ0EFAA5EclF1KpVK5cDisCb29vUpPT08Amrejs9Pr9U6BAIEpoY1AyHpy5TautcJtTsU+FqCkaRr5fL4IZMbRl5yfn8+wBQJoCKGG0RgbecCkZ3bp1N3eWv2vJ4nOz0n0XTRNwWCwD8omUFPC6OhoqFgshkGgA3X6swPlloPXVGESr/9gWXYfwG/B2gkhEomEFUUJY9B2ON3U2SPsnJtXXjwpE5YjAoT/sCQJYWRkpAMfHfDUMJxk6syYvnnokHx43EPAikDZBD5vbTmBF05IBCdvTmArlqClFlAfewvbmEi5Xz92vWwtIaD0jdG2gdd4J63t5JSf+YK0y6fWJXLHBASljdT9x0i+ex/v3msC6f/OUHbyQzK1paZjbtsHBF+I/MMfkLSzbw1gtkIjIf1mjLIT75FZwM9vK44WsDuhGOomdfBNknbsXiHASP5N+sLvVLhymgSPXOkr6+R98GmSux8h8a77SZD4KKl2Ld2gzIW3qZz6x2pwZQF18A3y7nq2LkRfvGw5Wjlz02oT1e0kKEG8VM8rs0xmMYP+xcocwUP+oXdJvnd/XUZx7jzlLn7ivA/YLaCygHseJTJKlBo/QN7eJ8m35xUSgzsdHc3Mxqlw9SxpV09T+6sTli9kf/mI9BvT1jzXSyDfN0ylvyaIfcAspCxhy2X1uuO73lTxh+TxYRIDO5atUp3s+i9QHjpE2rVv65jOBOzcwAQckscfb2op1xYIPPUpvPh9mDBtCVpJgFuaxQJA5hjBNCj51RMbIxAa+56yP79D+mKs4lfwbFPXHNe/1uk01vEvsJ+GoaM/UiH6JZzpjCtQt4Nc/YYe7AHBQ19T6fpvlL1wzK1sV+McfQAR0dS5o2VXgu50kKMFtoJAgwXsIdlWREQ1C8CClZDMHpSicfrzg7S1Qak9LEc6Fnuu37+pYflPc2XONZbD8tWJST6fn0LyQMiSVvjZS30GPb/bORGpTTh3RaCTl8R6csMJCsJwqxvPhsRkzdQMh5OAGN7a3CHk4sv95XVJMPiJP60pg9V5JqJgZt48NWPZ6ySnfOZKYC7DdDNOJBj8VMwKux/G2BKDcnVMTqtma5qeI2Hh7FiCMIWzZtRteI+O7TEbLFHTHET3wlp5zoLxznu3Dm8vO6XnTnuKZR3kchziBLhiWVQIvnRkL9VJMPg3f5iEvn5om8O4DNd0Oq1xCo73NZ3HzQVEAwkmAg2jTILLeJQPQZO/LGC34JaPOKlv61tBApq2ATCAm49ZHoOblAEQykB7DoVdaV6T7ZaARba2HMimVeyafhDxcgeAi0i3ssh2c27Mblf6dgjUSfB1DpxKgdZWVApr6NjEtNq1i9Oar7b4/85lXQMbIBxZAAAAAElFTkSuQmCC",
  iconSize:     [40, 40], // size of the icon
  iconAnchor:   [20, 40], // point of the icon which will correspond to marker's location
  popupAnchor:  [0, -30] // point from which the popup should open relative to the iconAnchor
})

L.Map.addInitHook(function () {
  this.sharelocationControl = new L.Control.ShareLocation();
  this.addControl(this.sharelocationControl);
  this.whenReady( function(){
    populateMarker(this);
  })
});

L.Control.ShareLocation = L.Control.extend({
    options: {
        position: 'topleft',
        title: 'Share Location'
    },

    onAdd: function () {
        var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control');

        this.link = L.DomUtil.create('a', 'leaflet-bar-part', container);
//        var userIcon = L.DomUtil.create('i', 'fa fa-users fa-lg', this.link);
        var userIcon = L.DomUtil.create('img' , 'img-responsive' , this.link);
        // iconfinder.com
        userIcon.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABE0lEQVRIS2NkoDFgpLH5DKMWEAzhQR9ETEAv2AHxRSB+j8075PqAFWhYNBCXAbEmENsC8RFqWCAINCQfiLOAWBRq4GUgrQ/E/ymxQBrq2kQgzYtmUCyQvwRXbBMKInWgxmogDgdiNiyGPACKqQLxH1ItMANqqAViLyAGRSQukAuUmIJHHmtOngrUkEHAYJCZb4FYHoi/kmpBAjS8QakDH2gESjYQUIO3LFIAavYHYlAkGqMZ9BnqeqxpH1ktoUiGqb0OZGggaZwAZBcScj1InlgL6pGC4yeQrQzET6lpASi53oAaOAdIpxJjOCk+AKm9BMTaQAyK/Fu0sACUiw2BOI9Yw0n1ASnmwtUSG8lkGT48fAAAgCQgGYlH8GsAAAAASUVORK5CYII='
        this.link.href = '#';

        L.DomEvent.on(this.link, 'click', this._click, this);

        return container;
    },

    _click: function (e) {
      L.DomEvent.stopPropagation(e);
      L.DomEvent.preventDefault(e);
//        TODO: get location and putout url
      placeMarker( this._map )
    },
});

populateMarker = function (selectedMap) {
  // replace the line below with the results of any Url parser
  var intermediate = getJsonFromUrl()
  if ( isFinite(intermediate.lat) && isFinite(intermediate.lng) ){
    LS.Receive.message = intermediate.M
    LS.Receive.lat = + intermediate.lat
    console.log( intermediate.lat )
    LS.Receive.lng = + intermediate.lng
    console.log( intermediate.lng )
    var text = '<table><tr><td><p>' + LS.Receive.message + '</p></td><td><p>Lat: ' + LS.Receive.lat + '</p><p>Lng: ' + LS.Receive.lng + '</p></td></tr></table>'
//    LS.Receive.Popup.setContent(LS.Receive.message)
    LS.Receive.Marker = L.marker( [ LS.Receive.lat , LS.Receive.lng] , {icon:receiveIcon})
    console.log( LS.Receive.Marker._latlng )
    LS.Receive.Marker.bindPopup(LS.Receive.message)
    LS.Receive.Marker.addTo(selectedMap)
    LS.Receive.Marker.openPopup()
  }
}

function getJsonFromUrl () {
  var params = {}
  params.query = location.search.substr(1);
  params.parsed = decodeURIComponent( params.query )
  params.data = params.parsed.split("&");
  params.result = {};
  for(var i=0; i<params.data.length; i++) {
    var item = params.data[i].split("=");
    params.result[item[0]] = item[1];
  }
  // This will return all of the data in the query parameters in object form
  // getJsonFromUrl() only splits on ampersand and equals -- jquery can do better
  // But so could you!! submit a pull request if you've got one!
  return params.result;
}


function copyPrompt() {
  window.prompt("Send this location with: Ctrl+C, Enter", '' +
                location.origin + location.pathname + '?' +
                'lat' + '=' + LS.Send.lat + '&' +
                'lon' + '=' + LS.Send.lng + '&' +
                 'M' + '=' +  LS.Send.Message);
}

function placeMarker( selectedMap ){
//  var test = LS.Send.Marker._latlng
//  if ( isFinite(test.lat) && isFinite(test.lng) ){
    if (!LS.Send.Marker._latlng ) {
      console.log('if (!LS.Send.Marker._latlng ) { passed!  line 95')
      LS.Send.Marker = L.marker( selectedMap.getCenter() , {draggable: true,icon: sendIcon} );
      setSendValues( selectedMap.getCenter() )
      LS.Send.Marker.on('dragend', function(event) {
        setSendValues( event.target.getLatLng());
        LS.Send.Marker.openPopup();
      });
      LS.Send.Marker.bindPopup(LS.Send.Popup);
      LS.Send.Marker.addTo(selectedMap);
    } else {
      LS.Send.Marker.setLatLng( selectedMap.getCenter() )
    }
    //selectedMap.setView( location , 16 )
    LS.Send.Marker.openPopup();
//  }
};

LS.Send.UpdateMessage = function( text ){
  var encodedForUrl = encodeURIComponent( text.value );
  LS.Send.Message = encodedForUrl
}

function setSendValues( result ){
  LS.Send.lat = result.lat;
  LS.Send.lng = result.lng;
}
