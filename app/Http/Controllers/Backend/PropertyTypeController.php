<?php

namespace App\Http\Controllers\Backend;

use App\Models\Amenities;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PropertyTypeController extends Controller
{
    public function AllType()
    {

        $types = PropertyType::latest()->get();
        return view('backend.type.all_type', compact('types'));
    }
    public function AddType()
    {


        return view('backend.type.add_type');
    }
    public function StoreType(Request $request)
    {
        // Validation 
        $request->validate([
            'type_name' => 'required|unique:property_types|max:200',
            'type_icon' => 'required'

        ]);

        PropertyType::insert([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,
        ]);

        $notification = array(
            'message' => 'Property Type was Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.type')->with($notification);
    }
    public function EditType($id)
    {

        $types = PropertyType::findOrFail($id);
        return view('backend.type.edit_type', compact('types'));
    } // End Method 

    public function UpdateType(Request $request)
    {

        $pid = $request->id;
        $request->validate([

            'type_icon' => 'required',
            'type_name' => ['required', 'max:200', 'unique:property_types,type_name,' . $pid]

        ]);
        PropertyType::findOrFail($pid)->update([

            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,
        ]);

        $notification = array(
            'message' => 'Property Type Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.type')->with($notification);
    }
    public function DeleteType($id)
    {

        PropertyType::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Property Type Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    ///////////// Amenitites All Method //////////////


    public function AllAmenitie()
    {

        $amenities = Amenities::latest()->get();
        return view('backend.amenities.all_amenities', compact('amenities'));
    }

    public function AddAmenitie()
    {
        return view('backend.amenities.add_amenities');
    }
}
