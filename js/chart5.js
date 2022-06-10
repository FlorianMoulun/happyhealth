const labels5 = [
    '2015',
    '2016',
    '2017',
    '2018',
    '2019',
    '2020',
    '2021',
    '2022',
  ];

  const data5 = {
    labels: labels5,
    datasets: [{
      label: 'Average World Happiness Score over time',
      backgroundColor:'#FEC505',
      borderColor: '#FEC505',
      data: [6, 3, 5, 6, 2, 5, 3, 5, 7, 1],
      tension: 0.3,
      borderWidth: 4,
    }]
  };

  const config5 = {
    type: 'line',
    data: data5,
    options: {}
  };
   const myChart5 = new Chart(
    document.getElementById('myChart5'),
    config5
  );