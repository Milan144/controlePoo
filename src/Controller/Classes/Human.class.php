<?php

abstract class Human
{
   private string $Name;
   private string $Adress;
   private string $Street;
   private int $PostCode;
   private string $City;
   private Categorie $Categorie;

   public function __construct(string $Name, string $Adress, string $Street, int $PostCode, string $City, Categorie $Categorie = null)
   {
      $this->setName($Name)
            ->setAdress($Adress)
            ->setStreet($Street)
            ->setPostCode($PostCode)
            ->setCity($City)
            ->setCategorie($Categorie);
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
    * @return Categorie
    */
   public function getCategorie(): Categorie
   {
      return $this->Categorie;
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

   /**
    * @param string $Adress
    * @return self
    */
   public function setAdress(string $Adress): self
   {
      $this->Adress = $Adress;
      return $this;
   }

   /**
    * @param string $Street
    * @return self
    */
   public function setStreet(string $Street): self
   {
      $this->Street = $Street;
      return $this;
   }

   /**
    * @param int $PostCode
    * @return self
    */
   public function setPostCode(int $PostCode): self
   {
      $this->PostCode = $PostCode;
      return $this;
   }

   /**
    * @param string $City
    * @return self
    */
   public function setCity(string $City): self
   {
      $this->City = $City;
      return $this;
   }

   /**
    * @param Categorie $Categorie
    * @return self
    */
   public function setCategorie(Categorie $Categorie): self
   {
      $this->Categorie = $Categorie;
      return $this;
   }

   //Methods

   /**
    * Print the infos of the human
    *
    * @return string
    */
    public function __toString(): string
    {
       return "Name : " . $this->getName() . ", Adress:  " . $this->getAdress() . ", Street: " . $this->getStreet() . ", Post Code:  " . $this->getPostCode() . ", City: " . $this->getCity() . ", Name of the category: " . $this->getCategorie()->getName()."\n";
    }
}