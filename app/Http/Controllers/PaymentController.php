<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\Service\PayPalAPIInterfaceServiceService;
use PayPal\PayPalAPI\SetExpressCheckoutRequestType;
use PayPal\PayPalAPI\SetExpressCheckoutReq;

use Redirect;
use Session;
use URL;
use Omnipay\Omnipay as Omnipay;
use Omnipay\Common\GatewayFactory;
use Razorpay\Api\Api;


class PaymentController extends Controller
{
    protected $api;

    public function __construct()
    {
        $this->api = new Api('rzp_test_9U3lxxMAYpSPdt','g7bR4UtClvO3Z9jUNchr5e5N');
    }


    public function payWithpaypal(Request $request)
    {
        return "Working";
        // $order    = $this->api->order->create(array('receipt' => '123', 'amount' => 100, 'currency' => 'INR')); // Creates order
        
        // $order    = $this->api->order->fetch('1'); // Returns a particular order
        // $orders   = $this->api->order->all($options); // Returns array of order objects
        // $payments = $this->api->order->fetch('1')->payments(); // Returns array of payment objects against an order

        // return $payments;
        
        // Payments
        // $payments = $this->api->payment->all($options); // Returns array of payment objects
        // $payment  = $this->api->payment->fetch($id); // Returns a particular payment
        // $payment  = $this->api->payment->fetch($id)->capture(array('amount'=>$amount)); // Captures a payment
        
        // To get the payment details
        // return $payment->amount;
        // return $payment->currency;
    }

    public function getPaymentStatus($status)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error', 'Payment failed');
            return Redirect::to('/');
        }
        $a=$_GET['paymentId'];

        // return $a;
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();

        $b=$_GET['PayerID'];
        $execution->setPayerId($b);

        $c=$execution;
        /**Execute the payment **/

        $result = $payment->execute($c, $this->_api_context);
        if ($result->getState() == 'approved') {
            // return $result;
            //For Store into dateBase

            $payments = Payments::where('payment_id',$result->id)->first();

            $data = [
                'status'  => 1,
            ];
            $payments->update($data);

            return "Payment is Done Please Check Mail!!";
            \Session::put('success', 'Payment success');
            return Redirect::to('/success');
        }
        return "Payment Is Fail Plase Try Again!!";
        \Session::put('error', 'Payment failed');
        return Redirect::to('/Payment_failed');

    }

}