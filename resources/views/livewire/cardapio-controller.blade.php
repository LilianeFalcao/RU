<div>
    <div>
        <div >
            <h4 class="py-3 pl-8 text-center ">Cardápio Cefet-MG</h4>
        </div>
        <div class="pl-2 pr-2 h-8 sm:h-12 md:h-16 lg:h-20 xl:h-24 w-32">
          <table class="bg-blue-300 py-4 border-solid  border-4 border-black">
                <thead class="bg-orange-500 " >
                    <tr>
                        <th class="pl-2 pr-2 items-center 4 border-r-2 border-b-2 border-black">prato_principal</th>
                        <th class="pr-3 pl-2 border-r-2 border-b-2 border-black">vegetariana</th>
                        <th class="pl-4 border-r-2 border-b-2 border-black">vegana</th>
                        <th class="pl-3 items-center border-r-2 border-b-2 border-black">guarnição</th>
                        <th class="pl-4 border-r-2 border-b-2 border-black">arroz</th>
                        <th class="pl-4 border-r-2 border-b-2 border-black">feijao</th>
                        <th class="pl-4 border-r-2 border-b-2 border-black">salada1</th>
                        <th class="pl-3 items-center border-r-2 border-b-2 border-black">salada2</th>
                        <th class="pl-4 border-r-2 border-b-2 border-black">salada3</th>
                        <th class="pl-4 border-r-2 border-b-2 border-black">salada4</th>
                        <th class="pl-2 items-center justify-center border-r-2 border-b-2 border-black">sobremesa</th>
                        <th class="pl-4 border-r-2 border-b-2 border-black">data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cardapios as $cardapio)
                       <tr class="pl-7 pr-8">
                                <td class="pr-3 pl-4 border-b-2 border-r-2 border-black">
                                    {{$cardapio->prato_principal}}</td>
                                <td class="pr-3 pl-8 border-b-2 border-r-2 border-black">
                                    {{$cardapio->vegetariana}}</td>
                                <td class="pr-3 pl-4 items-center border-b-2 border-r-2 border-black">
                                    {{$cardapio->vegana}}</td>
                                <td class="pr-3 pl-4 border-r-2 border-b-2 border-black">
                                    {{$cardapio->guarnicao}}</td>
                                <td class="pr-3 pl-4 border-r-2 border-b-2 border-black">
                                    {{$cardapio->arroz}}</td>
                                <td class="pr-3 pl-4 border-r-2 border-b-2 border-black">
                                    {{$cardapio->feijao}}</td>
                                <td class="pr-3 pl-4 border-r-2 border-b-2 border-black">
                                    {{$cardapio->salada1}}</td>
                                <td class="pr-3 pl-4 border-r-2 border-b-2 border-black">
                                    {{$cardapio->salada2}}</td>
                                <td class="pr-3 pl-4 border-r-2 border-b-2 border-black">
                                    {{$cardapio->salada3}}</td>
                                <td class="pr-3 pl-4 border-r-2 border-b-2 border-black">
                                    {{$cardapio->salada4}}</td>
                                <td class="pr-3 pl-4 border-r-2 border-b-2 border-black">
                                    {{$cardapio->sobremesa}}</td>
                                <td class="pr-3 pl-4 border-r-2 border-b-2 border-black">
                                    {{$cardapio->data}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
