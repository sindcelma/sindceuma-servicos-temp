<?php 

include "../api/autoload.php";
include "../api/helpers/app.php";

$req = request(['req'])->vars['req'];

if($req == 'api'){
    include "../api/index.php";
    exit;
}

$file = "../pages/$req.php";

include (file_exists($file) ? $file : "../pages/error.php");