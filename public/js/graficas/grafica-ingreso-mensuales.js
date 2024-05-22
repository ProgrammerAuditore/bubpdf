function initGraficaIngresoMensuales(ctx) {
    const Utils = ChartUtils.init();
    // const ctx = document.getElementById('myChart');

    const DATA_COUNT = 7;
    const NUMBER_CFG = { count: DATA_COUNT, min: 0, max: 100 };

    const data = {
        labels: generateDates(DATA_COUNT), // Utiliza las fechas generadas y formateadas
        datasets: [{
            label: 'PopCup',
            backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
            borderColor: Utils.CHART_COLORS.red,
            fill: false,
            data: Utils.numbers(NUMBER_CFG),
        }, {
            label: 'MarketCup',
            backgroundColor: Utils.transparentize(Utils.CHART_COLORS.blue, 0.5),
            borderColor: Utils.CHART_COLORS.blue,
            fill: false,
            data: Utils.numbers(NUMBER_CFG),
        }, {
            label: 'LoopCup',
            backgroundColor: Utils.transparentize(Utils.CHART_COLORS.green, 0.5),
            borderColor: Utils.CHART_COLORS.green,
            fill: false,
            data: [{
                x: formatDate(new Date()), // Utiliza la función formatDate para cada punto de datos
                y: Utils.rand(0, 100)
            }, {
                x: formatDate(new Date(new Date().setDate(new Date().getDate() + 5))),
                y: Utils.rand(0, 100)
            }, {
                x: formatDate(new Date(new Date().setDate(new Date().getDate() + 7))),
                y: Utils.rand(0, 100)
            }, {
                x: formatDate(new Date(new Date().setDate(new Date().getDate() + 15))),
                y: Utils.rand(0, 100)
            }],
        }]
    };

    new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: true,
                title: {
                    display: true,
                    text: 'Ingreso diario'
                },
            },
            scales: {
                x: {
                    type: 'category',
                    title: {
                        display: true,
                        text: 'Día'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'ingreso'
                    }
                }
            },
        },
    });
}

// Función para formatear fechas
function formatDate(date) {
    const options = { month: 'short', day: 'numeric' };
    return date.toLocaleDateString('es-MX', options);
}

// Función para generar un array de fechas formateadas
function generateDates(days) {
    const dates = [];
    for (let i = 0; i < days; i++) {
        const date = new Date();
        date.setDate(date.getDate() + i);
        dates.push(formatDate(date));
    }
    return dates;
}
