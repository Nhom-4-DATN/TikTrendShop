import Chart from 'chart.js/auto';
const data = {
  labels: [1,2,3,4,5,6,7,8,9,10,11,12],
  datasets: [
    {
    label: 'Danh thu',
    data: [65, 59, 80, 81, 56, 55, 40],
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    tension: 0.1
  }
]
};
const config = {
    type: 'line',
    data: data,
    options: {
        legend: {
            display: false  // Ẩn ghi chú
        }
    }
};

const  chartMonitor = document.querySelector('#chartjs-render-monitor');
if(chartMonitor){
    new Chart(chartMonitor.getContext('2d'), config);
}





