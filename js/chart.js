const labels = [
    '2015',
    '2016',
    '2017',
    '2018',
    '2019',
    '2020',
    '2021',
    '2022',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Average World Happiness Score over time',
      backgroundColor:'#FEC505',
      borderColor: '#FEC505',
      data: [6, 3, 5, 6, 2, 5, 3, 5, 0, 7],
      tension: 0.3,
      borderWidth: 4,
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
   const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );