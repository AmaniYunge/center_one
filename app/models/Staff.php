<?php
/**
 * Created by PhpStorm.
 * User: hrhis
 * Date: 6/23/14
 * Time: 5:58 PM
 */

class Staff extends Eloquent {
    protected $table = 'staffs';

    protected  $guarded = array('id');

    public function getUser(){
        return $this->hasOne("User","staff_id","id");
    }
} 