<script>

    //Variables Globales
    var urlSubSystem = '',
        urlSystem    = '';

    $('.datepicker').datetimepicker({
        format: 'DD-MM-YYYY',

    });
    $('.datepicker2').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    $(".datepicker").on("dp.change", function (e) {
     $('.datepicker2').data("DateTimePicker").minDate(e.date);
     $(this).attr('value', e.date.format('DD-MM-YYYY'));
     });
     $(".datepicker2").on("dp.change", function (e) {
     $('.datepicker').data("DateTimePicker").maxDate(e.date);
     $(this).attr('value', e.date.format('DD-MM-YYYY'));
     });

    $('.systemTab').hide();
    $('.subsystemTab').hide();
    $('.maintenanceTab').hide();

    $('#type').on('click', function(){
        $('.systemTab').show();
        $('.subsystemTab').hide();
        $('.maintenanceTab').hide();
        $('#selected-info').val(1);

        $('#system_id').val('').change();

    });

    $('#type2').on('click', function(){
        $('.systemTab').show();
        $('.subsystemTab').show();
        $('.maintenanceTab').hide();
        $('#selected-info').val(2);

        $('#system_id').val('').change();
        $('#subsystem_id').val('').change();

    });

    $('#type3').on('click', function(){
        $('.systemTab').show();
        $('.subsystemTab').show();
        $('.maintenanceTab').show();
        $('#selected-info').val(3);

        $('#system_id').val('').change();
        $('#subsystem_id').val('').change();
        $('#maintenance_id').val('').change();

    });

    $('#type4').on('click', function(){
        $('.systemTab').show();
        $('.subsystemTab').show();
        $('.maintenanceTab').show();
        $('#selected-info').val(4);

        $('#system_id').val('').change();
        $('#subsystem_id').val('').change();
        $('#maintenance_id').val('').change();
    });

    $('#equipment_id').on('change',function(){
        var $id = $('#equipment_id').val();
        $('#system_id').attr("disabled", false);
        $('#system_id').empty();
        console.log($id);
        if($id){
        $.ajax({
            url:    '{{route('register.change.system')}}',
            method: 'POST',
            data:   {'id':$id,'_token': '{{ csrf_token() }}'}
        }).success(function(data){
            console.log(data);
            $('#system_id')
                    .append($("<option></option>")
                            .attr("value", '')
                            .text('Sistema'));
            $.each(data.system, function(key, system) {
                if(system.name != 'Vacio') {
                    $('#system_id')
                            .append($("<option></option>")
                                    .attr("value", system.id)
                                    .text(system.name));
                }
            });
        }).error(function(error,errorThrown,text){
            alert('Ha ocurrido un error seleccionando el equipo');
        });
        }
    });

    $('#system_id').on('change',function(){
        var $id = $('#system_id').val();
        $('#subsystem_id').attr("disabled", false);
        $('#subsystem_id').empty();
        console.log($id);
        if($id) {
            $.ajax({
                url: '{{route('register.change.subsystem')}}',
                method: 'POST',
                data: {'id': $id, '_token': '{{ csrf_token() }}'}
            }).success(function (data) {
                var $count = Object.keys(data.subsystem).length;
                if ($count > 0) {
                    $('#subsystem_id')
                            .append($("<option></option>")
                                    .attr("value", '')
                                    .text('Subsistema'));
                    $.each(data.subsystem, function (key, system) {
                        $('#subsystem_id')
                                .append($("<option></option>")
                                        .attr("value", system.id)
                                        .text(system.name));
                    });
                } else {
                    swal("Error!", "Este sistema no tiene sub-sistemas asociados", "error");
                    $.ajax({
                        url: '{{route('indicators.search.bysystem')}}',
                        method: 'POST',
                        data: {'id': $id, '_token': '{{ csrf_token() }}'}
                    }).success(function (data) {
                        console.log(data);
                        $('#maintenance_id').attr("disabled", false);
                        $('#maintenance_id').empty();
                        $.each(data, function (key, maintenance) {
                            $('#maintenance_id')
                                    .append($("<option></option>")
                                            .attr("value", maintenance.id)
                                            .text(maintenance.fault));
                        });
                    }).error(function (x, y, error) {
                        console.log(error);
                    });
                }
            }).error(function (error, errorThrown, text) {
                swal("Error!", "Debe seleccionar un equipo primero", "error");
            });
        }else{
            swal("Error!", "Debe seleccionar un equipo primero", "error");
            $('#equipment_id').val('').change();
        }
    });

    $('#subsystem_id').on('change',function(){
        var $id = $('#subsystem_id').val();
        $('#maintenance_id').attr("disabled", false);
        $('#maintenance_id').empty();
        console.log($id);
        if($id) {
            $.ajax({
                url: '{{route('indicators.search.bysubsystem')}}',
                method: 'POST',
                data: {'id': $id, '_token': '{{ csrf_token() }}'}
            }).success(function (data) {
                console.log(data);

                $.each(data, function (key, system) {
                    $('#maintenance_id')
                            .append($("<option></option>")
                                    .attr("value", system.id)
                                    .text(system.fault));
                });
            }).error(function (error, errorThrown, text) {
                alert('Ha ocurrido un error seleccionando el subsistem');
            });
        }
    });
</script>