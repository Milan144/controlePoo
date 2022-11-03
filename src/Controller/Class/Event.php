<?php

use App\Controller\Class\Equine;

abstract class Event 
{
   private int $maxCommitments;
   private int $maxWater;
   private array $SubscribedEquine = [];

   public function __construct(int $maxCommitments, int $maxWater)
   {
      $this->setMaxCommitments($maxCommitments);
      $this->setMaxWater($maxWater);
   }

   //Getters

   /**
    * @return int
    */
   public function getMaxCommitments(): int
   {
      return $this->maxCommitments;
   }

   /**
    * @return int
    */
   public function getMaxWater(): int
   {
      return $this->maxWater;
   }

   /**
    * @return array
    */
   public function getSubscribedEquine(): array
   {
      return $this->SubscribedEquine;
   }

   //Setters

   /**
    * @param int $maxCommitments
    * @return self
    */
   public function setMaxCommitments(int $maxCommitments): self
   {
      $this->maxCommitments = $maxCommitments;
      return $this;
   }

   /**
    * @param int $maxWater
    * @return self
    */
   public function setMaxWater(int $maxWater): self
   {
      $this->maxWater = $maxWater;
      return $this;
   }

   //Methods

   /**
    * @param Equine $Equine
    * @return self
    * Check if the array count is less than the max commitments and if the water is less than the max water
    */
   public function subscribeEquine(Equine $Equine): self
   {
      if (count($this->SubscribedEquine) < $this->maxCommitments && $Equine->getWater() < $this->maxWater) {
         $this->SubscribedEquine[] = $Equine;
      } else Throw new Exception("The event is full or has not enought water");
      return $this;
   }

   /**
    * @param Equine $Equine
    * @return self
    */
   public function unsubscribeEquine(Equine $Equine): self
   {
      $key = array_search($Equine, $this->SubscribedEquine);
      unset($this->SubscribedEquine[$key]);
      return $this;
   }



}