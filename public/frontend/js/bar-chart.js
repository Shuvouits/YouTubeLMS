/*==== bar-chart =====*/
var ctx = document.getElementById('bar-chart');
Chart.defaults.global.defaultFontFamily = 'Arial';
Chart.defaults.global.defaultFontSize = 14;
Chart.defaults.global.defaultFontStyle = '500';
Chart.defaults.global.defaultFontColor = '#233d63';
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul' ],
        datasets: [{
            label: "Sales for this month",
            data: [34, 41, 48, 45, 53, 55, 50],
            backgroundColor: 'rgba(108, 92, 231, .2)',
            hoverBackgroundColor: 'rgba(108, 92, 231, .6)',
            hoverBorderColor: 'rgba(108, 92, 231, .6)',
            borderColor: '#7E3CF9',
            pointBackgroundColor: '#fff',
            borderWidth: 1,
        }]
    },

    // Configuration options go here
    options: {
        tooltips: {
            xPadding: 12,
            yPadding: 12,
            backgroundColor: '#2e3d62'
        },
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: 'transparent',
                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    color: 'transparent',
                },
                ticks: {
                    fontSize: 14,
                }
            }]
        }
    }
});
