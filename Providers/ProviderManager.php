<?php
/**
 * Created by PhpStorm.
 * User: SERGEY
 * Date: 03.05.2016
 * Time: 18:33
 */

namespace WebSoft\Bundle\LetyShopsBundle\Providers;


class ProviderManager
{
    private $providers = [];

    public function addProvider(ProviderInterface $provider){
        $this->providers[] = $provider;
    }

    public function executeAll(){
        foreach ($this->providers as $provider){
            $provider->execute();
        }
    }
}