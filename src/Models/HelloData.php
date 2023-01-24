<?php

namespace Models;
use Utils\DBUtils;

class HelloData
{
   public static function fetchHello(): self
   {
      $q = <<<EOT
      SELECT `hello_text` FROM `hello`
      ORDER BY rand()
EOT;
      $txt = DBUtils::fetchValue($q);
      return new self($txt);
   }

   private function __construct(private string $helloData)
   {
   }

   public function getData(): string
   {
      return $this->helloData;
   }

   public function toJson() {
      return json_encode(['hello-data' => $this->helloData]);
   }
}
