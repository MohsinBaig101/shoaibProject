<?php
// namespace PPP;
require_once 'vendor/autoload.php';

use \Stripe\Stripe;
use \Stripe\Customer;
use \Stripe\ApiOperations\Create;
use \Stripe\Charge;
require_once ("stripeConfig.php");
class StripePayment
{

    private $apiKey;

    private $stripeService;

    public function __construct()
    {
        
        $this->apiKey = STRIPE_SECRET_KEY;
        $this->stripeService = new \Stripe\Stripe();
        $this->stripeService->setVerifySslCerts(false);
        $this->stripeService->setApiKey($this->apiKey);
    }

    public function addCustomer($customerDetailsAry)
    {
        
        $customer = new Customer();
        
        $customerDetails = $customer->create($customerDetailsAry);
        
        return $customerDetails;
    }

    public function chargeAmountFromCard($cardDetails)
    {
        $customerDetailsAry = array(
            'email' => $cardDetails['email'],
            'source' => $cardDetails['token']
        );
        $customerResult = $this->addCustomer($customerDetailsAry);
        $charge = new Charge();
        $cardDetailsAry = array(
            'customer' => $customerResult->id,
            'amount' => $cardDetails['amount']*100 ,
            'currency' => $cardDetails['currency_code'],
            'description' => $cardDetails['item_name'],
            'metadata' => array(
                'order_id' => $cardDetails['item_number'],
                // 'shipping_address' => [
                'name' => $cardDetails['shipping_name'],
                'address' => $cardDetails['shipping_address_line1'].' '.$cardDetails['shipping_address_line2'],
                'city' => $cardDetails['shipping_address_city'],
                'state' => $cardDetails['shipping_address_state'],
                'zip' => $cardDetails['shipping_address_zip'],
                'country' => $cardDetails['shipping_address_country'],
                // 'order_id' => $cardDetails['item_number'],
                // ]
                // 'order_id' => $cardDetails['item_number'],
                // 'order_id' => $cardDetails['item_number'],
                // 'order_id' => $cardDetails['item_number'],
                ),
                'shipping' => array(
                    'name' => $cardDetails['shipping_name'],
                    'address' => $cardDetails['shipping_address_line1'].' '.$cardDetails['shipping_address_line2'],
                    'city' => $cardDetails['shipping_address_city'],
                    'state' => $cardDetails['shipping_address_state'],
                    'zip' => $cardDetails['shipping_address_zip'],
                    'country' => $cardDetails['shipping_address_country'],
                )
        );
        $result = $charge->create($cardDetailsAry);

        return $result->jsonSerialize();
    }
}
