<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carsm;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'immatriculation' => 'required|string|max:255',
            'marque' => 'nullable|string|max:255',
            'modele' => 'nullable|string|max:255',
            'etat' => 'nullable|string|max:255',
            'kilometrage' => 'nullable|numeric|min:0',
            'assurance_type' => 'nullable|string|max:255',
            'next_assurance_date' => 'nullable|date',
            'datem' => 'nullable|date',
            'couleur' => 'nullable|string|max:7', // Hex color code length
            'type_carburant' => 'nullable|string|in:essence,diesel,électrique,hybride,gaz',
            'transmission' => 'nullable|string|max:255',
            'puissance' => 'nullable|numeric|min:0',
            'nombre_portes' => 'nullable|numeric|min:0|max:8',
            'nombre_places' => 'nullable|numeric|min:0|max:10',
            'prix' => 'nullable|numeric|min:0',
            'date_achat' => 'nullable|date|before_or_equal:today',
            'proprietaire' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
        ], [
            'nombre_portes.max' => 'The number of doors cannot exceed 8.',
            'nombre_places.max' => 'The number of places cannot exceed 10.',
            'date_achat.before_or_equal' => 'The purchase date cannot be in the future.',
            // other messages...
        ]);
    
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();

              
        // }
    
        // Store the data if validation passes
        $car = new Carsm();
        $car->immatriculation = $request->immatriculation;
        $car->marque = $request->marque;
        $car->modele = $request->modele;
        $car->etat = $request->etat;
        $car->kilometrage = $request->kilometrage;
        $car->assurance_type = $request->assurance_type;
        $car->next_assurance_date = $request->next_assurance_date;
        $car->datem = $request->datem;
        $car->couleur = $request->couleur;
        $car->type_carburant = $request->type_carburant;
        $car->transmission = $request->transmission;
        $car->puissance = $request->puissance;
        $car->nombre_portes = $request->nombre_portes;
        $car->nombre_places = $request->nombre_places;
        $car->prix = $request->prix;
        $car->date_achat = $request->date_achat;
        $car->proprietaire = $request->proprietaire;
        $car->description = $request->description;
        $car->save();
    

        // Log the creation
        // activity()
        //     ->performedOn($car)
        //     ->withProperties($validator)
        //     ->log('Car created');

        // $notification = [
        //     'message' => 'Car created successfully.',
        //     'alert-type' => 'success'
        // ];

        // return redirect()->route('admin.ourcars')->with($notification);
        return redirect()->route('admin.ourcars');
    }

    public function create()
    {
        return view('admin.adding.car_add');
    }

    public function ourcars()
    {
        return view('admin.webapp.cars.Ourcars');
    }

    public function cardata()
    {
        $car = Carsm::latest()->get();    
        return view('admin.webapp.cars.Ourcars', compact('car'));
    }

    public function edit($immatriculation)
    {
        $types = Carsm::findOrFail($immatriculation);
        return view('admin.webapp.cars.car_edit', compact('types'));
    }

    public function deleteCar($immatriculation)
    {
        $car = Carsm::findOrFail($immatriculation);
        
        // // Log the deletion
        // activity()
        //     ->performedOn($car)
        //     ->withProperties($car->toArray())
        //     ->log('Car deleted');
            
        // $car->delete();

        // $notification = [
        //     'message' => 'Car deleted successfully.',
        //     'alert-type' => 'success'
        // ];

        // return redirect()->back()->with($notification);
        return redirect()->back();
    }

    public function updateCar(Request $request, $immatriculation)
    {
        $car = Carsm::findOrFail($immatriculation); 

        // Update the car data
        $car->update([
            'etat' => $request->etat,
            'kilometrage' => $request->kilometrage,
            'assurance_type' => $request->assurance_type,
            'next_assurance_date' => $request->next_assurance_date,
            'type_carburant' => $request->type_carburant,
            'couleur' => $request->couleur,
            'description' => $request->description,
        ]);

        // // Log the update
        // activity()
        //     ->performedOn($car)
        //     ->withProperties($request->all())
        //     ->log('Car updated');

        // $notification = [
        //     'message' => 'Car updated successfully.',
        //     'alert-type' => 'success'
        // ];

        // return redirect()->route('admin.ourcars')->with($notification);
        return redirect()->route('admin.ourcars');
    }


    public function carsdetails($immatriculation) {
        $car = Carsm::findOrFail($immatriculation);
        return view('admin.webapp.cars.cardetails',compact('car'));
    }
}
