function initGraficaDonas(ctx) {
    const Utils = ChartUtils.init();

    // Datos y configuraciones de la gráfica
    const data = {
        labels: ['Completed', 'Remaining'],
        datasets: [{
            data: [75, 25], // Porcentaje completado y restante
            backgroundColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(201, 203, 207, 1)'
            ],
            borderWidth: 0 // Sin bordes
        }]
    };

    new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '94%', // Ajuste del grosor de la dona
            plugins: {
                legend: {
                    display: false // Ocultar la leyenda
                },
                tooltip: {
                    enabled: false // Deshabilitar los tooltips
                },
                title: {
                    display: true,
                    text: '% de Stock disponible'
                },
            },
        },
        plugins: [{
            id: 'textCenter',
            beforeDraw: function (chart, a, b) {
                var width = chart.width,
                    height = chart.height,
                    ctx = chart.ctx;

                ctx.restore();
                var fontSize = (2).toFixed(2);
                ctx.textAlign = 'middle';
                ctx.textBaseline = 'middle';
                ctx.font = fontSize + "em sans-serif";
                ctx.fillStyle = 'black'; // Color del texto en el centro de la dona

                var text = "75%",
                    textX = Math.round((width - ctx.measureText(text).width) / 2),
                    textY = height / 2 + 5;

                ctx.fillText(text, textX, textY);
                ctx.save();
            }
        }]
    });
}
