<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
        #map {
            weight: 200px;
            height: 200px;
        }
        </style>

</head>
<body>
<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-map-marker"></span> drop </a>
<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-map-marker"></span> bounce</a>
<div id="map"></div>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-QX42CVqFcXoxHh-DTJXw6h-6BTuUO2s">
</script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    var myLatlng = new google.maps.LatLng(27.431361,85.017361);
    var mapOptions = {
        zoom: 15,
        center: myLatlng,
        icon:'https://phpreff.com/wp-content/uploads/2016/11/phpreff-logo-png.png'
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var markerLabel = 'GO!';
    var marker = new google.maps.Marker({
        position: myLatlng,
        title:"Transport!",
        label: {
            text: markerLabel,
            color: "#000000",
            fontSize: "16px",
            padding:"50px",
            fontWeight: "bold"
        }
    });

    // To add the marker to the map, call setMap();

    $(document).ready(function () {

        // $('.btn-success').click(function () {
        //     marker.setMap(map);
        //     marker.setAnimation(google.maps.Animation.DROP);
        // })


            marker.setMap(map);  marker.setAnimation(google.maps.Animation.BOUNCE);

    });

</script>
</html>
