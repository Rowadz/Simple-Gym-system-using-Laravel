<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\DB;
class CoachController extends Controller
{
    public function index()
    {
        if (session('coach'))
        {
            return view('coach.coach_home');
        }
        return view('welcome');
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
            // select Query
            $coach = DB::select('SELECT * FROM coaches WHERE Phone = ' . $phone . ' AND password = ' . $password);
            // select Query
            $name = DB::select('SELECT FIRST_NAME FROM coaches WHERE Phone = ' . $phone . ' AND password = ' . $password);
            if (sizeof($coach) >= 1)
            {
                $message = ['success' => "Welcome back " . $coach[0]->FIRST_NAME, 'url' => '/coach'];
                session(['coach' => $coach]);
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

    public function all_std()
    {
        $STD = DB::select('SELECT * FROM customers WHERE TRAINER_ID = ' . session('coach') [0]->ID);
        return view('coach.showSTD')
            ->with("STD", $STD);
    }
    public function add_schedule(Request $request)
    {
        $validator = Validator::make($request->all() , ['Schedule_name' => 'required']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            // insert Query
            DB::table('schedules')->insert(['NAME' => $request->Schedule_name]);
            $message = ['success' => $request->Schedule_name . " added to the schedules"];
            $response = Response::json($message, 200);
        }
        return $response;
    }
    public function add_exercise_page()
    {
        if (session('coach'))
        {
            // select query
            $machines = DB::select('SELECT * FROM machines');
            // select query
            $schedules = DB::select('SELECT * FROM schedules');
            $DATA = ['machines' => $machines, 'schedules' => $schedules];
            return view('coach.add_exercise')->with($DATA);
        }
        return view('welcome');
    }
    public function add_exercise(Request $request)
    {
        $validator = Validator::make($request->all() , ['exercise_name' => 'required', 'calories' => 'required', 'description' => 'required', 'machine' => 'required', 'schedule' => 'required']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            // insert query
            DB::table('exercises')->insert(['NAME' => $request->exercise_name, 'CALORIES' => $request->calories, 'DESCRIPTION' => $request->description, 'MACHINE_ID' => $request->machine, 'schedule_id' => $request->schedule]);
            $message = ['success' => 'Done adding ' . $request->exercise_name . ' to the exercises'];
            $response = Response::json($message, 200);
        }
        return $response;
    }
    public function add_locker(Request $request)
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
            // insert query
            DB::table('lockers')->insert(
                [
                    'Number' => $request->locker_number
                ]
            );
            $message = ['success' => 'Locker ' . $request->locker_number . ' added!'];
            $response = Response::json($message, 200);
        }
        return $response;
    }
}

