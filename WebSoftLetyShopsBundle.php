<?php

namespace WebSoft\Bundle\LetyShopsBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use WebSoft\Bundle\LetyShopsBundle\DependencyInjection\ProvidersCompilerPass;

class WebSoftLetyShopsBundle extends Bundle
{
    public function build(ContainerBuilder $container){
        parent::build($container);
        $container->addCompilerPass(new ProvidersCompilerPass());
    }
}
