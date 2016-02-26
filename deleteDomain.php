<?php
if (isset($_POST['deleteDomainForm']) && !empty($_POST['deleteDomain'])) {
    $file = 'domains.txt';
    $current = file_get_contents($file);
    $current = str_replace($_POST['deleteDomain'] . "\r\n", "", $current);
    file_put_contents($file, $current);
}
?>