<!DOCTYPE html> 
<html> 
 <head>
	<?php include '../partials/header.php'; ?>
</head>
<body> 

<div data-role="page" data-title="Page Connect" >

	<div data-role="header" data-theme="c">
		<a href="../home.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<h1>WriteSomething</h1>
		<a href="" data-icon="star" >32 340</a>
	</div><!-- /header -->

	<div data-role="content">
		<a href="create.php" data-role="button" data-theme="c">Créer un nouveau cadavre</a>
		<h2>Vos Cadavres en cours : </h2>
			<ul data-role="listview" data-inset="true">
				
				<li>
					<a href="show.php">
						<img src="http://placehold.it/100x100" />
						<h3>Un arbre sur le nil... 7/10</h3>
						<p>... et il rencontrere un femme, pas tès catholique ...</p>
					</a>
				</li>
				<li>
					<a href="show.php">
						<img src="http://placehold.it/100x100" />
						<h3>Mais pourquoi manger du nez... 4/15</h3>
						<p>... un bon, une brut et un truant arrivère pour lui taper dessus  ...</p>
					</a>
				</li>
				<li>
					<a href="show.php">
						<img src="http://placehold.it/100x100" />
						<h3>Lorem ipsum dolor sit amet... 3/20</h3>
						<p>... incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis </p>
					</a>
				</li>
			</ul>
	</div><!-- /content -->

	<div data-role="footer" data-theme="c"> 
	<h4>iClick & Dvxam</h4> 
	</div><!-- /footer --> 

</div><!-- /page -->

</body>
</html>