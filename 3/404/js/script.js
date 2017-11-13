//время в сек.
var i = 5;

function time(){
  //визуальный счетчик
  document.getElementById("time").innerHTML = i;
  i--; //уменьшение счетчика
  //если счетчик дошел к нулю
  if (i <= 0){
    //редирект на наш сайт
    location.href = "http://test.ua/";
  } 
}

time(); //вызов функции
setInterval(time, 1000); //задаем интервал

