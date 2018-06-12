<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use Validator;

class CustomerController extends Controller
{
    public function index()
    {
        if (session('customer'))
        {
            $hasOne = DB::select("SELECT * FROM lockers WHERE CUSTOMER_ID = " . session('customer') [0]->ID);
            if (sizeof($hasOne))
            {
                return view('customer/customer_home')->with('lockers', $hasOne);
            }
            else
            {
                $lockers = DB::select("SELECT ID, NUMBER FROM lockers WHERE CUSTOMER_ID IS NULL");
                return view('customer/customer_home')->with('lockers', $lockers);
            }

        }
        return view('Welcome');
    }
    public function login(Request $request)
    {
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
            $customer = DB::select('SELECT * FROM customers WHERE phone = ' . $phone . ' AND password = ' . $password);
            if (sizeof($customer) >= 1)
            {
                $message = ['success' => 'Welcome back ' . $customer[0]->FIRST_NAME, 'url' => '/customer'];
                session(['customer' => $customer]);
                $response = Response::json($message, 200);
                return $response;
            }
            else
            {
                $message = ['error' => "You entered something wrong"];
                $response = Response::json($message, 202);
            }
        }
        return $response;
    }

    public function see_schedule_page()
    {
        if (session('customer'))
        {
            /*$data = array();
            $sc = array();
            foreach ($schedules as $schedule) {
            $x =  $schedule->ID;
            $z = DB::select('SELECT * FROM exercises WHERE schedule_id = '. $x);
            array_push($data, $z);
            // array_push($sc, $x);
            }
            */
            $schedules = DB::select('SELECT * FROM schedules');
            return view('customer.all_schedule')->with('schedules', $schedules);
        }
        return vuew('welcome');
    }
    public function see_schedule($id)
    {
        if (session('customer'))
        {
            $EX = DB::select("SELECT * FROM exercises WHERE schedule_id = " . $id);
            return view('customer.see_schedule')->with('exercises', $EX);
        }
        return view('welcome');
    }
    public function select_locker(Request $request)
    {
        $validator = Validator::make($request->all() , ['locker_number' => 'required']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            DB::table('lockers')->where('ID', $request->locker_number)
                ->update(['CUSTOMER_ID' => session('customer') [0]->ID]);
            $message = ['success' => "This locker in now yours"];
            $response = Response::json($message, 200);
        }
        return $response;
    }
    public function basic_info()
    {
        if (session('customer'))
        {
            $basic_info = DB::select("SELECT * FROM customers WHERE ID = " . session('customer') [0]->ID);
            $coach_name = DB::select('SELECT * FROM coaches WHERE ID = ' . $basic_info[0]->TRAINER_ID);
            $data = ['basic_info' => $basic_info, 'coach_name' => $coach_name];
            return view('customer.basic_info')->with($data);
        }
        return view('welcome');
    }
}

