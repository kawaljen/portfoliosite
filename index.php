<?php 
include ('function.php');
//---------------------------------------------------------MAIL-----------------------------------------------------------------
if(!empty($_POST))
	$reponse=envoimail($_POST );
//-------------------------------------------------------LANGAGE----------------------------------------------------------------
$http_lang = substr(Get_Client_Prefered_Language(),0,2);
if($http_lang !== 'en' && $_GET['lg']!=='en')
	header('Location: declics.php');

?>
<!DOCTYPE html> 
<!--[if IE ]>	<html lang="en" class="ie"> <![endif]-->
<!--!(IE)]><!-->
<html lang="en" class="rb">  <!--<![endif]-->


<head>
  <title>Declics</title>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<META NAME="Description" CONTENT="With both technical skills in programming and in graphics design,
										I realize a website visually pleasant and functional.">
	<META NAME="Keywords" CONTENT="webdesign, web, design, internet, freelance">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	  
	  
<?php

if(!detection_mobile ())
	{
      echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>';
	  echo ' <script>window.jQuery || document.write(\'<script src="js/jquery-1.7.2.min.js">\')</script>';
	  //echo '<script src="js/competence.js"></script>';
	  }
	
echo '<link rel="stylesheet" type="text/css" href="css/style22.css" />';
?>
	 
	<link rel="icon" type="image/png" href="images/favicon.png" />
	 
  
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>



<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--                                -BODY-                                       -->
<body>	
<div id="fix">
	
	<div id="haut">
		<div id="mobnav"></div>
		<script type="text/javascript">
			var b = document.getElementById('mobnav');
			
			function showmenu (){var	m = document.getElementById('nav'); 
										m.style.display = (m.style.display == "block") ? "none" : "block";  }

			b.addEventListener("click", showmenu, false);

			
		</script>
		<div id="logo" class="bouton"><img src="images/logo.png" alt="Déclics accueil"></div>	
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX->
<!--                                -MENU-                                      -->		
		 
		 <div id="nav">
		   <ul>
			 <li class="bouton" id="btZero"><a href="#accueil">Home</a></li>
			 <li class="bouton" id="btdx"><a href="#propos">About me</a></li>
			 <li class="bouton" id="btUn"><a href="#porto">Portfolio</a></li>
			 <li class="bouton" id="bttrois"><a href="#contact">Contacts</a></li>
			  <li class="bouton" id="github"><a href="https://github.com/kawaljen" title="github">Github</a></a></li>
			 <li id="drap"><a href="index.php?lg=en" title="english version"><img src="images/icones/drap_en.png" alt="EN"/></a><a href="declics.php" title="french version"><img src="images/icones/drap_fr.png" alt="FR"/></a></li>
		   </ul>	   
		</div>
		<div class="clr"></div>
	</div>
	
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--                                 -PAGES-                                  -->	
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->		
		
		
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!--                                  PAGE1                                   -->	
			<div class="page" id="accueil">
						
				<div id="paratexte" class="gdeimg">
					<img src="images/guillemet.png" alt="'"/>
					<h1>Hello!</h1>
					 <p>Welcome to my website. My name is Alexandra Persili&eacute; I am a webdesigner</p>
					  <img src="images/guillemet2.png" id="guillemet" alt="'"/>
					
					<div class="clr"></div>
				</div>
				
			</div>
			
			
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX  ->
<!--                                   -PAGE2-                                   -->	
			
			<div class="page" id="propos">
				<img src="images/flechebas.png" id="flechebas" alt="down"/>
					<div class="titre_bloc"><h1 class="titre">> What I do </h1></div>	
				<?php
				/*if($mobile===false)
					include('competence.php');*/
						
				?>
					

						<div id="competence">
							<div class="competence">
								<div class="vignette icon-paperplane"></div>
								<h5>Clean Design</h5>
								<p>Clean sites in their design and in their code, not to mention the translation for smartphones, tablets ...</p>
							</div>
							<div class="competence">
								<div class="vignette icon-lab"></div>
								<h5>Updates</h5>
								<p>Easy updates, so that after a few hours of training, you will be able to tell immediately what's new in your business.</p>
							</div>
							<div class="competence">
								<div class="vignette icon-seo"></div>
								<h5>Heard about you</h5>
								<p>Optimized websites for search engines and SEO.</p>
								
							</div>
							<div class="clr"></div>
						</div>				
						

							<div id="comptitre">
								<span>============================       </span>
								<h2>About me</h2>
								<span>      ============================</span>
							</div>

							<h2>My name is Alexandra Persili&eacute;, I work as a webdesigner.</h2>
							<h3>I develop dynamic  creative and functional websites,
									from visual communication to code, through the new web languages.</h3>
					     <div id="ensemble" >
							<div class="aprop">
								<p>Hello,</p>
								<p>My name is Alexandra Persilié, I work as a webdesigner.</p>
								<p>I began by studying History of Art, during which I studied different graphic langages and visual communication science.</p>
								<p>I have always been fascinated by Internet (♥), so I decided to work as a webdesigner.</p>
								
							</div>
							<div class="aprop">
								<p><br/><br/>I develop dynamic websites, taking care of each step of the project as a creative and functional entity :
								 communication, graphic design, writing code, optimization for search engines.</p>
								<p>I am passionate about graphic design and animated by minimal and elegant design.</p>
								<p>I am careful to give each client and each project the appropriate solutions.</p>
								
								<a href="cv-en.pdf" TARGET="_blank">Download my CV in PDF</a>
							</div>
							<div id="profil"><img src="images/profil.jpg" alt="Alexandra Persilie"/></div>	<div class="clr"></div>
							
						</div>
							
							
							
						
						
						
														
			</div>

