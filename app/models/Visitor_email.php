<?php
class Visitor_email extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Visitor_email';

    protected  $guarded = array('id');
    public $timestamps = false;


}