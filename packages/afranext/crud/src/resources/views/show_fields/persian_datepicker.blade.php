

<?php


 $miladi = gmdate("Y-m-d\TH:i:s\Z", $field['value'] / 1000);

echo \Hekmatinasser\Verta\Facades\Verta::instance($miladi)->format('Y/n/j');
?>
