<?php

namespace Jalno\Translator\Models;

use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    public function parentable()
    {
        return $this->morphTo('parentable', 'table', 'pk');
	}

	/**
     * @var bool
     */
	public $timestamps = false;

	/**
	 * @var string
	 */
	protected $table = 'translator_translates';

	/**
	 * @var string[]
	 */
	protected $fillable = [
		'table',
		'pk',
		'lang',
		'text',
	];
	/**
	 * @var string[]
	 */
	protected $hidden = [
		'pk',
		'table',
	];
}
