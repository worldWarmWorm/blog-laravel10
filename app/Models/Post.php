<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property bool $published
 * @property Carbon $published_at
 */
final class Post extends Model
{
	use HasFactory;

	protected $fillable = [
		'user_id',
		'title',
		'content',
		'published',
		'published_at',
	];

	protected $casts = [
		'user_id' => 'integer',
		'published' => 'bool',
		'published_at' => 'datetime'
	];

	public function isPublished(): bool
	{
		return $this->published && $this->published_at;
	}
}
