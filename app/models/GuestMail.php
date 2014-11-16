<?php
/**
 * Created by PhpStorm.
 * User: Amani
 * Date: 5/28/14
 * Time: 8:31 PM
 */
class GuestMail extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mail';
    protected  $guarded = array('id');


}