<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX   -->
<!--                                     -PAGE3-                                -->	 

			<div class="gdeimg" id="oiseaux"></div>
			<!--///////////////div diaporama\\\\\\\\\\\\\\\ -->	
</div><!--fix-->
				<div class="page" id="porto">
						<div id="fondtransparent"></div>
						<div class="soixantepixel"></div>
						<?php if(!detection_mobile ())
							include('diaporama_en.php');
							//echo '<div id="diap"></div>';
						?>
		
						<!--<div id="porto_top"></div>-->
						<div class="titre_bloc"><h1 class="titre"> > Portfolio </h1></div>
						<?php /*puces des listes des topos (en php car ce n'est pas une image..)*/
							$puce = '> - ';
							$tiretsgch='-- >>> ';
							$tiretsdte=' &lt;&lt;&lt; --';
						?>

							<div id="travaux">	
								<div class="travail">
									<div class="bord_img pointeur"><img src="porto/mis.jpg" alt="Made in Shoreditch" class="projet" id="projet0"/></div>
									  
									   <div class="topo"> 
												<h3>Made in Shoreditch </h3>
												<h4>Full website </h4> 
											<ul>	
												<li><?php echo $puce;?> Building the site using Wordpress </li>
												<li><?php echo $puce;?> Implementation of an e-shop with Magento </li>
												<li><?php echo $puce;?> Customisation of the wordpress theme.</li>
											</ul>
											<p><a href="http://madeinshoreditch.co.uk/"><?php echo $tiretsgch.'www.madeinshoreditch.co.uk'.$tiretsdte;?></a></p>
											
									   </div>
								</div>
								<div class="clr"></div>								
								<div class="travail">
									<div class="bord_img pointeur"><img src="porto/educ_env.jpg" alt="education environnement 64" class="projet" id="projet1"/></div>
									  
									   <div class="topo"> 
												<h3>Education Environnement 64 </h3>
												<h4>Full website</h4> 
											<ul>	
												<li><?php echo $puce;?> Implementation of the site with joomla CMS. </li>
												<li><?php echo $puce;?> Creation of the graphics and a custom template.</li>
												<li><?php echo $puce;?> Setting up a cart in PHP and installation of a link to a payment system.</li>
											</ul>
											<p><a href="http://www.education-environnement-64.org/"><?php echo $tiretsgch.'www.education-environnement-64.org'.$tiretsdte;?></a></p>
											
									   </div>
								</div>
								<div class="clr"></div>
								<div class="travail">
									   <div class="bord_img pointeur"><img src="porto/miniat_fd.jpg" alt="atelier folie douce"  class="projet" id="projet2"/></div> 
									   <div class="topo"> 
											<div class="cadre_ascii">
												<h3>Atelier Folie douce</h3>
												<h4>Update of the site</h4> 
											</div> 
											<ul>
												<li><?php echo $puce;?>Updating of the template</li>
												<li><?php echo $puce;?>Updating the CMS joomla</li>
											</ul>
											<p><a href="http://www.latelierfoliedouce.fr/"><?php echo $tiretsgch.'www.latelierfoliedouce.fr'.$tiretsdte;?></a></p>
									   </div>
									  
								 </div>
								<div class="clr"></div>  
								<div class="travail">
										<div class="bord_img pointeur"><img src="porto/miniat_fleur.jpg" alt="projet fleuriste"  class="projet" id="projet3"/></div>					 
										<div class="topo"> 
											<div class="cadre_ascii">
												<h3>Florist</h3>
												<h4>Case study</h4> 
											</div> 
											<p> <?php echo $puce;?>Proposed website for a florist. </p>
										</div>
										
								 </div>
								
							</div>
							
							 <div class="clr"></div><div class="soixantepixel"></div>
				</div>
						<!--<div class="frise_petite"><div id="frisedroite"></div></div>-->
						
					
					
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX  X-->
<!--                                                 -PAGE3-                                     -->	
			<div id="porto_bottom"></div>
			<div class="page" id="contact">

					<div class="titre_bloc"><h1 class="titre">> Contact</h1></div>	
					<div id="coord">
						<div id="infocontact" >
							<h2>Keep in touch</h2>	
							<h3>Would you like to ask for information? Fill in the form below or send me an e-mail
							<a href="mailto:declicsweb@gmail.com "><img src="images/icones/mail.png" alt="@"/> declicsweb@gmail.com </a></h3>
							
						
						</div>
						
						<form method="post" action="http://déclics.eu/index-en.php#contact" id="formulR">
							<?php 
							if(!empty($_POST)){
								if($reponse[1]===true)
									echo '<div><p>Your email have been send.';
								if($reponse[2]===true)
									echo 'A copy has been send to your email account (please check your junk mail just in case!).'; 
								else 
									echo ' But your copy couldn\'t go thought, check your email adress.';
								echo '</p></div>';
								}
							?>
							<div class="formcolonne" id="premiere">
								
									<span class="messerreur">This name doesn't seem right...</span>
								<input type="text" id="nom" <?php if(!empty($_POST['nom'])) echo 'value='.$_POST['nom']; else echo 'value="Name"';?> name="nom" size="45" />
									<span class="messerreur">This email address doesn't seem right...</span>
								<input type="text" id="email" <?php if(!empty($_POST['email'])) echo 'value='.$_POST['email']; else echo 'value="Email"';?> name="email" size="45"/>
									<span class="messerreur">.</span>
								<input type="text" <?php if(!empty($_POST['sujet'])) echo 'value='.$_POST['sujet']; else echo 'value="Subject"';?> name="sujet" id="sujet" size="45"/>
							</div>
							<div class="formcolonne">
									<span class="messerreur">This message doesn't seem right...</span>
								<textarea id="message" name="message"><?php if(!empty($_POST['message'])) echo $_POST['message']; else echo 'Message';?></textarea>
								<input type="image" src="images/icones/lettre.png" id="valider" alt="send"/>
							</div>
						
						</form>
						
					</div>	
			</div>
			

	<!--///////////////div diaporama\\\\\\\\\\\\\\\ -->
	<?php $flechediap='<span class="boutondiap"><span class="diapprec dispnone pointeur"><<</span> --- <span class="diapsuiv pointeur">>></span></span>';?>


<div class="clr"></div><div class="soixantepixel"></div>
<div>
<a href="mentionsleg.php">Mentions légales</a>
</div>
<script src="js/formulaire.js" async></script>	
<script src="js/diaporama2.js" async> </script>	

</body>
</html>

