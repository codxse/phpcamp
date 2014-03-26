<form class="form-horizontal" action="index-styled.php" method="POST">
	<div class="control-group">
		<label class="control-label">Jenis BBM:</label>
		<div class="controls">
			<label class="checkbox inline" for="Bensin">
				<input type="checkbox" id="Bensin" name="bensinChecked" 
					<?php if (isset($_POST[klikTombol]) && isset($_POST['bensinChecked']))
						echo ' checked="checked"'; ?>/> Bensin
			</label>
			<label class="checkbox inline" for="Solar">
				<input type="checkbox" id="Solar" name="solarChecked"
					<?php if (isset($_POST[klikTombol]) && isset($_POST['solarChecked']))
						echo ' checked="checked"'; ?>/> Solar
			</label>
			<label class="checkbox inline" for="Pertamax">
				<input type="checkbox" id="Pertamax" name="pertamaxChecked"
					<?php if (isset($_POST[klikTombol]) && isset($_POST['pertamaxChecked']))
						echo ' checked="checked"'; ?>/> Pertamax
			</label>
		</div>
	</div>
	<div class="control-group">
		<label for="literAwal" class="control-label">Liter Awal:</label>
		<div class="controls">
			<select class="span1" name="literAwal">
<?php
	for ($i=1;$i<=100;$i++) {
		if (isset($_POST['klikTombol']) && $_POST['literAwal'] == $i) {
			echo '
				<option class="literAwal" value="' . $i . '" selected="selected">' . $i . '</option>';
		} else {
			echo '
				<option class="literAwal" value="' . $i . '">' . $i . '</option>';
		}
	}
?>
			</select> Liter
		</div>
	</div>
	<div class="control-group">
		<label for="literAkhir" class="control-label">Liter Akhir:</label>
		<div class="controls">
			<select class="span1" name="literAkhir">
<?php
	for ($i=1;$i<=100;$i++) {
		if (isset($_POST['klikTombol']) && $_POST['literAkhir'] == $i) {
			echo '
				<option class="literAkhir" value="' . $i . '" selected="selected">' . $i . '</option>';
		} else {
			echo '
				<option class="literAkhir" value="' . $i . '">' . $i . '</option>';
		}
	}
?>
			</select> Liter
		</div>
	</div>
	<div class="control-group">
		<label class="control-label"></label>
		<div class="controls">
			<button type="submit" class="btn" name="klikTombol">
				<i class="icon-repeat"></i> Tampilkan
			</button>
		</div>
	</div>
	<div class="control-group" style="margin-top:50px">
		<label class="control-label">Nama:</label>
		<div class="controls">
			<input class="input" id="disabled-input" type="text"
				placeholder="Nadiar AS" disabled="disabled">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">NIM:</label>
		<div class="controls">
			<input class="input" id="disabled-input" type="text"
				placeholder="10111121" disabled="disabled">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Kelas:</label>
		<div class="controls">
			<input class="input" id="disabled-input" type="text"
				placeholder="eCommerce-10" disabled="disabled">
		</div>
	</div>
</form>