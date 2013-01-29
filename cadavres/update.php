<!DOCTYPE html> 
<html> 
 <head>
	<?php include '../partials/header.php'; ?>
	<link rel="stylesheet" href="show.css">
</head>
<body> 

<div data-role="page" data-title="Page Connect" >

	<div data-role="header" data-theme="c">
		<a href="../home.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<h1>WriteSomething</h1>
		<a href="" data-icon="star" >32 340</a>
	</div><!-- /header -->

	<div data-role="content">
		<h2>Un arbre sur le nil...</h2>

		<h3>Dernière phrase : </h3>	
		<p>... et il rencontrere un femme, pas tès catholique qui l'invita à la suivre. </p>

		<div data-role="fieldcontain">
			<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
		</div>

		<a href="index.php" data-role="button">Envoyer</a>

	</div><!-- /content -->

	<div data-role="footer" data-theme="c"> 
	<h4>iClick & Dvxam</h4> 
	</div><!-- /footer --> 

</div><!-- /page -->

</body>
</html>