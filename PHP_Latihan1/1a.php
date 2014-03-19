<html>
<head>
	<title>Latihan 1A</title>
</head>
<body>
	<?php
		for($i=1; $i<=1000; $i++) {
			if($i % 2 == 0)
				echo '<font color="red">' . $i . '</font><br />';
			else
				echo '<font color="blue">' . $i . '</font><br />';
		}
	?>
</body>
</html>