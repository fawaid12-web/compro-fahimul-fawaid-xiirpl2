<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Models\Article;

use Illuminate\Support\Facades\Redirect;

class CompanyProfileController extends Controller
{

    public function index() {

        // Ambil data profil perusahaan (baris pertama)
        $dataCompany = CompanyProfile::first();

        // Ambil 3 artikel terbaru untuk ditampilkan di landing page
        $articles = Article::latest()->take(3)->get();

        
        //KIRIM KE VIEW
        return view('landing-page.index', compact('dataCompany', 'articles',));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyProfile $companyProfile)
    {
         $dataCompany = CompanyProfile::firstOrCreate([]);

        return view ('company-profile.edit', compact('dataCompany'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyProfile $companyProfile)
    {
        //MEMVALIDASI REQUEST
        $validated = $request->validate([
            'profile' => 'required'
        ]);

        //MENGAMBIL DATA DARI BINDING
        $companyProfile->update($validated);

        return redirect()->route('company-profile.edit')->with('succses','Profil berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyProfile $companyProfile)
    {
        //
    }
}
