function initGraficaSucursales(ctx) {
    const Utils = ChartUtils.init();
    // const ctx = document.getElementById('myChart');
    // Función para obtener los nombres de los estados de la republica mexicana
    function getEstados(count) {
        const months = [
            'Tabasco', 'Guerrero', 'Oaxaca', 'Tlaxcala', 'Veracruz', 'Zacatecas', 'Nuevo León',
            'Nayarit', 'Colima', 'Coahuila', 'Campeche', 'Chiapas'
        ];
        return months.slice(0, count);
    }

    const DATA_COUNT = 12;
    const NUMBER_CFG = { count: DATA_COUNT, min: 0, max: 1000 };

    const labels = getEstados(12);
    const data = {
        labels: labels,
        datasets: [
            {
                label: 'PopCut',
                data: Utils.numbers(NUMBER_CFG),
                borderColor: Utils.CHART_COLORS.red,
                backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
            },
            {
                label: 'MarketCup',
                data: Utils.numbers(NUMBER_CFG),
                borderColor: 'rgb(1, 111, 185)',
                backgroundColor: 'rgba(1, 111, 185, 0.5)',
            },
            {
                label: 'FreeCup',
                data: Utils.numbers(NUMBER_CFG),
                borderColor: 'rgb(233, 217, 133)',
                backgroundColor: 'rgba(233, 217, 133, 0.5)',
            },
            {
                label: 'LoopCup',
                data: Utils.numbers(NUMBER_CFG),
                borderColor: 'rgb(108, 111, 125)',
                backgroundColor: 'rgba(108, 111, 125, 0.5)',
            },
        ]
    };

    new Chart(ctx, {
        type: 'radar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            aspectRatio: 1,
            plugins: {
                title: {
                    display: true,
                    text: 'Ingreso / Sucursales por estado'
                }
            }
        },
    });
}
