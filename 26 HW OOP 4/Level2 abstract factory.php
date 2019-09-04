<?php
/*
Модель. Класс, объект которого представляет запись в БД.
Модель хранит в своих полях информацию из колонок таблицы, имеет методы  load($id) и save(). Для работы модели нужен класс, который умеет общаться с базой, в нашем случае это Connection из DbConnection.php
Здесь модель разделена на абстрактную и конкретную. Абстрактная хранит общую логику загрузки/сохраниения данных, конкретная - название таблицы и другую специфическую информацию (если есть)
*/
require_once('DbConnection.php');

abstract class AbstractModel
{
	protected $id;
	protected $connection;

	protected $_data;

	public function __construct(Connection $connection) {
		$this->connection = $connection;
	}


	public function load($id) {
		$sql = 'SELECT * FROM `' . $this->tableName . '` WHERE id = ?';
		$result = $this->connection->query($sql, [$id]);

		if (count($result)) {
			$this->fillData($result);
		}
	}


}

class AuthorModel extends AbstractModel
{
	protected $tableName = 'authors';

	public $name;

	/*
	fillData в этом классе вызывается методом load() из класса-родителя
	*/
	protected function fillData($record) {
		$this->id = $record[0]['id'];
		$this->name = $record[0]['name'];
	}

	public function save() {
		if ($this->id) {
			$sql = 'UPDATE `authors` SET name = ? WHERE author_id = ?';
			$result = $this->connection->query($sql, [$this->name, $this->id]);
		} else {
			$sql = 'INSERT INTO `authors` (name) VALUES (?)';
			$result = $this->connection->query($sql, [$this->name]);
		}
	}
}

$model = new AuthorModel(Connection::getInstance());
$model->load(3);
$model->name .= '(edit)';
$model->save();



class BookModel extends AbstractModel
{
	protected $tableName = 'books';

	public $name;
	public $author_id;

	/*
	fillData в этом классе вызывается методом load() из класса-родителя
	*/

	protected function fillData($record) {
		$this->id = $record[0]['id'];
		$this->name = $record[0]['name'];
	}


	public function save() {
		if ($this->id) {
			$sql = 'UPDATE `books` SET name = ? WHERE id = ?';
			$result = $this->connection->query($sql, [$this->name, $this->id]);
		} else {
			$sql = 'INSERT INTO `books` (name, author_id) VALUES (?, ?)';
			$result = $this->connection->query($sql, [$this->name, $this->author_id]);
		}
	}
}

$model1 = new BookModel(Connection::getInstance());
$model1->author_id = 25;
$model1->name = 'British Encyclopedia vol.1';

$model1->save();
//В этот момент появляется запись в БД

$mode2 = new BookModel(Connection::getInstance());
$mode2->load(1);
$mode2->name .= '(ed.5)';
$mode2->save();
//В БД сохраняется новое значение
