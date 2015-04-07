<?php

	class MapShow{

		$link = null;
		$desc = null;

		function __construct($desc){
  	if(!isset($desc)){
  		throw new Exception("</br></br>Mapa não definido.</br></br>");
		}else{
			$this->desc = $desc;
		}
		}

		function showMap(){
			switch($this->link){
				case "relacao_ifs":
					return "<iframe width='500' height='300' scrolling='no' frameborder='no' src='https://www.google.com/fusiontables/embedviz?q=select+col3+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj&amp;viz=MAP&amp;h=false&amp;lat=-7.479365221253366&amp;lng=-45.933205825000016&amp;t=1&amp;z=4&amp;l=col3&amp;y=2&amp;tmplt=2&amp;hml=ONE_COL_LAT_LNG'></iframe>";

			}

		}

	}

?>
