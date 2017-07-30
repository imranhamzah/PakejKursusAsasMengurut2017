<?php

namespace App\Http\Controllers;

use App\UsersMain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class StudentRegistration extends Controller
{
    public function index()
    {
        return view('student_registration');
    }

    public function process(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'mobile_number' => 'required',
            'no_ic' => 'required',
            'address' => 'required',
            'date_time_class' => 'required'
        ]);

        $obj_users_main = new UsersMain();
        $obj_users_main->user_fullname = $request->input("fullname");
        $obj_users_main->user_mobileno = $request->input("mobile_number");
        $obj_users_main->user_no_ic = $request->input("no_ic");
        $obj_users_main->user_address = $request->input("address");
        $obj_users_main->user_datetime_class = $request->input("date_time_class");
        $obj_users_main->package_selected = $request->input("package_selected");
        $obj_users_main->save();

        $user_id = $obj_users_main->user_id;

        return redirect('/student-registration/success/?id='.$user_id);
    }

    public function success(Request $request)
    {
        $data['obj_user_data'] = $this->get_user_data($request);
        return view('success_page',$data);
    }

    private function get_user_data($request)
    {
        $obj_user = UsersMain::where('user_id',$request->input('id'))->first();
        if($obj_user)
        {
            return $obj_user;
        }
    }
}
