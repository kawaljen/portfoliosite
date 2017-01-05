	<div id="travaux">
    <div class="wrap__slider">

        <div class="topo-menu">
					<div id="slider--trigger" class="pause">
					  <div class="elm top"></div>
					  <div class="elm right"></div>
					  <div class="elm bottom"></div>
					  <div class="elm left"></div>
					</div>
        </div>
        <div class="navigation__list"></div>
        <div class="nav-buttons">
          <div class="slider--next nav-button">></div>
          <div class="slider--prev nav-button"><</div>
        </div>

        <div class="slider">

           <div id="slider0" class="slide slide-secondaire">
          		<div class="item">
          			<img src="porto/empty.png" alt="Made In Shoreditch Boutique" data-src="MISbtq.png" >
                <!-- <a class="item" href="porto/MIS-shop-view2.jpg">
                <img src="porto/MIS-shop-view2.jpg" alt="Made In Shoreditch Boutique " width="1049" height="634">
                </a>

                <a class="item" href="porto/MIS-shop-view3.jpg">
                <img src="porto/MIS-shop-view3.jpg" alt="Made In Shoreditch Boutique" width="1049" height="634">
                </a>

                <a class="item" href="porto/MIS-shop-view4.jpg">
                <img src="porto/MIS-shop-view4.jpg" alt="Made In Shoreditch Boutique" width="1049" height="634">
                </a> -->
              </div>

                <div class="topo">
                    <h3>Made in Shoreditch Boutique</h3>
                    <h4><?php echo $portoFullWebsite[$lg]; ?></h4>
                    <ul>
                      <?php echo $portoMisBoutic[$lg]; ?>
                    </ul>
                    <p><a href="http://madeinshoreditch.co.uk/shop/">www.madeinshoreditch.co.uk/shop</a></p>
                </div>
        		</div>
            <!--  X XX XX XX XX XX XX XX XX XX XX XX XX XX XX XX XX X -->

           <div id="slider1" class="slide slide-secondaire">
        		  <div class="item" >
        			     <img src="porto/empty.png" alt="Made In Shoreditch" data-src="MIS.png"/>
              </div>
      		  <!--
              <a class="item" href="porto/MIS-view6.png">
        			   <img src="porto/MIS-view6.png" alt="Made In Shoreditch" width="900" height="478">
        		  </a>

        		  <a class="item" href="porto/MIS-view7.png">
        			   <img src="porto/MIS-view7.png" alt="Made In Shoreditch" width="900" height="478">
        		  </a>

        		  <a class="item" href="porto/MIS-view8.png">
        			   <img src="porto/MIS-view8.png" alt="Made In Shoreditch" width="900" height="478">
        		  </a>
        		  <a class="item" href="porto/MIS-view9.png">
        			   <img src="porto/MIS-view9.png" alt="Made In Shoreditch" width="900" height="478">
        		  </a>
        		  <a class="item" href="porto/MIS-view1.jpg">
        			   <img src="porto/MIS-view1.jpg" alt="Made In Shoreditch" width="900" height="478">
        		  </a>
        		  <a class="item" href="porto/MIS-view2.jpg">
        			   <img src="porto/MIS-view2.jpg" alt="Made In Shoreditch" width="900" height="478">
        		  </a>
    -->
          		<div class="topo">
          			<div class="cadre_ascii">
          				<h3>Made in Shoreditch Magazine</h3>
          				<h4><?php echo $portoFullWebsite[$lg]; ?></h4>
          			</div>
          			<ul>
										<?php echo $portoMis[$lg]; ?>
          			</ul>
          			<p><a href="http://madeinshoreditch.co.uk/"> www.madeinshoreditch.co.uk </a></p>
        	   </div>
          </div>
        <div class="slide">
          <div class="item" >
            <img src="porto/empty.png" alt="education environnement 64" data-src="ee64.png"/>
          </div>
    	    <div class="topo">
      			<div class="cadre_ascii">
      				<h3>Education Environnement 64 </h3>
      				<h4><?php echo $portoFullWebsite[$lg]; ?></h4>
      			</div>
      			<ul>
								<?php echo $portoEe64[$lg]; ?>
      			</ul>
      			<p><a href="http://www.education-environnement-64.org/"> www.education-environnement-64.org </a></p>

    	    </div>
        </div>

        <div class="slide">
          <div class="item" >
    		      <img src="porto/empty.png" alt="atelier folie douce" data-src="folie_douce.png"  />
          </div>
       		<div class="topo">
      			<div class="cadre_ascii">
      				<h3>Atelier Folie douce</h3>
      				<h4><?php echo $portoUpdateStyle[$lg]; ?></h4>
      			</div>
      			<ul>
								<?php echo $portoFolieD[$lg]; ?>
      			</ul>
      			<p><a href="#"> <?php echo $portoHorsLigne[$lg]; ?></a></p>
      	   </div>
        </div>
        <div class="slide">
            <div class="item" >
               <img src="porto/empty.png" alt="projet fleuriste" data-src="projetfleur.png"/>
            </div>
       			<div class="topo">
        				<div class="cadre_ascii">
        						<h3>Florist</h3>
        						<h4><?php echo $portoProjet[$lg]; ?></h4>
        				</div>
        				<?php echo $portoFleuriste[$lg]; ?>
      		  </div>
        </div>
        <!-- <div class="slide">

             <img src="http://declics.eu/porto/clem.png" alt="projet" />
     			<div class="topo">
    				<div class="cadre_ascii">
    						<h3>Simple CMS</h3>
    						<h4>Projet en cours</h4>
    				</div>
    				<ul>
    					<li>> - Codage a la main d'un outil de gestion de contenu PHP OOP</li>
    					<li>> - Code modulable et facilement adaptable a d'autres projets ( deja en utilisation pour le back end du panier du site education-environnement. )</li>
    					<li>> - Functionnalites : ajout et modification d'articles.</li>
    					<li>> - Front-end sera ajoute par un partenaire.</li>
    					<li>> - Open source : https://github.com/kawaljen/dynamicwebsite</li>
    				</ul>
    				<p><a href="http://www.declics.eu/clem"> http://declics.eu/clem/admin/admin.php</a></p>
    				<div class="topo-menu"><span class="icon-minimise"></span></div>
    		    </div>
        </div> -->
    </div>
  </div>  </div>
