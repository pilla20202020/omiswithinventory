<?php

namespace App\Service\Brand;

use App\Models\Inventory\Brand\Brand;
use App\Service\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;


class brandService extends Service
{
    protected $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;

    }


    /*For DataTable*/
    public function getAllData()

    {
        $query = $this->brand->whereIsDeleted('no');
        return DataTables::of($query)
            ->addIndexColumn()

            ->editColumn('status',function(Brand $brand) {
                if($brand->status == 'active'){
                    return '<span class="badge badge-info">Active</span>';
                } else {
                    return '<span class="badge badge-danger">In-Active</span>';
                }
            })
            ->editColumn('image',function(Brand $brand) {
                if(isset($brand->image_path)){
                    return '<a href="http://127.0.0.1:8000/'.($brand->image_path).'" data-lightbox="http://127.0.0.1:8000/'.($brand->image_path).'"> <img src="http://127.0.0.1:8000/'.($brand->image_path).'" class="example-image" width="70px" height="70px" style="border-radius:50%">';
                } else {
                    ;
                }
            })
            ->editcolumn('actions',function(Brand $brand) {
                return '<a  href="' . route('inventory.brand.edit',$brand->id) . '" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"><em class="icon ni ni-edit"></em></a>
                <a  href="' . route('inventory.brand.delete',$brand->id) . '" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></a>';
            })->rawColumns(['visibility','availability','status','image','actions'])->make(true);
    }

    public function create(array $data)
    {
        try {
            /* $data['keywords'] = '"'.$data['keywords'].'"';*/
            $data['slug'] = Str::slug($data['name'],'-');
            $data['visibility'] = (isset($data['visibility']) ?  $data['visibility'] : '')=='on' ? 'visible' : 'invisible';
            $data['status'] = (isset($data['status']) ?  $data['status'] : '')=='on' ? 'active' : 'in_active';
            $data['availability'] = (isset($data['availability']) ?  $data['availability'] : '')=='on' ? 'available' : 'not_available';
            $data['created_by']= Auth::user()->id;
            //dd($data);
            $brand = $this->brand->create($data);
            return $brand;

        } catch (Exception $e) {
            return null;
        }
    }


    /**
     * Paginate all User
     *
     * @param array $filter
     * @return Collection
     */
    public function paginate(array $filter = [])
    {
        $filter['limit'] = 25;

        return $this->brand->orderBy('id','DESC')->whereIsDeleted('no')->paginate($filter['limit']);
    }

    /**
     * Get all User
     *
     * @return Collection
     */
    public function all()
    {
        return $this->brand->whereIsDeleted('no')->all();
    }

    /**
     * Get all users with supervisor type
     *
     * @return Collection
     */


    public function find($brandId)
    {
        try {
            return $this->brand->whereIsDeleted('no')->find($brandId);
        } catch (Exception $e) {
            return null;
        }
    }


    public function update($brandId, array $data)
    {
        try {
            $data['slug'] = Str::slug($data['name'],'-');

            $data['visibility'] = (isset($data['visibility']) ?  $data['visibility'] : '')=='on' ? 'visible' : 'invisible';
            $data['status'] = (isset($data['status']) ?  $data['status'] : '')=='on' ? 'active' : 'in_active';
            $data['availability'] = (isset($data['availability']) ?  $data['availability'] : '')=='on' ? 'available' : 'not_available';
            $data['has_subbrand'] = (isset($data['has_subbrand']) ?  $data['has_subbrand'] : '')=='on' ? 'yes' : 'no';
            $data['last_updated_by']= Auth::user()->id;
            $brand= $this->brand->find($brandId);

            $brand = $brand->update($data);
            //$this->logger->info(' created successfully', $data);

            return $brand;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }

    /**
     * Delete a User
     *
     * @param Id
     * @return bool
     */
    public function delete($brandId)
    {
        try {

            $data['last_deleted_by']= Auth::user()->id;
            $data['deleted_at']= Carbon::now();
            $brand = $this->brand->find($brandId);
            $data['is_deleted']='yes';
            return $brand = $brand->update($data);

        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * write brief description
     * @param $name
     * @return mixed
     */
    public function getByName($name){
        return $this->brand->whereIsDeleted('no')->whereName($name);
    }

    public function getBySlug($slug){
        return $this->brand->whereIsDeleted('no')->whereSlug($slug)->first();
    }


    function uploadFile($file)
    {
        if (!empty($file)) {
            $this->uploadPath = 'uploads/brand';
            return $fileName = $this->uploadFromAjax($file);
        }
    }

    public function __deleteImages($subCat)
    {
        try {
            if (is_file($subCat->image_path))
                unlink($subCat->image_path);

            if (is_file($subCat->thumbnail_path))
                unlink($subCat->thumbnail_path);
        } catch (\Exception $e) {

        }
    }

    public function updateImage($brandId, array $data)
    {
        try {
            $brand = $this->brand->find($brandId);
            $brand = $brand->update($data);

            return $brand;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
