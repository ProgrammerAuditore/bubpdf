@extends('plantilla.base')

@section('pagina-titulo', 'Panel')

@section('contenido-titulo', 'Panel')

@section('pagina-descripcion', 'Panel')

@section('contenido-principal')
<div class="row center-items mb-4">
    <div class="col-sm-12 mb-sm-4 col-md-9">
        <div style="width: 100%; height: 400px;">
            <canvas id="grafica-ingreso-diario" class="finanz-chart-render"></canvas>
        </div>
    </div>

    <div class="col-sm-12 mb-sm-4 col-md-3">
        <div class="finanz-chart-box">
            <canvas id="myChart" class="finanz-chart-render"></canvas>
        </div>
    </div>
</div>

<div class="row center-items mb-4">
    <div class="col-sm-12 col-md-3">
        <div class="finanz-chart-box">
            <canvas id="myDona" class="finanz-chart-render"></canvas>
        </div>
    </div>
    <div class="col-sm-12 mb-sm-4 col-md-9">
        <div style="width: 100%; height: 400px;">
            <canvas id="grafica-ingreso-mensuales" class="finanz-chart-render"></canvas>
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
        initGraficaDonas($('#myDona'));
    });
</script>
@endsection
