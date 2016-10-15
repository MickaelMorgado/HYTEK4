<div class="left-block scrollable">
	<h1>Settings</h1>
	<?php 
		$aud_musics = $aud_musics*10;
		$aud_ambiances = $aud_ambiances*10;
		$aud_weapons = $aud_weapons*10;
		$aud_birds = $aud_birds*10;
	?>
	<span class="name"><label for="settings">Player:</label><?php echo $Name; ?></span>
	<form action="settings-up.php" method="GET">
		<br>
		<label for="settings">Presets:</label>
		<select name='settings' id='settings' class='btn-block'>
        	<option 
        		<?= $settings == 0 ? 'selected="selected"' : ''; ?> 
        		value='low'>low</option>
        	<option 
        		<?= $settings == 1 ? 'selected="selected"' : ''; ?> 
        		value='normal'>normal</option>
        	<option 
        		<?= $settings == 2 ? 'selected="selected"' : ''; ?> 
        		value='ultra'>ultra</option>
        </select>
		<!--?php
			switch ($settings) {
				case 0: echo "
        			
        			<select name='settings' id='settings' class='btn-block'>
                    	<option value='low' selected>low</option>
                    	<option value='normal'>normal</option>
                    	<option value='ultra'>ultra</option>
                    </select>

					"; break;
				case 1: echo "

        			<select name='settings' id='settings' class='btn-block'>
        				<option value='low'>low</option>
        				<option value='normal' selected>normal</option>
        				<option value='ultra'>ultra</option>
        			</select>

					"; break;
				case 2: echo "

        			<select name='settings' id='settings' class='btn-block'>
        				<option value='low'>low</option>
        				<option value='normal'>normal</option>
        				<option value='ultra' selected>ultra</option>
        			</select>

					"; break;								
			}
		?-->
		<br>
        <br><label for="music">Music:</label> 
        <input 
        	type="range" 
        	min="0" 
        	max="10" 
        	value="<?php echo $aud_musics ?>" 
        	name="music">
        <label for="ambiance">Ambiance:</label> 
        <input 
        	type="range" 
        	min="0" 
        	max="10" 
        	value="<?php echo $aud_ambiances ?>" 
        	name="ambiance">
        <label for="weapons">Weapons:</label> 
        <input 
        	type="range" 
        	min="0" 
        	max="10" 
        	value="<?php echo $aud_weapons ?>" 
        	name="weapons">
        <label for="birds">Birds:</label> 
        <input 
        	type="range" 
        	min="0" 
        	max="10" 
        	value="<?php echo $aud_birds ?>" 
        	name="birds">
        <br>	
        <input type="submit" value="apply settings">
	</form>
	<form action="reset-score.php" method="GET">
		<label>BEST SCORE:</label><?php echo $score; ?>
        <input type="submit" class="danger" value="reset score">
	</form>
</div>
<div class="right-block">
<?php 
	switch ($settings) {
		case 0:
			echo "<link rel='stylesheet' href='stylesheets/low-settings.css'>";
			?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: low-settings.css")});</script><?php
			break;
		case 1:
			echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
			?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
			break;
		case 2:
			echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
			echo "<link rel='stylesheet' href='stylesheets/ultra-settings.css'>";
			?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: ultra-settings.css")});</script>
			<div class="smoke"></div>
			<div class="light"></div><?php
			break;
		
		default:
			echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
			?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
			break;
	}
?>
<div class="preview-settings">
	<img src="img/onlyoneminute/moohurun2.gif" style="position:absolute;left: 0px;width: 70px;height: initial;">
</div>