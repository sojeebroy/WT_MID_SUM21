<?php
	$lenth=5;
	$width=5;
	$perimeter=2*($lenth+$width);
	$area=$lenth*$width;
	
?>

<html>
	<head></head>
	<body>
		<?php
			if($lenth===$width)
				{echo "The shape is a square.<br>";
				 echo "The perimeter is : $perimeter and the area is : $area";}
			
			else
				{echo "The perimeter is : $perimeter and the area is : $area";}
		?>
		
	</body>
</html>