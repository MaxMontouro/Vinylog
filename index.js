const buttonsignin = document.querySelector('.buttonsignin')
const buttonsignup = document.querySelector('.buttonsignup')
const formbox = document.querySelector('.form-box')
const body = document.querySelector('body')

buttonsignup.onclick=function(){
    formbox.classList.add('active')
    body.classList.add('active')

}
buttonsignin.onclick=function(){
    formbox.classList.remove('active')
    body.classList.remove('active')

}
