<?php
	include_once('head.php');
?>
			
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
						<h1><a href="#">Observatório-EPT</a><h1>
					</li>
					
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>	
				
			</nav>	
	   <div class="row">
        <div class="large-3 columns">
          <h1><img src="http://placehold.it/400x100&text=Logo"/></h1>
        </div>
        
      </div>
      
       
      
      
      <div class="row">    
        
         
         
        <div class="large-9 push-3 columns">
          
          <h3>Observatório da Educação Profissional e Tecnológica </br>
          <small>Uma ferramenta de acompanhamento da EPT no Brasil</small></h3>
          
          <p>Aqui haverá uma descrição sucinta do projeto.</p>
          <ul>Coisas que devem aparecer no menu ao lado.
          	<li>Sobre</li>
          	<li>Mapas -> submenus</li>
          	<li>Acesso à base de dados</li>          	
                
        </div>
         
         
        <div class="large-3 pull-9 columns">
            
            
            <ul class='side-nav'>
	  					<li>
				   		 <a href="#" data-dropdown="dropdownid1" data-options="align:right">Mapas</a>
				
				      <ul id="dropdownid1" class="f-dropdown" data-dropdown-content>
				        <li>
				          <a href="view_map.php?desc=relacao_ifs">Relação de Institutos Federais</a>
				          <a href="view_map.php?desc=heatmap">Heatmap da Distruição de IF`s no Brasil</a>
				          <a href="view_map.php?desc=pibXifs">Relação entre PIB Estadual e Distribuição de IF`s</a>
				        </li>
				      </ul>
		
		  				</li>
		  				
		  				<li><a href="#">Acesso à Base de Dados</a></li>
		
							<li>
				   		 <a href="#" data-dropdown="dropdownid2" data-options="align:right">Sobre</a>
				
				      <ul id="dropdownid2" class="f-dropdown" data-dropdown-content>
				        <li>
				          <a href="view_about.php?desc=sobre_projeto">Sobre o Projeto Observatório - EPT</a>
				          <a href="view_about.php?desc=sobre_portal">Sobre o Portal do Observatório</a>
				          
				        </li>
				      </ul>
		
		  				</li>
		  				
							</ul>
            
            
          
          <p><img src="http://placehold.it/320x240&text=Ad"/></p>
            
        </div>
        
      </div>
        
      
       
<?php
	include_once('footer.php');
?>   
   