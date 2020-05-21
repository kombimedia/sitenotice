<?php namespace Responsive\SiteNotice\Models;

use Model;

/**
 * Model
 */
class SiteNotice extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'responsive_sitenotice_notice';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
