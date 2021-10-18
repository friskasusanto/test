<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function company_list ()
    {
        $company = Company::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.company.list', compact(['company']));
    }

    public function company_addView ()
    {
        return view('admin.company.add');
    }

    public function company_add (Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]); 


        $status = 200;
        $message = "Success add Company";

        $add = new Company;
        $add->name = $request->name;
        $add->email = $request->email;

        if ($request->logo != null){
            $fileName = time().'.'.$request->logo->getClientOriginalExtension(); 
            $request->logo->move(public_path('logo'), $fileName);
            $add->logo= $fileName;
        }elseif ($request->logo == null){
            $add->logo= null;
        }

        $add->website = $request->website;
        $add->save();

        return redirect('/company/list')->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function company_edit (Request $request, $id)
    {
        $status = 200;
        $message = "Success edit Company";

        $edit = Company::find($id);
        $edit->name = $request->name;
        $edit->email = $request->email;

        if ($request->logo == null) {
            $edit->logo = $edit->logo;
        } elseif ($request->logo != null){
            $fileName = time().'.'.$request->logo->getClientOriginalExtension(); 
            $request->logo->move(public_path('logo'), $fileName);
            $edit->logo= $fileName;
        }
        
        $edit->website = $request->website;
        $edit->save();

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function company_delete (Request $request, $id)
    {
        $status = 200;
        $message = "Deleting Success";
        $delete = Company::find($id);
        $delete->delete();

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
