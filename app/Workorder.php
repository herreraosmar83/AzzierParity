<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class WorkOrder extends Eloquent {
    protected $collection = 'WorkOrder';
    protected $primaryKey = 'WoNum';
    public $timestamps = false;
    //setting fields to dates does not work as of now but maybe I'll fix it someday :/
    protected $dates = ['OpenDate'];
    protected $fillable = [
        'WoNum', 'WoNumStr','Priority', 
        'OpenDate', 'ContactPhone', 'Craft',
        'CreateDate', 'Crew', 'Location', 
        'LocationDesc', 'Note2', 'Request',
        'Status', 'Room', 'WoType'

    ];

    

    

}