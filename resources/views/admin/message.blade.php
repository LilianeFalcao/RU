@if(Session::has('error'))
    <div class="alert alert-danger alert-dismissble">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>x</button>
        <h4><i class="icon fa fa-ban"></i> Erro </h4> {{Session::get('error')}}

    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success alert-dismissble">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true' >x</button>
        <h4><i class="icon fa fa-ban"></i> Sucesso </h4> {{Session::get('success')}}
    </div>
@endif
