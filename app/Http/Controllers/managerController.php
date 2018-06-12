<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
class managerController extends Controller
{
    public function index()
    {
        if (session('manager'))
        {
            return view('manager/manager_home');
        }
        return view('Welcome');
        //$name = session('manager');
        //return $name[0]->FIRST_NAME;
        
    }
    public function login(Request $request)
    {
        $response;
        //return redirect('home/dashboard');
        // $users = Managers::find($request->id);
        $validator = Validator::make($request->all() , ['phone' => 'required|max:10', 'password' => 'required']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            $phone = $request->phone;
            $password = $request->password;
            $manager = DB::select('SELECT * FROM managers WHERE Phone = ' . $phone . ' AND password = ' . $password);
            $name = DB::select('SELECT FIRST_NAME FROM managers WHERE Phone = ' . $phone . ' AND password = ' . $password);
            if (sizeof($manager) >= 1)
            {
                $message = ['success' => "Welcome back " . $manager[0]->FIRST_NAME, 'url' => '/manager'];
                session(['manager' => $manager]);
                $response = Response::json($message, 200);
            }
            else
            {
                $message = ['errors' => 'You entered something wrong '];
                $response = Response::json($message, 202);
            }

        }
        return $response;
    }
    public function logout()
    {
        // TODO: destroy the session
        
    }
    public function show_all_coaches()
    {
        $all_coaches = DB::select('SELECT * FROM coaches');
        return view('manager.all_coaches')->with('coaches', $all_coaches);
    }
    public function add_coach_page()
    {
        if (session('manager'))
        {
            return view('manager.add_coach');
        }
        return view('Welcome');
    }
    public function add_coach(Request $request)
    {
        $validator = Validator::make($request->all() , ['fname' => 'required', 'mname' => 'required', 'lname' => 'required', 'dob' => 'required', 'SEX' => 'required', 'salary' => 'required', 'phone' => 'required|min:10', 'password' => 'required|min:6']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            DB::table('coaches')->insert(['FIRST_NAME' => $request->fname, 'MIDDLE_NAME' => $request->mname, 'LAST_NAME' => $request->lname, 'DOB' => $request->dob, 'SEX' => $request->SEX, 'SALARY' => $request->salary, 'Phone' => $request->phone, 'Password' => $request->password]);
            $message = ['success' => "Coach " . $request->fname . ' is now in the team'];
            $response = Response::json($message, 200);
        }
        return $response;
    }
    public function fire_coach(Request $request)
    {
         $all_coaches = DB::select('SELECT * FROM coaches');
        DB::table('coaches')->where('ID', '=', $request->id)
            ->delete();
        //$fname = DB::select('SELECT FIRST_NAME FROM coaches WHERE ID = "' . $request->id. '"');
        $all_coaches = DB::select('SELECT * FROM coaches');
        DB::table('customers')
            ->where('TRAINER_ID', $request->id)
            ->update(['TRAINER_ID' => $all_coaches[0]->ID]);
        $message = ['success' => 'Fired!!'];
        $response = Response::json($message, 200);
        return Response::json($message, 200);
    }
    public function add_rece_page()
    {
        if (session('manager'))
        {
            return view('manager.add_rece');
        }
        return view('Welcome');
    }
    public function add_rece(Request $request)
    {
        $validator = Validator::make($request->all() , ['fname' => 'required', 'mname' => 'required', 'lname' => 'required', 'dob' => 'required', 'SEX' => 'required', 'salary' => 'required', 'phone' => 'required|min:10', 'password' => 'required|min:6']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            DB::table('receptions')->insert(['FIRST_NAME' => $request->fname, 'MIDDLE_NAME' => $request->mname, 'LAST_NAME' => $request->lname, 'DOB' => $request->dob, 'SEX' => $request->SEX, 'SALARY' => $request->salary, 'Phone' => $request->phone, 'Password' => $request->password]);
            $message = ['success' => $request->fname . ' is now in the reception team'];
            $response = Response::json($message, 200);
        }
        return $response;
    }
    public function show_all_rece()
    {
        $all_receptions = DB::select('SELECT * FROM receptions');
        return view('manager.all_receptions')->with('receptions', $all_receptions);
    }
    public function fire_rece(Request $request)
    {
        DB::table('receptions')->where('ID', '=', $request->id)
            ->delete();
        //$fname = DB::select('SELECT FIRST_NAME FROM coaches WHERE ID = "' . $request->id. '"');
        $message = ['success' => 'Fired!!'];
        $response = Response::json($message, 200);
        return Response::json($message, 200);
    }
    public function add_Product_page()
    {
        if (session('manager'))
        {
            return view('manager.add_Product');
        }
        return view('Welcome');
    }
    public function add_product(Request $request)
    {
        $validator = Validator::make($request->all() , ['Pname' => 'required', 'QTY' => 'required']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            DB::table('products')->insert(['NAME' => $request->Pname, 'QUANTITY' => $request->QTY]);
            DB::table('supplements')
                ->insert(['MANAGER_ID' => session('manager') [0]->ID, 'QUANTITY' => $request->QTY, 'TYPE' => 1]);
            $message = ['success' => $request->Pname . ' added to the products!'];
            $response = Response::json($message, 200);
        }
        return $response;
    }
    public function add_machine_page()
    {
        if (session('manager'))
        {
            return view('manager.add_machine');
        }
        return view('Welcome');
    }
    public function add_machine(Request $request)
    {
        $validator = Validator::make($request->all() , ['Mname' => 'required', 'QTY' => 'required']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            DB::table('machines')->insert(['NAME' => $request->Mname, 'QUANTITY' => $request->QTY]);
            DB::table('supplements')
                ->insert(['MANAGER_ID' => session('manager') [0]->ID, 'QUANTITY' => $request->QTY, 'TYPE' => 2]);
            $message = ['success' => $request->Mname . ' added to the Machines!'];
            $response = Response::json($message, 200);
        }
        return $response;
    }
}

