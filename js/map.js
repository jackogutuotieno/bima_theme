/*=============================================
=                Contact Map                  =
=============================================*/

jQuery(function(jQuery) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCKkyQBRILPvmV55sbqY3l0nJbGlBkEyjg&callback=initialize";
    document.body.appendChild(script);
  });
  
  var grayStyles = [{
    featureType: "all",
    stylers: [{
      saturation: -100
    }, {
      lightness: 0
    }]
  }, ];
  
  function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
      scrollwheel: false,
      navigationControl: true,
      mapTypeControl: true,
      zoomControl: true,
      disableDefaultUI: false,
      styles: [
          {
            "featureType":"all",
            "elementType":"all"
          }
        ],
        mapTypeId: 'roadmap'
    };
  
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
  
    // Multiple Markers
    var markers = [
      ['Lome, Togo',  6.1355685, 1.2233257],
      ['Nairobi, Kenya', -1.295206, 36.806803],
      ['Port Louis, Mauritius', -20.162811, 57.504158]
    ];
  
  
    // Info Window Content
    var infoWindowContent = [
      ['<div class="info_content">' +
        '<p>AGF Togo</p>'
      ],
      ['<div class="info_content">' +
        '<p>AGF Kenya</p>'
      ],
      ['<div class="info_content">' +
        '<p>AGF Mauritius</p>'
      ]
    ];
  
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(),
      marker, i;
  
    // Loop through our array of markers & place each one on the map  
    for (i = 0; i < markers.length; i++) {
      var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
      bounds.extend(position);
      marker = new google.maps.Marker({
        position: position,
        map: map,
        title: markers[i][0],
        animation: google.maps.Animation.DROP,
        icon: {
          url: "http://beta.oxygene.co.ke/agf/htmls/images/map-marker.png", //change your custom marker icon here
          scaledSize: new google.maps.Size(17, 25)
        }
      });
  
      // Allow each marker to have an info window    
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infoWindow.setContent(infoWindowContent[i][0]);
          infoWindow.open(map, marker);
        }
      })(marker, i));
  
      // Automatically center the map fitting all markers on the screen
      map.fitBounds(bounds);
    }
  
    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
      this.setZoom(3.2);
      google.maps.event.removeListener(boundsListener);
    });
  
    // color overlay
    //var color = "#366d50"; //Set your tint color. Needs to be a hex value.
    bounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(-84.999999, -179.999999),
      new google.maps.LatLng(84.999999, 179.999999));
  
    rect = new google.maps.Rectangle({
      bounds: bounds,
      fillColor: color,
      fillOpacity: 0.15,
      strokeWeight: 0,
      map: map
    });

    var countries = new google.maps.FusionTablesLayer({
      query: {
        select: 'geometry',
        from: '1N2LBk4JHwWpOY4d9fobIn27lfnZ5MDy-NoqqRpk',
        where: "ISO_2DIGIT IN ('KE', 'TG', 'MU')"
      },
      styles: [
        {
          polygonOptions: {
            //fillColor: '#FFFFFF',
            fillOpacity: 1
          }
        }, 
        {
          where: "ISO_2DIGIT IN ('KE', 'TG', 'MU')",
          polygonOptions: {
            //fillColor: '#b7c54f'
          }
        }
      ],
      map: map,
      suppressInfoWindows: true
    });
  
  }
  
 /*=====         ./Contact Map          ======*/