@extends('layouts.app')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="container" >
        <div class="row" id="page-content-wrapper">
            <div class="col-md-11 col-md-offset-2">
                <div class="row">
                    <div id="contract" class="">
                        <h4 class="text-center">Costo de Ciclo de Vida</h4>
                        <br><br>


                        <canvas id="myChart" width="200" height="100"></canvas>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="example-modal">
        <div id="modal_delete" class="modal modal-danger">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Eliminar</h4>
                    </div>
                    <div class="modal-body">
                        Desea eliminar el contrato de mantenimiento?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                        <button id="deletebutton" type="button" class="btn btn-outline">Aceptar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <form id="form_delete" method="POST" action="#">
            <input name="_method" type="hidden" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
    </div>
@endsection

@section('extrajs')
    <script>
        var ctx = $("#myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["CIM", "CYO", "CYM"],
                datasets: [{
                    label: 'CIMFS',
                    data: ['{{$CIM['CIMFS']}}','{{$CYO}}', '{{$CYM['CYMP']}}'],
                    backgroundColor: [
                        'rgba(184, 44, 44, 0.5)', /*Color para CIMFS*/
                        'rgba(5, 116, 144, 0.5)', /*Color para CIMFW*/
                        'rgba(86, 116, 96, 0.5)'  /*Color para CIMRSU*/
                    ],
                    borderColor: [
                        'rgba(5,5,5,1)',
                        'rgba(5, 5, 5, 1)',
                        'rgba(5, 5, 5, 1)'
                    ],
                    borderWidth: 1
                },
                    {
                        label: 'CIMFW',
                        data: ['{{$CIM['CIMFW']}}', 0, {{$CYM['CYMC']}}],
                        backgroundColor: [
                            'rgba(184, 73, 197, 0.5)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(5, 116, 52, 0.5)'
                        ],
                        borderColor: [
                            'rgba(5,5,5,1)',
                            'rgba(5, 5, 5, 1)',
                            'rgba(5, 5, 5, 1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'CIMSRU',
                        data: ['{{$CIM['CIMSRU']}}', 0, 0],
                        backgroundColor: [
                            'rgba(174, 116, 96, 0.5)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(5,5,5,1)',
                            'rgba(5, 5, 5, 1)',
                            'rgba(5, 5, 5, 1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'CYOU',
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(5,5,5,1)',
                            'rgba(5, 5, 5, 1)',
                            'rgba(5, 5, 5, 1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'CYCMS',
                        backgroundColor: [
                            'rgba(5, 5, 5, 0.2)',
                            'rgba(5, 5, 5, 0.2)',
                            'rgba(5, 5, 5, 0.2)'
                        ],
                        borderColor: [
                            'rgba(5,5,5,1)',
                            'rgba(5, 5, 5, 1)',
                            'rgba(5, 5, 5, 1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'CYCMW',
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(5,5,5,1)',
                            'rgba(5, 5, 5, 1)',
                            'rgba(5, 5, 5, 1)'
                        ],
                        borderWidth: 1
                    },
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        },
                        stacked:true
                    }],
                    xAxes: [{
                        stacked: true
                    }]
                }
            }
        });
    </script>
@endsection