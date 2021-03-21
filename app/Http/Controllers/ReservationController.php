<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;

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
        //     'name'=>'required',
        //     'surname'=>'required',
        //     'car'=>'required',
        //     'model'=>'required',
        //     'year'=>'required',
        //     'date'=>'required'
        // ]);

        // if ($validator->fails()) {    
        //     return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
        // }
        // create a reservation
        return Reservations::create($request->all());
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
