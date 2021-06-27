<?php

namespace Jalno\Translator\Models;

use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
	/**
     * Get the parent model
     */
    public function parentable()
    {
        return $this->morphTo('parentable', 'table', 'pk');
	}

	/**
     * Indicates if the model should be timestamped.
     *
     * @property bool
     */
	public $timestamps = false;

	/**
	 * The table associated with the model.
	 *
	 * @property string
	 */
	protected $table = 'translator_translates';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @property array
	 */
	protected $fillable = [
		'table',
		'pk',
		'lang',
		'text',
	];

	/**
	 * The model's default values for attributes.
	 *
	 * @property array
	 */
	protected $attributes = [];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @property array
	 */
	protected $hidden = [
		'pk',
		'table',
	];
}
