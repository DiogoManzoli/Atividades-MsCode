<pre>
<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$max = max($array);

rsort($array);

foreach ($array as $key => $value) {

    if ($value < $max) {
        echo $value;
        return;
    }
}

?>
</pre>