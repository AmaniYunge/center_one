<?php
/**
 * Created by PhpStorm.
 * User: hrhis
 * Date: 6/28/14
 * Time: 4:11 PM
 */

class AdminOperationController extends BaseController {

    public function listing($id){

        return View::make("administrator.home.".$id);
    }
    public function form($id){
        return View::make("administrator.home.".$id);
    }
} 