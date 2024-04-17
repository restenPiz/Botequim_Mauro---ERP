<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Request;
use App\Models\Payment;

class paymentController extends Controller
{
    public function addPayment()
    {
        return view("Admin.allPayment");
    }
    public function storePayment()
    {
        $payment=new Payment();

        $payment->Name_payment=Request::input('Name_payment');
        $payment->Code=Request::input('Code');

        $payment->save();

        Alert::success('Adicionado!','O tipo de pagamento foi adicionado com sucesso!');

        return back();
    }
    public function updatePayment()
    {

    }
}
