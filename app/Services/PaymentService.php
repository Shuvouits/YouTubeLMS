<?php


namespace App\Services;

use App\Repositories\StripeRepository;


class PaymentService
{
    protected $stripeRepository;

    public function __construct(StripeRepository $stripeRepository)
    {
        $this->stripeRepository = $stripeRepository;

    }

    public function processPayment(array $data)
    {
        switch ($data['payment_type']) {
            case 'stripe':
                return $this->stripeRepository->handlePayment($data);

            case 'paypal':
                return "paypal";

            default:
                throw new \Exception('Unsupported payment type');
        }
    }
}
