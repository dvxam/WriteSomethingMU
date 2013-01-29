show_done.php<!DOCTYPE html> 
<html> 
 <head>
	<?php include '../partials/header.php'; ?>
	<link rel="stylesheet" href="badges.css">
</head>
<body> 

<div data-role="page" data-title="Page Connect" >

	<div data-role="header" data-theme="c">
		<a href="../home.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<h1>WriteSomething</h1>
		<a href="" data-icon="star" >32 340</a>
	</div><!-- /header -->

	<div data-role="content">
		
		<h2>Vos Badges :</h2>

		<div class="ui-grid-b" style="text-align:center">
			<div class="ui-block-a">
				<a href="show.php">
					<div class="badge"></div>
				</a>
			</div>
			<div class="ui-block-b">
				<a href="show.php">
					<div class="badge"></div>
				</a>
			</div>
			<div class="ui-block-c">
				<a href="show.php">
					<div class="badge"></div>
				</a>
			</div>
			<div class="ui-block-a">
				<a href="show.php">
					<div class="badge"></div>
				</a>
			</div>

		</div><!-- /grid-b -->


	</div><!-- /content -->

	<div data-role="footer" data-theme="c"> 
	<h4>iClick & Dvxam</h4> 
	</div><!-- /footer --> 

</div><!-- /page -->

</body>
</html>