<?php
namespace GbiliDoctrineFormObjectModule;
return array(
    // Zend\Form\FormElementManager configuration
    'form_elements' => array(
        'aliases' => array(
            'objectselect'        => 'GbiliDoctrineFormObjectModule\Form\Element\ObjectSelect',
            'objectradio'         => 'GbiliDoctrineFormObjectModule\Form\Element\ObjectRadio',
            'objectselectnested' => 'GbiliDoctrineFormObjectModule\Form\Element\ObjectSelectNested',
        ),
        'factories' => array(
            'GbiliDoctrineFormObjectModule\Form\Element\ObjectSelect' => function(ServiceLocatorInterface $pluginManager) {
                $sm = $pluginManager->getServiceLocator();
                $em = $sm->get('Doctrine\ORM\EntityManager');
                $element = new Form\Element\ObjectSelect;

                $element->getProxy()->setObjectManager($em);

                return $element;
            },
            'GbiliDoctrineFormObjectModule\Form\Element\ObjectRadio' => function(ServiceLocatorInterface $pluginManager) {
                $sm = $pluginManager->getServiceLocator();
                $em = $sm->get('Doctrine\ORM\EntityManager');
                $element = new Form\Element\ObjectRadio;

                $element->getProxy()->setObjectManager($em);

                return $element;
            },
            'GbiliDoctrineFormObjectModule\Form\Element\ObjectSelectNested' => function(ServiceLocatorInterface $pluginManager) {
                $sm = $pluginManager->getServiceLocator();
                $em = $sm->get('Doctrine\ORM\EntityManager');
                $element = new Form\Element\ObjectSelectNested;

                $element->getProxy()->setObjectManager($em);

                return $element;
            },
        ),
    ),
);
