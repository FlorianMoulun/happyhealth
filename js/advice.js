const res = document.querySelector('#result');
const res2 = document.querySelector('#result2');
const btn = document.querySelector('#getData')
const url = 'https://api.adviceslip.com/advice';



btn.addEventListener('click', () => {
    getAdvice();
    
})

window.onload = () => {
    getAdvice();
};

function getAdvice(){

    fetch(url)
    .then(response => {
        return response.json();
    })
    .then(adviceData => {
        const Adviceobj = adviceData.slip;
        res2.innerHTML = `<p>Advice #${Adviceobj.id}</p>`;
        res.innerHTML = `<p>" ${Adviceobj.advice} "</p>`;
    })
    .catch(error => {
        
    });

}


