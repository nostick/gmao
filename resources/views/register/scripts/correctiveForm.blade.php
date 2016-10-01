<script>

    $('.datepicker').datetimepicker({
        format: 'DD-MM-YYYY'

    });
    $('.datepicker2').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    /*$(".datepicker").on("dp.change", function (e) {
        $('.datepicker2').data("DateTimePicker").minDate(e.date);
        $(this).attr('value', e.date.format('DD-MM-YYYY'));
    });
    $(".datepicker2").on("dp.change", function (e) {
        $('.datepicker').data("DateTimePicker").maxDate(e.date);
        $(this).attr('value', e.date.format('DD-MM-YYYY'));
    });*/

    $('.timepicker').datetimepicker({
        format: 'LT'
    });
    $('.timepicker2').datetimepicker({
        format: 'LT'
    });

    /*$(".timepicker").on("dp.change", function (e) {
        $(this).attr('value', e.date.format('HH:mm'));
    });
    $(".timepicker2").on("dp.change", function (e) {
        $(this).attr('value', e.date.format('HH:mm'));
    });*/

    $('#equipment_id').on('change',function(){
        var $id = $('#equipment_id').val();
        $('#system_id').attr("disabled", false);
        $('#system_id').empty();
        console.log($id);
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
    });

    $('#system_id').on('change',function(){
        var $id = $('#system_id').val();
        $('#subsystem_id').attr("disabled", false);
        $('#subsystem_id').empty();
        console.log($id);
        $.ajax({
            url:    '{{route('register.change.subsystem')}}',
            method: 'POST',
            data:   {'id':$id,'_token': '{{ csrf_token() }}'}
        }).success(function(data){
            var $count = Object.keys(data.subsystem).length;
            if($count > 0) {
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
            }else{
                $.ajax({
                    url: '{{route('register.search.faults')}}',
                    method: 'POST',
                    data: {'id':$id,'_token': '{{ csrf_token() }}','type':'system'}
                }).success(function(data){
                    console.log(data);
                    $('#maintenance_id').attr("disabled", false);
                    $('#maintenance_id').empty();
                    $.each(data,function(key,fault){
                        $('#maintenance_id')
                                .append($("<option></option>")
                                        .attr("value", fault.id)
                                        .text(fault.fault));
                    });
                }).error(function(x,y,error){
                    console.log(error);
                });
            }
        }).error(function(error,errorThrown,text){
            alert('Ha ocurrido un error seleccionando el sistema');
        });
    });

    $('#subsystem_id').on('change',function(){
        var $id = $('#subsystem_id').val();
        $('#maintenance_id').attr("disabled", false);
        $('#maintenance_id').empty();
        console.log($id);
        $.ajax({
            url:    '{{route('register.search.faults')}}',
            method: 'POST',
            data:   {'id':$id,'_token': '{{ csrf_token() }}','type':'sub_system'}
        }).success(function(data){
            console.log(data);

            $.each(data, function(key, fault) {
                $('#maintenance_id')
                        .append($("<option></option>")
                                .attr("value",fault.id)
                                .text(fault.fault));
            });
        }).error(function(error,errorThrown,text){
            alert('Ha ocurrido un error seleccionando el subsistem');
        });
    });

</script>