@extends('layouts.dashboard')

@section('content')
    <section id="dosen-admin>">
        <div class="flex justify-center m-5">
            <h1 class="text-2xl font-bold">Data Dosen</h1>
        </div>
        <div class="flex justify-center">
            <div class="flex justify-center p-2 font-semibold text-white text-lg bg-[#215CAE] rounded-lg w-[350px]">Tambah Data</div>
        </div>
        <div class="flex justify-center my-5 rounded-lg p-4">
            <table class="">
                <thead class="bg-[#215CAE] text-white rounded-md">
                    <tr class="">
                        <th class="px-6 py-3">Profil</th>
                        <th class="px-6 py-3">NIP</th>
                        <th class="px-6 py-3">Nama Dosen</th>
                        <th class="px-6 py-3">Mata Kuliah</th>
                        <th colspan="2"> </th>
                    </tr>
                </thead>
                <tbody class="bg-[#F5FAFF] text-center">
                    <tr class="">
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3">12345678</td>
                        <td class="px-6 py-3">Bella Amelia</td>
                        <td class="px-6 py-3">Bahasa Indonesia</td>
                        <td class="px-6 w-[150px]">
                            <button type="button" class="text-blue-500 border-2 border-blue-700 rounded-xl text-base w-[100px] hover:bg-blue-700 hover:text-white ">
                                Detail
                            </button>
                        </td>
                        <td class="px-6 w-[150px]">
                            <button type="button" class="bg-blue-600 text-white border-2 rounded-xl text-base w-[100px] hover:bg-white hover:text-blue-500">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <td class="px-6 py-3"></td>
                        <td class="px-6 py-3">12345678</td>
                        <td class="px-6 py-3">Bella Amelia</td>
                        <td class="px-6 py-3">Bahasa Indonesia</td>
                        <td class="px-6 w-[150px]">
                            <button type="button" class="text-blue-500 border-2 border-blue-700 rounded-xl text-base w-[100px] hover:bg-blue-700 hover:text-white ">
                                Detail
                            </button>
                        </td>
                        <td class="px-6 w-[150px]">
                            <button type="button" class="bg-blue-600 text-white border-2 rounded-xl text-base w-[100px] hover:bg-white hover:text-blue-500">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <td class="px-6 py-3"></td>
                        <td class="px-6 py-3">12345678</td>
                        <td class="px-6 py-3">Bella Amelia</td>
                        <td class="px-6 py-3">Bahasa Indonesia</td>
                        <td class="px-6 w-[150px]">
                            <button type="button" class="text-blue-500 border-2 border-blue-700 rounded-xl text-base w-[100px] hover:bg-blue-700 hover:text-white ">
                                Detail
                            </button>
                        </td>
                        <td class="px-6 w-[150px]">
                            <button type="button" class="bg-blue-600 text-white border-2 rounded-xl text-base w-[100px] hover:bg-white hover:text-blue-500">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <td class="px-6 py-3"></td>
                        <td class="px-6 py-3">12345678</td>
                        <td class="px-6 py-3">Bella Amelia</td>
                        <td class="px-6 py-3">Bahasa Indonesia</td>
                        <td class="px-6 w-[150px]">
                            <button type="button" class="text-blue-500 border-2 border-blue-700 rounded-xl text-base w-[100px] hover:bg-blue-700 hover:text-white ">
                                Detail
                            </button>
                        </td>
                        <td class="px-6 w-[150px]">
                            <button type="button" class="bg-blue-600 text-white border-2 rounded-xl text-base w-[100px] hover:bg-white hover:text-blue-500">
                                Edit
                            </button>
                        </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </section>
@endsection