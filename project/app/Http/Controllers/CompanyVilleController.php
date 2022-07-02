<?php

namespace App\Http\Controllers;

use App\Models\CompanyVille;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyVilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'ville_name' => 'required|min:5'
        ]);
        CompanyVille::create([
            'ville_name' => $request->ville_name
        ]);
        Alert::toast('city Created!', 'success');
        return redirect()->route('account.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyVille  $companyVille
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyVille $companyVille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyVille  $companyVille
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyVille $companyVille)
    {
        //
       return view('company_ville.edit', compact('ville'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyVille  $companyVille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'ville_name' => 'required|min:5'
        ]);
        $ville = CompanyVille::find($id);
        $ville->update([
            'ville_name' => $request->ville_name
        ]);
        Alert::toast('Category Updated!', 'success');
        return redirect()->route('account.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyVille  $companyVille
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ville = CompanyVille::find($id);
        $ville->delete();
        Alert::toast('city Delete!', 'success');
        return redirect()->route('account.dashboard');
    }
}
