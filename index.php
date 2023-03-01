<?php

require 'vendor/autoload.php';

use Utils\Template;
use Models\HelloData;
use Utils\ServerUtils;

switch(ServerUtils::getEndpointFromUrl()) {
   case 'test':
      Template::view(
         'index',
         ['hData' => 'test']
      );
      return;
   case 'hello':
   default;
      Template::view(
         'index',
         ['hData' => HelloData::fetchHello()->getData()]
      );
}

