<?php

namespace ContainerPZ0Oxrv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderSuccessControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OrderSuccessController' shared autowired service.
     *
     * @return \App\Controller\OrderSuccessController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/OrderSuccessController.php';

        $container->services['App\\Controller\\OrderSuccessController'] = $instance = new \App\Controller\OrderSuccessController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\OrderSuccessController', $container));

        return $instance;
    }
}