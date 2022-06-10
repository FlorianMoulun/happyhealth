const labels4 = [
    '2015',
    '2016',
    '2017',
    '2018',
    '2019',
    '2020',
    '2021',
    '2022',
  ];

  const data4 = {
    labels: labels4,
    datasets: [{
      label: 'Average World Health Score over time',
      backgroundColor:'#44b562',
      borderColor: '#44b562',
      data: [6, 3, 5, 6, 2, 5, 3, 5, 7, 1],
      tension: 0.3,
      borderWidth: 4,
    }]
  };

  const config4 = {
    type: 'line',
    data: data3,
    options: {}
  };
   const myChart4 = new Chart(
    document.getElementById('myChart4'),
    config4
  );