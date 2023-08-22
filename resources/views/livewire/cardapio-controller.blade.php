<div>
    <div>
        <div >
            <h4 class="py-3 pl-8 text-center ">Cardápio Cefet-MG</h4>
        </div>
        <div class="table-responsive w-auto pr-8 pl-8">
          <table class="table">
                <thead class="bg-info" >
                    <tr>
                        <th class="col">Prato Principal</th>
                        <th class="col">Vegetariana</th>
                        <th class="col">Vegana</th>
                        <th class="col">Guarnição</th>
                        <th class="col">Arroz</th>
                        <th class="col">Feijao</th>
                        <th class="col">Salada1</th>
                        <th class="col">Salada2</th>
                        <th class="col">Salada3</th>
                        <th class="col">Salada4</th>
                        <th class="col">Sobremesa</th>
                        <th class="col">Data</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach($cardapios as $cardapio)
                       <tr>
                                <td class="col">
                                    {{$cardapio->prato_principal}}</td>
                                <td class="col">
                                    {{$cardapio->vegetariana}}</td>
                                <td class="col">
                                    {{$cardapio->vegana}}</td>
                                <td class="col">
                                    {{$cardapio->guarnicao}}</td>
                                <td class="col">
                                    {{$cardapio->arroz}}</td>
                                <td class="col">
                                    {{$cardapio->feijao}}</td>
                                <td class="col">
                                    {{$cardapio->salada1}}</td>
                                <td class="col">
                                    {{$cardapio->salada2}}</td>
                                <td class="col">
                                    {{$cardapio->salada3}}</td>
                                <td class="col">
                                    {{$cardapio->salada4}}</td>
                                <td class="col">
                                    {{$cardapio->sobremesa}}</td>
                                <td class="col">
                                    {{$cardapio->data}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
