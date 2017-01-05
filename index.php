<?php
$lg = 'en';
include ('function.php');
include('contenu.php');


//-------------------------------------------------------LANGAGE----------------------------------------------------------------
$http_lang = substr(Get_Client_Prefered_Language(),0,2);
if($http_lang !== 'en' && (isset($_GET['lg']) && $_GET['lg']!=='en'))
	$lg = 'fr';
//---------------------------------------------------------MAIL-----------------------------------------------------------------
if(!empty($_POST))
	$reponse=envoimail($_POST );

?>
<!DOCTYPE html>
<!--[if IE ]>	<html lang="fr" class="ie"> <![endif]-->
<!--!(IE)]><!-->
<html lang="<?php echo $lg; ?>" class="rb">  <!--<![endif]-->


<head>
  <title>Déclics</title>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<META NAME="Description" CONTENT=<?php echo $headMetaDesc[$lg]; ?>>
	<META NAME="Keywords" CONTENT=<?php echo $headMetaKeyword[$lg]; ?>>
	<meta name="geo.placename" content="Toulouse, Midi-Pyrenees, France" >
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js">')</script>
<!--
	<link rel="stylesheet" type="text/css" href="css/style.css" /> -->
	<link rel="stylesheet" type="text/css" href="css/style.min.css" />

	<link rel="icon" type="image/png" href="images/favicon.png" />

</head>



<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--                                     -BODY-                                                -->
<body>

	<div id="haut" role="banner">
		<div id="mobnav"></div>
		<script type="text/javascript">
			var b = document.getElementById('mobnav');

			function showmenu (){var	m = document.getElementById('nav');
										m.style.display = (m.style.display == "block") ? "none" : "block";  }

			b.addEventListener("click", showmenu, false);


		</script>
		<div id="logo" class="bouton"><img src="images/logo.png" alt="Déclics accueil"></div>
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--                                        MENU                                                -->
		 <div id="nav" role="navigation">
		   <ul>
			 <li class="bouton" id="btZero"><a href="#accueil"><?php echo $menuAccueil[$lg]; ?></a></li>
			 <li class="bouton" id="btdx"><a href="#propos"><?php echo $menuApropos[$lg]; ?></a></li>
			 <li class="bouton" id="btUn"><a href="#porto"><?php echo $menuPorto[$lg]; ?></a></li>
			 <li class="bouton" id="bttrois"><a href="#contact"><?php echo $menuContact[$lg]; ?></a></li>
			 <li class="bouton" id="github"><a href="https://github.com/kawaljen" title="github">Github</a></li>
			 <li id="drap">
				 <a href="index.php?lg=en" title="english version"><img src="images/icones/drap_en.png" alt="EN"/></a>
				 <a href="index.php?lg=fr" title="french version"><img src="images/icones/drap_fr.png" alt="FR"/></a></li>
		   </ul>
		</div>
		<div class="clr"></div>
	</div>

<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--                                       -PAGES-                                             -->
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->


<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--                                         -PAGE1-                                      -->
			<div class="page" id="accueil">

				<div id="paratexte" class="gdeimg">
					<img src="images/guillemet.png" id="guillemet" alt="'"/>
					<span>Hello!</span>
					 <h1><?php echo $topBienvenue[$lg]; ?></h1>
					 <!-- Avec des competences tant techniques en
					  programmation que graphiques en design,
					  je peux realiser un site Internet
					  agreable visuellement et
					  fonctionnel.-->
					  <img src="images/guillemet2.png" alt="'" />

					<div class="clr"></div>
				</div>

			</div>


