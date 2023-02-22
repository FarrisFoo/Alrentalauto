<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables as DataTables;

class CarController extends Controller
{
    public function index()
    {
        $carData = Car::get();

        return view('admin.car.list', compact('carData'));
    }

    public function carListing(Request $request)
    {
        if($request->ajax()) {
            $cardata = Car::latest()->get();
            
            return Datatables::of($cardata)
                ->addIndexColumn()
                ->addColumn('action', function($cardata){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }       
    }

    public function create()
    {
        return view('admin.car.create');
    }

    public function createPost(Request $request)
    {

        $rules = [
            'plate_number' => 'required',
            'car_model' => 'required',
            'car_brand' => 'required',
            'price' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()
            ]);
        }

        $createNewCar = new Car();
        $createNewCar->plate_num = $request->plate_number;
        $createNewCar->price = $request->price;
        $createNewCar->model = $request->car_model;
        $createNewCar->brand = $request->car_brand;
        $createNewCar->status = 1;
        $createNewCar->condition = 100;
        $createNewCar->last_service = now();
        $createNewCar->save();

        return response()->json([
            'status' => true
        ]);
    }
}
