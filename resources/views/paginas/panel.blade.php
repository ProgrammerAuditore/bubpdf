@extends('plantilla.base')

@section('pagina-titulo', 'Panel')

@section('contenido-titulo', 'Panel')

@section('pagina-descripcion', 'Panel')

@section('contenido-principal')
<div class="row center-items mb-4">
    <div class="col-sm-12 col-md-6">
        <div class="finanz-chart-box">
            <canvas id="myChart" class="finanz-chart-render"></canvas>
        </div>
    </div>
</div>

<script src="../../js/graficas/grafica-meses.js"></script>
<script>
    $(document).ready(function(){

        initGraficaMeses($('#myChart'));
    });
</script>
@endsection
