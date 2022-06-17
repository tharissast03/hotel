<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', ['hotels' => $hotels]);
    }

    public function home()
    {
        $hotels = Hotel::all();
        return view('hotels.home', ['hotels' => $hotels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required',
            'description' => 'required',
            'facilitate' => 'required',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $hotel = Hotel::create([
            'name' => $request->name,
            'address' => $request->address,
            'image' => $imageName,
            'price' => $request->price,
            'description' => $request->description,
            'facilitate' => $request->facilitate,
        ]);
        return back()->with('success', 'Hotel has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);
        $hotels = Hotel::all();
        return view('hotels.show', ['hotel' => $hotel, 'hotels' => $hotels]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('hotels.edit', ['hotel' => $hotel]);
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
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'price' => 'required',
            'description' => 'required',
            'facilitate' => 'required',
        ]);

        $hotel = Hotel::find($id);
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->price = $request->price;
        $hotel->description = $request->description;
        $hotel->facilitate = $request->facilitate;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
            $hotel->image = $imageName;
        }
        $hotel->save();
        return back()->with('success', 'Hotel has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect('hotel')->with('success', 'Hotel has been deleted.');
    }
}
