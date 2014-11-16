<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


    ////// functions to handle home
	public function index()
	{
		return View::make('home.index');
	}


    ///////////// functions to handle what we do
    public function what()
    {
        return View::make('what.index');
    }

    /////// functions to handle who we are
     public function history()
        {   $id = "history";
            return View::make('who.index',compact("id"));
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
            return View::make('work.index');
        }
        ////////// functions to handle opportunity
    public function donation()
        {
            return View::make('donation.index');
        }

    /////////////// functions to handle contacts
     public function contact()
        {
            return View::make('contact.index');
        }
//    public function addmail(){
//            Resources::create(array(
//                "title"=>Input::get("name"),
//                "title"=>Input::get("tel"),
//                "title"=>Input::get("email"),
//                "discr"=>Input::get("discr"),
//            ));
//    }

    public function enquery()
        {

         GuestMail::create(array(
             "name"=>Input::get("name"),
             "email"=>Input::get("email"),
             "tel"=>Input::get("tel"),
             "contents"=>Input::get("contents"),
         ));

         return "<h4 class='text-success'>message has been received Successful</h4>";

        }


}
