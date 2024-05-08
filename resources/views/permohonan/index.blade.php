<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permohonan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 flex justify-center items-center h-screen">
    <div class="flex">
        <div class="bg-white p-8 rounded-lg shadow-lg mr-5" style="max-height: 400px; overflow-y: auto;">
            <br>
            <h2 class="text-lg font-bold mb-2">Pengumuman</h2>
            <p class="text-sm text-gray-700 mt-4">
                Diberitahukan Kepada Pasien dan Keluarga Pasien Bahwa Permintaan 
                <br>
                Hasil Penunjang Akan Dikirim Melalui Email (Mohon Gunakan Email Aktif). 
                <br>
                Jam Pengiriman Hasil Pemeriksaan Penunjang
                <br>
                Senin - Jumat 07.00-17.30
                <br>
                Sabtu 7.00-18.30
                <br>
                Minggu Tutup
                <br>
                Permintaan Lebih dari Jam Pengiriman Akan Dikirim Dihari Berikutnya
                <br>
                Terima Kasih
                <br><br>
                Hormat Kami,
                <br>
                RS Hermina Pekalongan
                <br>
                CP : +62 895-3842-39050 (REKAM MEDIS)
            </p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <br>
            <h1 class="text-2xl font-bold mb-4">SIMHEAL</h1>
            <h8 class="mb-4">Sistem Informasi Hermina Pekalongan</h8>
            <div class="border-b border-gray-300"></div>
            
            <br>
            <h1 class="text-2xl font-semibold mb-4">Form Permohonan Hasil Pemeriksaan</h1>
            <form action="{{ route('permohonan.simpan') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Pemohon</label>
                    <input type="text" id="nama" name="nama_pemohon" class="mt-1 block w-full border-b-2 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Hubungan dengan Pasien</label>
                    <div class="mt-1 flex items-center">
                        <input type="radio" id="pasien_sendiri" name="hubungan" value="PASIEN SENDIRI" class="mr-2">
                        <label for="pasien_sendiri" class="mr-4">PASIEN SENDIRI</label>
                        <input type="radio" id="orang_tua" name="hubungan" value="ORANG TUA" class="mr-2">
                        <label for="orang_tua" class="mr-4">ORANG TUA</label>
                        <input type="radio" id="anak" name="hubungan" value="ANAK" class="mr-2">
                        <label for="anak" class="mr-4">ANAK</label>
                        <input type="radio" id="lain-lain" name="hubungan" value="LAIN-LAIN" class="mr-2">
                        <label for="lain_lain">LAIN-LAIN</label>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="nama_pasien" class="block text-sm font-medium text-gray-700">Keterangan LAIN-LAIN</label>
                    <input type="text" id="keterangan-lain" name="keterangan_lain" class="mt-1 block w-full border-b-2 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="nama_pasien" class="block text-sm font-medium text-gray-700">Nama Pasien</label>
                    <input type="text" id="nama_pasien" name="nama_pasien" class="mt-1 block w-full border-b-2 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="nomor_rekam_medis" class="block text-sm font-medium text-gray-700">Nomor Rekam Medis</label>
                    <input type="text" id="nomor-rekam-medis" name="nomor_rekam_medis" class="mt-1 block w-full border-b-2 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Data yang Diminta</label>
                    <div class="mt-1 grid grid-cols-3 gap-4">
                        <div>
                            <input type="checkbox" id="usg" name="data_diminta[]" value="USG" class="mr-2">
                            <label for="usg" class="mr-4">USG</label>
                        </div>
                        <div>
                            <input type="checkbox" id="ekg" name="data_diminta[]" value="EKG" class="mr-2">
                            <label for="ekg" class="mr-4">EKG</label>
                        </div>
                        <div>
                            <input type="checkbox" id="eeg" name="data_diminta[]" value="EEG" class="mr-2">
                            <label for="eeg" class="mr-4">EEG</label>
                        </div>
                        <div>
                            <input type="checkbox" id="ctg" name="data_diminta[]" value="CTG" class="mr-2">
                            <label for="ctg" class="mr-4">CTG</label>
                        </div>
                        <div>
                            <input type="checkbox" id="echo" name="data_diminta[]" value="ECHO" class="mr-2">
                            <label for="echo" class="mr-4">ECHO</label>
                        </div>
                        <div>
                            <input type="checkbox" id="endoscopy" name="data_diminta[]" value="ENDOSCOPY" class="mr-2">
                            <label for="endoscopy" class="mr-4">ENDOSCOPY</label>
                        </div>
                        <div>
                            <input type="checkbox" id="oae" name="data_diminta[]" value="OAE" class="mr-2">
                            <label for="oae" class="mr-4">OAE</label>
                        </div>
                        <div>
                            <input type="checkbox" id="dentalxray" name="data_diminta[]" value="DENTAL XRAY" class="mr-2">
                            <label for="dentalxray" class="mr-4">DENTAL XRAY</label>
                        </div>
                        <div>
                            <input type="checkbox" id="data-lain" name="data_diminta[]" value="LAIN-LAIN" class="mr-2">
                            <label for="data-lain" class="mr-4">LAIN-LAIN</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="nama_pasien" class="block text-sm font-medium text-gray-700">Keterangan LAIN-LAIN</label>
                        <input type="text" id="keterangan-data-lain" name="keterangan_data_lain" class="mt-1 block w-full border-b-2 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="tanggal_pemeriksaan" class="block text-sm font-medium text-gray-700">Tanggal Pemeriksaan</label>
                    <input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" class="mt-1 block w-full border-b-2 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full border-b-2 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="nomor_whatsapp" class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
                    <input type="text" id="nomor_whatsapp" name="nomor_whatsapp" class="mt-1 block w-full border-b-2 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    function toggleKeterangan() {
        var keteranganInput = document.getElementById("keterangan-lain");
        var lainLainRadio = document.getElementById("lain-lain").value;
        
        console.log(lainlainRadio)

        if (lainLainRadio.checked) {
            keteranganInput.disabled = false; // Mengaktifkan input keterangan
        } else {
            keteranganInput.disabled = true; // Menonaktifkan input keterangan
        }
    }
</script>
</html>
