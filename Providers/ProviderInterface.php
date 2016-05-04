<?php
/**
 * Created by PhpStorm.
 * User: SERGEY
 * Date: 02.05.2016
 * Time: 9:23
 */

namespace WebSoft\Bundle\LetyShopsBundle\Providers;

use Doctrine\ORM\EntityManager;

interface ProviderInterface{

    public function execute();
    public function setEntityManager(EntityManager $em);

}