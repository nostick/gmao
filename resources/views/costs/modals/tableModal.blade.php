<div class="example-modal">
    <div id="table_modal" class="modal modal-danger">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title text-center">Detalles de los Costes</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr class="text-center">
                            <td style="color: #9A0000">ABREVIATURA DE COSTE</td>
                            <td style="color: #9A0000">DEFINICION</td>
                            <td style="color: #9A0000">ECUACION GENERAL</td>
                            <td style="color: #9A0000">VALOR ACTUAL</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $t)
                            <tr class="text-center">
                                <td>{{$t->cost}}</td>
                                <td>{{$t->definition}}</td>
                                <td>{{$t->equation}}</td>
                                <td>{{$t->value}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>