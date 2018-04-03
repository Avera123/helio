<?php

namespace App\Form;

use App\Entity\Contacto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('telefono', TextType::class,array(
                'label' => 'Teléfono'
            ))
            ->add('correo', TextType::class)
            ->add('tipo', ChoiceType::class, array(
                'choices'  => array(
                    'SOPORTE' => 'SOPORTE',
                    'ATENCIÓN AL CLIENTE' => 'ATENCIÓN AL CLIENTE',
                    'COTIZACIÓN' => 'COTIZACIÓN',
                    'INFORMACIÓN' => 'INFORMACIÓN'
                )))
            ->add('mensaje', TextareaType::class)
            ->add('btnGuardar', SubmitType::class, array('label' => 'Enviar'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => Contacto::class,
        ]);
    }
}
