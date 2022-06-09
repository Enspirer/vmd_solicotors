<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Testimonial;

class TestimonialController extends Controller
{

    public function index()
    {
        return view('backend.testimonial.index');
    }

    public function create()
    {
        return view('backend.testimonial.create');
    }

    public function getdetails(Request $request)
    {       
        $data = Testimonial::get();
        return DataTables::of($data)
            ->addColumn('status', function($data){
                if($data->status == 'Enabled'){
                    $status = '<span class="badge badge-success">Enabled</span>';
                }
                else{
                    $status = '<span class="badge badge-danger">Disabled</span>';
                }   
                return $status;
            })
            ->addColumn('image', function($data){
                $img = '<img src="'.uploaded_asset($data->image).'" style="width: 70%">';                
                return $img;
            })
            ->addColumn('action', function($data){
                $button1 = '<a href="'.route('admin.testimonial.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                $button2 = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button1.$button2;
            })
            ->rawColumns(['action','status','image'])
            ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);  

        if($request->image == null){
            return back()->withErrors('Please Select an Image');
        }
        
        $add = new Testimonial;

        $add->name = $request->name;        
        $add->description = $request->description;
        $add->image = $request->image;
        $add->stars = $request->stars;
        $add->order = $request->order;
        $add->status = $request->status;

        $add->save();

        return redirect()->route('admin.testimonial.index')->withFlashSuccess('Added Successfully');    
                    
    }

    public function edit($id)
    {
        $testimonial = Testimonial::where('id',$id)->first(); 

        return view('backend.testimonial.edit',[
            'testimonial' => $testimonial
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);                         
     
        $update = new Testimonial;

        $update->name = $request->name;        
        $update->description = $request->description;
        $update->image = $request->image;
        $update->stars = $request->stars;
        $update->order = $request->order;
        $update->status = $request->status;

        Testimonial::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.testimonial.index')->withFlashSuccess('Updated Successfully');            

    }

    public function destroy($id)
    {
        Testimonial::where('id', $id)->delete(); 
    }

    

}
