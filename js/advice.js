const res = document.querySelector('#result');
const btn = document.querySelector('#getData')
const url = 'https://api.adviceslip.com/advice';



btn.addEventListener('click', () => {
    getAdvice();
    
})

function getAdvice(){

    fetch(url)
    .then(response => {
        return response.json();
    })
    .then(adviceData => {
        const Adviceobj = adviceData.slip;
        res.innerHTML = `<p>${Adviceobj.advice}</p>`;
    })
    
    .catch(error => {
        
    });

}
