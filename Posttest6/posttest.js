const toggle = document.getElementById('toggleDark')
const body = document.querySelector('body')

toggle.addEventListener('click', function(){
    if(this.classList.toggle('fa-sun')){
        
        this.classList.toggle('fa-moon');

        body.style.background = 'black';
        body.style.color = 'white';
        body.style.transition = '2s';
        
    }else{

        this.classList.toggle('fa-moon');

        body.style.background = '#ADC4CE';
        body.style.color = 'black';
        body.style.transition = '2s';
    }
})

const home = document.querySelector('#home')
if(home)
home.addEventListener('click', function(){
    alert('--Coming Soon--')
})


const cards = document.querySelectorAll('.card')
const buttons = document.querySelectorAll('.btn')
// console.log(card)

cards.forEach((card) => {
  card.addEventListener('click', function () {
    // console.log(card.style.width);
    const btn = card.querySelector(".btn")
    if(card.style.height == '300px'){
      card.style.height ="400px";
      btn.style.display = 'block'
    }
    else{
      card.style.height ="300px";
      btn.style.display = 'none'  

    }
  })
})


buttons.forEach((btn) => {
  btn.addEventListener('click', function(){
    alert('--Coming Soon--')
})


})

const about = document.querySelector('.about')
const openMenu = document.querySelector('.openMenu')
const closeMenu = document.querySelector('.closeMenu')

openMenu.addEventListener('click',show)
closeMenu.addEventListener('click',close)

function show(){
    about.style.display = 'flex';
    about.style.top = '0';
}

function close(){
    about.style.top = '-100%';
}