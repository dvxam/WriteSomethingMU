<!DOCTYPE html> 
<html> 
<head>
	<?php include 'partials/header.php'; ?>
	<style type="text/css">
	body div{
		text-align: center;
	}
	</style>
</head>
<body> 

<div data-role="page" data-title="Page Connect" >

	<div data-role="header" data-theme="c">
		<h1>WriteSomething</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>WriteSomething. Le Jeu de lettre social et mobile.</p>		
		<a href="#popupLogin" data-rel="popup" data-role="button" data-inline="true">Connect with facebook</a>

		<!-- pop up -->
		<div data-role="popup" id="popupLogin" data-overlay-theme="b" data-theme="a" class="ui-corner-all">
			<form>
				<div style="padding:10px 20px;">
				  <h3>Please sign in</h3>
		          <label for="un" class="ui-hidden-accessible">Username:</label>
		          <input type="text" name="user" id="un" value="" placeholder="username" data-theme="a" />

		          <label for="pw" class="ui-hidden-accessible">Password:</label>
		          <input type="password" name="pw" id="pass" value="" placeholder="password" data-theme="a" />

		    	  <a href="home.php" data-role="button">Envoyer</a>
				</div>
			</form>
		</div>
		<!-- end pop up -->

	</div><!-- /content -->

	<div data-role="footer" data-theme="c"> 
	<h4>iClick & Dvxam</h4> 
	</div><!-- /footer --> 

</div><!-- /page -->

</body>
</html>