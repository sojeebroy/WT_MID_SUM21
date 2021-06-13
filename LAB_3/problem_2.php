<?php
	$marks=75;
	
?>

<html>
	<head></head>
	<body>
		<b>Grading System:</b><br>
		<?php
			if($marks>=90)
				{echo "The result is : $marks and the grade is A+";}
			elseif($marks>=80 && $marks<90)
				{echo "The result is : $marks and the grade is A";}
			elseif($marks>=70 && $marks<80)
				{echo "The result is : $marks and the grade is B";}
			elseif($marks>=60 && $marks<70)
				{echo "The result is : $marks and the grade is C";}
			else
				{echo "The result is : $marks and the grade is F";}
		?>
		
	</body>
</html>