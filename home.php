<!DOCTYPE html> 
<html> 
<head>
	<?php include 'partials/header.php'; ?>
</head>
<body> 

<div data-role="page" data-title="Page Connect" >

	<div data-role="header" data-theme="c">
		<a href="index.php" data-icon="delete" >Logout</a>
		<h1>WriteSomething</h1>
		<a href="" data-icon="star" >32 340</a>
	</div><!-- /header -->

	<div data-role="content">	
			<ul data-role="listview" data-inset="true">
				<li><a href="cadavres/"  >Jouer</a></li>
				<li><a href="badges/">Mes Badges</a></li>
				<li><a href="users/">Mes Amis</a></li>
				<li><a href="cadavres/list_done_by_user.php">Mes Cadavres</a></li>
				<li><a href="cadavres/selection.php">La Sélection</a></li>
				<li><a href="users/leader_board.php">LeaderBoard</a></li>
				<li><a href="index.php">Déconnexion</a></li>
			</ul>
	</div><!-- /content -->

	<div data-role="footer" data-theme="c"> 
	<h4>iClick & Dvxam</h4> 
	</div><!-- /footer --> 

</div><!-- /page -->

</body>
</html>