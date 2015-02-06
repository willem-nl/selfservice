<?php
/**
 * Created by PhpStorm.
 * User: wbs
 * Date: 5-2-2015
 * Time: 11:02
 */

namespace app\Webstart;


use Illuminate\Database\Eloquent\Model;

class Browser extends Model {

    protected $table = 'webstart_Browsers';

    public function items()
    {
        return $this->belongsTo('App\Webstart\Item');
    }
}