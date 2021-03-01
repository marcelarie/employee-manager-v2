<?php

require_once 'lib/Router.php';

$access = new Router();
$access->readRequest($_REQUEST['url']);
