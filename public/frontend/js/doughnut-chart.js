/*==== doughut chart =====*/
var ctx = document.getElementById( "doughnut-chart" );
Chart.defaults.global.defaultFontFamily = 'Arial';
Chart.defaults.global.defaultFontSize = 14;
Chart.defaults.global.defaultFontStyle = '500';
Chart.defaults.global.defaultFontColor = '#233d63';
var chart = new Chart( ctx, {
    type: 'doughnut',
    data: {
        datasets: [ {
            data: [ 40, 32, 15 ],
            backgroundColor: ["#7E3CF9", "#F68A03", "#358FF7"],
            hoverBorderWidth: 5,
            hoverBorderColor: "#eee",
            borderWidth: 3
        } ],
        labels: [
            "Direct Sales",
            "Referral Sales",
            "Affiliate Sales"
        ]
    },
    options: {
        responsive: true,
        tooltips: {
            xPadding: 15,
            yPadding: 15,
            backgroundColor: '#2e3d62'
        },
        legend: {
            display: false
        },
        cutoutPercentage: 60
    }
} );

var myLegendContainer = document.getElementById("legend");
// generate HTML legend
myLegendContainer.innerHTML = chart.generateLegend();
// bind onClick event to all LI-tags of the legend
var legendItems = myLegendContainer.getElementsByTagName('li');
for (var i = 0; i < legendItems.length; i += 1) {
    legendItems[i].addEventListener("click", legendClickCallback, false);
}

function legendClickCallback(event) {
    event = event || window.event;

    var target = event.target || event.srcElement;
    while (target.nodeName !== 'LI') {
        target = target.parentElement;
    }
    var parent = target.parentElement;
    var chartId = parseInt(parent.classList[0].split("-")[0], 10);
    var chart = Chart.instances[chartId];
    var index = Array.prototype.slice.call(parent.children).indexOf(target);
    var meta = chart.getDatasetMeta(0);
    var item = meta.data[index];

    if (item.hidden === null || item.hidden === false) {
        item.hidden = true;
        target.classList.add('hidden');
    } else {
        target.classList.remove('hidden');
        item.hidden = null;
    }
    chart.update();
}