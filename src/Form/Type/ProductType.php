<?php

declare(strict_types=1);

namespace App\Form\Type;
use App\Entity\Category;
use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotNull;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('name', TextType::class, [
                'constraints' => [
                    new NotNull(),
                ]
            ])
            ->add('price', IntegerType::class, [
                'constraints' => [
                    new NotNull(),
                    new GreaterThan([
                        'value' => 0
                    ]),
                ]
            ])
            ->add('subcategory', TextType::class, [
                'constraints' => [
                    new NotNull(),
                ]
            ])
            ->add('url', TextType::class, [
                'constraints' => [
                    new NotNull(),
                ]
                ])
                ->add('features', TextType::class)
                ->add('keywords', TextType::class)
                ->add('description', TextType::class)
                ->add('category', EntityType::class, [
                    'class' => Category::class
                ]);
          
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
