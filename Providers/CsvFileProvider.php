<?php
/**
 * Created by PhpStorm.
 * User: SERGEY
 * Date: 03.05.2016
 * Time: 20:18
 */

namespace WebSoft\Bundle\LetyShopsBundle\Providers;


use Doctrine\ORM\EntityManager;

class CsvFileProvider implements ProviderInterface
{
    /**
     * @var EntityManager
     */
    private $em;

    public function execute()
    {
//        $file = 'web/files/csv.csv';
//        $row = 1;
//        $handle = fopen("$file", "r");
//
//        $tableau = [];
//        $i = 0;
//
//        $row = ['Event Date'=>'', 'Posting Date'=>'','Event Type'=>'', 'Amount'=>'', 'Program Id'=>'', 'Program Name'=>'', 'Campaign Id'=>'',
//            'Campaign Name'=>'', 'Tool Id'=>'', 'Tool Name'=>'', 'Custom Id'=>'', 'Click Timestamp'=>'', 'eBay Item ID'=>'',
//            'eBay Leaf Category ID'=>'','eBay Quantity Sold'=>'', 'eBay Total Sale Amount'=>'', 'Item Site ID'=>'', 'Meta Category ID'=>'',
//            'Unique Transaction ID'=>'', 'User Frequency ID'=>'', 'Earnings'=>'', 'Traffic Type'=>'', 'Item Name'=>''];
//        $rows = [];
//
//        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
//        {
//            if($i>0){
//
//            }
//            $i++;
//        }
//        dump($tableau);
    }

    /**
     * @param EntityManager $em
     */
    public function setEntityManager(EntityManager $em)
    {
        $this->em = $em;
    }
}