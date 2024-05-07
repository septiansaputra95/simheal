<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PermohonanModel extends Model
{
    use HasFactory;
    protected $table = 'permohonanhasilheader'; // Pastikan nama tabel sesuai dengan yang digunakan
    protected $tableDetail = 'permohonanhasildetail';

    public function simpanPermohonan($data, $idheader)
    {
        DB::table($this->table)->insert([
            'idheader'          => $idheader,
            'namapemohon'       => $data['nama_pemohon'],
            'hubunganpasien'    => $data['hubungan'],
            'namapasien'        => $data['nama_pasien'],
            'nomorrekammedis'   => $data['nomor_rekam_medis'],
            'tanggalperiksa'    => $data['tanggal_pemeriksaan'],
            'alamatemail'       => $data['email'],
            'nomorwhatsapp'     => $data['nomor_whatsapp'],
            'tanggalinput'      => date('Y-m-d h:i:s'),
            'proseskirim'       => 0
        ]);

    }

    public function simpanPermohonanDetail($idheader, $permohonanData)
    {
        
        DB::table($this->tableDetail)->insert([
            'iddetail'          => date('Ymd').''.rand(1000,1000000000),
            'idheader'          => $idheader,
            'permohonandata'    => $permohonanData
        ]);
    }
}

