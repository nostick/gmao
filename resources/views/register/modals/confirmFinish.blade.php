<!-- Modal -->
<div class="modal fade" id="confirmFinish" tabindex="-1" role="dialog" aria-labelledby="confirmFinish">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmacion</h4>
            </div>

            <div class="modal-body">
                <form action="{{route('register.confirm.finish')}}" name="FinishMaintenance" method="POST">
                <div class="verify"></div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="date1">Fecha de finalizacion del mantenimiento</label>
                        <input class="form-control datepicker" size="16" type="text" value="" name="date1" id="date1" required>
                        <span class="add-on"><i class="icon-th"></i></span>
                        <br>
                    </div>

                    <div class="col-lg-6">
                        <label for="time1">Hora de finalizacion del mantenimiento</label>
                        <input class="form-control timepicker" size="16" type="text" value="" name="time1" id="time1" required>
                        <span class="add-on"><i class="icon-th"></i></span>
                        <br>
                    </div>
                </div>

                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="date1">Duracion de mantenimiento (en Dias)</label>
                            <input class="form-control" size="16" type="number" name="durationDay" id="durationDay" required>
                            <span class="add-on"><i class="icon-th"></i></span>
                            <br>
                        </div>

                        <div class="col-lg-6">
                            <label for="time1">Duracion de mantenimiento (en Horas)</label>
                            <input class="form-control" size="16" type="number" name="durationTime" id="durationTime" required>
                            <span class="add-on"><i class="icon-th"></i></span>
                            <br>
                        </div>
                    </div>

                    <input type="hidden" value="" name="id" id="id">
                    <input type="hidden" value="" name="type" id="type">
                    <br>
                <button type="button" class="btn btn-default" data-dismiss="modal">Regresar</button>
                <button type="submit" class="btn btn-danger pull-right">Confirmar</button>
                    <br>
            </form>
        </div>
        </div>
        </div>
    </div>
</div>