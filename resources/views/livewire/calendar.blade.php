  <div wire:ignore>
        <div id="calendar"></div>

        <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agendar refeição</h5>
            </div>
            <div class="modal-body">

                <form wire:submit.prevent='save' method="POST" id="cadRef">
                <div class="form-group">
                    <label for="almoco" class="col-form-label">Almoço:</label>
                    <input type="checkbox" wire:model.defer="almoco" class="refeicao"  value="almoco">
                </div>
                 <div class="form-group">
                    <label for="janta" class="col-form-label">Janta:</label>
                    <input type="checkbox"  wire:model.defer="janta" class="refeicao" value="janta">
                </div>
                  <div class="form-group">
                    <label for="start" class="col-form-label">Dia:</label>
                    <input type="date" wire:model.defer="start"  class="refeicao" id="start">
                </div>

                <button type="submit" id="registerBtn" class="btn btn-primary">Agendar</button>
                <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </form>

            </div>
            </div>
        </div>

    </div>

<div>
    @push('script')
        <script>
                $('#modalCreate').on('hiden.bs.modal', function(){
                    @this.almoco= '';
                    @this.janta= '';
                    @this.start= '';
                 })
                const calendarEl = document.getElementById('calendar');
                const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'pt-BR',
                selectable: true,
                select: function({startStr}){
                    @this.start = startStr;
                    $('#modalCreate').modal('toggle')
                    }
                });
                calendar.render();

                let registerBtn = document.getElementById('registerBtn')

                function pegarValor(){
                    let refeicoes = document.getElementsByClassName("refeicao")
                    let refeicaoSelect = []

                    for(var i=0;i<refeicoes.length;i++){
                        if(refeicoes[i].checked){
                            console.log("a refeicao reservada é: "+ refeicoes[i].value)
                            refeicaoSelect.push(refeicoes[i].value)
                        }
                    }

                    console.log(refeicaoSelect)
                }

                registerBtn.addEventListener("click",pegarValor )

        </script>
    @endpush
</div>
