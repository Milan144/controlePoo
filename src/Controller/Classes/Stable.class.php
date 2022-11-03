<?php

class Stable 
{
   private string $Name;
   private string $Adress;
   private string $Street;
   private int $PostCode;
   private string $City;
   private Manager $Manager;

   public function __construct(string $Name, string $Adress, string $Street, int $PostCode, $City, Manager $Manager = null)
   {
      $this->setName($Name)
            ->setAdress($Adress)
            ->setStreet($Street)
            ->setPostCode($PostCode)
            ->setCity($City)
            ->setManager($Manager);
   }

   //Getters

   /**
    * @return string
    */
   public function getName(): string
   {
      return $this->Name;
   }

   /**
    * @return string
    */
   public function getAdress(): string
   {
      return $this->Adress;
   }

   /**
    * @return string
    */
   public function getStreet(): string
   {
      return $this->Street;
   }

   /**
    * @return int
    */
   public function getPostCode(): int
   {
      return $this->PostCode;
   }

   /**
    * @return string
    */
   public function getCity(): string
   {
      return $this->City;
   }

   /**
    * Get the manager of the stable
    * @return Human
    */
   public function getManager(): Human
   {
      return $this->Manager->getManager();
   }

   //Setters

   /**
    * @param string $Name
    * @return self
    */
   public function setName($Name): self
   {
      $this->Name = $Name;
      return $this;
   }

   /**
    * @param string $Adress
    * @return self
    */
   public function setAdress($Adress): self
   {
      $this->Adress = $Adress;
      return $this;
   }

   /**
    * @param string $Street
    * @return self
    */
   public function setStreet($Street): self
   {
      $this->Street = $Street;
      return $this;
   }

   /**
    * @param int $PostCode
    * @return self
    */
   public function setPostCode($PostCode): self
   {
      $this->PostCode = $PostCode;
      return $this;
   }

   /**
    * @param string $City
    * @return self
    */
   public function setCity($City): self
   {
      $this->City = $City;
      return $this;
   }

   /**
    * Set the manager of the stable
    * @param Human $Human
    * @return self
    */
   public function setManager($Human): self
   {
      $this->Manager->setManager($Human);
      return $this;
   }

   //Methods

   /**
    * Print the infos of the stable
    *
    * @return string
    */
   public function __toString(): string
   {
      return "Name of the stable : " . $this->getName() . ", Adress:  " . $this->getAdress() . ", Street: " . $this->getStreet() . ", Post Code:  " . $this->getPostCode() . ", City: " . $this->getCity() . ", Name of the manager: " . $this->getManager()->getName()."\n";
   }


}