@extends('layout.operator')
@extends('layout.navbar')
@section('title','Pendidikan: Kurikulum | SIAPS FMIPA')
@section('content')
        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Pendidikan</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">Data Pendidikan</p>
                        </div>
                    </div>

                    <!-- kolom -->
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-header" style="background-color: white;">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item" id="isian">
                                                <a class="nav-link active" href="{{route('kurikulum')}}">Kurikulum</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('integrasi')}}">Integrasi Penelitian/PKM dan Pembelajaran</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('kepuasan-mahasiswa')}}">Kepuasan Mahasiswa</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center" id="isian"></div>
                            </div>
                            
                            <div class="card-body">
                                <div class="alert" role="alert" id="note">
                                    <h3 style="color: white;">Catatan!</h3>
                                    <p>Data ini terakhir diambil dari Sistem Informasi Akademik: 05 November 2020.</p>
                                </div>
                                
                                <div class="alert alert-secondary" role="alert">
                                    Struktur program dan kelengkapan data mata kuliah sesuai dengan dokumen kurikulum program studi yang berlaku pada saat TS tersaji pada Tabel berikut.
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Kurikulum</a>
                                    <form class="form-inline">
                                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </nav>

                                <table class="table v-middle">
                                    <div class="table-responsive-xl">
                                        <table class="table table-borderless table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col" rowspan="2">No.</th>
                                                    <th scope="col" rowspan="2">Semester</th>
                                                    <th scope="col" rowspan="2">Kode Mata Kuliah</th>
                                                    <th scope="col" rowspan="2">Nama Mata Kuliah</th>
                                                    <th scope="col" rowspan="2">Mata Kuliah Kompetensi</th>
                                                    <th scope="col" colspan="3">Bobot Kredit (sks)</th>
                                                    <th scope="col" rowspan="2">Konversi Kredit ke Jam</th>
                                                    <th scope="col" colspan="4">Capaian Pembelajaran</th>
                                                    <th scope="col" rowspan="2">Dokumen Rencana Pembelajaran</th>
                                                    <th scope="col" rowspan="2">Unit Penyelenggara</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Kuliah/Responsi/Tutorial</th>
                                                    <th scope="col">Seminar</th>
                                                    <th scope="col">Praktikum/Praktik/Praktik Lapangan</th>
                                                    <th scope="col">Sikap</th>
                                                    <th scope="col">Pengetahuan</th>
                                                    <th scope="col">Keterampilan Umum</th>
                                                    <th scope="col">Keterampilan Khusus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>18F00015</td>
                                                    <td>Bahasa Inggris (Basic English)</td>
                                                    <td class="text-center"></td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>18P02210</td>
                                                    <td>Sistem Operasi (Operating System)</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>18P02211</td>
                                                    <td>Pengantar Teknologi Informasi (Introduction to Information Technology)</td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>1</td>
                                                    <td>18P02212</td>
                                                    <td>
                                                        Algoritma 
                                                        Pemrograman dan 
                                                        Struktur Data 
                                                        (Programming 
                                                        Algorithms and Data 
                                                        Structures)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>18P02213</td>
                                                    <td>
                                                        Aljabar Linier 
                                                        Elementer 
                                                        (Elementary Linear 
                                                        Algebra)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>1</td>
                                                    <td>18P02297</td>
                                                    <td>
                                                        Pengantar Manajemen 
                                                        (Introduction to 
                                                        Management)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>1</td>
                                                    <td>18U00001</td>
                                                    <td>
                                                        Pendidikan Agama 
                                                        Islam (Islamic 
                                                        Religious Education)
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>1</td>
                                                    <td>18U00002</td>
                                                    <td>
                                                        Pendidikan Agama 
                                                        Katholik (Catholic 
                                                        Religious Education)
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>1</td>
                                                    <td>18U00003</td>
                                                    <td>
                                                        Pendidikan Agama 
                                                        Kristen (Christian 
                                                        Religious Education)
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>1</td>
                                                    <td>18U00004</td>
                                                    <td>
                                                        Pendidikan Agama 
                                                        Hindu (Hinduism 
                                                        Religious Education)
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>1</td>
                                                    <td>18U00005</td>
                                                    <td>
                                                        Pendidikan Agama 
                                                        Budha (Buddhism 
                                                        Religious Education)
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>1</td>
                                                    <td>18U00006</td>
                                                    <td>
                                                        Pendidikan Agama 
                                                        Konghuchu 
                                                        (Confucianism 
                                                        Religious Education)
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>1</td>
                                                    <td>18U00009</td>
                                                    <td>
                                                        Bahasa Indonesia 
                                                        (Indonesian 
                                                        Language)
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>2</td>
                                                    <td>18F00002</td>
                                                    <td>Statistika (Statistics)</td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>2</td>
                                                    <td>18P02091</td>
                                                    <td>
                                                        Interaksi Manusia dan 
                                                        Komputer (Human and 
                                                        Computer Interaction)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>2</td>
                                                    <td>18P02092</td>
                                                    <td>Bahasa Pemrograman 
                                                        (Programming 
                                                        Language)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>2</td>
                                                    <td>18P02851</td>
                                                    <td>Jaringan Komputer ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>2</td>
                                                    <td>18P02857</td>
                                                    <td>
                                                        Bahasa Inggris untuk 
                                                        Sistem Informasi ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>2</td>
                                                    <td>18U00007</td>
                                                    <td>
                                                        Pendidikan Pancasila 
                                                        (Pancasila Education)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>2</td>
                                                    <td>18U00008</td>
                                                    <td>
                                                        Pendidikan 
                                                        Kewarganegaraan 
                                                        (Civics Education)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>2</td>
                                                    <td>18U00012</td>
                                                    <td>
                                                        Pendidikan Konservasi 
                                                        (Conservation 
                                                        Education)                                                        
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>3</td>
                                                    <td>18P02884</td>
                                                    <td>Statistika Terapan ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>3</td>
                                                    <td>18P02887</td>
                                                    <td>
                                                        Pemrograman 
                                                        Berorientasi Objek ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>3</td>
                                                    <td>18P02889</td>
                                                    <td>
                                                        Komputer dan 
                                                        Masyarakat ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>3</td>
                                                    <td>18P02891</td>
                                                    <td>
                                                        Analisis dan 
                                                        Perancangan Sistem 
                                                        Informasi ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>3</td>
                                                    <td>18P02901</td>
                                                    <td>Matematika Diskrit ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>3</td>
                                                    <td>18U00035</td>
                                                    <td>
                                                        Literasi Digital dan 
                                                        Kemanusiaan (Digital 
                                                        and Humanity 
                                                        Literacy)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>4</td>
                                                    <td>18P02107</td>
                                                    <td>
                                                        Sistem Informasi 
                                                        Manajemen 
                                                        (Management 
                                                        information System)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>4</td>
                                                    <td>18P02109</td>
                                                    <td>
                                                        Kuliah Kerja Lapangan 
                                                        (Field Course)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>0</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>4</td>
                                                    <td>18P02925</td>
                                                    <td>Sistem Basis Data ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>31</td>
                                                    <td>4</td>
                                                    <td>18P02930</td>
                                                    <td>Manajemen Sains ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>4</td>
                                                    <td>18P02937</td>
                                                    <td>
                                                        Rekayasa Perangkat 
                                                        Lunak ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td>4</td>
                                                    <td>18P02940</td>
                                                    <td>E-Business ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>4</td>
                                                    <td>18P02941</td>
                                                    <td>Pengantar Bisnis ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td>5</td>
                                                    <td>18P02114</td>
                                                    <td>
                                                        Sistem Pendukung 
                                                        Keputusan (Decision 
                                                        Support System)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>5</td>
                                                    <td>18P02115</td>
                                                    <td>
                                                        Analisis Proses Bisnis 
                                                        (Business Process 
                                                        Analysis)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>5</td>
                                                    <td>18P02116</td>
                                                    <td>
                                                        Perancangan Basis 
                                                        Data (Database 
                                                        Design)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td>5</td>
                                                    <td>18P02117</td>
                                                    <td>
                                                        Perencanaan Strategis 
                                                        SI/TI (IS / IT Strategic 
                                                        Planning)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>5</td>
                                                    <td>18P02978</td>
                                                    <td>Pemrograman Web ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>40</td>
                                                    <td>5</td>
                                                    <td>18P02981</td>
                                                    <td>
                                                        Keamanan Sistem 
                                                        Informasi ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td>5</td>
                                                    <td>18P02984</td>
                                                    <td>
                                                        Riset Sistem Informasi 
                                                        ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>42</td>
                                                    <td>6</td>
                                                    <td>18P02120</td>
                                                    <td>
                                                        Metodologi Penelitian 
                                                        (Research 
                                                        methodology)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>43</td>
                                                    <td>6</td>
                                                    <td>18P02122</td>
                                                    <td>
                                                        Manajemen Layanan 
                                                        TI (IT Service 
                                                        Management)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>44</td>
                                                    <td>6</td>
                                                    <td>18P02125</td>
                                                    <td>
                                                        Kecerdasan Bisnis 
                                                        (Business Intelligence)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>45</td>
                                                    <td>6</td>
                                                    <td>18P02995</td>
                                                    <td>Manajemen Proyek ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>46</td>
                                                    <td>6</td>
                                                    <td>18P02996</td>
                                                    <td>
                                                        Manajemen Rantai 
                                                        Suplai ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>47</td>
                                                    <td>6</td>
                                                    <td>18P02997</td>
                                                    <td>Penambangan Data ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>48</td>
                                                    <td>6</td>
                                                    <td>18U00020</td>
                                                    <td>
                                                        Praktik Kerja 
                                                        Lapangan (Field Work 
                                                        Practice in Clinical 
                                                        Nutrition)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>49</td>
                                                    <td>7</td>
                                                    <td>18U00019</td>
                                                    <td>
                                                        Kuliah Kerja Nyata 
                                                        (Community Service 
                                                        Program)                                                        
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>50</td>
                                                    <td>7</td>
                                                    <td>18U00021</td>
                                                    <td>Skripsi (Final Project)</td>
                                                    <td class="text-center">v</td>
                                                    <td>6</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>3</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Universitas</td>
                                                </tr>
                                                <tr>
                                                    <td>51</td>
                                                    <td>8</td>
                                                    <td>18P02128</td>
                                                    <td>
                                                        Forensika Digital 
                                                        (Digital Forensics)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>52</td>
                                                    <td>8</td>
                                                    <td>18P02129</td>
                                                    <td>
                                                        Semantik Web 
                                                        (Semantic Web)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>53</td>
                                                    <td>8</td>
                                                    <td>18P02132</td>
                                                    <td>
                                                        e-Goverment (e
                                                        -Government)
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>54</td>
                                                    <td>8</td>
                                                    <td>18P03003</td>
                                                    <td>Kewirausahaan ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>55</td>
                                                    <td>8</td>
                                                    <td>18P03007</td>
                                                    <td>Audit Sistem Informasi ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>56</td>
                                                    <td>8</td>
                                                    <td>18P03011</td>
                                                    <td>
                                                        Perencanaan Sumber 
                                                        Daya Perusahaan ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>57</td>
                                                    <td>8</td>
                                                    <td>18P03012</td>
                                                    <td>Teknologi Mobile ()</td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>58</td>
                                                    <td>8</td>
                                                    <td>18P03013</td>
                                                    <td>
                                                        Pengelolaan 
                                                        Hubungan Pelanggan 
                                                        ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                                <tr>
                                                    <td>59</td>
                                                    <td>8</td>
                                                    <td>18P03016</td>
                                                    <td>
                                                        Sistem Informasi 
                                                        Geografis ()
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>1,5</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center">v</td>
                                                    <td>RPS</td>
                                                    <td>Program Studi</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection