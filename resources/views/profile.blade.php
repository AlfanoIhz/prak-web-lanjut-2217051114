@extends('layouts.app')

@section ('content')

<div class="bg-cover bg-center backdrop-blur-sm" style="background-image: url('{{ asset('assets/img/bg-city.jpg') }}');">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-gray-500 text-white rounded-xl shadow-lg overflow-hidden w-80 md:w-96">
            <!-- Profile Image and Name -->
            <div class="p-6 text-center">
                <img src="{{ asset('upload/img/' . $user->foto) }}" alt="Profile Image" class="rounded-full mx-auto w-24 h-24 mb-4">
                <h2 class="text-2xl font-bold">{{$user -> nama}}</h2>
                <p class="text-sm opacity-75">{{$user -> npm }}</p>
                <p class="text-sm opacity-75">{{$user -> nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p>
            </div>
            
            <div class="bg-gray-100 text-center text-gray-600 py-4 rounded-b-xl">
                <a href="{{ route('user.list') }}" class="btn btn-md btn-secondary">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
