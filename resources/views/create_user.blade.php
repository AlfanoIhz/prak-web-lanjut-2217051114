@extends('layouts.app')

@section('content') 
<div class="bg-cover bg-center backdrop-blur-md" style="background-image: url('{{ asset('assets/img/bg-city.jpg') }}');">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-cover bg-center text-black rounded-xl overflow-hidden w-4/5 md:w-4/5" style="background-image: url('{{ asset('assets/img/bg-city.jpg') }}');" >
            <div class="flex items-center justify-center mt-4">
                <p class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">Masukan Data Diri Anda</p>
            </div>
            <form form id="createUser" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="max-w-sm my-2 mx-auto">
                @csrf
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-light focus:gray-light block w-full p-2.5 dark:bg-light-200 dark:border-gray-100 dark:placeholder-light-400 dark:text-black dark:focus:ring-gray-500">
                    @foreach($errors->get('nama') as $msg)
                        <p class="text-red-500">{{$msg }}</p>
                    @endforeach
                </div>

                <div class="mb-5">
                    <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPM</label>
                    <input type="text" id="npm" name="npm" class="bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-light focus:gray-light block w-full p-2.5 dark:bg-light-200 dark:border-gray-100 dark:placeholder-light-400 dark:text-black dark:focus:ring-gray-500">
                    @foreach($errors->get('npm') as $msg)
                        <p class="text-red-500">{{$msg }}</p>
                    @endforeach
                </div>

                <div class="mb-5">
                    <label for="id_kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-light focus:gray-light block w-full p-2.5 dark:bg-light-200 dark:border-gray-100 dark:placeholder-light-400 dark:text-black dark:focus:ring-gray-500" required>
                        @foreach($kelas as $kelasItem)
                        <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                        @endforeach
                    </select>  
                </div>

                <div class="mb-5">
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                    <input type="file" name="foto" id="foto" class="bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-light focus:gray-light block w-full p-2.5 dark:bg-light-200 dark:border-gray-100 dark:placeholder-light-400 dark:text-black dark:focus:ring-gray-500">
                       
                    </input>  
                </div>
            </form>
            <div class="bg-cover text-center text-gray-600 py-4 rounded-b-xl" style="background-image: url('{{ asset('assets/img/bg-city.jpg') }}');">
                <button type="submit" form="createUser" class="text-blue-700 hover:text-black border border-blue-700 dark:bg-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection