<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use DB;
use App\Admin\TypeForm;
use Brian2694\Toastr\Facades\Toastr;

class TypeController extends Controller
{

    public function index()
    {
        $types = TypeForm::latest()->get();
        return view("admin.type.index",compact('types'));
    }

    public function create()
    {
        return view('admin.type.create');
    }

    public function store(Request $request)
    {
       $this->validate($request,[
        'type' => 'required'
       ]);

       $type = new TypeForm();
       $type->type = $request->type;
       $type->save();
       Toastr::success('Type Successfully Created!! : ', 'success');
       return redirect()->route('admin.type.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $type = TypeForm::find($id);
        return view('admin.type.edit',compact('type'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'type' => 'required'
        ]);

        $type = TypeForm::find($id);
        $type->type = $request->type;
        $type->save();
        Toastr::success('Type Successfully Updated!! : ', 'success');
        return redirect()->route('admin.type.index');
    }

    public function destroy($id)
    {
        TypeForm::find($id)->delete();
        Toastr::success('Type Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
