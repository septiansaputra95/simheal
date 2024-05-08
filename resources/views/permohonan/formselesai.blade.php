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
        <br>
        <h1 class="text-2xl font-bold mb-4">SIMHEAL</h1>
        <h8 class="mb-4">Sistem Informasi Hermina Pekalongan</h8>
        <div class="border-b border-gray-300"></div>
        <br><br>
        <h3 class="text-2xl font-semibold mb-4">Form Permohonan Selesai di Kirim</h3>
        <a href="{{ route("permohonan.index") }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Input Ulang</a>
    </div>
</body>
</html>
