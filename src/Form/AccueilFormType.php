<?php

namespace App\Form;

use App\Entity\ExpensesCategory;
use App\Entity\Profile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccueilFormType extends AbstractType
{
    use ExpensesCategoryChoiceLabelTrait;

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $profileType = $options['data'] instanceof Profile ? $options['data']->getProfileType() : null;

        $builder

            ->add('profileType', ChoiceType::class, [
                'choices' => [
                    'Student' => 'Student',
                    'Traveler' => 'Traveler',
                    'Investor' => 'Investor',
                    'Parent' => 'Parent',
                    'Couple' => 'Couple',
                ],
                'attr' => [
                    'class' => 'custom-radio-button',
                ],
            ])

            ->add('profileBudget');
            /*->add('expensesCategory', CollectionType::class, [
                'entry_type' => ChoiceType::class,
                'entry_options' => [
                    'choices' => $this->configureCategories($profileType),
                    'label' => false,
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
                $form = $event->getForm();
                $profile = $event->getData();
                if ($profile instanceof Profile) {
                    $profileType = $profile->getProfileType();
                    $categories = $this->configureCategories($profileType);
                    $form->add('expensesCategory', CollectionType::class, [
                        'entry_type' => ChoiceType::class,
                        'entry_options' => [
                            'choices' => $categories['categories'],
                            'choice_label' => fn (string $category) => $category,
                        ],
                        'allow_add' => true,
                        'allow_delete' => true,
                        'by_reference' => false,
                    ]);
                }
            }); */
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Profile::class,
        ]);
    }

    private function configureCategories(string $profileType): array
    {
        return match ($profileType) {
            'Student' => [
                'categories' => $this->getStudentCategories(),
                'expensesCategory' => null,
            ],
            'Traveler' => [
                'categories' => $this->getTravelerCategories(),
                'expensesCategory' => null,
            ],
            'Investor' => [
                'categories' => $this->getInvestorCategories(),
                'expensesCategory' => null,
            ],
            'Parent' => [
                'categories' => $this->getParentCategories(),
                'expensesCategory' => null,
            ],
            'Couple' => [
                'categories' => $this->getCoupleCategories(),
                'expensesCategory' => null,
            ],
            default => [
                'categories' => [],
                'expensesCategory' => null,
            ],
        };
    }

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