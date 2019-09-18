// То есть, напишите калькуляцию, которая из входных данных подсчитывает результат, 
// с осмысленными названиями переменных и комментариями к ним и формулам, использованным в калькуляции.
var numberOfMonth = 12 //number of month
var earningsPerYear //year earnings
var bonus

do{
	var earningsPerMonth = prompt("Enter your month earnings",""); //month earnings
	earningsPerYear = earningsPerMonth*numberOfMonth //earnings per year without bonuses
	bonus = prompt("Enter your bonus percentage", "") //% from years earnings
	var result = earningsPerYear + earningsPerYear/100*bonus //result earnings
	alert(`Your year earnings are ${result} hryvnyas`) //alerting result
}while(earningsPerMonth !== null)









