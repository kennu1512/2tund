<?php

$age = 5; 
if ($age < 18) {
	//true - on v�iksem kui 18
	echo"alaealine";
}else{
	//muul juhul
	echo"t�isealine";
}


?>


<br>

<?php

for ($i = 0; $i < $age; $i = $i + 1) {
	
	echo "palju ";
}

echo "�nne!"

?>

<br>


<?php

echo date ("d.m.Y H:i:s");


?>



