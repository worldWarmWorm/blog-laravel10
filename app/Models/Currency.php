<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
	use HasFactory;

	public $incrementing = false;

//	public $connection = 'currency_db'; Для подключение модели к другой базе

	protected $fillable = [
		'id',
		'name',
		'price',
		'active',
		'sort',
	]; // Для контроля данных на запись в таблицу модели Currency (указанные данные пропускаем)

	// protected $guarded = ['foo']; // Действет обратно $fillable (указанные данные НЕ пропускаем)

	protected $hidden = [
		'price'
	]; // Служебные поля, непубличные

	protected $casts = [
		'price' => 'float',
		'active' => 'bool',
		'sort' => 'int',
//		'secret' => 'encrypted' // Для зашифровки данных
		'active_at' => 'datetime:Y-m-d H:i:s' // Приведит строковую дату к объекту Illuminate\Support\Carbon
	]; // Приведение свойств к типам во время доступа к ним
}
