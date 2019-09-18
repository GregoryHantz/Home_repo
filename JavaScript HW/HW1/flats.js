// Сделайте калькулятор, который позволит вам исходя из информации о количества этажей в доме 
// и количества квартир на этаже находить подъезд и этаж определенной квартиры по её номеру. 
// Например для 9этажного дома по 4 квартиры на этаж 81 квартира находится на 3м этаже третьего подъезда

var room = prompt("Enter number of room:", "");

var floors = prompt("Enter number of floors in the building:", "");

var flats = prompt("Enter the number of flats per floor:", "");


var apsInPadik = floors * flats

var numberOfPadik = Math.ceil(room/apsInPadik)
var floor = Math.ceil((room - (apsInPadik*(numberOfPadik -1)))/flats);

alert(`Room number ${room} is located in padik number ${numberOfPadik} on the floor number ${floor}`)

