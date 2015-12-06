<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <link href="styles.css" rel="stylesheet">
        <script type="text/javascript">
            function load() {
                var map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(42.822410654302125, -1.6459033203125273),
                    zoom: 7,
                    mapTypeId: 'roadmap'
                });
                var infoWindow = new google.maps.InfoWindow;
                downloadUrl("markers.php", function (data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName("marker");
                    for (var i = 0; i < markers.length; i++) {
                        var point = new google.maps.LatLng(
                                parseFloat(markers[i].getAttribute("lat")),
                                parseFloat(markers[i].getAttribute("lng")));
                        var icon = 'marker.png';
                        var marker = new google.maps.Marker({
                            map: map,
                            position: point,
                            icon: icon
                        });
                    }
                });
            }
            function downloadUrl(url, callback) {
                var request = window.ActiveXObject ?
                        new ActiveXObject('Microsoft.XMLHTTP') :
                        new XMLHttpRequest;
                request.onreadystatechange = function () {
                    if (request.readyState == 4) {
                        request.onreadystatechange = doNothing;
                        callback(request, request.status);
                    }
                };
                request.open('GET', url, true);
                request.send(null);
            }
            function doNothing() {
            }
        </script>
    </head>
    <div class='titular'>rincondelcodigo.com (visualización)</div>
    <body onload="load()">
        <div id="map"></div>
    </body>
</html>