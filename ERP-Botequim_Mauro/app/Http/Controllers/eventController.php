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
    public function allEvent()
    {
        $events=Event::all();

        return view('Admin.allEvent',compact('events'));
    }
    public function updateEvent($id)
    {
        $events=Event::findOrFail($id);

        $events->Event_name=Request::input('Event_name');
        $events->Event_date=Request::input('Event_date');
        $events->Event_time=Request::input('Event_time');
        $events->Number_of_person=Request::input('Number_of_person');
        $events->save();

        Alert::success('Actualizado!','O evento foi actualizado com sucesso!');

        return back();
    }
}
