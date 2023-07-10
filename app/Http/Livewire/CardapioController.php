<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cardapio;

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
        $this->cardapios = new Cardapio();
    }

    public function index()
    {
        $cardapios = Cardapio::all();
        return view('livewire.cardapio-controller')->compact('cardapios')->layout('livewire.layout');
    }
}
