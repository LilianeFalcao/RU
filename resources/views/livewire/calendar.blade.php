<div>
    @push('script')
        <script>
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
              initialView: 'dayGridMonth',
              locale: 'pt-BR',
              selectable: true,
              select: function({startStr, endStr}){
                @this.start = startStr;
                $('#modalCreate').modal('toggle');
              }

             });
        calendar.render();
        </script>
    @endpush
</div>
