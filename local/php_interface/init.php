<?php
define("DEFAULT_TEMPLATE_PASS", '/local/templates/.default');
define('INCLUDE_AREAS_PATH', '/local/templates/lassie_include_areas');

function debug($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
