<?php

namespace App\Billing;

interface PaymentGatewayContract
{
  public function setDiscount($amount);

  public function charges($amount);
}