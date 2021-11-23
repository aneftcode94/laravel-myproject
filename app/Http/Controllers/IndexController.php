<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendMail;

use App\Models\Worker;

class IndexController extends Controller
{
    public function register(Request $request){
        $worker = Worker::where('correo','=', $request->correo)->first();

        if ($worker==null){
            $worker = new Worker();
        }

        $worker->correo = $request->correo;
        $worker->password = bcrypt($request->password);
        $worker->save();

        return response()->json($worker);
    }

    public function reset(Request $request){
        $correo = $request->correo;
        SendMail::SendEmail($correo);
        return response()->json(true);
    }


}
