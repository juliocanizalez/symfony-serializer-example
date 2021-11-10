<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   * @Groups({"phone","web"})
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=255)
   * @Groups({"phone","web"})
   */
  private $fullname;

  /**
   * @ORM\Column(type="string", length=255)
   * @Groups({"phone","web"})
   */
  private $city;

  /**
   * @ORM\Column(type="string", length=255)
   * @Groups({"phone"})
   */
  private $phone;

  /**
   * @ORM\Column(type="string", length=255)
   * @Groups({"phone","web"})
   */
  private $email;

  /**
   * @ORM\Column(type="datetime")
   * @Groups({"phone","web"})
   */
  private $createdAt;

  function setId($id)
  {
    $this->id = $id;
  }
  function getId()
  {
    return $this->id;
  }
  function setFullname($fullName)
  {
    $this->fullname = $fullName;
  }
  function getFullname()
  {
    return $this->fullname;
  }
  function setCity($city)
  {
    $this->city = $city;
  }
  function getCity()
  {
    return $this->city;
  }
  function setPhone($phone)
  {
    $this->phone = $phone;
  }
  function getPhone()
  {
    return $this->phone;
  }
  function setEmail($email)
  {
    $this->email = $email;
  }
  function getEmail()
  {
    return $this->email;
  }
  function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  function getCreatedAt()
  {
    return $this->createdAt;
  }
}
