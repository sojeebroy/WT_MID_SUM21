<html>
	<head></head>
	<body>
		<?php
		$arr=array("raju","mina","mithu");
		$name="raju";
			
		for($i=0; $i<count($arr); $i++){
			if($arr[$i]===$name)
				{echo "Hello ";}
			else
				{echo "Not recognized ";}
		}
		?>
		
	</body>
</html>