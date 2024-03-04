<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarStoreRequest;
use App\Models\Car;
use App\Models\Category;
use App\Models\Optional;
use Illuminate\Http\Request;

class CarController extends Controller
{     
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
      

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all(); 
        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categories = Category::all(); 
       $optionals = Optional::all();
        return view('car.create', compact("categories", "optionals")); 
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarStoreRequest $request)
    {
     
        $file = $request -> file ('img');
         $car = Car::create ([
             "title"=> $request ->title,   
             "description"=>$request -> description,  
             "price"=> $request-> price, 
             "category_id" =>$request -> category, 
             "year"=> $request -> year,
             "img"=>$file ? $file ->store('public/images') : "public/images/default.png"
        ]);   
        
         $car->optionals()->attach($request->optional);

        return redirect()->route('car.create')->with('success', 'Gioco creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
     
        return view('car.show', compact('car'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( CarStoreRequest $request, Car $car)
    { 
        $file = $request->file ('img');
            $car->update([ 
             "title" =>$request->title, 
             "description"=>$request -> description, 
             "price"=> $request-> price,  
             "year"=> $request -> year,
             "img"=>$file ? $file ->store('public/images') : $car->img
            ]);
        return redirect()->route("car.edit", compact('car'))->with("success","La macchina è stata aggiornata correttamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete(); 
        return redirect()->route("car.index")->with("success","La macchina è stata eliminata con successo");
    }
}
