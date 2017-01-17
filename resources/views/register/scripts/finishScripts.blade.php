<script>

    $('#preventive').on('click',function(){

        $.ajax({
            url:'{{route('register.fill.table')}}',
            method: 'POST',
            data:   {'type':'preventive','_token': '{{ csrf_token() }}'}
        }).success(function(data){
            console.log(data.length);
            if(data.length > 0){
                 $('.ref').css('display','block');
                 $("#finishTable > tbody").html("");
                 $.each(data, function(key, maintenance) {
                $('#finishTable')
                        .append($("<tr></tr>")
                                    .html("<th> " + maintenance.reparation       + "   </th>" +
                                          "<th> " + maintenance.system.name      + "   </th>" +
                                          "<th> " + maintenance.sub_system.name  + "   </th>"  +
                                          "<th> " + maintenance.initial_date     + "   </th>"  +
                                          "<th> " + maintenance.initial_time     + "   </th>"  +
                                          "<th> " +
                                            "<button class='btn btn-danger btn-xs' data-toggle='modal' " +
                                                "data-target='#confirmFinish' " +
                                                "data-maintenance=' " + maintenance.id  + " ' " +
                                                "data-name=' " + maintenance.reparation + " ' " +
                                                "data-type='         preventive             ' " +
                                                ">" +
                                                "Finalizar " +
                                            "</button>" +
                                          "</th>"  +
                ""));
            });
            }else{
                swal({
                    title: "Error!",
                    text: "No hay mantenimientos preventivos por terminar",
                    type: "error",
                    confirmButtonText: "Aceptar"
                });
            }
        }).error(function(x,y,error){
            alert('Ha ocurrido un error buscando mantenimientos');
        });
    });

    $('#corrective').on('click',function(){

        $.ajax({
            url:'{{route('register.fill.table')}}',
            method: 'POST',
            data:   {'type':'corrective','_token': '{{ csrf_token() }}'}
        }).success(function(data){
            console.log(data);
            if(data.length > 0){
                $('.ref').css('display','block');
                $("#finishTable > tbody").html("");
                $.each(data, function(key, maintenance) {
                    $('#finishTable')
                            .append($("<tr></tr>")
                                    .html("<th> " + maintenance.fault.fault       + "   </th>" +
                                            "<th> " + maintenance.system.name      + "   </th>" +
                                            "<th> " + maintenance.sub_system.name  + "   </th>"  +
                                            "<th> " + maintenance.initial_date     + "   </th>"  +
                                            "<th> " + maintenance.initial_time     + "   </th>"  +
                                            "<th> " +
                                            "<button class='btn btn-danger btn-xs' data-toggle='modal' " +
                                            "data-target='#confirmFinish' " +
                                            "data-maintenance=' " + maintenance.id  + " ' " +
                                            "data-name=' " + maintenance.fault.fault + " ' " +
                                            "data-type='         corrective             ' " +
                                            ">" +
                                            "Finalizar " +
                                            "</button>" +
                                            "</th>"  +
                                            ""));
                });
            }else{
                swal({
                    title: "Error!",
                    text: "No hay mantenimientos por terminar",
                    type: "error",
                    confirmButtonText: "Aceptar"
                });
            }
        }).error(function(x,y,error){
            alert('Ha ocurrido un error buscando mantenimientos');
        });
    });

    $('#confirmFinish').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var maintenance = $.trim(button.data('maintenance')); // Extract info from data-* attributes
        var name        = button.data('name');
        var type        = $.trim(button.data('type'));
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.verify').html("Esta seguro que desea finalizar:" + name +"<br><br><br>");
        modal.find('#id').val(maintenance);
        modal.find('#type').val(type);
    });

    $('.datepicker').datetimepicker({
        format: 'DD-MM-YYYY',
        //minDate: moment()

    });

    $('.timepicker').datetimepicker({
        format: 'LT'
    });

    $('#durationTime').on('change',function(){
        var valTime = $('#durationDay').val();
        var valPretend = $('#durationTime').val();

        valTime = valTime * 8;


        if(valPretend > valTime){
            swal("Error!", "La cantidad de horas debe ser menor a: " + valTime, "error");
        }

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

</script>
