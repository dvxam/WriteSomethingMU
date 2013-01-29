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
		<div data-role="fieldcontain">
	         <label for="name">Nom du cadavre</label>
	         <input type="text" name="name" id="name" value=""  />
		</div>

		<div data-role="fieldcontain">
			<label for="textarea">Il était une fois...</label>
			<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
		</div>

		<div data-role="fieldcontain">
			<label for="slider">Nombre de phrase max</label>
			 <input type="range" name="slider" id="slider" value="50" min="0" max="100" data-highlight="true"  />
		</div>

		<div data-role="fieldcontain">
			<label for="slider2">Inviter des amis</label>
			<select name="slider2" id="slider2" data-role="slider">
				<option value="off">non</option>
				<option value="on">oui</option>
			</select>
		</div>

		<div data-role="fieldcontain" class="friendlist">
			<fieldset data-role="controlgroup">
				<input type="checkbox" name="checkbox-1a" id="checkbox-1a" class="custom" />
				<label for="checkbox-1a">Loic iClick</label>

				<input type="checkbox" name="checkbox-2a" id="checkbox-2a" class="custom" />
				<label for="checkbox-2a">Luc Nurbel</label>

				<input type="checkbox" name="checkbox-3a" id="checkbox-3a" class="custom" />
				<label for="checkbox-3a">Sophia Bentikuk</label>

				<input type="checkbox" name="checkbox-4a" id="checkbox-4a" class="custom" />
				<label for="checkbox-4a">Philou Pons</label>

				<input type="checkbox" name="checkbox-4a" id="checkbox-5a" class="custom" />
				<label for="checkbox-5a">Anne Deveaux</label>
		    </fieldset>
		</div>

		<fieldset class="ui-grid-a">
				<div class="ui-block-a"><a href="index.php" data-role="button">Annuler</a></div>
				<div class="ui-block-b"><a href="show.php" data-role="button">Créer</a></div>
	    </fieldset>
	</div><!-- /content -->

	<div data-role="footer" data-theme="c"> 
	<h4>iClick & Dvxam</h4> 
	</div><!-- /footer --> 

	<script type="text/javascript">
		$(document).ready(function(){
			$('.friendlist').hide();
			$('select#slider2').change(function(){
				$('.friendlist').slideToggle();
			});
		});
	</script>

</div><!-- /page -->

</body>
</html>