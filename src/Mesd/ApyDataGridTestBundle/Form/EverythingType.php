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
            ->add('sampleArray')
            ->add('sampleSimpleArray')
            ->add('sampleJsonArray')
            ->add('sampleObject')
            ->add('sampleBoolean')
            ->add('sampleInteger')
            ->add('sampleSmallInt')
            ->add('sampleBigInt')
            ->add('sampleString')
            ->add('sampleText')
            ->add('sampleDatetime')
            ->add('sampleDatetimeTz')
            ->add('sampleDate')
            ->add('sampleTime')
            ->add('sampleDecimal')
            ->add('sampleFloat')
            ->add('sampleBlob')
            ->add('sampleGuid')
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
