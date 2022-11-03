<?php

namespace App\Controller\Class;

abstract class Categorie
{
   private string $Name;

   public function __construct(string $Name)
   {
      $this->setName($Name);
   }

   //Getters

   /**
    * @return string
    */
   public function getName(): string
   {
      return $this->Name;
   }

   //Setters

   /**
    * @param string $Name
    * @return self
    */
   public function setName(string $Name): self
   {
      $this->Name = $Name;
      return $this;
   }
}