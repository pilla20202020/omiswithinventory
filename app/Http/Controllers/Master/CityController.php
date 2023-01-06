<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\City;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function index()
    {
        $data = City::where('status', '<>', -1)->get();
        return view("omis.master.city.index", compact('data'));
    }

    public function create()
    {
        return view("omis.master.city.create");
    }

    public function store(Request $request)
    {
        City::create($request->all());
        return redirect()->route('master.city.index')->with('success', 'The City created Successfully.');
    }

    public function show($id)
    {
        $data = City::findOrFail($id);
        return view("omis.master.city.show", compact('data'));
    }


    public function edit($id)
    {
        $data = City::findOrFail($id);
        return view("omis.master.city.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = City::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('master.city.index')->with('success', 'The City updated Successfully.');
    }

    public function destroy($id)
    {
        $data = City::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The City Deleted Successfully.'], 200);
    }
}
