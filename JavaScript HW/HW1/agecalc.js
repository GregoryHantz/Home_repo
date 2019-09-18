
// С помощью prompt спросить у пользователя его возраст и подсчитать год рождения. Год рождения вывести с помощью alert.


var currentYear = 2019
var age
var birthYear

do{
	var age = prompt("Enter your age please","");
	birthYear = currentYear - age
	alert(`Your birth year is ${birthYear}`)
}while(age !== null)