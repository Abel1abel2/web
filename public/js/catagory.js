document.querySelector('.button-c1').addEventListener('click',function (){
var val1=document.querySelector('.i1').value;
var val2=document.querySelector('.i2').value;
var val3=document.querySelector('.i3').value;
var val4=document.querySelector('.i4').value;
var total=parseInt(val1)+parseInt(val2)+parseInt(val3)+parseInt(val4);
document.querySelector('.h3-c1').innerHTML=total+ 'birr';
document.querySelector('.di').style.visibility='visible';
});
