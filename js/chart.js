let link = "./models/chart.php";
fetch(link, {
  method: "POST"
})
.then((response) => {
  return response.json();   
}).then((datas) => {

  let tab_values = [];
  let labels = [];

  for (let i = 0; i < datas.length; i++) {
    tab_values.push(datas[i].valuesAVG);
    labels.push(datas[i].year);
  }



  const data = {
    labels: labels,
    datasets: [{
      label: ' ',
      backgroundColor:'#FEC505',
      borderColor: '#FEC505',
      data: tab_values,
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


   
});