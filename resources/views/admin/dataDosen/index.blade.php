@extends('layouts.dashboard')

@section('content')
    <section id="dosen-admin>">
        <div class="flex justify-center m-5">
            <h1 class="text-2xl font-bold">Data Dosen</h1>
        </div>
        <div class="flex justify-center">
            <div class="flex justify-center p-2 font-semibold text-white text-lg bg-blue-600 rounded-lg w-[350px]">Tambah Data</div>
        </div>
        <div class="flex justify-center my-5 rounded-lg">
            <table class="">
                <thead class="bg-blue-600 ">
                    <tr class="">
                        <th class="px-6 py-3">Profil</th>
                        <th class="px-6 py-3">NIP</th>
                        <th class="px-6 py-3">Nama Dosen</th>
                        <th class="px-6 py-3">Mata Kuliah</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                
                <tr>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3">12345678</td>
                    <td class="px-6 py-3">Bella Amelia</td>
                    <td class="px-6 py-3">Bahasa Indonesia</td>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3"></td>
                </tr>
                <tr>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3">12345678</td>
                    <td class="px-6 py-3">Bella Amelia</td>
                    <td class="px-6 py-3">Bahasa Indonesia</td>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3"></td>
                </tr>
                <tr>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3">12345678</td>
                    <td class="px-6 py-3">Bella Amelia</td>
                    <td class="px-6 py-3">Bahasa Indonesia</td>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3"></td>
                </tr>
                <tr>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3">12345678</td>
                    <td class="px-6 py-3">Bella Amelia</td>
                    <td class="px-6 py-3">Bahasa Indonesia</td>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3"></td>
                </tr>
            </table>
        </div>
    </section>
@endsection