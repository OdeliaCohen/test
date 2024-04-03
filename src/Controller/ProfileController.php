<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Entity\User;
use App\Form\AccueilFormType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use function PHPUnit\Framework\returnArgument;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\FormError;

class ProfileController extends AbstractController{

/*#[Route('/profile', name: 'profile')]
    public function profile(): Response
    {
        return $this->render('profile/profile.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    } */

    #[Route('/profile/new_profile', name: 'new_profile')]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $profile = new Profile();
        $form = $this->createForm(AccueilFormType::class, $profile);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $profileType = $form->getData()->getProfileType();
            if ($user->getProfiles()->exists(function ($key, $profile) use ($profileType) {
                return $profile->getProfileType() === $profileType;
            })) {
                // Add an error message to the form
                $form->addError(new FormError('A user cannot have two profiles of the same type.'));
                return $this->render('profile/profile.html.twig', [
                    'controller_name' => 'ProfileController',
                    'form' => $form->createView(),
                ]);
            }
           $expensesCategory = $form->get('expensesCategory')->getData();
            foreach ($expensesCategory as $category) {
                $profile->addExpensesCategory($category);
            }
            $user->addProfile($profile);
            $entityManager->persist($profile);
            $entityManager->flush();

            $formData = $form->getData();

            switch ($profileType) {
                case 'Student':
                    return $this->redirectToRoute('budget_student');
                case 'Traveler':
                    return $this->redirectToRoute('budget_traveler');
                case 'Investor':
                    return $this->redirectToRoute('budget_investor');
                case 'Parent':
                    return $this->redirectToRoute('budget_parent');
                case 'Couple':
                    return $this->redirectToRoute('budget_couple');
                default:
                    return $this->redirectToRoute('budget_accueil');
            }
        }
        return $this->render('profile/profile.html.twig', [
            'controller_name' => 'ProfileController',
            'form' => $form->createView(),
        ]);
    }

    #[Route('/profile/student', name: 'budget_student')]
    public function student(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();


        // Vérifiez si l'utilisateur a des profils
        if ($user && $profiles = $user->getProfiles()) {
            // Parcourez les profils pour trouver le type "Student"
            foreach ($profiles as $profile) {
                if ($profile->getProfileType() === 'Student') {
                    // Si le type de profil est "Student", récupérez le budget
                    $profileBudget = $profile->getProfileBudget();

                    return $this->render('profile/student.html.twig', [
                        'controller_name' => 'ProfileController',
                        'profile' => $profile,
                        'profileBudget' => $profileBudget,
                    ]);
                }
            }
        }


        return $this->render('profile/student.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }

    #[Route('/profile/traveler', name: 'budget_traveler')]
    public function traveler(Request $request, EntityManagerInterface $entityManager): Response
    {

        $user = $this->getUser();


        // Vérifiez si l'utilisateur a des profils
        if ($user && $profiles = $user->getProfiles()) {
            // Parcourez les profils pour trouver le type "Student"
            foreach ($profiles as $profile) {
                if ($profile->getProfileType() === 'Traveler') {
                    // Si le type de profil est "Student", récupérez le budget
                    $profileBudget = $profile->getProfileBudget();

                    return $this->render('profile/traveler.html.twig', [
                        'controller_name' => 'ProfileController',
                        'profile' => $profile,
                        'profileBudget' => $profileBudget,
                    ]);
                }
            }
        }
        return $this->render('profile/traveler.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }

    #[Route('/profile/investor', name: 'budget_investor')]
    public function investor(Request $request, EntityManagerInterface $entityManager): Response
    {

        $user = $this->getUser();


        // Vérifiez si l'utilisateur a des profils
        if ($user && $profiles = $user->getProfiles()) {
            // Parcourez les profils pour trouver le type "Student"
            foreach ($profiles as $profile) {
                if ($profile->getProfileType() === 'Investor') {
                    // Si le type de profil est "Student", récupérez le budget
                    $profileBudget = $profile->getProfileBudget();

                    return $this->render('profile/investor.html.twig', [
                        'controller_name' => 'ProfileController',
                        'profile' => $profile,
                        'profileBudget' => $profileBudget,
                    ]);
                }
            }
        }
        return $this->render('profile/investor.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }

    #[Route('/profile/parent', name: 'budget_parent')]
    public function parent(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();


        // Vérifiez si l'utilisateur a des profils
        if ($user && $profiles = $user->getProfiles()) {
            // Parcourez les profils pour trouver le type "Student"
            foreach ($profiles as $profile) {
                if ($profile->getProfileType() === 'Parent') {
                    // Si le type de profil est "Student", récupérez le budget
                    $profileBudget = $profile->getProfileBudget();

                    return $this->render('profile/parent.html.twig', [
                        'controller_name' => 'ProfileController',
                        'profile' => $profile,
                        'profileBudget' => $profileBudget,
                    ]);
                }
            }
        }
        return $this->render('profile/parent.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }

    #[Route('/profile/couple', name: 'budget_couple')]
    public function couple(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();


        // Vérifiez si l'utilisateur a des profils
        if ($user && $profiles = $user->getProfiles()) {
            // Parcourez les profils pour trouver le type "Student"
            foreach ($profiles as $profile) {
                if ($profile->getProfileType() === 'Couple') {
                    // Si le type de profil est "Student", récupérez le budget
                    $profileBudget = $profile->getProfileBudget();

                    return $this->render('profile/couple.html.twig', [
                        'controller_name' => 'ProfileController',
                        'profile' => $profile,
                        'profileBudget' => $profileBudget,
                    ]);
                }
            }
        }
        return $this->render('profile/couple.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }







}
