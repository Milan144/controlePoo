<?php

namespace App\Controller\Class;

abstract class Animal {

   private string $Name;

   public function __construct(string $Name) {
      $this->setAnimalName($Name);
   }

   //Getters

   /**
    * @return string
    */
   public function getAnimalName(): string {
      return $this->Name;
   }

   //Setters

   /**
    * @param string $Name
    * @return self
    */
   public function setAnimalName(string $Name): self {
      $this->Name = $Name;
      return $this;
   }
}