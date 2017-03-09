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
				<img src="assets/img/mapbleau.jpg" alt="Ville de Fontainebleau" class="img-thumbnail imgsec1"/>
			</div>

			<div class=" col-lg-6 txtpresente">
				<p>La commune de Fontainebleau est située au sud-ouest du département de Seine-et-Marne et s’étend sur 17 205h.<br> C’est la plus vaste commune de la région Ile-de-France,<br> et elle est presque entièrement recouverte d’une forêt, lieu de promenade mais son relief très accidenté et ses nombreux rochers en font aussi un lieu très réputé pour la pratique de l’escalade ! Divers endroits de la forêt sont recouverts de quartz à l’état brut !<br>
				Alors n’hésitez plus et découvrez les nombreux sites de « grimp » de Fontainebleau!</p>
			</div>
		</div>
	</div>



	<!-- SECTION 2 HTML================================================
	?php include 'includes/inclu_actu.php'; ?-->

	<!-- SECTION 3 HTML================================================-->
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
                  				<p class="p">
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
          

			<div class="col-lg-4 site2">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal2">Petit bois</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal2" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon de Pin</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody2">
                  				<p class="p">
                    			<span class="bold">Meilleures Périodes:</span><br>Avril/Juin/Juillet/Septembre<br>
                    			<span class="bold">Orientation: </span>S-SE<br>
			                    <span class="bold">Rocher: </span>brique grise friable<br>
			                    <span class="bold">Nb de voies: </span>22<br>
			                    <span class="bold">Hauteur: </span>jusqu'à 1200m<br>
			                    <span class="bold">Difficulté: </span>hard<br>
			                    <span class="bold">Localisation: </span> Par ci par là
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>


			<div class="col-lg-4 site3">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal3">Le calvaire</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal3" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon sur rue</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody3">
                  				<p class="p">
                    			<span class="bold">Meilleures Périodes:</span><br>Juin/Septembre/Décembre<br>
                    			<span class="bold">Orientation: </span>N-NS<br>
			                    <span class="bold">Rocher: </span>grès<br>
			                    <span class="bold">Nb de voies: </span>15<br>
			                    <span class="bold">Hauteur: </span>51m<br>
			                    <span class="bold">Difficulté: </span>est dans le nom<br>
			                    <span class="bold">Localisation: </span>un calvaire à trouver!
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>
		</div>

		<div class="row rowSNE2">

			<div class="col-lg-4 site4">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal4">Rocher brulé</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal4" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon de poulet</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody4">
                  				<p class="p">
                    			<span class="bold">Meilleures Périodes:</span><br>Juin/Septembre/Décembre<br>
                    			<span class="bold">Orientation: </span>full S<br>
			                    <span class="bold">Rocher: </span>calcaire<br>
			                    <span class="bold">Nb de voies: </span>variable<br>
			                    <span class="bold">Hauteur: </span>10m<br>
			                    <span class="bold">Difficulté: </span>0.5a à 6b<br>
			                    <span class="bold">Localisation: </span>tout droit
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>
		
			<div class="col-lg-4 site5">


				<!--glyphicon cliquable qui renvoi un modal d'info-->
          		<button type="button" class="btn btn-info btn-lg btnmod" id="myBtn" data-toggle="modal" data-target="#myModal5">Rocher d'Avon</button>

          		 <!-- Modal -->
          		<div class="modal" id="myModal5" role="dialog">
            		<div class="modal-dialog modal-lg">
              			<div class="modal-content">
                			<div class="modal-header">
                  				<button type="button" class="close" data-dismiss="modal">&times;</button>
                  				<h3 class="modal-title"><span class="bold">Pignon des maquisards</span></h3>
                			</div>
           				 	<div class="modal-body backgmodbody5">
                  				<p class="p">
                    			<span class="bold">Meilleures Périodes:</span><br>Juin/Septembre/Décembre<br>
                    			<span class="bold">Orientation: </span>N-NO<br>
			                    <span class="bold">Rocher: </span>calcaire<br>
			                    <span class="bold">Nb de voies: </span>34<br>
			                    <span class="bold">Hauteur: </span>12<br>
			                    <span class="bold">Difficulté: </span>all<br>
			                    <span class="bold">Localisation: </span>Là
			                  	</p>
			                </div>
                  			<div class="modal-footer">
                    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  			</div>
              			</div>
            		</div>
        		</div>
    		</div>


			<div class="col-lg-4 meteo">
				<script charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/771860/type/VILLE_FRANCE/size/PAYSAGE_VIGNETTE' type='text/javascript'></script>
			</div>
		</div>
	</div>

<!--SALLE KARMA===========================================================-->
<div id="section4" class="container-fluid contsec4"></div>




<!-- SECTION PHOTO CAROUSSEL====================================================-->
	<div id="section5" class="container-fluid contsec5">

		<div id="my_carousel" class="carousel slide" data-ride="carousel">
			<!-- Bulles -->
			<ol class="carousel-indicators">
			<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
			<li data-target="#my_carousel" data-slide-to="1"></li>
			<li data-target="#my_carousel" data-slide-to="2"></li>
			</ol>
			<!-- Slides -->
			<div class="carousel-inner">
				<!-- Page 1 -->
				<div class="item active">  
					<div class="carousel-page">
						<img src="http://localhost/img/karma.jpg" class="img-responsive" style="margin:0px auto;" />
					</div> 
					<div class="carousel-caption">Page 1 de présentation
					</div>
				</div>   
				<!-- Page 2 -->
				<div class="item"> 
					<div class="carousel-page"><img src="/images/twitter-bootstrap.jpg" class="img-responsive img-rounded" style="margin:0px auto;"/>
					</div> 
					<div class="carousel-caption">Page 2 de présentation</div>
					</div>  
					<!-- Page 3 -->
					<div class="item">  
						<div class="carousel-page">
							<img src="/images/tablette.png" class="img-responsive img-rounded" style="margin:0px auto;max-height:100%;"/>
						</div>  
						<div class="carousel-caption">Page 2 de présentation</div>
						</div>     
					</div>
					<!-- Contrôles -->
					<a class="left carousel-control" href="#my_carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#my_carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
			</div>
		</div>


<!--VIDEO YOUTUBE CLIMBING====================================================================-->

<div id="section6" class="container-fluid contsec6">

	<div class="row rowvid1">

		<div class="col-lg-4 video1">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/jNUwiTMmJs8" frameborder="0" allowfullscreen></iframe>
		</div>
      
		<div class="col-lg-4 video2">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/DSrmFTZAxAY" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="col-lg-4 video3">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/kd9OKA4ABJ0" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>

	<div class="row rowvid2">

		<div class="col-lg-4 video4">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/Fuxi7alqbUI" frameborder="0" allowfullscreen></iframe>
		</div>
	
		<div class="col-lg-4 video5">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/vVTFcv2K22U" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="col-lg-4 video6">
			<iframe width="500" height="290" src="https://www.youtube.com/embed/_M4YxQ_Xj3I" frameborder="0" allowfullscreen></iframe>
		</div>

	</div>
</div>



<?php include 'includes/inclu_footer.php'; ?>


