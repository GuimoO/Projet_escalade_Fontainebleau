<?php include 'includes/inclu_head.php'; ?>

	<div class="container-fluid homehead">
		<h1 class="titre">ESCALADE<br>FONTAINEBLEAU</h1>
	</div>

	<nav class="navbar navbar-inverse nanav" data-spy="affix" data-offset-top="197">
	  	<div class="container-fluid divcont">
	    	<div class="navbar-header divnavhead">
		        <button type="button" class="navbar-toggle navtog" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>                        
		      	</button>
	      		<a class="navbar-brand navbrand" href="#"><i class="fa fa-arrow-circle-up" style="font-size:60px;padding:0"></i></a>
	    	</div>
	    	<div>
	      		<div class="collapse navbar-collapse navcolapse" id="myNavbar">
	        		<ul class="nav navbar-nav">
			          <li class="linav"><a href="#section1" class="secnav">PRESENTATION</a></li>
			          <li class="linav"><a href="#section2" class="secnav">ACTUALITES</a></li>
			          <li class="linav"><a href="#section3" class="secnav">SITES NATURELS</a></li>
			          <li class="linav"><a href="#section4" class="secnav">SALLE KARMA</a></li>
			          <li class="linav"><a href="#section5" class="secnav" style="padding-left: 20px">PHOTOS</a></li>
			          <li class="linav"><a href="#section6" class="secnav">VIDEOS</a></li>
				    </ul>
		      	</div>
		    </div>
	  	</div>
	</nav>

	<div id="section1" class="container-fluid contsec1">

		<div class="row rowpresent">

			<div class="col-lg-6 colsec1">
				<img src="../climbing_project/assets/img/mapbleau.jpg" alt="Ville de Fontainebleau" class="img-thumbnail imgsec1"/>
			</div>

			<div class=" col-lg-6 txtpresente">
				<p class="txtpres">La commune de Fontainebleau est située au sud-ouest du département de Seine-et-Marne et s’étend sur 17 205h.<br> C’est la plus vaste commune de la région Ile-de-France,<br> et elle est presque entièrement recouverte d’une forêt, lieu de promenade mais son relief très accidenté et ses nombreux rochers en font aussi un lieu très réputé pour la pratique de l’escalade ! Divers endroits de la forêt sont recouverts de quartz à l’état brut !<br>
				Alors n’hésitez plus et découvrez les nombreux sites de « grimp » de Fontainebleau!</p>
			</div>
		</div>
	</div>


	<!-- SECTION 2 HTML================================================-->

	<div id="section3" class="container-fluid contsec3">

		<div class="row rowSNE1">

			<div class="col-lg-4 site1">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal">3 pignons</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon de Vélo</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody">
                  				<p>
                    			<span class="bold">Meilleures Périodes:</span><br>Avril/Mai/Juin/Septembre<br>
                    			<span class="bold">Orientation: </span>N-NO<br>
			                    <span class="bold">Rocher: </span>calcaire<br>
			                    <span class="bold">Nb de voies: </span>42<br>
			                    <span class="bold">Hauteur: </span>jusqu'à 75m<br>
			                    <span class="bold">Difficulté: </span>du 5c à 7c<br>
			                    <span class="bold">Localisation: </span>Ici et là
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>
          

			<div class="col-lg-4 site2"></div>
			<div class="col-lg-4 site3"></div>
		</div>

		<div class="row rowSNE2">

			<div class="col-lg-4 site4"></div>
			<div class="col-lg-4 site5"></div>
			<div class="col-lg-4 site6"></div>
		</div>

	</div>




















<?php include 'includes/inclu_footer.php'; ?>


