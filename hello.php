<?php
$array_of_strings = array("Привет", "Это", "длинная строка", "Самая самая длинная строка");
$longest_string = $array_of_strings[0];
foreach ($array_of_strings as $string) {
    if (strlen($string) > strlen($longest_string)) {
        $longest_string = $string;
    }
}
echo $longest_string;
?>





