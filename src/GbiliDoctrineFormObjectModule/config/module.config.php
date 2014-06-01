<?php
namespace GbiliDoctrineFormObjectModule;
return array(
    // Zend\Form\FormElementManager configuration
    'form_elements' => array(
        'aliases' => array(
            'objectselect'        => __NAMESPACE__ . '\Form\Element\ObjectSelect',
            'objectradio'         => __NAMESPACE__ . '\Form\Element\ObjectRadio',
            'objectselectnested' => __NAMESPACE__ . '\Form\Element\ObjectSelectNested',
        ),
        'factories' => array(
            __NAMESPACE__ . '\Form\Element\ObjectSelect' => function(ServiceLocatorInterface $pluginManager) {
                $sm = $pluginManager->getServiceLocator();
                $em = $sm->get('Doctrine\ORM\EntityManager');
                $element = new Form\Element\ObjectSelect;

                $element->getProxy()->setObjectManager($em);

                return $element;
            },
            __NAMESPACE__ . '\Form\Element\ObjectRadio' => function(ServiceLocatorInterface $pluginManager) {
                $sm = $pluginManager->getServiceLocator();
                $em = $sm->get('Doctrine\ORM\EntityManager');
                $element = new Form\Element\ObjectRadio;

                $element->getProxy()->setObjectManager($em);

                return $element;
            },
            __NAMESPACE__ . '\Form\Element\ObjectSelectNested' => function(ServiceLocatorInterface $pluginManager) {
                $sm = $pluginManager->getServiceLocator();
                $em = $sm->get('Doctrine\ORM\EntityManager');
                $element = new Form\Element\ObjectSelectNested;

                $element->getProxy()->setObjectManager($em);

                return $element;
            },
        ),
    ),
);
