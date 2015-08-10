<?php

	include_once('head.php');
	include_once('logo_topbar.php');

	$mapDesc = $_GET['desc'];
	$mapText = null;

?>

	<div class="row full-Width">

		<div class="large-12 columns">
		
		<div class="show-for-small-only">
				<iframe width='470' height='450' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col3+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj&amp;viz=MAP&amp;h=false&amp;lat=-7.479365221253366&amp;lng=-45.933205825000016&amp;t=1&amp;z=4&amp;l=col3&amp;y=2&amp;tmplt=2&amp;hml=ONE_COL_LAT_LNG'></iframe>		
		</div>




				<?php
					switch($mapDesc){
						case "relacao_ifs":
							echo "<iframe width='970' height='450' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col3+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj&amp;viz=MAP&amp;h=false&amp;lat=-7.479365221253366&amp;lng=-45.933205825000016&amp;t=1&amp;z=4&amp;l=col3&amp;y=2&amp;tmplt=2&amp;hml=ONE_COL_LAT_LNG'></iframe>";
						break;

						case "heatmap":
							echo "<p>Não suportado</p>";
						break;

						case "ifsXidmh":
							echo "<iframe width='970' height='450' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col3+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj+where+col4+%3E%3D+0.701+and+col4+%3C%3D+1&viz=MAP&h=false&lat=-13.364412934434865&lng=-41.7744140625&t=1&z=4&l=col3&y=4&tmplt=4&hml=ONE_COL_LAT_LNG'></iframe>";
						break;

						case "ifsXpib":
							echo "<iframe width='970' height='450' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col3+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj&viz=MAP&h=false&lat=-11.240162480776048&lng=-45.29849973749998&t=1&z=5&l=col3&y=7&tmplt=8&hml=ONE_COL_LAT_LNG'></iframe>";
						break;

						case "ifsXideb":
							echo "<iframe width='970' height='450' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col3+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj&viz=MAP&h=false&lat=-19.639803261317486&lng=-38.94840208124998&t=1&z=4&l=col3&y=9&tmplt=10&hml=ONE_COL_LAT_LNG'></iframe>";
						break;

						case "pisa":
							echo "<iframe width='970' height='450' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col1+from+1-aQkofnDC0fqYRJJbZfIaBKEwKp8rMFRa-0YJ2Wv&viz=MAP&h=false&lat=-21.516577929439766&lng=-22.46689755&t=1&z=2&l=col1&y=2&tmplt=2&hml=ONE_COL_LAT_LNG'></iframe>";
						break;
					}
				?>



		</div>



	</div>


<?php
	include_once('footer.php');
?>