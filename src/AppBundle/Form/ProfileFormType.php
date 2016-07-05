<?php

namespace AppBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('city')
        ->add('street')
        ->add('streetNumber')
        ->add('flatNumber')
        ->add('postcode');

    }

    public function getName()
    {
        return 'app_user_profile';
    }
}
