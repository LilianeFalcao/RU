<div>
    <div>
        <div >
            <h4 class="py-3 pl-8">Cardápio Cefet-MG</h4>
        </div>
        <div class="p-8 ">
          <table class="py-4 border-solid  border-4 border-black">
                <thead class=" border-solid  border-2 border-black border-r-3">
                    <tr>
                        <th class="pr-3 4 border-r-4 border-b-4 border-black">prato_principal</th>
                        <th class="pr-3 pl-4 border-r-4 border-b-4 border-black">vegetariana</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">vegana</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">guarnição</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">arroz</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">feijao</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">salada1</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">salada2</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">salada3</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">salada4</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">sobremesa</th>
                        <th class="pl-4 border-r-4 border-b-4 border-black">data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cardapios as $cardapio)
                       <tr class="pl-7 pr-8">
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->prato_principal}}</td>
                                <td class="pr-3 pl-8 border-r-4 border-black">
                                    {{$cardapio->vegetariana}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->vegana}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->guarnicao}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->arroz}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->feijao}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->salada1}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->salada2}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->salada3}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->salada4}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->sobremesa}}</td>
                                <td class="pr-3 pl-4 border-r-4 border-black">
                                    {{$cardapio->data}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
