<?php

namespace App\Controller\Class;

abstract class GameType
{
   private string $GameTypeName;

   public function __construct(string $GameTypeName)
   {
      $this->setGameTypeName($GameTypeName);
   }

   //Getters

   /**
    * @return string
    */
   public function getGameTypeName(): string
   {
      return $this->GameTypeName;
   }

   //Setters

   /**
    * @param string $GameTypeName
    * @return self
    */
   public function setGameTypeName(string $GameTypeName): self
   {
      $this->GameTypeName = $GameTypeName;
      return $this;
   }

   //Methods

   /**
    * Return a string with the name of the game type
    * @return string
    */
   public function __toString(): string
   {
      return "The game type is " . $this->getGameTypeName() . ".";
   }
}