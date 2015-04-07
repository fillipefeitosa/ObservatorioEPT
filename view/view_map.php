<?php
	include_once('head.php');

	$mapDesc = $_GET['desc'];

	switch($mapDesc){
		case "relacao_ifs":
			echo "<iframe width='500' height='300' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col3+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj&amp;viz=MAP&amp;h=false&amp;lat=-7.479365221253366&amp;lng=-45.933205825000016&amp;t=1&amp;z=4&amp;l=col3&amp;y=2&amp;tmplt=2&amp;hml=ONE_COL_LAT_LNG'></iframe>";
			break;
		}
?>


	<div class="large-9 push-3 columns">

          <h3>Observatório da Educação Profissional e Tecnológica </br>
          <small>Uma ferramenta de acompanhamento da EPT no Brasil</small></h3>

          <p>Aqui haverá uma descrição sucinta do projeto.</p>
          <ul>Coisas que devem aparecer no menu ao lado.
          	<li>Sobre</li>
          	<li>Mapas -> submenus</li>
          	<li>Acesso à base de dados</li>

 </div>


<?php
	include_once('footer.php');
?>
