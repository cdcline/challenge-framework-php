<?php

require 'vendor/autoload.php';
use Models\HelloData;

echo HelloData::fetchHello()->getData();
