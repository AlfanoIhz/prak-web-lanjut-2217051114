<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center backdrop-blur-sm" style="background-image: url('{{ asset('assets/img/bg-city.jpg') }}');">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-gray-500 text-white rounded-xl shadow-lg overflow-hidden w-80 md:w-96">
            <!-- Profile Image and Name -->
            <div class="p-6 text-center">
                <img src="{{ asset('assets/img/pfp1.jpg') }}" alt="Profile Image" class="rounded-full mx-auto w-24 h-24 mb-4">
                <h2 class="text-2xl font-bold">{{ $nama }}</h2>
                <p class="text-sm opacity-75">{{ $npm }}</p>
                <p class="text-sm opacity-75">{{ $kelas }}</p>
                
                <!-- Social Media Icons -->
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-globe"></i></a>
                </div>
            </div>
            
            <div class="bg-gray-100 text-center text-gray-600 py-4 rounded-b-xl">
                <p>Learn More About My Profile</p>
                <span class="block mt-2">⬇️</span>
            </div>
        </div>
    </div>
</body>
</html>
