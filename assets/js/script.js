function initMap() {
  const coord = { lat: -33.510021, lng: -70.706108};
  // const coord = { lat: latitud, lng: longitud };
  const mapa = new google.maps.Map(document.getElementById("mapa"), {
    zoom: 16,
    center: coord,
  });
  const marker = new google.maps.Marker({
    position: coord,
    map: mapa,
  });
}

window.initMap = initMap;
