<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use DB;
use App\Admin\TypeForm;
use App\Admin\SubTypeForm;
use App\Admin\ParentForm;
use Brian2694\Toastr\Facades\Toastr;

class ParentController extends Controller
{

    public function index()
    {
        $parents = DB::table('parent_forms')
                  ->join('type_forms','parent_forms.type_id','=','type_forms.id')
                  ->join('sub_type_forms','parent_forms.subtype_id','=','sub_type_forms.id')
                  ->select('parent_forms.*','type_forms.type','sub_type_forms.subtype')
                  ->get();
            dd($parents);
         return view('admin.parent.index',compact('parents'));   
    }

    public function create()
    {
         $types = TypeForm::select('id','type')->get();
         $subtypes = SubTypeForm::select('id','subtype')->get();
        return view('admin.parent.create',compact('types','subtypes'));
    }

    public function store(Request $request)
    {
          $this->validate($request,[
         'fname' => 'required' , 'lname' => 'required', 'occupation' => 'required', 'email' => 'required', 'address' => 'required', 'phone' => 'required', 'bio' => 'required', 'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);

          $image = $request->file('image');
        //$slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/studentimages'))
            {
                mkdir('uploads/studentimages', 0777 , true);
            }
            $image->move('uploads/studentimages',$imagename);
        }else {
            $imagename = 'dafault.png';
        }   
        
        $parentform = new ParentForm();
        $parentform->type_id = $request->type_id;
        $parentform->subtype_id = $request->subtype_id;
        $parentform->fname = $request->fname;
        $parentform->lname = $request->lname;
        $parentform->occupation = $request->occupation;
        $parentform->email = $request->email;
        $parentform->address = $request->address;
        $parentform->phone = $request->phone;
        $parentform->bio = $request->bio;
        $parentform->image = $imagename;
        $parentform->save();
        Toastr::success('Parent Data Successfully Created!! : ', 'success');
        return redirect()->route('admin.parent.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
