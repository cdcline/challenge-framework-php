<?php

namespace Models;

class HelloData
{
   public static function fetchHello(): self
   {
      return new self('Hello World');
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
