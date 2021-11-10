<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
{
  /**
   * @Route("/user", name="user")
   * @param SerializerInterface $serializer
   * @return JsonResponse
   */

  public function index(SerializerInterface $serializer)
  {

    $user = new User();

    $user->setFullName('Julio Canizalez');
    $user->setCity('Ahuachapán');
    $user->setEmail('mail@juliocanizalez.com');
    $user->setPhone('77777777');
    $user->setCreatedAt(new \DateTime('2021-11-10 00:00:00'));

    $serializedUser = $serializer->serialize($user, 'xml',  ['groups' => ['web', 'phone']]);

    return JsonResponse::fromJsonString($serializedUser);
  }
}
