<?php

class AdminController extends BaseController {


    ////// functions to handle home
	public function index()
	{
		return View::make('administrator.admin');
	}


    ///////////// functions to handle what we do
    public function dashboard()
    {
        return View::make('administrator.dashboard');
    }

    /////// functions to handle home page
     public function home()
        {
            return View::make('administrator.home.index');
        }
     /////// functions to handle who we are
     public function history()
        {
            return View::make('administrator.History.index');
        }
     public function leadership()
        {
            $id = "leadership";
            return View::make('who.index',compact("id"));
        }
     public function staff()
        {
            $id = "staff";
            return View::make('who.index',compact("id"));
        }

    ///////// functions to handle projects
    public function project()
        {
            return View::make('projects.index');
        }

    ////////// functions to handle opportunity
    public function opportunity()
        {
            return View::make('opportunity.index');
        }

 ////////// functions to handle opportunity
    public function work()
        {
            $id = "work";
            return View::make('who.index',compact("id"));
        }



    /////////////// functions to handle contacts
     public function contact()
        {
            return View::make('contact.index');
        }
    public function enquery()
        {
         if(Input::get("email") != "" && Input::get("name") !=""){
            Visitor_email::create(array(
//                'name'      =>Input::get("name"),
//                'tel'     =>Input::get("telephone"),
//                'email'       =>Input::get("email"),
               'message'   =>Input::get("description")
            ));


//                 Mail::send('contact/enquery',array('name'=>Input::get("name"),'email'=>Input::get("email"),'tel'=>Input::get("tel"),'description'=>Input::get("message")), function($message){
//                     $message->from(Input::get('email'))->to("leocosta88@yahoo.com", Input::get('name'))->subject("Contacts form Nkinga Health Center One Visitor");
//                 });

             return "<h4 class='text-error'>message has been sent..</h4>";


        }else{
return "<h4 class='text-error'>Compulsory field(s) empty.. </h4>";
}
        }


}
