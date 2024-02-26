<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    //
    public function insert(Request $request)
    {

        /* ================================================= GET INPUT FIELD================================*/
        $email = $request->input('email');
        $username = $request->input('Username');

        $create_user = new Crud();
        $create_user->username = $username;
        $create_user->email = $email;
        $res = $create_user->save();
        if ($res) {
            return response()->json([
                'status' => 400,
                'messages' => 'data is save'
            ]);
        }
    }


    public  function show_data()
    {
        $show = DB::table('cruds');
        $output = '';
        if ($show->count() > 0) {

            foreach ($show as $c) {
                echo "okay";
                
            }
         

            # code...
        }

        echo $output;
       
    }
}
