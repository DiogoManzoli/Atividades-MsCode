<pre>

<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$length = sizeof($array) -1;

$remove = random_int(0,$length);

echo 'Número retirado da array: ' . $array[$remove];

unset($array[$remove]);


?>

</pre>