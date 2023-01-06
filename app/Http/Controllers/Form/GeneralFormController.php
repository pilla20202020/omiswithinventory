<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralFormController extends Controller
{
    public function create()
    {
        return view('omis.form.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'tableName' => 'required',
        ]);
        $name = trim($request->type);

        $command = $name;

        $tableName = trim($request->tableName);
        $directoryName = trim($request->directoryName);

        switch ($command) {
            case 'dictonary':
                $data['tableName'] = "tbl_dictonary";
                if ($tableName != "") {
                    switch ($tableName) {
                        case 'add':
                            $data['TableCols'] = DB::select("describe " . $data['tableName']);
                            return view("omis.settings.dictonary/add", $data);
                        default:
                            $data['TableRows'] = DB::select("select * from " . $data['tableName']);
                            return view("omis.settings.dictonary.list", $data);
                    }
                }
                $data['TableName'] = "tbl_dictonary";
                $data['TableRows'] = DB::select("select * from " . $data['TableName']);
                return view("omis.settings.dictonary", $data);



            case 'curd':
                $data['tableName'] = $tableName;
                $data['directoryName'] = $directoryName;
                $columns =  DB::select("describe $tableName"); // users table
                // dd($columns[0]->Field); // dump the result and die
                return view("omis.settings.curd", $data);


            default:

                return view("omis.settings.home");
            }
    }
}
