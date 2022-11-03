<?php

namespace App\Controller\Class;

abstract class Equine extends Animal
{
   private string $id;
   private string $name;
   private string $color;
   private int $water;
   private Rider $rider;
   private array $Equines = [];
   private string $Category;

   public function __construct(string $id, string $name, string $color, int $water,  ,Rider $rider = null)
   {
      $this->setId($id)
         ->setName($name)
         ->setColor($color)
         ->setWater($water)
         ->setRider($rider);
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
      return $this->name;
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

   //Methods

   /**
    * Return a string with the infos of the Equine
    * @return string
    */
   public function __toString(): string
}