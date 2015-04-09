<?php

  include_once('head.php');
  include_once('logo_topbar.php');

?>

  <div class="row">



    <div class="large-9 push-3 columns">

      <h3>Observatório da Educação Profissional e Tecnológica </br>
      <small>Uma ferramenta de acompanhamento da EPT no Brasil</small></h3>
      <a href="../files/base_obs_prototipo1.csv">Download da Base de Dados</a>

      <p>
        <iframe width="800" height="300" scrolling="yes" frameborder="no" src="https://www.google.com/fusiontables/embedviz?viz=CARD&amp;q=select+*+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj&amp;tmplt=5&amp;cpr=2"></iframe>
      </p>



      <p>
        <iframe width="800" height="300" scrolling="yes" frameborder="no" src="https://www.google.com/fusiontables/embedviz?viz=GVIZ&amp;t=TABLE&amp;q=select+col0%2C+col1%2C+col2%2C+col3%2C+col4%2C+col5%2C+col6%2C+col7%2C+col8%2C+col9%2C+col10%2C+col11%2C+col12%2C+col13%2C+col14%2C+col15%2C+col16%2C+col17%2C+col18%2C+col19%2C+col20%2C+col21+from+17iLYeOl9s2FXtTbNAJNJ3kJX18Z-kFfE_ua_5gPj+order+by+col14+desc&amp;containerId=googft-gviz-canvas"></iframe>
      </p>

    </div>


    <?php
      include_once('side_menus.php');
    ?>

  </div>


<?php
  include_once('footer.php');
?>
