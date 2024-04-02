<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Request;
use RealRashid\SweetAlert\Facades\Alert;

class eventController extends Controller
{
    public function addEvent()
    {
        return view('Admin.addEvent');
    }
    public function storeEvent()
    {
        $table=new Event();

        $table->Event_name=Request::input('Event_name');
        $table->Event_date=Request::input('Event_date');
        $table->Event_time=Request::input('Event_time');
        $table->Number_of_person=Request::input('Number_of_person');
        $table->save();

        Alert::success('Adicionado','O evento foi adicionado com sucesso!');

        return back();
    }
}
