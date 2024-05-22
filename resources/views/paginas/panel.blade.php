@extends('plantilla.base')

@section('pagina-titulo', 'Panel')

@section('contenido-titulo', 'Panel')

@section('pagina-descripcion', 'Panel')

@section('contenido-principal')
<div class="row center-items mb-4">
    <div class="col-sm-12 chartDonaCenter col-md-3">
        <div class="chartDonaCard">
            <div class="chartDonaBox">
                <canvas id="myDona-n1"></canvas>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="col-sm-12 chartDonaCenter col-md-3">
        <div class="chartDonaCard">
            <div class="chartDonaBox">
                <canvas id="myDona-n2"></canvas>
            </div>
        </div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
    </div>
    <div class="col-sm-12 chartDonaCenter col-md-3">
        <div class="chartDonaCard">
            <div class="chartDonaBox">
                <canvas id="myDona-n3"></canvas>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    </div>
    <div class="col-sm-12 chartDonaCenter col-md-3">
        <div class="chartDonaCard">
            <div class="chartDonaBox">
                <canvas id="myDona-n4"></canvas>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
</div>

<div class="row center-items mb-4">
    <div class="col-sm-12 mb-sm-4 col-md-12">
        <div style="width: 100%; height: 400px;">
            <canvas id="grafica-ingreso-mensuales" class="finanz-chart-render"></canvas>
        </div>
    </div>
</div>

<div class="row center-items mb-4">
    <div class="col-sm-12 mb-sm-4 col-md-8">
        <div style="width: 100%; height: 400px;">
            <canvas id="grafica-ingreso-diario" class="finanz-chart-render"></canvas>
        </div>
    </div>
    <div class="col-sm-12 mb-sm-4 col-md-4">
        <div class="finanz-chart-box">
            <canvas id="myChart" class="finanz-chart-render"></canvas>
        </div>
    </div>
</div>

<script src="../../js/graficas/grafica-balanza-anual.js"></script>
<script src="../../js/graficas/grafica-ingreso-mensuales.js"></script>
<script src="../../js/graficas/grafica-ingreso-diario.js"></script>
<script src="../../js/graficas/grafica-donas.js"></script>
<script>
    $(document).ready(function() {
        initGraficaIngresoMensuales($('#grafica-ingreso-mensuales'));
        initGraficaIngresoDiario($('#grafica-ingreso-diario'));
        initGraficaBalanzaAnual($('#myChart'));
        initGraficaDonas($('#myDona-n1'));
        initGraficaDonas($('#myDona-n2'));
        initGraficaDonas($('#myDona-n3'));
        initGraficaDonas($('#myDona-n4'));
    });
</script>
@endsection
