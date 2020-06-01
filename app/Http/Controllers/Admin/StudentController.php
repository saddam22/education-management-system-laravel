<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use DB;
use App\Admin\StudentForm;
use App\Admin\TypeForm;
use App\Admin\SubTypeForm;
use App\Admin\ParentForm;
use Brian2694\Toastr\Facades\Toastr;

class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('student_forms')
                  ->join('parent_forms','student_forms.parent_id','=','parent_forms.id')
                  ->join('type_forms','student_forms.type_id','=','type_forms.id')
                  ->join('sub_type_forms','student_forms.subtype_id','=','sub_type_forms.id')
                  ->select('student_forms.*','parent_forms.fname as first_name','parent_forms.lname as last_name','parent_forms.address as addresses','type_forms.type','sub_type_forms.subtype')
                  ->get();
            
         return view('admin.student.index',compact('students'));         

    }

    public function create()
    {
        $types = TypeForm::select('id','type')->get();
        $parents = ParentForm::select('id','fname','lname')->get();
        $subtypes = SubTypeForm::select('id','subtype')->get();
        return view('admin.student.create',compact('types','subtypes','parents'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
         'fname' => 'required' , 'lname' => 'required', 'dob' => 'required', 'roll' => 'required', 'email' => 'required', 'phone' => 'required', 'bio' => 'required', 'image' => 'required|mimes:jpeg,jpg,bmp,png'
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
        $type_id = TypeForm::WHERE('id',$request->Class)->select('id')->first();
        
        $studentform = new StudentForm();
        $studentform->type_id = $type_id->id;
        $studentform->subtype_id = $request->Class;
        $studentform->parent_id = $request->parent_id;
        $studentform->fname = $request->fname;
        $studentform->lname = $request->lname;
        $studentform->dob = $request->dob;
        $studentform->roll = $request->roll;
        $studentform->email = $request->email;
        $studentform->phone = $request->phone;
        $studentform->bio = $request->bio;
        $studentform->image = $imagename;
        $studentform->save();
        Toastr::success('Student Data Successfully Created!! : ', 'success');
        return redirect()->route('admin.student.create');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
