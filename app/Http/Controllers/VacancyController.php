<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Vacancy;
use Illuminate\Http\Request;



class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $vacancies = Vacancy::all();
        $vacancies = Vacancy::join('companies', 'vacancies.id_perusahaan', '=', 'companies.id_perusahaan')->select('vacancies.*', 'companies.id_perusahaan', 'companies.nama_perusahaan')->get();
        // $jsonData = '[
        //     {
        //         "id": 1,
        //         "nama_perusahaan": "Perusahaan A",
        //         "lokasi": "Jakarta",
        //         "gaji": 5000000,
        //         "status": "Aktif",
        //         "created_at": "2023-06-01"
        //     },
        //     {
        //         "id": 2,
        //         "nama_perusahaan": "Perusahaan B",
        //         "lokasi": "Surabaya",
        //         "gaji": 4000000,
        //         "status": "Aktif",
        //         "created_at": "2023-06-02"
        //     },
        //     {
        //         "id": 3,
        //         "nama_perusahaan": "Perusahaan C",
        //         "lokasi": "Yogyakarta",
        //         "gaji": 4500000,
        //         "status": "Non-Aktif",
        //         "created_at": "2023-06-03"
        //     }
        // ]';
        
        // $vacancies = json_decode($jsonData);
        
        

        $admin_vacancies = Vacancy::all();
        $lowongan_jateng = Vacancy::where('penempatan', 'Jawa Tengah')->get();
        $lowongan_jatim = Vacancy::where('penempatan', 'Jawa Timur')->get();

        return view('home', compact('vacancies'));
        // ->with('jobs_listing', compact('vacancies'));
        // return view('home')->with('vacancies', $vacancies);
        // return view('list', compact('vacancies','lowongan_jateng','lowongan_jatim'));
        // return view('home', compact('vacancies'))->with('vacancies.index', compact('admin_vacancies')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_lowongan_perusahaan' => 'required',
            'id_perusahaan' => 'required',
            'posisi' => 'required',
            'lokasi' => 'required',
            'kategori' => 'required',
            'tipe' => 'required',
            'penempatan' => 'required',
            'pendidikan' => 'required',
            'jenis_kelamin' => 'required',
            'pengalaman' => 'required',
            'deskripsi' => 'required',
            'hari_kerja' => 'required',
            'jam_kerja' => 'required',
            'tanggal_buka' => 'required',
            'tanggal_tutup' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        Vacancy::create($request->post());

        return redirect()->route('admin.vacancies.index')->with('success','vacancy has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        return view('admin.vacancies.show',compact('vacancies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        return view('admin.vacancies.edit',compact('vacancies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $request->validate([
            'id_lowongan_perusahaan' => 'required',
            'id_perusahaan' => 'required',
            'posisi' => 'required',
            'lokasi' => 'required',
            'kategori' => 'required',
            'tipe' => 'required',
            'penempatan' => 'required',
            'pendidikan' => 'required',
            'jenis_kelamin' => 'required',
            'pengalaman' => 'required',
            'deskripsi' => 'required',
            'hari_kerja' => 'required',
            'jam_kerja' => 'required',
            'tanggal_buka' => 'required',
            'tanggal_tutup' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);
        
        $vacancy ->fill($request->post())->save();

        return redirect()->route('admin.vacancies.index')->with('success','Vacancy Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return redirect()->route('admin.vacancies.index')->with('success','Vacancy has been deleted successfully');
    }

    public function jobDetails()
    {
        $vacancy = Vacancy::join('companies', 'vacancies.id_perusahaan', '=', 'companies.id_perusahaan')->select('vacancies.*', 'companies.id_perusahaan', 'companies.nama_perusahaan', 'companies.no_perusahaan')->get();
        return view('jobs_details', compact('vacancy'));
    }

    public function yyyy()
    {
        $vacancy = Vacancy::join('companies', 'vacancies.id_perusahaan', '=', 'companies.id_perusahaan')->select('vacancies.*', 'companies.id_perusahaan', 'companies.nama_perusahaan')->get();
        return view('jobs_details2', compact('vacancy'));
    }


    public function jobListing()
    {
        $vacancies2 = Vacancy::join('companies', 'vacancies.id_perusahaan', '=', 'companies.id_perusahaan')->select('vacancies.*', 'companies.id_perusahaan', 'companies.nama_perusahaan')->get();

        return view('jobs_listing', compact('vacancies2'));
    }

    
    public function filtering(Request $request)
    {
        // Mengambil nilai filter dari request
        $category = $request->input('category');
        $jobType = $request->input('job_type');
        $location = $request->input('location');
        $experience = $request->input('experience');
        $postedWithin = $request->input('posted_within');

        // Query untuk mengambil data Vacancy dengan filter
        $vacancies3 = Vacancy::filterByCategoryAndJobType($category, $jobType)
            ->filterByLocation($location)
            ->filterByExperience($experience)
            ->filterByPostedWithin($postedWithin)
            ->get();

        // Kembalikan data Vacancy ke view atau lakukan operasi lain sesuai kebutuhan Anda
        return view('jobs_listing', compact('vacancies3'));
    }
    
}
