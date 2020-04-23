<div class="container mt-5 mb-5">
<div class="form-group row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="temp">Temperature</label>
		<input class="form-control" type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
		<label for="convert-from">Convert from...</label>
		<select name="originalunit" class="form-control" id="convert-from">
			<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
			<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
			<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
			<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
		</select>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4">
		<label for="convert-to">Convert to...</label>
		<select name="conversionunit" class="form-control" id="convert-to">
			<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
			<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
			<option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
			<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
		</select>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-4 converted-temp">
		<label for="convertedtemp">Converted Temperature</label>
		<input class="form-control" type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
		name="convertedtemp" size="7" maxlength="7" id="convertedtemp" placeholder="Converted Temperature...">
	</div>
	</div> <!-- end first row div -->
	<div class="form-group row">
		<div class="col-12">
			<input type="submit" class="btn btn-primary" value="Convert!"/>  
		</div>
	</div>
	</form>

<!-- form info -->
<div class="row mt-5 form-info">
	<div class="col-sm-12 col-md-6 col-lg-6">
		<h2 class="form-info-headers">Formulas Used</h2>
		<ul>
			<li><span class="units">Celsius to Fahrenheit =</span> T(°C) × 9/5 + 32</li>
			<li><span class="units">Celsius to Kelvin =</span> T(°C) + 273.15</li>
			<li><span class="units">Fahrenheit to Celsius =</span> (T(°F) - 32) × 5/9</li>
			<li><span class="units">Fahrenheit to Kelvin =</span> (T(°F) + 459.67)× 5/9</li>
			<li><span class="units">Kelvin to Fahrenheit =</span> T(K) × 9/5 - 459.67</li>
			<li><span class="units">Kelvin to Celsius =</span> T(K) - 273.15</li>
		</ul>
	</div> <!-- end of col 1 div -->
	<div class="col-sm-12 col-md-6 col-lg-6">
		<h2 class="form-info-headers">Units of Measure</h2>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus optio hic pariatur nisi asperiores beatae quia laborum sequi illo consectetur! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus optio hic pariatur nisi asperiores beatae quia laborum sequi illo consectetur!</p>
	</div> <!-- end of col 1 div -->
</div> <!-- end of form info div -->
</div> <!-- end container div -->