<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Request;
use App\Models\Payment;

class paymentController extends Controller
{
    public function addPayment()
    {
        $payments=Payment::all();

        return view("Admin.allPayment",compact('payments'));
    }
    public function storePayment()
    {
        //?Inicio do metodo responsavel por adicionar o tipo de pagamento
        $payment=new Payment();

        $payment->Name_payment=Request::input('Name_payment');
        $payment->Code=Request::input('Code');

        $payment->save();

        Alert::success('Adicionado!','O tipo de pagamento foi adicionado com sucesso!');

        return back();
    }
    public function updatePayment($id)
    {
        $payment=Payment::findOrFail($id);

        $payment->Name_payment=Request::input('Name_payment');
        $payment->Code=Request::input('Code');

        $payment->save();

        Alert::success('Actualizado!','O tipo de pagamento foi actualizado com sucesso!');

        return back();
    }
    public function deletePayment($id)
    {
        $payment=Payment::findOrFail($id);

        $payment->delete();

        Alert::success('Eliminado!','O tipo de pagamento foi eliminado com sucesso!');

        return back();
    }
}
