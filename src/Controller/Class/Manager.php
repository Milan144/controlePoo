<?php

namespace App\Controller\Class;

class Manager extends Human
{
   private Human $manager;

   public function __construct(Human $manager)
   {
      $this->setManager($manager);
   }

   //Getters

   /**
    * Get the manager of the stable
    * @return self
    */
   public function getManager(): self
   {
      return $this->manager;
   }

   //Setters

   /**
    * @param Human $manager
    * @return self
    */
   public function setManager(Human $manager): self
   {
      $this->manager = $manager;
      return $this;
   }

   //Methods

   /**
    * Return a string with the name of the manager
    * @return string
    */
   public function __toString(): string
   {
      return "Nom du manager : ". $this->getManager()->getName()."\n";
   }



}