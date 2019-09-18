// С помощью prompt спросить у пользователя температуру в градусах Цельсия и перевести их в Фаренгейты и/или наоборот.

var celsium
var farengeith

var greetings = prompt("If you want to enter your temperature in celsium, press 1, if you want to enter it in Farengeith, press 2")

if(greetings == 1){
	 celsium = prompt("Enter the temperature in celsium", "");
farengeith = (celsium * 9/5) + 32
alert(`The temperature is ${farengeith} F`)
}
else if(greetings == 2){
	farengeith = prompt("Enter the temperature in farengeith", "");
celsium = (farengeith - 32) * 5/9
alert(`The temperature is ${celsium} C`)
}
else alert(`Error`)