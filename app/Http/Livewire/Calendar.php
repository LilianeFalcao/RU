<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Reserva;
class Calendar extends Component
{
    public $almoco = '';
    public $janta = '';
    public $start = '';

     public static function rules()
    {
        return [
            'almoco'  => ['string', 'max:255'],
            'janta'  => [ 'string', 'max:255'],
            'start' => ['required', 'date'],
        ];
    }

    public function render()
    {
        $events = array();
        $reservas = Reserva::where('user_id',auth()->user()->id)->get();
        foreach($reservas as $reserva){
            $events[] = [
                'title' => 'Agendado',
                'almoco' => $reserva->almoco,
                'janta' => $reserva->janta,
                'start' => $reserva->start,
            ];
        }
        return view('livewire.calendar', ['events' => $events]);
    }
    public function store(){
        $this->validate();

        Reserva::create([
                'user_id' => auth()->user()->id,
                'almoco' => $this->almoco,
                'janta' => $this->janta,
                'start' => $this->start,
        ]);
        return redirect()->route('dashboard')->with('message', 'Reservado' );
    }
}
