<?php


namespace App\Controller;

use App\Entity\Profile;
use App\Entity\User;
use App\Form\AccueilFormType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Services\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use function PHPUnit\Framework\returnArgument;
use Symfony\Component\Form\FormTypeInterface;

class UserController extends AbstractController
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    #[Route('/useraccount', name: 'budget_useraccount')]
    public function useraccount(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isGranted('IS_AUTHENTICATED_REMEMBERED')){
            $user = $this->getUser();
            $user->getProfiles();
            return $this->render('user/useraccount.html.twig', [
                'controller_name' => 'UserController',
                'user' => $user,
            ]);
        }
        return $this->redirectToRoute('home');

    }
    #[Route('/useraccount/deleteUser', name: 'budget_delete_user')]
    public function deleteUserAndProfiles(Request $request, TokenStorageInterface $tokenStorage, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if ($this->isGranted('IS_AUTHENTICATED_REMEMBERED')){
            $this->userService->deleteUserProfiles($user, $entityManager);
            $this->userService->invalidateSessionAndToken($request->getSession(), $tokenStorage);
            return $this->redirectToRoute('home');
        }

        return $this->redirectToRoute('home');
    }
}