const modal = document.getElementById('myModal');
const BuySubs = document.getElementById('BtnSub');

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
const btn = document.querySelector('.burger');
const nav = document.querySelector('.links');

btn.addEventListener('click', () => {
    btn.classList.toggle('open');
    nav.classList.toggle('open');
});

BuySubs.addEventListener('сlick', ()=> {
    alert("Вы оформили абонемент!");
})
