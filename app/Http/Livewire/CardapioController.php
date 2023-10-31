<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cardapio;
use Illuminate\Http\Request;

class CardapioController extends Component
{
    public $prato_principal;
    public $vegetariana;
    public $vegana;
    public $guarnicao;
    public $arroz;
    public $feijao;
    public $salada1;
    public $salada2;
    public $salada3;
    public $salada4;
    public $sobremesa;
    public $data;
    public $cardapios;

 protected $rules = [
        'prato_principal' => 'required',
        'vegetariana' => 'required',
        'vegana' => 'required',
        'guarnicao' => 'required',
        'arroz' => 'required',
        'feijao' => 'required',
        'salada1' => 'required',
        'salada2' => 'required',
        'salada3' => 'required',
        'salada4' => 'required',
        'sobremesa' => 'required',
        'data' => 'required',
    ];

    public readonly Cardapio $cardapio;

    public function __construct() {
        $this->cardapio = new Cardapio();
    }

    public function render()
    {
        $this->cardapios = Cardapio::all();
        return view('livewire.cardapio-controller');
    }

    public function store(Request $request) {
        $cardapio = new Cardapio();
        $cardapio->prato_principal = $request->input('prato_principal');
        $cardapio->vegetariana = $request->input('vegetariana');
        $cardapio->vegana = $request->input('vegana');
        $cardapio->guarnicao = $request->input('guarnicao');
        $cardapio->arroz = $request->input('arroz');
        $cardapio->feijao = $request->input('feijao');
        $cardapio->salada1 = $request->input('salada1');
        $cardapio->salada2 =$request->input('salada2');
        $cardapio->salada3 = $request->input('salada3');
        $cardapio->salada4 =$request->input('salada4');
        $cardapio->sobremesa =$request->input('sobremesa');
        $cardapio->data = $request->input('data');

        $cardapio->save();

        return redirect('/admin/dashboard')->with('message', 'cardapio cadastrado' );
    }
}
