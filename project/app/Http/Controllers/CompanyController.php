<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\CompanyVille;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if (auth()->user()->company) {
            Alert::toast('You already have a company!', 'info');
            return $this->edit();
        }
        $categories = CompanyCategory::all();
        $villes = CompanyVille::all();
        return view('company.create', compact('categories','villes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateCompany($request);

        $company = new Company();
        if ($this->companySave($company, $request)) {
            Alert::toast('Company created! Now you can add posts.', 'success');
            return redirect()->route('account.authorSection');
        }
        Alert::toast('Failed!', 'error');
        return redirect()->route('account.authorSection');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $company = auth()->user()->company;
        $categories = CompanyCategory::all();
        $villes = CompanyVille::all();
        return view('company.edit', compact('company', 'categories','villes'));
    }


    public function update(Request $request, $id)
    {
        $this->validateCompanyUpdate($request);

        $company = auth()->user()->company;
        if ($this->companyUpdate($company, $request)) {
            Alert::toast('Company created!', 'success');
            return redirect()->route('account.authorSection');
        }
        Alert::toast('Failed!', 'error');
        return redirect()->route('account.authorSection');
    }

    protected function validateCompany(Request $request)
    {
        return $request->validate([
            'Company_name' => 'required|min:5',
            'Commercial_register' => 'required|min:5',
            'Workforce_number' =>'required',
            'phone_number' =>'required'
             
            
        ]);
    }
    protected function validateCompanyUpdate(Request $request)
    {
        return $request->validate([
            'Company_name' => 'required|min:5',
            'Commercial_register' => 'required|min:5',
            'Workforce_number' =>'required',
            'phone_number' =>'required'
        ]);
    }
    protected function companySave(Company $company, Request $request)
    {
        $company->user_id = auth()->user()->id;
        $company->company_name = $request->company_name ;
        $company->Commercial_register = $request->Commercial_register;
        $company->Workforce_number = $request->Workforce_number;
        $company->phone_number = $request->phone_number;
        $company->company_category_id = $request->category;
        $company->company_ville_id = $request->ville;
    }

    protected function companyUpdate(Company $company , Company $ville ,  Request $request)
    {
        $company->user_id = auth()->user()->id;
        $company->company_name = $request->company_name ;
        $company->Commercial_register = $request->Commercial_register;
        $company->Workforce_number = $request->Workforce_number;
        $company->phone_number = $request->phone_number;
        $company->company_category_id = $request->category;
        $company->company_ville_id = $request->ville;   
    }
    protected function getFileName($file)
    {
        $fileName = $file->getClientOriginalName();
        $actualFileName = pathinfo($fileName, PATHINFO_FILENAME);
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        return $actualFileName . time() . '.' . $fileExtension;
    }

    public function destroy()
    {
        
    }
}
