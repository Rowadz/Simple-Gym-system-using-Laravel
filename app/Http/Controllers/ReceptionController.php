<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use Validator;
use Carbon\Carbon;
class ReceptionController extends Controller
{
    public function index()
    {
        if (session('reception'))
        {
            return view('reception.reception_home');
        }
        return view('welcome');
    }
    public function login(Request $request)
    {
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
            $reception = DB::select('SELECT * FROM receptions WHERE phone = ' . $phone . ' AND password = ' . $password);
            if (sizeof($reception) >= 1)
            {
                $message = ['success' => "Welcome back " . $reception[0]->FIRST_NAME, 'url' => '/reception'];
                session(['reception' => $reception]);
                $response = Response::json($message, 200);
            }
            else
            {
                $message = ['error' => 'You entered something wrong '];
                $response = Response::json($message, 202);
            }
        }
        return $response;
    }
    public function add_customer_page()
    {
        if (session('reception'))
        {
            $coaches = DB::select('SELECT * FROM coaches');
            return view('reception.add_customer')->with('coaches', $coaches);
        }
        return view('welcome');
    }
    public function add_customer(Request $request)
    {
        $validator = Validator::make($request->all() , ['fname' => 'required', 'mname' => 'required', 'lname' => 'required', 'dob' => 'required', 'SEX' => 'required', 'TAX' => 'required', 'PAIDTAX' => 'required', 'WEIGHT' => 'required', 'HIEGHT' => 'required', 'VIP' => 'required', 'TRAINER_ID' => 'required', 'phone' => 'required|min:10', 'password' => 'required|min:6']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            $re_end;
            $tax = 0;
            if ($request->TAX == 100) $re_end = Carbon::now()->addMonth();
            else if ($request->TAX == 200) $re_end = Carbon::now()->addMonths(2);
            else if ($request->TAX == 500) $re_end = Carbon::now()->addMonths(6);
            else if ($request->TAX == 700) $re_end = Carbon::now()->addYear();
            if ($request->VIP == 1) $tax = 20;
            DB::table('customers')->insert(['FIRST_NAME' => $request->fname, 'MIDDLE_NAME' => $request->mname, 'LAST_NAME' => $request->lname, 'DOB' => $request->dob, 'SEX' => $request->SEX, 'REGISTER_DATE' => Carbon::now() , 'REGISTER_END' => $re_end, 'TAX' => $request->TAX + $tax, 'PAID_TAX' => $request->PAIDTAX, 'WEIGHT' => $request->WEIGHT, 'HIEGHT' => $request->HIEGHT, 'VIP' => $request->VIP, 'RECEPTION_WORKER_ID' => session('reception') [0]->ID, 'Phone' => $request->phone, 'Password' => $request->password, 'TRAINER_ID' => $request->TRAINER_ID]);
            $message = ['success' => $request->fname . ' can train now'];
            $response = Response::json($message, 200);
        }
        return $response;
    }
} < ? php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use Validator;
use Carbon\Carbon;
class ReceptionController extends Controller
{
    public function index()
    {
        if (session('reception'))
        {
            return view('reception.reception_home');
        }
        return view('welcome');
    }
    public function login(Request $request)
    {
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
            $reception = DB::select('SELECT * FROM receptions WHERE phone = ' . $phone . ' AND password = ' . $password);
            if (sizeof($reception) >= 1)
            {
                $message = ['success' => "Welcome back " . $reception[0]->FIRST_NAME, 'url' => '/reception'];
                session(['reception' => $reception]);
                $response = Response::json($message, 200);
            }
            else
            {
                $message = ['error' => 'You entered something wrong '];
                $response = Response::json($message, 202);
            }
        }
        return $response;
    }
    public function add_customer_page()
    {
        if (session('reception'))
        {
            $coaches = DB::select('SELECT * FROM coaches');
            return view('reception.add_customer')->with('coaches', $coaches);
        }
        return view('welcome');
    }
    public function add_customer(Request $request)
    {
        $validator = Validator::make($request->all() , ['fname' => 'required', 'mname' => 'required', 'lname' => 'required', 'dob' => 'required', 'SEX' => 'required', 'TAX' => 'required', 'PAIDTAX' => 'required', 'WEIGHT' => 'required', 'HIEGHT' => 'required', 'VIP' => 'required', 'TRAINER_ID' => 'required', 'phone' => 'required|min:10', 'password' => 'required|min:6']);
        if ($validator->fails())
        {
            $message = ['errors' => $validator->messages()
                ->all() ];
            $response = Response::json($message, 202);
        }
        else
        {
            $re_end;
            $tax = 0;
            if ($request->TAX == 100) $re_end = Carbon::now()->addMonth();
            else if ($request->TAX == 200) $re_end = Carbon::now()->addMonths(2);
            else if ($request->TAX == 500) $re_end = Carbon::now()->addMonths(6);
            else if ($request->TAX == 700) $re_end = Carbon::now()->addYear();
            if ($request->VIP == 1) $tax = 20;
            DB::table('customers')->insert(['FIRST_NAME' => $request->fname, 'MIDDLE_NAME' => $request->mname, 'LAST_NAME' => $request->lname, 'DOB' => $request->dob, 'SEX' => $request->SEX, 'REGISTER_DATE' => Carbon::now() , 'REGISTER_END' => $re_end, 'TAX' => $request->TAX + $tax, 'PAID_TAX' => $request->PAIDTAX, 'WEIGHT' => $request->WEIGHT, 'HIEGHT' => $request->HIEGHT, 'VIP' => $request->VIP, 'RECEPTION_WORKER_ID' => session('reception') [0]->ID, 'Phone' => $request->phone, 'Password' => $request->password, 'TRAINER_ID' => $request->TRAINER_ID]);
            $message = ['success' => $request->fname . ' can train now'];
            $response = Response::json($message, 200);
        }
        return $response;
    }
}

