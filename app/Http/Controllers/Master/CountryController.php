<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Country;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $data = Country::where('status', '<>', -1)->get();
        return view("omis.master.country.index", compact('data'));
    }

    public function create()
    {
        return view("omis.master.country.create");
    }

    public function store(Request $request)
    {
        Country::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
        }
        return redirect()->route('master.country.index')->with('success', 'The Country created Successfully.');
    }

    public function show($id)
    {
        $data = Country::findOrFail($id);
        return view("omis.master.country.show", compact('data'));
    }


    public function edit($id)
    {
        $data = Country::findOrFail($id);
        return view("omis.master.country.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Country::findOrFail($id);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
        }
        return redirect()->route('master.country.index')->with('success', 'The Country updated Successfully.');
    }

    public function destroy($id)
    {
        $data = Country::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
    }

    public function api(Request $request, $authCode)
    {
        $action = $request->action;
        switch ($action) {
            case 'create':
            case 'update':
            case 'delete':
            default:   

        }
    }
}
