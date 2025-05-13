const initMap = () => {
  mapboxgl.accessToken = 'pk.eyJ1IjoibWFyY2VsaXRvb29vIiwiYSI6ImNtNm1hNG5vdDBmaGUya3NoZnRldnhqd3YifQ.CMI4nKvoE7I8H9Dal7IHyw';

  // get zoom from data attribute from #map element

  const zoom = document.getElementById('map').dataset.zoom;

  const latLong = '8.29285128631892, 47.448015724736244';

  const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/marcelitoooo/ck16ms7m51nlo1cmwnqrbjuyq?optimize=true',
    center: [latLong],
    zoom: zoom
  });
  map.addControl(new mapboxgl.NavigationControl());
  map.scrollZoom.disable();

  const geojson = {
    type: 'FeatureCollection',
    features: [{
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [latLong]
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
    const el = document.createElement('div');
    el.className = 'marker';
  
    // make a marker and attach the popup
    new mapboxgl.Marker(el)
      .setLngLat(marker.geometry.coordinates)
      .addTo(map);
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



