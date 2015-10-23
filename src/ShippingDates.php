<?php

namespace Jh\Shipping;
/**
 * Class ShippingDates                          
 * @package Jh\Shipping
 */
class ShippingDates 
{

    /**
     * @param \DateTime $orderDate
     * @return \DateTime 
     */

public function calculateDeliveryDate(\DateTime $orderDate){
   

        $day = $orderDate->format('w');
        if ($day == 0 ){
            $deliveryDate = $orderDate->modify('+1 day');
        }
        elseif( $day == 3 || $day == 4 || $day == 5 || $day == 6 ){
            $deliveryDate = $orderDate->modify('+2 day');
        }
        $deliveryDate = $orderDate->modify('+3 day');
        return $deliveryDate;
    }
}
