<?php

namespace App\Http\Controllers\Inventory\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\BrandRequest;
use App\Service\Brand\BrandService;
// use App\Http\Service\Brand\BrandService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brand;

    function __construct(BrandService $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = $this->brand->paginate();
        return view('omis.inventory.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('omis.inventory.brand.create');

    }

    public function getAllData()
    {
        // dd($this->brand);
        return $this->brand->getAllData();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        //
        if($brand = $this->brand->create($request->all())) {
            if($request->hasFile('image')) {
                $this->uploadFile($request, $brand);
            }
            return redirect()->route('inventory.brand.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $brand = $this->brand->find($id);
        return view('omis.inventory.brand.edit',compact('brand'));
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
        //
        if($this->brand->update($id,$request->all()))
        {
            if ($request->hasFile('image')) {
                $brand = $this->brand->find($id);
                $this->uploadFile($request, $brand);
            }
            return redirect()->route('inventory.brand.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if($this->brand->delete($id)) {
            return redirect()->route('inventory.brand.index');
        }
    }

    function uploadFile(Request $request, $brand)
    {
        $file = $request->file('image');
        $fileName = $this->brand->uploadFile($file);
        if (!empty($brand->image))
            $this->brand->__deleteImages($brand);


        $data['image'] = $fileName;
        $this->brand->updateImage($brand->id, $data);

    }
}
