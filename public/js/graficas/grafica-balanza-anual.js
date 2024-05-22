function initGraficaBalanzaAnual(ctx) {
    const Utils = ChartUtils.init();
    //const ctx = document.getElementById('myChart');

    const DATA_COUNT = 12;
    const NUMBER_CFG = {
        count: DATA_COUNT,
        min: -100,
        max: 100
    };

    const labels = Utils.months({
        count: 12
    });
    const data = {
        labels: labels,
        datasets: [{
            data: Utils.numbers(NUMBER_CFG),
        },
        {
            data: Utils.numbers(NUMBER_CFG),
        }
        ]
    };

    new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            indexAxis: 'y',
            // Elements options apply to all of the options unless overridden in a dataset
            // In this case, we are setting the border of each horizontal bar to be 2px wide
            elements: {
                bar: {
                    borderWidth: 2,
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: false,
                title: {
                    display: true,
                    text: 'Balanza anual'
                },

            },
        },
    });
}
