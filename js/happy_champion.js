let count_year = 2022;
 const form = new FormData();
 form.append("select_year", count_year );
 
 fetch('./models/happy_champion.php',{
     method: 'POST',
     body: form,
 })

 .then(res => {
     return res.json();
 })
 .then(response => {
  
     document.querySelector(`#year_happy`).firstChild.nodeValue = response.year;
     document.querySelector(`#value_happy`).firstChild.nodeValue = response.val_max;  
     document.querySelector(`#country_happy`).firstChild.nodeValue = response.country;
     document.querySelector(`#flag_happy`).src = `https://countryflagsapi.com/png/${response.country}`;
     document.querySelector(`#flag_happy`).alt = `flag from ${response.country}`; 
     
 });

const arrow_happy_left = document.querySelector('#arrow_happy_left');
const arrow_happy_right = document.querySelector('#arrow_happy_right');
console.log(arrow_happy_right);


// bouton  left

  arrow_happy_left.addEventListener('click',()=>{
    // creation de faux-formulaire 
    const form = new FormData();
    if (count_year === 2022 || count_year  === 2021 || count_year  === 2020 || count_year  === 2019 || count_year  === 2018 || count_year  === 2017 || count_year  === 2016) {
        count_year  --;
        
    }else{
        count_year = 2022;
    }
    form.append("select_year", count_year );
    
    fetch('./models/happy_champion.php',{
        method: 'POST',
        body: form,
    })

    .then(res => {
        return res.json();
    })
    .then(response => {
        console.log(response);
        document.querySelector(`#value_happy`).firstChild.nodeValue = response.val_max;
        document.querySelector(`#year_happy`).firstChild.nodeValue = response.year;
        document.querySelector(`#country_happy`).firstChild.nodeValue = response.country;
        document.querySelector(`#flag_happy`).src = `https://countryflagsapi.com/png/${response.country}`;
        document.querySelector(`#flag_happy`).alt = `flag from ${response.country}`; 
        
    });
 
})

arrow_happy_right.addEventListener('click',()=>{
    // creation de faux-formulaire 
   let year_happy = parseInt(document.querySelector(`#year_happy`).firstChild.nodeValue);
    console.log(year_happy);
    const form = new FormData();
    if (year_happy == 2021 || year_happy == 2015 || year_happy == 2016 || year_happy == 2017 || year_happy == 2018 || year_happy == 2019 || year_happy == 2020) {
        year_happy ++;
    }else{
        year_happy= 2015;
    }   
   
    form.append("select_year", year_happy);
    
    fetch('./models/happy_champion.php',{
        method: 'POST',
        body: form,
    })

    .then(res => {
        return res.json();
    })
    .then(response => {
        console.log(response);
        document.querySelector(`#value_happy`).firstChild.nodeValue = response.val_max;
        document.querySelector(`#year_happy`).firstChild.nodeValue = response.year;
        document.querySelector(`#country_happy`).firstChild.nodeValue = response.country;
        document.querySelector(`#flag_happy`).src = `https://countryflagsapi.com/png/${response.country}`;
        document.querySelector(`#flag_happy`).alt = `flag from ${response.country}`; 
        
    });

})
