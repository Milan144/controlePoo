<?php

namespace App\Controller\Class;

use Exception;

abstract class Equine extends Animal
{
   private string $id;
   private string $color;
   private int $water;
   private Rider $rider;
   private array $Equines = [];
   private string $Category;

   public function __construct(string $name, string $color, int $water, Rider $rider = null, string $Category)
   {
      parent::__construct($name);
      $this->setId($this->generateId());
      $this->setColor($color);
      $this->setWater($water);
      $this->setRider($rider);
      $this->setCategory($Category);
   }

   //Getters

   /**
    * @return string
    */
   public function getId(): string
   {
      return $this->id;
   }

   /**
    * @return string
    */
   public function getName(): string
   {
      return $this->getAnimalName();
   }

   /**
    * @return string
    */
   public function getColor(): string
   {
      return $this->color;
   }

   /**
    * @return int
    */
   public function getWater(): int
   {
      return $this->water;
   }

   /**
    * @return Rider
    */
   public function getRider(): Rider
   {
      return $this->rider;
   }

   /**
    * @return string
    */
   public function getCategory(): string
   {
      return $this->Category;
   }

   /**
    * @return array
    */
   public function getEquines(): array
   {
      return $this->Equines;
   }

   //Setters

   /**
    * @param string $id
    * @return self
    */
   public function setId(string $id): self
   {
      $this->id = $id;
      return $this;
   }

   /**
    * @param string $name
    * @return self
    */
   public function setName(string $name): self
   {
      $this->name = $name;
      return $this;
   }

   /**
    * @param string $color
    * @return void
    * Check if the entered color is 'Alzan', 'Bai', 'Pie', 'Grey' or 'White' 
    * Then set color or throw an exception
    */
   public function setColor(string $color): void
   {
      if ($color != 'Alzan' && $color != 'Bai' && $color != 'Pie' && $color != 'Grey' && $color != 'White') {
         throw new Exception("The color of the horse must be 'Alzan', 'Bai', 'Pie', 'Grey' or 'White'.");
      } else {
         $this->color = $color;
      } 
   }

   /**
    * @param int $water
    * @return self
    */
   public function setWater(int $water): self
   {
      $this->water = $water;
      return $this;
   }

   /**
    * @param Rider $rider
    * @return self
    */
   public function setRider(Rider $rider): self
   {
      $this->rider = $rider;
      return $this;
   }

   /**
    * @param string $Category
    * @return self
    */
   public function setCategory(string $Category): self
   {
      if($Category != 'Poney' && $Category != 'Cheval' && $Category != 'Sheitland') {
         throw new Exception("The category must be 'Poney' or 'Cheval' or 'Sheitland.");
      } else {
         $this->Category = $Category;
      }
      return $this;
   }

   //Methods

   /**
    * Return a string with the infos of the Equine
    * @return string
    */
   public function __toString(): string
   {
      return "ID : " . $this->getId() . "\nName : " . $this->getName() . "\nColor : " . $this->getColor() . "\nWater : " . $this->getWater() . "\nRider : " . $this->getRider()->getName() . "\nCategory : " . $this->getCategory() . "\n";
   }

   /**
    * Add an Equine to the array of Equines
    * @param Equine $Equine
    * @return void
    */
   public function addEquine(Equine $Equine): void
   {
      $this->Equines[] = $Equine;
   }

   /**
    * Remove an Equine from the array of Equines
    * @param Equine $Equine
    * @return void
    */
   public function removeEquine(Equine $Equine): void
   {
      $key = array_search($Equine, $this->Equines);
      if ($key !== false) {
         unset($this->Equines[$key]);
      }
   }

   /**
   * Generate an ID for the Equine with 000-First letter of the name-First letter of the color-Number of equine in the array
   * @return string
   */
   public function generateId(): string
   {
      $id = '000-' . substr($this->getName(), 0, 1) ."-". substr($this->getColor(), 0, 1) ."-". count($this->getEquines())."\n";
      return $id;
   }
}