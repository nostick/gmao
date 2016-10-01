<script>

    $('#preventive').on('click',function(){

        $.ajax({
            url:'{{route('register.fill.table')}}',
            method: 'POST',
            data:   {'type':'preventive','_token': '{{ csrf_token() }}'}
        }).success(function(data){
            console.log(data);

            $.each(data, function(key, maintenance) {
                $('#finishTable')
                        .append($("<tr></tr>")
                                    .html("<th> " + maintenance.reparation       + "   </th>" +
                                          "<th> " + maintenance.system.name      + "   </th>" +
                                          "<th> " + maintenance.sub_system.name  + "   </th>"  +
                                          "<th> " + maintenance.initial_date     + "   </th>"  +
                                          "<th> " + maintenance.initial_time     + "</th>"  +
                                          "<th> <button class='btn btn-danger btn-xs'>Finalizar</button>" +

                                            "</th>"  +
                ""));
            });

        }).error(function(x,y,error){
            alert('Ha ocurrido un error buscando mantenimientos');
        });

       $('#corrective').css('display','none');
       $('.ref').css('display','block');
    });

    /*$(".datepicker").on("dp.change", function (e) {
        $('.datepicker2').data("DateTimePicker").minDate(e.date);
        $(this).attr('value', e.date.format('DD-MM-YYYY'));
    });
    $(".datepicker2").on("dp.change", function (e) {
        $('.datepicker').data("DateTimePicker").maxDate(e.date);
        $(this).attr('value', e.date.format('DD-MM-YYYY'));
    });*/

    /*$(".timepicker").on("dp.change", function (e) {
        $(this).attr('value', e.date.format('HH:mm'));
    });
    $(".timepicker2").on("dp.change", function (e) {
        $(this).attr('value', e.date.format('HH:mm'));
    });*/

    $('#subsystem_id').on('change',function(){
        var $id = $('#subsystem_id').val();
        $('#maintenance_id').attr("disabled", false);
        $('#maintenance_id').empty();
        console.log($id);
        $.ajax({
            url:    '{{route('register.search.bysubsystem')}}',
            method: 'POST',
            data:   {'id':$id,'_token': '{{ csrf_token() }}'}
        }).success(function(data){
            console.log(data);

            $.each(data, function(key, system) {
                $('#maintenance_id')
                        .append($("<option></option>")
                                .attr("value",system.id)
                                .text(system.description));
            });
        }).error(function(error,errorThrown,text){
            alert('Ha ocurrido un error seleccionando el subsistem');
        });
    });

</script>