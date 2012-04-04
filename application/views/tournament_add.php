<h2>Tournament for <?= $community ?></h2>
<form action="" method="POST">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td style="vertical-align: top;">Refs:</td>
			<td><div id="refs">
				<input type="hidden" name="refCount" value="1" />
				<input type="text" name="ref1"> <!--onBlur="add('ref')">-->
				
			</div><input type="button" onclick="add('ref')" value="Add!"></td>
		</tr>
		<tr>
		<td style="vertical-align: top;">Maps:</td>
			<td><div id="maps">
				<input type="hidden" name="mapCount" value="1" />
				<input type="text" name="map1"> <!--onBlur="add('map')">-->
			</div><input type="button" onclick="add('map')" value="Add!"></td>
		</tr>
		
		<? //player_autocomplete('ref') ?>
		<? //map_autocomplete('map') ?>
		
		<?
			//Ref Selection
			/*
			for($i=1;$i<=5;$i++)
			{
				$hidden = $i == 1 ? "" : "class=\"hidden\"";
				echo "<tr " . $hidden . " id=\"ref" . $i ."\">";
				echo "<td>Ref " . $i . ":</td>";
				echo "<td><input type=\"text\" name=\"ref" . $i . "\">";
				if($i==5)
				{
					echo "<div style=\"font-size:8pt\">A maximum of 5 refs are allowed.</div>";
				} else {
					echo "<input type=\"button\" id=\"addref" . $i . "\" onclick=\"addRef()\" value=\"Add\">";
				}
				echo "<input type=\"button\" id=\"removeref" . $i . "\" class=\"hidden\" onclick=\"removeRef()\" value=\"Remove\">";
				echo "</td></tr>";
			}
			*/
		?>
		<?
			//Map Selection
			/*
			for($i=1;$i<=5;$i++)
			{
				$hidden = $i == 1 ? "" : "class=\"hidden\"";
				echo "<tr " . $hidden . " id=\"map" . $i ."\">";
				echo "<td style=\"vertical-align:top\">Map " . $i . ":</td><td><select name=\"map" . $i . "\">";
				echo "<option value=\"0\">Select a map</option>";
				foreach($available_maps as $id => $name)
				{
					echo '<option value="' . $id . '">' . $name . '</option>';
				}
				echo "</select>";
				if($i==5)
				{
					echo "<div style=\"font-size:8pt\">A maximum of 5 maps are allowed.</div>";
				} else {
					echo "<input type=\"button\" id=\"addmap" . $i . "\" onclick=\"addMap()\" value=\"Add\">";
				}
				echo "<input type=\"button\" id=\"removemap" . $i . "\" class=\"hidden\" onclick=\"removeMap()\" value=\"Remove\">";
				echo "</td></tr>";
			}
			*/
		?>
		<tr>
			<td>Description</td>
			<td><textarea name="description"><?= $description ?></textarea></td>
		</tr>
		<tr>
			<td>Should this tournament be <br />exclusive to your community?</td>
			<td>
				<select name="exclusive">
					<option value="0">No</option>
					<option value="1">Yes</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="Create">
			</tr>
		</tr>
	<table>
</form>