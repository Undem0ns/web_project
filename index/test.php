<?php

use function PHPSTORM_META\type;

include "../connect.php" ?>

<?php
phpinfo();
$numtest = '100,000';

function extract_numbers($string)
{
    return preg_replace("/[^0-9]/", '', $string);
}

echo (int)extract_numbers('$100,000');
echo gettype((int)extract_numbers('$100'));

?>