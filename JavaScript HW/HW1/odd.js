// С помощью prompt узнайте число, введенное пользователем. 
// С помощью if проверьте что число корректно преобразовано из строки. 
// В случае ошибки выведите сообщение Выведите четное число или нет, используя if.



var integer = prompt("Enter your integer number please");
var count = Number(integer)

if(Number.isInteger(count)) {
alert("Your number is integer indeed")
}
else{
	alert("Error");
	die();
} 


if(count %2 ==0){
	alert("Your number is even")
}
else{
	alert("Your number is odd")
}