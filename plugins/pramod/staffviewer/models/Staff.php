<?php namespace Pramod\StaffViewer\Models;

use Model;

/**
 * Model
 */
class Staff extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'pramod_staffviewer_';
    protected $dates = ['deleted_at'];
}
