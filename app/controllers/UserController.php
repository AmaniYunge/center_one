<?php

class UserController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        Return View::make("user.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        Return View::make("user.add");
    }

    public function userlist()
    {
        Return View::make("user.list");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        if(Input::get("password") == Input::get("repassword")){
            $usser = User::where("staff_id",Input::get("email"))->count();
            if($usser != 0){
                return "<h4 class='text-error'>User with email ".Input::get("email")." already existed Please try another email</h4>";
            }else{
                if(User::where('staff_id',Input::get("email"))->count() == 0){
                $user = User::create(array(
                    "first_name"=>Input::get("firstname"),
                    "staff_id"=>Input::get("email"),
                    "last_name"=>Input::get("lastname"),
                    "password"=>Input::get("password")
                ));

                return "<h4 class='text-success'>User Successful Registered</h4>";
            }
                else{
                    return "<h4 class='text-danger'>There is another user using this email, please use other email</h4>";
                }
            }
        }else{
            return "<h4 class='text-danger'>two password do not match</h4>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
//        return View::make("user.log",  compact("user"));
        return View::make("user.log",compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return View::make('user.edit',  compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::find($id);
            $user->first_name = Input::get("firstname");
            $user->last_name = Input::get("lastname");
            $user->staff_id = Input::get("email");
            $user->save();

            if(Input::has("password")){
                if(Input::get("password")===Input::get("re_enter_password")){
                    $user->password = Hash::make(Input::get("password"));
                    $user->save();
                }else{}
            }

            return "<h4 class='text-success'>User Updated Successfull</h4>";


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

    }


    /**
     * authanticate user during login.
     *
     * @return view
     */
    public function validate()
    {
//        $user = User::where("email",Input::get('email'))->first();
        $user = User::where("username",Input::get('email'))->first();
        if($user && Hash::check( Input::get('password'),$user->password)){
            if(Input::get('keep') == "keep"){
                Auth::login($user,TRUE);
            }else{
                Auth::login($user,FALSE);
            }
            if(Auth::check()){
                Logs::create(array(
                    "user_id"=>  Auth::user()->id,
                    "action"  =>"Logging in"
                ));
                return Redirect::to("home");
            }
        }
        else{
            return View::make("login")->with("error","Incorrect Username or Password");
        }
    }

    /**
     * loging out a user
     *
     * @return view
     */
    public function logout(){
        Auth::logout();
        return Redirect::to("/");
    }

   /**
    manage user profile
    return user profile
    */
    public function profile(){
        $user = Auth::user();
        return View::make("user.profile",compact("user"));
    }

    public function profileInfo(){
        $user = Auth::user();
        return View::make("user.profileInfo",compact("user"));
    }

    public function profileEdit(){
        $user = Auth::user();
        return View::make("user.profileEdit",compact("user"));
    }

    public function check_region($id){
        if($id == "0"){
            return Form::select('district',array('0'=>'-Select District-')+District::lists('district','id'),'',array('class'=>'form-control','required'=>'requiered'));

        }else{
            return Form::select('district',array("0"=>"-Select District-")+Region::find($id)->district()->lists('district','id'),'',array('class'=>'form-control','required'=>'requiered'));
        }
    }

    public function check_region1($id){
        if($id == "0"){
            return Form::select('district',array('all'=>'all')+District::lists('district','id'),'',array('class'=>'form-control','required'=>'requiered'));

        }else{
            return Form::select('district',array('all'=>'all')+Region::find($id)->district()->lists('district','id'),'',array('class'=>'form-control','required'=>'requiered'));
        }
    }
}