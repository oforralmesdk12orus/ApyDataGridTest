<?php

namespace Mesd\ApyDataGridTestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EverythingType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sampleBoolean')
            ->add('sampleInteger')
            ->add('sampleSmallInt')
            ->add('sampleBigInt')
            ->add('sampleString')
            ->add('sampleText')
            ->add('sampleDatetime')
            ->add('sampleDate')
            ->add('sampleTime')
            ->add('sampleDecimal')
            ->add('sampleFloat')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mesd\ApyDataGridTestBundle\Entity\Everything'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mesd_apydatagridtestbundle_everything';
    }
}
