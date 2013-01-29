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
		<h2>Vos Cadavres Terminé : </h2>
			<ul data-role="listview" data-inset="true">
				
				<li>
					<a href="show_done.php">
						<img src="http://placehold.it/100x100" />
						<h3>Un arbre sur le nil... 10/10</h3>
						<p>300 points</p>
					</a>
				</li>
				<li>
					<a href="show_done.php">
						<img src="http://placehold.it/100x100" />
						<h3>Mais pourquoi manger du nez... 20/20</h3>
						<p>750 points</p>
					</a>
				</li>
				<li>
					<a href="show_done.php">
						<img src="http://placehold.it/100x100" />
						<h3>Lorem ipsum dolor sit amet... 32/32</h3>
						<p>1000 points</p>
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