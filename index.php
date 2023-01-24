<?php

require 'vendor/autoload.php';

use Utils\Template;
use Models\HelloData;

Template::view(
    'index',
    ['hData' => HelloData::fetchHello()->getData()]
);
