<div>
    <div>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Prato Principal</th>
                        <th>vegetariana</th>
                        <th>vegana</th>
                        <th>Guarnição</th>
                        <th>arroz</th>
                        <th>feijao</th>
                        <th>salada1</th>
                        <th>salada2</th>
                        <th>salada3</th>
                        <th>salada4</th>
                        <th>sobremesa</th>
                        <th>data</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($cardapios as $cardapio)
                    <tr>
                        <td>{{$cardapio->pratoPrincipal}}</td>
                        <td>{{$cardapio->vegetariana}}</td>
                        <td>{{$cardapio->vegana}}</td>
                        <td>{{$cardapio->guarnicao}}</td>
                        <td>{{$cardapio->arroz}}</td>
                        <td>{{$cardapio->feijao}}</td>
                        <td>{{$cardapio->salada1}}</td>
                        <td>{{$cardapio->salada2}}</td>
                        <td>{{$cardapio->salada3}}</td>
                        <td>{{$cardapio->salada4}}</td>
                        <td>{{$cardapio->sobremesa}}</td>
                        <td>{{$cardapio->data}}</td>
                    </th>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

</div>
