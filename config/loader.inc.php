<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/config/database.inc.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/config/twig.inc.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/model/user.model.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/model/category.model.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/model/specification.model.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/model/language.model.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/controller/user.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/controller/category.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/controller/specification.php');