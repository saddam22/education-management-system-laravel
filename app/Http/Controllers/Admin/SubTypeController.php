<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use DB;
use App\Admin\SubTypeForm;
use App\Admin\TypeForm;
use Brian2694\Toastr\Facades\Toastr;

class SubTypeController extends Controller
{
   public function index()
    {
        //$subtypes = SubTypeForm::latest()->get();
        
        $subtypes = DB::table('sub_type_forms')
                  ->join('type_forms','sub_type_forms.type_id','=','type_forms.id')
                  ->select('sub_type_forms.*','type_forms.type')
                  ->get();

        return view("admin.subtype.index", compact('subtypes'));
    }

    public function create()
    {
        $subtypes = TypeForm::select('id','type')->get();
        $types = TypeForm::all();
        return view('admin.subtype.create',compact('types','subtypes'));
    }

    public function store(Request $request)
    {
       $this->validate($request,[
        'subtype' => 'required'
       ]);

       $subtype = new SubTypeForm();
       $subtype->type_id = $request->type_id;
       $subtype->subtype = $request->subtype;
       $subtype->save();
       Toastr::success('Sub Type Successfully Created!! : ', 'success');
       return redirect()->route('admin.subtype.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $subtypes = TypeForm::select('id','type')->get();
        $subtypeform = SubTypeForm::find($id);
        return view('admin.subtype.edit',compact('subtypes','subtypeform'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'subtype' => 'required'
        ]);

       $subtype = SubTypeForm::find($id);

       $subtype->type_id = $request->type_id;
       $subtype->subtype = $request->subtype;
       $subtype->save();
       Toastr::success('Sub Type Successfully Updated!! : ', 'success');
       return redirect()->route('admin.subtype.index');
    }

    public function destroy($id)
    {
        SubTypeForm::find($id)->delete();
        Toastr::success('Sub Type Successfully Deleted!! : ', 'success');
        return redirect()->back();
    }
}
