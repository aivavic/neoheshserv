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
			<span>Україна </span>
			<span>м. Миколаїв </span>
			<a href="tel:380512713157">(0512) 71-31-57</a> </br>
			<a href="mailto:neohoesch@gmail.com">e-mail: neohoesch@gmail.com</a>
		</div>
		<div id="map"></div>
	</div>

	<script>

		var map;
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 46.932979, lng: 31.8679122},
				zoom: 8
			});
		}

	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpkXV_M1XWJOk0Lywy9oVqaGvrx9mxQvg&callback=initMap"
	async defer></script>
	<script>
     //navigation menu mobile
    var navigation = $('nav ul'),
        ButtonToggleMeinMenu = $("a.toggle-menu");

    ButtonToggleMeinMenu.click(function(event) {
        event.preventDefault();
    });

    ButtonToggleMeinMenu.click(function() {
        if (ButtonToggleMeinMenu.attr('is-expanded') == "false") {
            navigation.addClass("menu-expanded");
            ButtonToggleMeinMenu.attr('is-expanded', 'true');
        } else {
            navigation.removeClass("menu-expanded");
            ButtonToggleMeinMenu.attr('is-expanded', 'false');
        }
    });
</script>

</footer>
