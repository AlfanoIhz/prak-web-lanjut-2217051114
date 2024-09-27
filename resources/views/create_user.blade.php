<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-cover bg-center backdrop-blur-sm" style="background-image: url('{{ asset('assets/img/bg-city.jpg') }}');">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-cover bg-center text-white rounded-xl overflow-hidden w-80 md:w-96" style="background-image: url('{{ asset('assets/img/bg-city.jpg') }}');">
            <div class="flex items-center justify-center mt-4">
                <h2>Masukan Data Diri Anda</h2>
            </div>
            <form form id="createUser" action="{{ route('user.store') }}" method="POST" class="max-w-sm my-2 mx-4">
                @csrf
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="mb-5">
                    <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPM</label>
                    <input type="text" id="npm" name="npm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="mb-5">
                    <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                    <input type="text" id="kelas" name="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </form>
            <div class="bg-gray-100 text-center text-gray-600 py-4 rounded-b-xl">
                <button type="submit" form="createUser" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </div>
</body>
</html>