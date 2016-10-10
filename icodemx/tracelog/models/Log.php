<?php namespace Icodemx\Tracelog\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Log Model
 */
class Log extends Model
{
    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'icodemx_tracelog_logs';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */

    /**
     * @var array Relations
     */
    public $rules = [
        'msg' => 'required'
    ];
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'user' => ['Backend\Models\User']
    ];
    public $belongsToMany = [];
    public $morphTo = [
        'traceable' => []
    ];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}