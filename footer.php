<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 12.09.2016
 * Time: 23:54
 */
?>
<footer>
    <div class="container">
        <div class="contact-info">
            <h3>Контакти:</h3>
            Україна </br>
            м. Миколаїв </br>
            <a href="tel:380512713157">(0512) 71-31-57</a> </br>
            <a href="mailto:neohoesch@gmail.com">e-mail: neohoesch@gmail.com</a>
        </div>
        <div id="map"></div>
    </div>

    <script>

        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }

    </script><style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 100%;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpkXV_M1XWJOk0Lywy9oVqaGvrx9mxQvg&callback=initMap"
            async defer></script>
</footer>
