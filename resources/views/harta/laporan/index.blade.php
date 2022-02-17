@extends('harta.template')
@section('title', 'Daftar Laporan')
@section('content')
                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="grid grid-rows-4 grid-flow-col gap-4 mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Daftar Laporan
                            </div>
                            <a href="#" class="m-2 mt-2 bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
                                Laporan Baru
                            </a>
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
                                        <th class="border w-1/4 px-4 py-2">No Laporan</th>
                                        <th class="border w-1/6 px-4 py-2">Tanggal Lahir</th>
                                        <th class="border w-1/6 px-4 py-2">Pembaharuan Terakhir</th>
                                        <th class="border w-1/6 px-4 py-2">Unit Kerja</th>
                                        <th class="border w-1/6 px-4 py-2">Data Pribadi</th>
                                        <th class="border w-1/6 px-4 py-2">Harta Kekayaan</th>
                                        <th class="border w-1/6 px-4 py-2">Data Penghasilan</th>
                                        <th class="border w-1/6 px-4 py-2">Data Keluarga</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border px-4 py-2">218928</td>
                                            <td class="border px-4 py-2">23 Mei 1945</td>
                                            <td class="border px-4 py-2">23 Mei 1945</td>
                                            <td class="border px-4 py-2">Polindra</td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2">Rp. 10.000.000</td>
                                            <td class="border px-4 py-2">Rp. 50.000.000</td>
                                            <td class="border px-4 py-2">
                                                <i class="fas fa-check text-green-500 mx-2"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">218040</td>
                                            <td class="border px-4 py-2">17 Agustus 1945</td>
                                            <td class="border px-4 py-2">17 Agustus 1945</td>
                                            <td class="border px-4 py-2">Polindra</td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2">Rp. 10.000.000</td>
                                            <td class="border px-4 py-2">Rp. 50.000.000</td>
                                            <td class="border px-4 py-2">
                                                <i class="fas fa-times text-red-500 mx-2"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">217482</td>
                                            <td class="border px-4 py-2">10 Januari 1945</td>
                                            <td class="border px-4 py-2">10 Januari 1945</td>
                                            <td class="border px-4 py-2">Polindra</td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2">Rp. 10.000.000</td>
                                            <td class="border px-4 py-2">Rp. 50.000.000</td>
                                            <td class="border px-4 py-2">
                                                <i class="fas fa-check text-green-500 mx-2"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">219382</td>
                                            <td class="border px-4 py-2">10 Februari 1945</td>
                                            <td class="border px-4 py-2">10 Februari 1945</td>
                                            <td class="border px-4 py-2">Polindra</td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2">Rp. 10.000.000</td>
                                            <td class="border px-4 py-2">Rp. 50.000.000</td>
                                            <td class="border px-4 py-2">
                                                <i class="fas fa-check text-green-500 mx-2"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">128473</td>
                                            <td class="border px-4 py-2">17 Maret 1945</td>
                                            <td class="border px-4 py-2">17 Maret 1945</td>
                                            <td class="border px-4 py-2">Polindra</td>
                                            <td class="border px-4 py-2"></td>
                                            <td class="border px-4 py-2">Rp. 10.000.000</td>
                                            <td class="border px-4 py-2">Rp. 50.000.000</td>
                                            <td class="border px-4 py-2">
                                                <i class="fas fa-check text-green-500 mx-2"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/Grid Form-->
                    <script src="admin/main.js"></script>
@endsection
