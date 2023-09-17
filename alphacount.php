
<?php 

$input = implode('', array_slice($argv, 1));
$alphabetCounting = 0;

for ($i = 0; $i < strlen($input); $i++) {
    if (ctype_alpha($input[$i])) {
        $alphabetCounting++;
    }
}
echo "count: $alphabetCounting";

?>