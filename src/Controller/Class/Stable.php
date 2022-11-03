<?php

namespace App\Controller\Class;

class Stable 
{

   // TODO : Faire la collection d'équidés et ajoiter des equides a la collection
   private string $Name;
   private string $Adress;
   private string $Street;
   private int $PostCode;
   private string $City;
   private Manager $Manager;
   private array $horses = [];
   private array $Riders = [];

   public function __construct(string $Name, string $Adress, string $Street, int $PostCode, $City)
   {
      $this->setName($Name)
            ->setAdress($Adress)
            ->setStreet($Street)
            ->setPostCode($PostCode)
            ->setCity($City);
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
   public function setManager(Human $Human): self
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

   /**
    * Add a horse to the stable
    * @param Equine $horse
    * @return self
    */
   public function addEquine(Equine $equine): self
   {
      $this->equine[] = $equine;
      return $this;
   }

   /**
    * Add a rider to the stable
    * @param Rider $rider
    * @return self
    */
   public function addRider(Rider $rider): self
   {
      $this->Riders[] = $rider;
      return $this;
   }

   /**
    * Get the list of the riders
      * @return array
    */
   public function getRiders(): array
   {
      return $this->Riders;
   }


   



}