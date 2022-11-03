<?php

class Capabilitie 
{
   private string $CapabilitieName;

   public function __construct(string $CapabilitieName)
   {
      $this->setCapabilitieName($CapabilitieName);
   }

   //Getters

   /**
    * @return string
    */
   public function getCapabilitieName(): string
   {
      return $this->CapabilitieName;
   }

   //Setters

   /**
    * @param string $CapabilitieName
    * @return self
    * Check if the CapabilitieName is 'Saut', 'Dressage', 'Cross' or 'PoneyGames'
    * If PoneyGames check if the equine is a horse, if it is, throw an exception
    */
   public function setCapabilitieName(string $CapabilitieName): self
   {
      if ($CapabilitieName === 'Saut' || $CapabilitieName === 'Dressage' || $CapabilitieName === 'Cross') {
         $this->CapabilitieName = $CapabilitieName;
      } elseif ($CapabilitieName === 'PoneyGames') {
         if ($this instanceof Poney || $this instanceof Sheitland || $this instanceof Rider) {
            $this->CapabilitieName = $CapabilitieName;
         } else {
            throw new Exception("Uniquement les poneys et les sheitlands peuvent participer aux PoneyGames.");
         }
      } else {
         throw new Exception("La capacité n'est pas valide");
      }
      return $this;
   }

   //Methods

   /**
    * Return a string with the name of the capabilitie
    * @return string
    */
   public function __toString(): string
   {
      return "The capabilitie is " . $this->getCapabilitieName() . ".";
   }


}