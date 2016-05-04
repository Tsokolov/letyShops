<?php
/**
 * Created by PhpStorm.
 * User: SERGEY
 * Date: 03.05.2016
 * Time: 17:21
 */

namespace WebSoft\Bundle\LetyShopsBundle\DependencyInjection;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ProvidersCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('web_soft_lety_shops.provider_manager')) {
            return;
        }

        $definition = $container->findDefinition(
            'web_soft_lety_shops.provider_manager'
        );

        $taggedServices = $container->findTaggedServiceIds(
            'web_soft_lety_shops.provider'
        );

        foreach ($taggedServices as $id => $tags) {
            $definition->addMethodCall(
                'addProvider',
                array(new Reference($id))
            );
        }
    }
}