<?php

namespace App\Http\Controllers;

use App\Models\PermohonanModel;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $permohonanModel;

    public function __construct()
    {
        $this->permohonanModel = new PermohonanModel();
    }
    public function index()
    {
        //
        return view('permohonan/index');
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
        $request->validate([
            'nama_pemohon'      => 'required',
            'hubungan'          => 'required',
            'nama_pasien'       => 'required',
            'nomor_rekam_medis' => 'required',
            'data_diminta'      => 'required',
            'email'             => 'required',
            'nomor_whatsapp'    => 'required'
        ]);

        $dataDiminta = $request->data_diminta; // Simpan nilai $request->data_diminta ke dalam variabel $dataDiminta

        // echo $request->data_diminta[1];
        // dd($request);
        # DETEKSI HUBUNGAN PASIEN LAIN-LAIN
        if($request->hubungan == 'LAIN-LAIN')
        {
            $request->hubungan = $request->keterangan_lain;
        }
        # DETEKSI DATA PERMINTAAN 

        # GENERATE ID HEADER
        $idheader = date('Ymd').''.rand(1000,100000);
        //dd($idheader);

        # JUMLAH DATA DIMINTA
        $jumlahDataDiminta = count($request->data_diminta);

        # HEADER
        $this->permohonanModel->simpanPermohonan($request->all(), $idheader);

        // Lakukan iterasi pada $dataDiminta
        for ($i = 0; $i < count($dataDiminta); $i++) {
            // Periksa apakah nilai $dataDiminta[$i] adalah 'LAIN-LAIN'
            if ($dataDiminta[$i] == 'LAIN-LAIN') {
                // Jika ya, ganti nilai $dataDiminta[$i] dengan nilai dari $request->keterangan_data_lain
                $dataDiminta[$i] = $request->keterangan_data_lain;
            }

            // Panggil method simpanPermohonanDetail dengan menggunakan nilai dari $dataDiminta[$i]
            $this->permohonanModel->simpanPermohonanDetail($idheader, $dataDiminta[$i]);
        }

        return view('permohonan/formselesai');    
    }

    /**
     * Display the specified resource.
     */
    public function show(PermohonanModel $permohonanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PermohonanModel $permohonanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PermohonanModel $permohonanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PermohonanModel $permohonanModel)
    {
        //
    }
}
