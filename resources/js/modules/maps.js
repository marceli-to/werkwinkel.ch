const initMap = () => {
  mapboxgl.accessToken = 'pk.eyJ1IjoibWFyY2VsaXRvb29vIiwiYSI6ImNtNm1hNG5vdDBmaGUya3NoZnRldnhqd3YifQ.CMI4nKvoE7I8H9Dal7IHyw';

  // get zoom from data attribute from #map element

  const zoom = document.getElementById('map').dataset.zoom;

  var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/marcelitoooo/ck16ms7m51nlo1cmwnqrbjuyq?optimize=true',
      center: [8.79958356703086, 47.258948004965205],
      zoom: zoom
  });
  map.addControl(new mapboxgl.NavigationControl());
  map.scrollZoom.disable();

  var geojson = {
    type: 'FeatureCollection',
    features: [{
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [8.79958356703086, 47.258948004965205]
      },
      properties: {
        title: 'Werkwinkel',
        description: 'Wolfhausen'
      }
    }]
  };

  // add markers to map
  geojson.features.forEach(function(marker) {
    // create a HTML element for each feature
    var el = document.createElement('div');
    el.className = 'marker';
  
    // create the popup
    var popup = new mapboxgl.Popup({ offset: 25, className: "mapboxgl-popup" })
      .setHTML('<h3>Lochrütistrasse 12<br>8633 Wolfhausen ZH</h3>');
  
    // make a marker and attach the popup
    new mapboxgl.Marker(el)
      .setLngLat(marker.geometry.coordinates)
      .setPopup(popup)
      .addTo(map);
  
    // open the popup immediately
    popup.addTo(map);
  });
};

const loadMapScript = () => {
  var script = document.createElement('script');
  script.src = 'https://api.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js';
  script.async = true;
  document.head.appendChild(script);

  script.onload = () => {
    const mapEl = document.getElementById('map');
    if (mapEl !== null) {
      initMap();
    }
  }
}

loadMapScript();


