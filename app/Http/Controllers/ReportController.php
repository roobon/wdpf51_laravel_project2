<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    public function Report1()
    {
        // $data = DB::table('offices')->where('country', 'USA')->get();
        // echo  $data->count();
        // echo "<pre>";
        // print_r($data);
        //return view("reports.report1", compact('data'));

        #######################Report 2
        // $data = DB::table('employees')->whereIn('officeCode', [1, 2, 3]);
        // $result = $data->get();
        // echo  $data->count();
        // echo "<pre>";
        // print_r($result);
        #######################Report 3
        // $data = DB::table('employees')->whereIn('officeCode', [1, 2, 3])->where("jobTitle", "Sales Rep");
        // $result = $data->get();
        // echo  $data->count();
        // echo "<pre>";
        // print_r($result);

        #######################Report 4
        // $data = DB::table('employees')->select(DB::raw('CONCAT(lastName," ",firstName) AS fullname'), 'email', 'jobTitle');
        // $result = $data->get();
        // echo  $data->count();
        // echo "<pre>";
        // print_r($result);

        #######################Report 5
        // $data = DB::table('employees')->select(DB::raw('count(employeeNumber)'), 'jobTitle')->groupBy('jobTitle');
        // $result = $data->get();
        // echo  $result->count();
        // echo "<pre>";
        // print_r($result);

        #######################Report 6
        // $data = DB::table('employees')->where('officeCode', 3)->orWhere('officeCode', 5);
        // $result = $data->get();
        // echo  $data->count();
        // echo "<pre>";
        // print_r($result);

        #######################Report 7
        // $data = DB::table('employees')->whereBetween('officeCode', [1, 3]);
        // $result = $data->get();
        // echo  $data->count();
        // echo "<pre>";
        // print_r($result);

        #######################Report 8
        $data = DB::table('employees');
        $data->join('offices', 'offices.officeCode',  '=', 'employees.officeCode');
        $result = $data->get();
        echo  $result->count();
        echo "<pre>";
        print_r($result);
    }
}
