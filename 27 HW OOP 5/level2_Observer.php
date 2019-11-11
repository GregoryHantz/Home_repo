<?php


/*
Observer (Обозреватель) - паттерн, позволяющий реагировать на события в системе. Состоит из 3-х частей:
EventManager - объект, который узнает о событиях и сообщает о нем тем, кто на это событие подписан.
Подписчик - объект, который будет реагировать на событие (в нашем примере FireDepartment)
Событие - момент, на который должен отреагировать подписчик. (в нашем примере - факт вызова dispatchEvent())

EventManager когда подписывает объект на событие - просто записывает его (объект) в subscribers. Когда событие происходит - EventManager вызовет для всех subscribers метод execute(). Для того, чтобы быть увереным что метод execute будет доступен, в subscribe() указан тип параметра, Executable
*/
interface Executable
{
	public function execute($eventData);
}

class FireDepartment implements Executable
{
	public function execute($eventData) {
		echo 'FireDept goes to ' . $eventData['address'] . PHP_EOL;
	}
}

class EventManager
{
	protected $subscribers;
	
	public function subscribe(Executable $handler, $type) {
		if (empty($this->subscribers[$type])) {
			$this->subscribers[$type] = [];
		}
		$this->subscribers[$type][] = $handler;
	}

	public function dispatchEvent($eventData, $type) {
		if(!empty($this->subscribers[$type])) {
			
			array_shift($this->subscribers[$type])->execute($eventData);
		}
		else echo 'No free FireDepts' . PHP_EOL;
	}
}

$manager = new EventManager();

$fireDepartment1 = new FireDepartment();
$manager->subscribe($fireDepartment1, 'fire');

$fireDepartment2 = new FireDepartment();
$manager->subscribe($fireDepartment2, 'fire');

$manager->dispatchEvent([
	'address' => 'SomeAddress1'
], 'fire');

$manager->dispatchEvent([
	'address' => 'SomeAddress2'
], 'fire');

$manager->dispatchEvent([
	'address' => 'SomeAddress3'
], 'fire');

