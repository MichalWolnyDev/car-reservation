<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Reservations;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all reservations
        return Reservations::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        // $validator = $request->validate([
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'surname'=> 'required',
            'car'=> 'required',
            'model'=> 'required',
            'year'=> 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'date'=> 'date_format:Y-m-d',
            'email' => 'email:rfc,dns',
            'phone' => 'required|digits:9'
        ],
        [
            'name.required' => 'Imię jest wymagane',
            'surname.required' => 'Nazwisko jest wymagane',
            'car.required' => 'Marka jest wymagana',
            'model.required' => 'Model jest wymagany',
            'year.required' => 'Rok produkcji jest wymagany',
            'email' => 'Podaj poprawny adres e-mail',
            'phone.required' => 'Numer telefonu min. 9 cyfr',
            'date_format' => 'Wybierz datę wizyty'
        ]
    );

        if ($validator->fails()) {    
            return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
        } else {
        //create a reservation
        return Reservations::create($request->all());


        }

        // if ($validator){

        // } else{
        //     return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show a reservation
        return Reservations::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update a reservation
        $reservation = Reservations::find($id);
        $reservation->update($request->all());
        return $reservation;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete a reservation
        return Reservations::destroy($id);
    }
}
