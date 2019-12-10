var url_atual = window.location.href 
var slide = document.querySelector('#slider');

var bool = url_atual== 'http://localhost/DigitalEasy/';

if(bool == true){
    slide.hidden = false;
}else{
    slide.hidden = true;
}