<?php

namespace App\Controller\Class;

class Rider extends Human
{
   private Stable $Stable;

   public function __construct(string $Name, string $Adress, string $Street, int $PostCode, string $City, GameType $GameType, Stable $Stable, Categorie $Categorie = null)
   {
      parent::__construct($Name, $Adress, $Street, $PostCode, $City, $Categorie);
      $this->setStable($Stable)
            ->setGameType($GameType);
   }

   //Getters

   /**
    * @return Stable
    */
   public function getStable(): Stable
   {
      return $this->Stable;
   }

   //Setters

   /**
    * @param Stable $Stable
    * @return self
    */
   public function setStable(Stable $Stable): self
   {
      $this->Stable = $Stable;
      return $this;
   }

   /**
    * @return string
    */
   public function getGameType(): string
   {
      return $this->GameType->getGameTypeName();
   }

   /**
    * @param string $GameType
    * @return self
    */
   public function setGameType(string $GameType): self
   {
      $this->GameType->setGameTypeName($GameType);
      return $this;
   }

   //Methods
   
   public function __toString()
   {
      return "The rider " . $this->getName() . " is a " . $this->getGameType() . " rider and is a member of the stable " . $this->getStable()->getName() . ".";
   }

   
}