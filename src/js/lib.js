const options = JSON.parse(chart.dataset.chartParams);
delete chart.dataset.chartParams;
const drawChart = new ApexCharts(chart, options);
drawChart.render();