/*global google, $ */
function initMap() {
    "use strict";
    var drawingManager;
    var selectedShape;

    var location = { lat: -34.397, lng: 150.644 },
        map = new google.maps.Map(
            document.getElementById('map'),
            {
                center: location,
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.SATELLITE
            }
        ),
        tagInput = $('#tag'),
        numResultsInput = $('#numResults'),
        theList = $('#sidebar ul'),
        clearAll=$('#clear'),
        markers=[],
        infoWindow = new google.maps.InfoWindow({
            maxWidth: 250
        });


function clearSelection() {
    if (selectedShape) {
      selectedShape.setEditable(false);
      selectedShape = null;
    }
  }

function deleteSelectedShape() {
    if (selectedShape) {
      selectedShape.setMap(null);
    }
  }
  


        var drawingManager = new google.maps.drawing.DrawingManager({
            //drawingMode: google.maps.drawing.OverlayType.MARKER,
            drawingControl: true,
            drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: ['marker', 'circle', 'polygon', 'polyline', 'rectangle']
            },
        markerOptions: {icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'},
        circleOptions: {
      fillColor: '#ffff00',
      fillOpacity: 1,
      strokeWeight: 5,
      clickable: false,
      editable: true,
      zIndex: 1
        }

        });
        drawingManager.setMap(map);


        google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
        if (e.type == google.maps.drawing.OverlayType.CIRCLE) {
        
        setTimeout(function(){
            e.overlay.setMap(null);
        },5000);
      }
    });


        //google.maps.event.addListener(map, 'click', clearSelection);


    $('#go').click(function () {
        $.getJSON('http://api.geonames.org/wikipediaSearch?callback=?',
            {
                q: tagInput.val(),
                maxRows: numResultsInput.val(),
                username: 'slubowsky',
                type: 'json'
            },
            function (data) {
                var bounds = new google.maps.LatLngBounds();

                data.geonames.forEach(function (place) {
                    var location = { lat: place.lat, lng: place.lng },
                        marker = new google.maps.Marker({
                            position: location,
                            map: map,
                            title: place.title,
                            icon: place.thumbnailImg ? {
                                url: place.thumbnailImg,
                                scaledSize: new google.maps.Size(50, 50)
                            } : null
                        });
                        markers.push(marker);
                    bounds.extend(location);

                    marker.addListener('click', function () {
                        infoWindow.setContent(place.summary + '<br><a target="_blank" href="http://' + place.wikipediaUrl + '">Wikipedia</a>');
                        infoWindow.open(map, marker);
                    });

                    $('<li><img src="' + (place.thumbnailImg || 'default.png') + '"/>' + place.title + '</li>')
                        .appendTo(theList)
                        .click(function () {
                            map.panTo(location);
                            map.setZoom(15);
                        });
                });

                map.fitBounds(bounds);
            });
    });
    clearAll.click(function(){
        markers.forEach(function(marker){
        marker.setMap(null);
        });
        theList.empty();
        
        tagInput.empty();
    });
}
