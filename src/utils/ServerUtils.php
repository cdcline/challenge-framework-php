<?php

namespace Utils;

class ServerUtils {
   public static function getEndpointFromUrl(): string {
      $pathValues = self::getPathValues();
      // Grab secondURI entry as the api "endpoint"
      return isset($pathValues[1]) ? $pathValues[1] : '';
   }

   public static function getApiEndpointFromUrl(): string {
      $pathValues = self::getPathValues();
      // Grab secondURI entry as the api "endpoint"
      return isset($pathValues[2]) ? $pathValues[2] : '';
   }

   private static function getPathValues(): array {
      $uri = $_SERVER['REQUEST_URI'];
      $pUrl = parse_url($uri);
      return explode("/", $pUrl['path']);
   }
}