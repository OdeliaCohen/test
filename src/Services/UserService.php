<?php

namespace App\Services;

use App\Entity\Profile;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class UserService
{
    public function deleteUserProfiles(User $user, EntityManagerInterface $entityManager ): void
    {
        $user->setEmailValid(null);
        $entityManager->flush();
        $entityManager->remove($user);

        foreach ($user->getProfiles() as $profile) {
            $entityManager->remove($profile);
        }

        $entityManager->flush();
    }

    public function invalidateSessionAndToken(SessionInterface $session, TokenStorageInterface $tokenStorage): void
    {
        $session->invalidate();
        $tokenStorage->setToken(null);
    }
}



