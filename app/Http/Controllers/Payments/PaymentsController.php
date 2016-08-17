<?php
/**
 * Site web de vente - Commerxio
 * @author Micaël Cid
 * @version 1.0
 *
 * Controlleur permettant de gérer le paiement.
 */

namespace App\Http\Controllers\Payments;
use Omnipay\Omnipay;
use Session;
use Gloudemans\Shoppingcart\Facades\Cart;

/**
 * Class PaymentController
 * @package App\Http\Controllers
 */
class PaymentController extends Controller

{
    /**
     * Fonction me permettant de tout préparer pour envoyer la requête de paiement.
     *
     * @todo Compléter la fonction, notamment au niveau du traitement de $response
     * Permet de mettre tous les paramètres nécessaires au paiement dans la session de l'utilisateur.
     * L'url d'annulation.
     * L'url de retour en cas de succès.
     * Le montant total.
     * La devise.
     * Le contenue de tous les articles de mon chariots.
     */

    public function postPayment()
    {

        $items = array();
        foreach(Cart::content() as $item)
        {
            $items[] = array('name' => $item->name, 'quantity' => $item->qty, 'price' => $item->price);
        }

        $params = array(
            'cancelUrl'=>'http://commerxio.dev/payment/cancel',
            'returnUrl'=>'http://commerxio.dev/payment/sucess',
            'amount' =>  Cart::total(),
            'currency' => 'CHF'
        );

        Session::put('params', $params);
        Session::save();

        $gateway = Omnipay::create('PayPal_Express');
        $gateway->setUsername('SanboxEmail');
        $gateway->setPassword('SanboxPassword');
        $gateway->setSignature('SanboxSignature');
        $gateway->setTestMode(true);

        $response = $gateway->purchase($params)->setItems($items)->send();

        if ($response->isSuccessful()) {

            // payment was successful: update database
            print_r($response);
        } elseif ($response->isRedirect()) {

            // redirect to offsite payment gateway
            $response->redirect();
        } else {
            // payment failed: display message to customer
            echo $response->getMessage();
        }
    }

    /**
     * Fonction permettant de completer la requête de paiement, ainsi que de traiter la réponse de PayPal.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function getSuccessPayment()
    {
        $gateway = Omnipay::create('PayPal_Express');
        $gateway->setUsername('cidmicael-facilitator_api1.gmail.com');
        $gateway->setPassword('BFW9DEWAAJ4WFY46');
        $gateway->setSignature('AFcWxV21C7fd0v3bYYYRCpSSRl31AzDsjPZWhQ9A4NTb7RvxzcBho-NW');
        $gateway->setTestMode(true);

        $params = Session::get('params');
        $response = $gateway->completePurchase($params)->send();
        $paypalResponse = $response->getData(); // this is the raw response object

        if(isset($paypalResponse['PAYMENTINFO_0_ACK']) && $paypalResponse['PAYMENTINFO_0_ACK'] === 'Success') {
            return view('payment.sucess');
        } else {

            //Failed transaction

        }
    }
}