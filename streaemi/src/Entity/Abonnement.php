<?php

namespace App\Entity;

use Doctrine\DBAL\Types\DecimalType;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbonnementRepository")
 */
class Abonnement{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
    */

    private $id;

    /**
     * @ORM\Column(type="int", length=255)
     */

      private $price;

      /**
       * @ORM\Column(type="decimal", length=10, scale=2)
       */ 
      private $durationInMonths;

    /**
     * @ORM\Column(type="int", length=255)
     */


     public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?DecimalType
    {
        return $this->price;
    }
    public function setPrice(DecimalType $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getDurationInMonths(): ?int
    {
        return $this->durationInMonths;
    }
    public function setDurationInMonths(int $durationInMonths): self
    {
        $this->durationInMonths = $durationInMonths;
        return $this;
    }
}
