<div>
    <div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>prato_principal</th>
                        <th>vegetariana</th>
                        <th>vegana</th>
                        <th>guarnição</th>
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
                            <th>
                                <td>{{$cardapio->prato_principal ?? 'd '}}</td>

                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
