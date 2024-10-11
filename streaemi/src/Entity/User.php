<?php

namespace App\Entity;

use Doctrine\DBAL\Types\DecimalType;
use Doctrine\ORM\Mapping as ORM;
use App\Enum\UserStatusEnum;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
    */

    private $id;

    /**
     * @ORM\Column(type="int", length=255)
     */

     private $username;

     /**
      * @ORM\Column(type="string", length=100)
      */

      private $email;

      /**
       * @ORM\Column(type="string", length=255)
       */

       private $password;

     /**
      * @ORM\Column(type="string", length=255)
      */

      private $accountStatus;

    /**
     * @ORM\Column(type="UserEnumCase")
     */


     public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getAccountStatus(): ?UserStatusEnum 
    {
        return $this->accountStatus;
    }

    public function setAccountStatus(UserStatusEnum $accountStatus): self {
        $this->accountStatus = $accountStatus;
        return $this;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function setPassword(string $password): self {
        $this->password = $password;
        return $this;
    }
}
