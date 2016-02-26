<?php
if (isset($_POST['addDomainForm']) && !empty($_POST['addDomain'])) {
    $file = 'domains.txt';
    $current = file_get_contents($file);
    $current .= $_POST['addDomain'] . "\n";
    file_put_contents($file, $current);
}
?>