<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\City;
use App\Models\admin\Category;
use App\Models\admin\Aminities;
use App\Models\admin\Slot_Category;
use App\Models\admin\Slider;

class MasterController extends Controller
{
    public function index()
    {
        $city = City::get();
        $category = Category::get();
        $aminities = Aminities::get();
        $slot_category = Slot_Category::get();
        $slider = Slider::get();

       return view('admin.masters',compact('city','category','aminities','slot_category','slider')); 
    }
    
    public function city_store(Request $request){
        // dd($request->all());
        $request ->validate([
            'city_name'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
        ]);
        $data =[
            'city'=>$request->input('city_name'),
            'latitude'=>$request->input('latitude'),
            'longitude'=>$request->input('longitude'),
        ];

        $city = City::create($data);

        return redirect()->back()->with('success', 'City Added Successfully');
    }
   
    public function city_destroy($id){
        $city = City::find($id);
        if($city){
            $city->delete();
            return redirect(route('index'))->with('success', 'City Deleted Successfully');
        }else{
            return redirect(route('index'))->with('error', 'City not found');

        }
    }

    public function update_city(Request $request)
     {
        $city_id = $request->input('city_id');
        $city = City::find($city_id);
        $city->city = $request->input('city_name');
        $city->update();
        return redirect()->back()->with('success', 'City Updated Successfully');
    }


    public function city_status(Request $request)
        {
            // dd($request->all());
            $city = City::
            where('id',$request->id)
            ->update([
            'status'=>$request->status
            ]);
            // session()->flash('msg','successfull');
            return back();
        }

    //end city

    public function category_store(Request $request){
        $request ->validate([
            'category_name'=>'required',
        ]);
        $data =[
            'category'=>$request->input('category_name'),
        ];

        $category = Category::create($data);

        return redirect()->back()->with('success', 'category Added Successfully');
    }
   
    public function category_destroy($id){
        $category = Category::find($id);
        if($category){
            $category->delete();
            return redirect(route('index'))->with('success', 'category Deleted Successfully');
        }else{
            return redirect(route('index'))->with('error', 'category not found');

        }
    }

    public function update_category(Request $request)
     {
        $category_id = $request->input('category_id');
        $category = Category::find($category_id);
        $category->category = $request->input('category_name');
        $category->update();
        return redirect()->back()->with('success', 'category Updated Successfully');
    }

    //end category

    public function aminities_store(Request $request){
        $request ->validate([
            'aminities_name'=>'required',
        ]);
        $data =[
            'aminities'=>$request->input('aminities_name'),
        ];

        $aminities = Aminities::create($data);

        return redirect()->back()->with('success', 'aminities Added Successfully');
    }
   
    public function aminities_destroy($id){
        $aminities = Aminities::find($id);
        if($aminities){
            $aminities->delete();
            return redirect(route('index'))->with('success', 'aminities Deleted Successfully');
        }else{
            return redirect(route('index'))->with('error', 'aminities not found');

        }
    }

    public function update_aminities(Request $request)
     {
        $aminities_id = $request->input('aminities_id');
        $aminities = Aminities::find($aminities_id);
        $aminities->aminities = $request->input('aminities_name');
        $aminities->update();
        return redirect()->back()->with('success', 'aminities Updated Successfully');
    }
//end aminities

public function slot_category_store(Request $request){
    $request ->validate([
        'slot_category_name'=>'required',
    ]);
    $data =[
        'slot_category'=>$request->input('slot_category_name'),
    ];

    $slot_category = Slot_Category::create($data);

    return redirect()->back()->with('success', 'slot_category Added Successfully');
}

public function slot_category_destroy($id){
    $slot_category = Slot_Category::find($id);
    if($slot_category){
        $slot_category->delete();
        return redirect(route('index'))->with('success', 'slot_category Deleted Successfully');
    }else{
        return redirect(route('index'))->with('error', 'slot_category not found');

    }
}

public function update_slot_category(Request $request)
 {
    $slot_category_id = $request->input('slot_category_id');
    $slot_category = Slot_Category::find($slot_category_id);
    $slot_category->slot_category = $request->input('slot_category_name');
    $slot_category->update();
    return redirect()->back()->with('success', 'slot_category Updated Successfully');
}

//end slot

public function slider_store(Request $request){
    $request ->validate([
        'slider_name'=>'required',
    ]);

    $filename="";
        if ($request->hasFile('slider_name')) {
            $file = $request->file('slider_name');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('panel/images/slider_name'), $filename);
    
        } 
    
    $data =[
        'slider'=>$filename,
    ];

    $slider = Slider::create($data);

    return redirect()->back()->with('success', 'slider Added Successfully');
}

public function slider_destroy($id){
    $slider = Slider::find($id);
    if($slider){
        $slider->delete();
        return redirect(route('index'))->with('success', 'slider Deleted Successfully');
    }else{
        return redirect(route('index'))->with('error', 'slider not found');

    }
}

public function update_slider(Request $request)
 {
    $slider_id = $request->input('slider_id');

    $slider = Slider::find($slider_id);
    $filename="";
    if ($request->hasFile('slider_name')) {
        $file = $request->file('slider_name');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('panel/images/slider_name'), $filename);

    } 
    $slider->slider = $filename;
    $slider->update();
    return redirect()->back()->with('success', 'slider Updated Successfully');
}


}
