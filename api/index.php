<?php

require '../vendor/autoload.php';
use Models\HelloData;
use Utils\ServerUtils;

switch(ServerUtils::getApiEndpointFromUrl()) {
   case 'test':
      echo '{"test"}';
      return;
   default;
      echo HelloData::fetchHello()->toJson();
}
