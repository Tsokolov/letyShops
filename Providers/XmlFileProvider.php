<?php
/**
 * Created by PhpStorm.
 * User: SERGEY
 * Date: 03.05.2016
 * Time: 18:56
 */

namespace WebSoft\Bundle\LetyShopsBundle\Providers;


use Doctrine\ORM\EntityManager;
use WebSoft\Bundle\LetyShopsBundle\Entity\Booking;

class XmlFileProvider implements ProviderInterface
{
    /**
     * @var EntityManager
     */
    protected $em;

    public function setEntityManager(EntityManager $em){
        $this->em = $em;
    }

    public function execute()
    {
        $xml = file_get_contents('web/files/xml.xml');
        $data = simplexml_load_string($xml);
        foreach ($data as $item){
            $order = $this->em->getRepository('WebSoftLetyShopsBundle:Booking')->findOneBy(['shopId'=>$item->advcampaign_id, 'shopOrderId'=>$item->order_id]);
            if(!$order){
                $order = new Booking();
                $order->setCreatedAt(new \DateTime($item->action_date));
                $order->setShopOrderId($item->order_id);
                $order->setShopId($item->advcampaign_id);
                $order->setCurrency($item->currency);
            }
            $order->setPayment($item->cart);
            $order->setStatus($item->status);
            $this->em->persist($order);
        }
        $this->em->flush();
    }
}