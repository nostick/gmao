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
                        <h4 class="text-center">Coste de Ciclo de Vida</h4>
                        <br><br>

                        <div class="col-lg-4">
                            <canvas id="myChart" width="100" height="100"></canvas>
                        </div>
                        <div class="col-lg-4">
                            <canvas id="myChart2" width="100" height="100"></canvas>
                        </div>
                        <div class="col-lg-4">
                            <canvas id="myChart3" width="100" height="100"></canvas>

                        </div>






                    </div>
                    <div class="col-md-12" style="color: #9A0000">
                        @if($CYM['CYMC'] > $CYM['CYMP'])
                            <blockquote>
                            <p>
                                El coste de

                                mantenimiento correctivo es mayor al coste de mantenimiento preventivo por lo que se recomienda

                                a la coordinación hacer un análisis de la vida útil del equipo y de la curva de la bañera para definir

                                la etapa en la que se encuentra el equipo y su utilización en la empresa
                            </p>
                                </blockquote>
                        @else
                            <blockquote>
                            <p>
                                &quot;El coste de

                                mantenimiento preventivo es mayor al coste de mantenimiento correctivo por lo que se recomienda

                                a la coordinación redefinir el plan de mantenimiento en cuanto a la frecuencia de mantenimiento

                                preventivo para establecer si su realización es crítica o despreciable para los equipos&quot;
                            </p>
                                </blockquote>
                        @endif
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
        var ctx2 = $("#myChart2");
        var ctx3 = $("#myChart3");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["CIM"],
                datasets: [{
                    label: 'CIMFS',
                    data: ['{{$CIM['CIMFS']}}'],
                    backgroundColor: [
                        'rgba(184, 44, 44, 0.5)' /*Color para CIMRSU*/
                    ],
                    borderColor: [
                        'rgba(5,5,5,1)'
                    ],
                    borderWidth: 1
                },
                    {
                        label: 'CIMFW',
                        data: ['{{$CIM['CIMFW']}}'],
                        backgroundColor: [
                            'rgba(184, 73, 197, 0.5)'
                        ],
                        borderColor: [
                            'rgba(5,5,5,1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'CIMSRU',
                        data: ['{{$CIM['CIMSRU']}}'],
                        backgroundColor: [
                            'rgba(174, 116, 96, 0.5)'
                        ],
                        borderColor: [
                            'rgba(5,5,5,1)'
                        ],
                        borderWidth: 1
                    }
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
        var myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ["CYO"],
                datasets: [{
                    label: 'CYOU',
                    data: ['{{$CYO}}'],
                    backgroundColor: [
                        'rgba(0, 109, 153, 0.5)' /*Color para CIMRSU*/
                    ],
                    borderColor: [
                        'rgba(5,5,5,1)'
                    ],
                    borderWidth: 1
                }
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
        var myChart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: ["CYM"],
                datasets: [{
                    label: 'CYMP',
                    data: ['{{$CYM['CYMP']}}'],
                    backgroundColor: [
                        'rgba(0, 109, 59, 0.5)' /*Color para CIMRSU*/
                    ],
                    borderColor: [
                        'rgba(5,5,5,1)'
                    ],
                    borderWidth: 1
                },
                    {
                        label: 'CYMC',
                        data: ['{{$CYM['CYMC']}}'],
                        backgroundColor: [
                            'rgba(0, 152, 59, 0.5)'
                        ],
                        borderColor: [
                            'rgba(5,5,5,1)'
                        ],
                        borderWidth: 1
                    }
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