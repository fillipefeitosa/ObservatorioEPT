<?php
	include_once('head.php');
	include_once('/model/MapShow.php');

	$mapDesc = $_GET['desc'];

	$objMap = new MapShow($mapDesc);
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
