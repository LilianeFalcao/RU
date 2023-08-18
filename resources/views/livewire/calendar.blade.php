<div wire:ignore>
    <div class=" py-1 pl-8 pb-8">
        <h3>Instruções de agendamento</h3>
        <h6>
            1- selecione o dia em que deseja fazer a refeição.
        </h6>
        <h6>
            2- no boxe que aparecerá selecione as refeições que deseja, confirme o dia e aperte em "Agendar".
        </h6>
    </div>
        <div class="pl-8 pr-8" id="calendar"></div>

        <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">Agendar refeição</h5>
                  @error('Reserva')<span class="text-red-500 text/xs">{{$messaage}} </span> @enderror

                      <div>
                            @if (session()->has('messaage'))
                                <div class="p-3 bg-green-300 text-green-700 rounded shadow-sm ">
                                    {{ session('messaage') }}
                                </div>
                            @endif
                        </div>
                <form wire:submit.prevent='store' method="post" action="" id="cadRef">
                <div class="form-group">
                    <label for="almoco" class="col-form-label">Almoço:</label>
                    <input type="checkbox" name= 'refeicao' wire:model="almoco" class="refeicao"  value="almoco">
                </div>
                 <div class="form-group">
                    <label for="janta" class="col-form-label">Janta:</label>
                    <input type="checkbox" name= 'refeicao'  wire:model="janta" class="refeicao" value="janta">
                </div>
                  <div class="form-group">
                    <label for="start" class="col-form-label">Dia:</label>
                    <input type="date" name= 'start' wire:model.defer="start"  class="refeicao" id="start">
                </div>

                <button type="submit" id="registerBtn" class="btn btn-primary">Agendar</button>
                <button class="btn btn-secondary">Cancelar</button>
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
                weekends: false,
                initialView: 'dayGridMonth',
                locale: 'pt-BR',
                timeZone: 'America/Sao_Paulo',
                selectable: true,
                select: function({startStr}){
                    @this.start = startStr;
                    $('#modalCreate').modal('toggle')
                    }
                });
                calendar.render();
        </script>
    @endpush

</div>
