<?php
//config file
require_once 'config.php';
//autoload
function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}
