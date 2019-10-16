<?php

use app\Wcs\Hello;
use HelloWorld\SayHello;

require_once '../vendor/autoload.php'; // Autoload files using Composer autoload

echo SayHello::world();
echo app\Wcs\Hello::talk();