<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--                                         -PAGE2-                                      -->
			<div class="page" id="propos" role="main">
				<img src="images/flechebas.png" id="flechebas" alt="bas"/>
					<div class="titre_bloc"><h1 class="titre"><?php echo $aproposTitre[$lg]; ?></h1></div>

							<h2><?php echo $aproposSousT[$lg]; ?></h2>
							<h3><?php echo $aproposSousT2[$lg]; ?></h3>
					     <div id="ensemble" >
							<div class="aprop">
									<?php echo $aproposColum1[$lg]; ?>
							</div>
							<div class="aprop">
								<?php echo $aproposColum2[$lg]; ?>
								<a href="<?php echo $aproposCvLien[$lg]; ?>" TARGET="_blank"><?php echo $aproposCv[$lg]; ?></a>
							</div>
							<div id="profil"><img src="images/profil.jpg" alt="Alexandra Persilie"/></div>	<div class="clr"></div>

						</div>



						<div id="competence">
							<div id="comptitre">
								<span>============================       </span>
								<h2><?php echo $competenceTitre[$lg]; ?></h2>
								<span>      ============================</span>
							</div>
							<div class="competence">
								<div class="vignette icon-paperplane"></div>
								<?php echo $competenceVign1[$lg]; ?>
							</div>
							<div class="competence">
								<div class="vignette icon-lab"></div>
								<?php echo $competenceVign2[$lg]; ?>
							</div>
							<div class="competence">
								<div class="vignette icon-seo"></div>
								<?php echo $competenceVign3[$lg]; ?>

							</div>
							<div class="clr"></div>
						</div>





			</div>

<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--                                         -PAGE2-                                      -->
			<div class="gdeimg" id="oiseaux"></div>

				<div class="page" id="porto">
						<div class="soixantepixel"></div>


						<!--<div id="porto_top"></div>-->
						<div class="titre_bloc"><h1 class="titre"> > Portfolio </h1></div>


						<?php
							include('diaporama.php');
							//echo '<div id="diap"></div>';
						?>

							 <div class="clr"></div><div class="soixantepixel"></div>
				</div>
						<!--<div class="frise_petite"><div id="frisedroite"></div></div>-->



<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--                                         -PAGE3-                                      -->
			<div id="porto_bottom"></div>
			<div class="page" id="contact">

					<div class="titre_bloc"><h1 class="titre">> Contact</h1></div>
					<div id="coord">
						<div id="infocontact" >
							<h2>Keep in touch</h2>
							<h3> <?php echo $contact[$lg]; ?>
							<a href="mailto:declicsweb@gmail.com "><img src="images/icones/mail.png" alt="@"/> declicsweb@gmail.com </a></h3>


						</div>
					</div>

					<form method="post" action="http://declics.eu/declics.php#contact" id="formulR">
						<?php
						if(!empty($_POST)){
							if($reponse[1]===true)
								echo '<div><p>'.$contactReponseOk[$lg];
							else
								echo '<div><p>'.$contactReponseError[$lg];
							if($reponse[2]===true)
								echo $contactReponseCopieOk[$lg];
							else
								echo $contactReponseCopieError[$lg];

							echo '</p></div>';
							}
						?>
						<div class="formcolonne" id="premiere">

								<span class="messerreur"><?php echo $contactMessageNom[$lg]; ?></span>
							<input type="text" class="validation" id="nom" <?php if(!empty($_POST['nom'])) echo 'value='.$_POST['nom']; else echo 'value="'.$contactInputNom[$lg].'"';?> name="nom" size="45" />
								<span class="messerreur"><?php echo $contactMessageEmail[$lg]; ?></span>
							<input type="email" class="validation" id="email" <?php if(!empty($_POST['email'])) echo 'value='.$_POST['email']; else echo 'value="Email"';?> name="email" size="45"/>
								<span class="messerreur">.</span>
							<input type="text" <?php if(!empty($_POST['sujet'])) echo 'value='.$_POST['sujet']; else echo 'value="'.$contactInputSujet[$lg].'"';?> name="sujet" id="sujet" size="45"/>
						</div>
						<div class="formcolonne">
								<span class="messerreur"><?php echo $contactMessageTextarea[$lg]; ?></span>
							<textarea id="message" class="validation" name="message"><?php if(!empty($_POST['message'])) echo $_POST['message']; else echo 'Message';?></textarea>
							<input type="hidden" name="lg" value ="<?php echo $lg; ?>" />
							<input type="image" src="images/icones/lettre.png" id="valider" alt="valider"/>
						</div>

					</form>
			</div>


	<!--///////////////div diaporama\\\\\\\\\\\\\\\ -->
	<?php $flechediap='<span class="boutondiap"><span class="diapprec dispnone pointeur"><<</span> --- <span class="diapsuiv pointeur">>></span></span>';?>


<div class="clr"></div><div class="soixantepixel"></div>
<footer role="contentinfo">
<a href="mentionsleg.php">Mentions légales</a>
</footer>
<script src="js/funct.min.js" async> </script>
<!-- <script src="js/formulaire.js" async> </script>
<script src="js/carrousel.js" async> </script> -->

</body>
</html>
