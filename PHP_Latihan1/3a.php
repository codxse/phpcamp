<html>
<head>
	<title>Latihan 2A</title>
</head>
<body>
	<?php
		for($i=$_POST['awal']; $i<=$_POST['akhir']; $i++) {
			if($i % 2 == 0)
				echo '<font color="red">' . $i . '</font><br />';
			else
				echo '<font color="blue">' . $i . '</font><br />';
		}
	?>
</body>
</html>