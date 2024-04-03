<?php

namespace App\Form;

use App\Entity\ExpensesCategory;
use App\Entity\Profile;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

class AccueilFormType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $profileType = $options['data']->getProfileType() ?? 'Student';

        $builder

            ->add('profileType', ChoiceType::class, [
                'choices' => $this->profileType(),
                'label' => 'Profile Type',
                'data' => $profileType,

            ])

            ->add('profileBudget')
            //en fonction du type de profil sélectionné par l'utilisateur, on va afficher les catégories de dépenses correspondantes
            //l'utilisateur pourra ensuite sélectionner les catégories de dépenses qui l'intéressent
            ->add('expensesCategory', CollectionType::class, [
                'entry_type' => ChoiceType::class,
                'entry_options' => [
                    'choices' => $this->configureCategories($options['data']->getProfileType()),
                    'label' => false,
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'empty_data' => new ArrayCollection(), // initialize expensesCategory as an empty array
            ]);

}


    public function profileType(): array
    {
        return [
            'Student' => 'Student',
            'Traveler' => 'Traveler',
            'Investor' => 'Investor',
            'Parent' => 'Parent',
            'Couple' => 'Couple',
        ];
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Profile::class,
        ]);
    }


    //L'idée c'est de créer une fonction
    // qui va retourner un tableau de catégories de dépenses en fonction du type de profil sélectionné par l'utlisateur
    private function configureCategories(string $profileType): array
    {
        switch ($profileType) {
            case 'Student':
                return [
                    'categories' => $this->getStudentCategories(),
                    'expensesCategory' => null,
                ];
            case 'Traveler':
                return [
                    'categories' => $this->getTravelerCategories(),
                    'expensesCategory' => null,
                ];
            case 'Investor':
                return [
                    'categories' => $this->getInvestorCategories(),
                    'expensesCategory' => null,
                ];
            case 'Parent':
                return [
                    'categories' => $this->getParentCategories(),
                    'expensesCategory' => null,
                ];
            case 'Couple':
                return [
                    'categories' => $this->getCoupleCategories(),
                    'expensesCategory' => null,
                ];
            default:
                return [];
        }
    }
    // Ici on génère les catégories de dépenses pour Student et on fait pareil pour les autres types de profils
    private function getStudentCategories(): array
    {
        return [
            'Tuition and fees',
            'Books and school supplies',
            'Rent',
            'Food',
            'Transportation',
            'Health insurance',
            'Clothing',
            'Entertainment',
            'Other',
        ];

    }

    private function getTravelerCategories(): array
    {
        return [
            'Flights',
            'Hotels',
            'Taxis',
            'Trains',
            'Buses',
            'Car rentals',
            'Fuel',
            'Parking',
            'Tolls',
            'Tourist attractions',
        ];
    }

    private function getInvestorCategories(): array
    {
        return [
            'Stocks',
            'Bonds',
            'Mutual funds',
            'ETFs',
            'Real estate',
            'Commodities',
            'Cryptocurrencies',
            'Savings accounts',
            'Retirement accounts',
            'Other',
        ];
    }

    private function getParentCategories(): array
    {
        return [
            'Childcare',
            'Education',
            'Food',
            'Clothing',
            'Healthcare',
            'Transportation',
            'Entertainment',
            'Other',
        ];

    }

    private function getCoupleCategories(): array
    {
        return [
            'Housing (rent or mortgage)',
            'Food and household items',
            'Outings/restaurants',
            'Couple\'s vacations',
            'Home and automobile insurance',
            'Medical expenses',
            'Joint savings',
            'Birthday gifts and other special occasions',
            'Entertainment (movies, concerts, etc.)',
            'Joint financial planning',

        ];
    }
}