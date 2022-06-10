let count_year2 = 2022;
 const form2 = new FormData();
 form2.append("select_year", count_year2);
 
 fetch('./models/health_champion.php',{
     method: 'POST',
     body: form2,
 })

 .then(res => {
     return res.json();
 })
 .then(response => {
  
     document.querySelector(`#year_health`).firstChild.nodeValue = response.year;
     document.querySelector(`#value_health`).firstChild.nodeValue = response.val_max;  
     document.querySelector(`#country_health`).firstChild.nodeValue = response.country;
     document.querySelector(`#flag_health`).src = `https://countryflagsapi.com/png/${response.country}`;
     document.querySelector(`#flag_health`).alt = `flag from ${response.country}`; 
     
 });

const arrow_health_left = document.querySelector('#arrow_health_left');
const arrow_health_right = document.querySelector('#arrow_health_right');

// bouton  left
  arrow_health_left.addEventListener('click',()=>{
    // creation de faux-formulaire 
    const form2 = new FormData();
    if (count_year2 === 2022 || count_year2  === 2021 || count_year2  === 2020 || count_year2  === 2019 || count_year2  === 2018 || count_year2  === 2017 || count_year2  === 2016) {
        count_year2  --;
        
    }else{
        count_year2 = 2022;
    }
    form2.append("select_year", count_year2 );
    
    fetch('./models/health_champion.php',{
        method: 'POST',
        body: form2,
    })

    .then(res => {
        return res.json();
    })
    .then(response => {
        console.log(response);
        document.querySelector(`#value_health`).firstChild.nodeValue = response.val_max;
        document.querySelector(`#year_health`).firstChild.nodeValue = response.year;
        document.querySelector(`#country_health`).firstChild.nodeValue = response.country;
        document.querySelector(`#flag_health`).src = `https://countryflagsapi.com/png/${response.country}`;
        document.querySelector(`#flag_health`).alt = `flag from ${response.country}`; 
        
    });
 
})

arrow_health_right.addEventListener('click',()=>{
    
    // creation de faux-formulaire 
    const form2 = new FormData();
    if (count_year2 == 2021 || count_year2 == 2015 || count_year2 == 2016 || count_year2 == 2017 || count_year2 == 2018 || count_year2 == 2019 || count_year2 == 2020) {
        count_year2 ++;
    }else{
        count_year2= 2015;
    }   
   
    form2.append("select_year", count_year2);
    
    fetch('./models/health_champion.php',{
        method: 'POST',
        body: form2,
    })

    .then(res => {
        return res.json();
    })
    .then(response => {
        console.log(response);
        document.querySelector(`#value_health`).firstChild.nodeValue = response.val_max;
        document.querySelector(`#year_health`).firstChild.nodeValue = response.year;
        document.querySelector(`#country_health`).firstChild.nodeValue = response.country;
        document.querySelector(`#flag_health`).src = `https://countryflagsapi.com/png/${response.country}`;
        document.querySelector(`#flag_health`).alt = `flag from ${response.country}`; 
        
    });

})
