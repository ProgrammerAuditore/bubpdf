function initGraficaIngresoSucursales(ctx) {
    const Utils = ChartUtils.init();
    const DATA_COUNT = 4;
    const NUMBER_CFG = { count: DATA_COUNT, min: 0, max: 1000 };

    const labels = ['PopCut', 'MarketCup', 'FreeCup', 'LoopCup'];
    const data = {
        labels: labels,
        datasets: [
            {
                label: 'Dataset 1',
                data: Utils.numbers(NUMBER_CFG),
                backgroundColor: [
                    Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
                    'rgba(1, 111, 185, 0.5)',
                    'rgba(233, 217, 133, 0.5)',
                    'rgba(108, 111, 125, 0.5)',
                ]
            }
        ]
    };

    new Chart(ctx, {
        type: 'polarArea',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Ingreso / Sucursal'
                }
            }
        },
    });
}
