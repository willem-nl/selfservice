<?php
/**
 * Created by PhpStorm.
 * User: wbs
 * Date: 5-2-2015
 * Time: 10:53
 */

namespace app\Webstart;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'webstart_Categories';

    protected $fillable = ['name'];

    public function items()
    {
        return $this->belongsToMany('App\Webstart\Item');
    }
}