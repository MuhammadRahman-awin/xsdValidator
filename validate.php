<?php
libxml_use_internal_errors(true);
$xmlstr = file_get_contents('xslt.xml');
$doc = simplexml_load_string($xmlstr);

$xml = explode("\n", $xmlstr);

if (!$doc) {
    $errors = libxml_get_errors();

    foreach ($errors as $error) {
        var_dump($error);
    }

    libxml_clear_errors();
}
