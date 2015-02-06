<?php
/**
 * Created by PhpStorm.
 * User: wbs
 * Date: 5-2-2015
 * Time: 11:01
 */

namespace app\Webstart;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    Protected $table = 'webstart_Items';

    public function categories()
    {
        return $this->belongsToMany('App\Webstart\Category');
    }

    public function browsers()
    {
        return $this->hasOne('App\Webstart\Browser');
    }
}