<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permohonan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-4">Form Permohonan</h1>
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
                    <input type="text" id="keterangan-data-lain" name="keterangan_data_lain" disabled class="mt-1 block w-full border-b-2 border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
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
