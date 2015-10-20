function init_map(){
  var myOptions = {
    zoom:17,
    center: new google.maps.LatLng(6.237170, -75.605213),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false
  };
  
  map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
  marker = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(6.237170, -75.605213),
  });

  marker.setIcon('img/logo_map.png');
  
  infowindow = new google.maps.InfoWindow({
    content:"<b>Cancha Villa de Aburr&aacute;</b><br/>Calle 32E # 82 A 13<br/> Medell&iacute;n"
  });
  
  google.maps.event.addListener(marker, "click", function(){
    infowindow.open(map, marker);
  });
  
  infowindow.open(map, marker);
}

google.maps.event.addDomListener(window, 'load', init_map);