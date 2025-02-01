/*==== line chart =====*/
var ctx = document.getElementById('line-chart');
Chart.defaults.global.defaultFontFamily = 'Arial';
Chart.defaults.global.defaultFontSize = 14;
Chart.defaults.global.defaultFontStyle = '500';
Chart.defaults.global.defaultFontColor = '#233d63';
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        datasets: [{
            label: "Views",
            data: [20, 40, 38, 55, 30, 40, 60],
            backgroundColor: 'rgba(56, 127, 12, 0.05)',
            borderColor: '#38BB0C',
            pointBorderColor: '#ffffff',
            pointBackgroundColor: '#38BB0C',
            pointBorderWidth: 2,
            pointRadius: 4
        }]
    },

    // Configuration options go here
    options: {
        tooltips: {
            xPadding: 12,
            yPadding: 12,
            backgroundColor: '#232c3b'
        },
        legend: {
            display: false,
            tooltips: {
                displayColors:false,
            }
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: '#eee',
                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    color: '#eee',
                },
                ticks: {
                    fontSize: 14,
                }
            }]

        }
    }
});