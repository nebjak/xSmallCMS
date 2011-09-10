<?php

// Load configuration
require_once 'core/config.php';

$page_id = $_GET['p'];

if(is_numeric($page_id)) {
    $p = new Page($page_id);
} else {
    $p = new Page(1);
}

$p->show();
