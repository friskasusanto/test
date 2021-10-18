<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Company;
use Mail;

class EmployeController extends Controller
{
    public function employe_list ()
    {
        $employe = Employe::orderBy('created_at', 'desc')->paginate(10);
        $company = Company::all();
        return view('admin.employe.list', compact(['employe', 'company']));
    }

    public function employe_addView ()
    {
        $company = Company::all();
        // dd($company);
        return view('admin.employe.add', compact(['company']));
    }

    public function employe_add (Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
        ]); 


        $status = 200;
        $message = "Success add Employe";

        $add = new Employe;
        $add->first_name = $request->first_name;
        $add->last_name = $request->last_name;
        $add->company_id = $request->company;
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->save();

        $details = [
        'title' => 'Mail from admin@grtech.com.my',
        'body' => 'Your company got new employe with detail :',
        'full_name' => $add->first_name.$add->last_name,
        'email' => $add->email,
        'phone' => $add->phone
        ];

        $email = Company::where('id', $add->company_id)->pluck('email')->toArray();
       
        \Mail::to($email)->send(new \App\Mail\Mail($details));

        return redirect('/employe/list')->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function employe_edit (Request $request, $id)
    {
        $status = 200;
        $message = "Success edit Employe";

        $edit = Employe::find($id);
        $edit->first_name = $request->first_name;
        $edit->last_name = $request->last_name;

        if ($request->company == null){
            $edit->company_id = $edit->company_id;
        } elseif ($request->company != null){
            $edit->company_id = $request->company;
        }
        
        $edit->email = $request->email;
        $edit->phone = $request->phone;
        $edit->save();

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function employe_delete (Request $request, $id)
    {
        $status = 200;
        $message = "Deleting Success";
        $delete = Employe::find($id);
        $delete->delete();

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
