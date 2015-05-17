<?php

	include_once('head.php');
	include_once('logo_topbar.php');

	$mapDesc = $_GET['desc'];
	$mapText = null;

?>

	<div class="row">



		<div class="large-9 push-3 columns">

			<h3>Observatório da Educação Profissional e Tecnológica </br>
			<small>Uma ferramenta de acompanhamento da EPT no Brasil</small></h3>
			<p>

				<?php
					switch($mapDesc){
						case "relacao_ifs":
							echo "<iframe width='800' height='400' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col3+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj&amp;viz=MAP&amp;h=false&amp;lat=-7.479365221253366&amp;lng=-45.933205825000016&amp;t=1&amp;z=4&amp;l=col3&amp;y=2&amp;tmplt=2&amp;hml=ONE_COL_LAT_LNG'></iframe>";
						break;

						case "heatmap":
							echo "<iframe width='800' height='400' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col3+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj+limit+1000&amp;viz=HEATMAP&amp;h=true&amp;lat=-14.559456373761329&amp;lng=-36.20182004999998&amp;t=1&amp;z=4&amp;l=col3&amp;y=3&amp;tmplt=3&amp;hmd=true&amp;hmg=%2366ff0000%2C%2393ff00ff%2C%23c1ff00ff%2C%23eeff00ff%2C%23f4e300ff%2C%23f4e300ff%2C%23f9c600ff%2C%23ffaa00ff%2C%23ff7100ff%2C%23ff3900ff%2C%23ff0000ff&amp;hmo=0.6&amp;hmr=25&amp;hmw=0&amp;hml=ONE_COL_LAT_LNG'></iframe>";
						break;

						case "pibXifs":
							echo "Manutenção";
						break;
					}
				?>

			</p>
			<p>Aqui haverá uma descrição sucinta do projeto.</p>
			<ul>Coisas que devem aparecer no menu ao lado.
				<li>Sobre</li>
				<li>Mapas -> submenus</li>
				<li>Acesso à base de dados</li>

		</div>


		<?php
			include_once('side_menus.php');
		?>

	</div>


<?php
	include_once('footer.php');
?>
