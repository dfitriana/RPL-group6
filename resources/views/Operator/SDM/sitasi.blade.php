@extends('layout.operator')
@extends('layout.navbar')
@section('title','Sumber Daya Manusia: Sitasi | SIAPS FMIPA')
@section('content')

        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">SDM</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">Data Sumber Daya Manusia</p>
                        </div>
                    </div>

                    <!-- kolom -->
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-header" style="background-color: white;">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('profil-dosen')}}">Profil Dosen</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('dosen-pembimbing')}}">Dosen Pembimbing Utama TA</a>
                                            </li>
                                            <li class="nav-item"   id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-ewmp-dtps')}}">EWMP DTPS</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('dosen-tidaktetap')}}">Dosen Tidak Tetap</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('rekognisi')}}">Rekognisi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">Penelitian</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-pkm')}}">PKM</a> 
                                                <!-- belom -->
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('publikasi')}}">Publikasi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('sitasi')}}"  id="isian">Sitasi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('paten')}}">Paten</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('hki')}}">HKI</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('teknologi-tepat-guna')}}">Teknologi Tepat Guna</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('book-chapter')}}">Book Chapter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center" id="isian"></div>
                            </div>
                            
                            <div class="card-body">
                                <div class="alert" role="alert" id="note">
                                    <h3 style="color: white;">Catatan!</h3>
                                    <p>Data ini terakhir diambil dari Sistem Informasi Akademik, Sistem Informasi Kepegawaian, dan Sistem Informasi Penelitian Pengabdian: 05 November 2020.</p>
                                </div>
                                
                                <div class="alert alert-secondary" role="alert">
                                    Judul artikel karya ilmiah DTPS yang disitasi dalam 2 tahun terakhir tersaji pada Tabel berikut.
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Data Karya Ilmiah DTPS yang Disitasi</a>
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
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Nama Dosen</th>
                                                    <th scope="col">Judul Artikel yang Disitasi (Jurnal, Volume, Tahun, Nomor, Halaman) </th>
                                                    <th scope="col">Jumlah Sitasi</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>
                                                        Implementation of the Servqual Method as a Service 
                                                        Support Decision Support System in Hotels
                                                        <br>AW Melinda, R Arifudin, A Alamsyah
                                                        <br>Journal of Advances in Information Systems and 
                                                        Technology 1 (1), 91-97
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>
                                                        Improve the Accuracy of Support Vector Machine Using 
                                                        Chi Square Statistic and Term Frequency Inverse 
                                                        Document Frequency on Movie Review Sentiment 
                                                        Analysis
                                                        <br> UI Larasati, MA Muslim, R Arifudin, IU Alamsyah
                                                        <br> Scientific Journal of Informatics 6 (1), 138-149
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>
                                                        Implementation of Expert System for Diabetes Diseases 
                                                        using Naïve Bayes and Certainty Factor Methods
                                                        <br> MI Insani, A Alamsyah, AT Putra
                                                        <br> Scientific Journal of Informatics 5 (2), 185-193
                                                    </td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>
                                                        Scheduling Optimization of Sugarcane Harvest Using 
                                                        Simulated Annealing Algorithm
                                                        <br> EN Afifah, A Alamsyah, E Sugiharti
                                                        <br> Scientific Journal of Informatics 5 (2), 138
                                                        -147
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>
                                                        The replacement of irreducible polynomial and affine 
                                                        mapping for the construction of a strong S
                                                        -box
                                                        <br> A Bejo, TB Adji
                                                        <br> Nonlinear Dynamics 93 (4), 2105
                                                        -2118
                                                    </td>
                                                    <td>7</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>
                                                        Autocomplete and spell checking Levenshtein distance 
                                                        algorithm to getting Text Suggest Error Data Searching 
                                                        in Library
                                                        <br> MM Yulianto, R Arifudin, A Alamsyah <br>
                                                        Scientific Journal of Informatics 5 (1), 75
                                                    </td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>
                                                        Comparison of Dynamic Programming Algorithm and 
                                                        Greedy Algorithm on Integer Knapsack Problem in 
                                                        Freight Transportation <br>
                                                        GI Sampurno, E Sugiharti, A Alamsyah <br>
                                                        Scientific Journal of Informatics 5 (1), 49
                                                    </td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>
                                                        Comparison Between SAW and TOPSIS Methods in 
                                                        Selection of Broiler Chicken Meat Quality <br>
                                                        PTK Adi, E Sugiharti, A Alamsyah <br>
                                                        Scientific Journal of Informatics 5 (1), 90
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>
                                                        Genetic Algorithm for Relational Database Optimization 
                                                        in Reducing Query Execution Time <br>
                                                        KT Hidayat, R Arifudin, A Alamsyah <br>
                                                        Scientific Journal of Informatics 5 (1), 27
                                                    </td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Endang Sugiharti S.Si.,M.Kom</td>
                                                    <td>
                                                        Bayes Theorem and Forward Chaining Method On 
                                                        Expert System for Determine Hypercholesterolemia 
                                                        Drugs <br>
                                                        AA Perbawawati, E Sugiharti, MA Muslim <br>
                                                        Scientific Journal of Informatics 6 (1), 116
                                                        -124
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Endang Sugiharti S.Si.,M.Kom</td>
                                                    <td>
                                                        Comparison of PCA and 2DPCA Accuracy with K
                                                        -
                                                        Nearest Neighbor Classification in Face Image 
                                                        Recognition <br>
                                                        S Sutarti, AT Putra, E Sugiharti <br>
                                                        Scientific Journal of Informatics 6 (1), 64
                                                        -72
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Endang Sugiharti S.Si.,M.Kom</td>
                                                    <td>
                                                        Optimization of C4. 5 algorithm
                                                        -based particle swarm 
                                                        optimization for breast cancer diagnosis <br>
                                                        MA Muslim, SH Rukmana, E Sugiharti, B Prasetiyo, S 
                                                        Alimah <br>
                                                        Journal of Physics: Conference Series 983 (1), 012063
                                                    </td>
                                                    <td>7</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Endang Sugiharti S.Si.,M.Kom</td>
                                                    <td>
                                                        Growing of the mathematical thinking imaginative to 
                                                        students in designing of the teaching aids for CWD 
                                                        towards to joyful learning <br>
                                                        E Sugiharti, NF Kurniawati <br>
                                                        Journal of Physics: Conference Series 983 (1), 012079                                                        
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Endang Sugiharti S.Si.,M.Kom</td>
                                                    <td>
                                                        Online information system for data collection of cattle 
                                                        quality <br>
                                                        E Sugiharti, R Arifudin, AT Putra <br>
                                                        Journal of Physics: Conference Series 983 (1), 012058
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>Riza Arifudin S.Pd., M.Cs.</td>
                                                    <td>
                                                        Android-Based Computer Assisted Instruction 
                                                        Development as a Learning Resource for Supporting 
                                                        Self-Regulated Learning. <br>
                                                        P Hendikawati, MZ Zahid, R Arifudin <br>
                                                        International Journal of Instruction 12 (3), 389-404
                                                    </td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>Riza Arifudin S.Pd., M.Cs.</td>
                                                    <td>
                                                        Keefektifitan Media Pembelajaran Berbasis Android 
                                                        terhadap Kemampuan Pemecahan Masalah dan 
                                                        Kemandirian Belajar <br>
                                                        P Hendikawati, MZ Zahid, R Arifudin <br>
                                                        PRISMA, Prosiding Seminar Nasional Matematika 2, 
                                                        917-927
                                                    </td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>Riza Arifudin S.Pd., M.Cs.</td>
                                                    <td>
                                                        The Comparison between Bayes and Certainty Factor 
                                                        Method of Expert System in Early Diagnosis of Dengue 
                                                        Infection <br>
                                                        EY Rachmawati, B Prasetiyo, R Arifudin <br>
                                                        Scientific Journal of Informatics 5 (2), 159-170
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>Riza Arifudin S.Pd., M.Cs.</td>
                                                    <td>
                                                        K-Nearest Neighbor and Naive Bayes Classifier 
                                                        Algorithm in Determining The Classification of Healthy 
                                                        Card Indonesia Giving to The Poor <br>
                                                        YF Safri, R Arifudin, MA Muslim <br>
                                                        Sci. J. Informatics 5 (1), 18
                                                    </td>
                                                    <td>11</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Riza Arifudin S.Pd., M.Cs.</td>
                                                    <td>
                                                        Implementation of Decision Tree and Dempster Shafer 
                                                        on Expert System for Lung Disease Diagnosis <br>
                                                        AM Alfatah, R Arifudin, MA Muslim <br>
                                                        Scientific Journal of Informatics 5 (1), 57
                                                    </td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>Riza Arifudin S.Pd., M.Cs.</td>
                                                    <td>
                                                        Development of computer-assisted instruction 
                                                        application for statistical data analysis android platform 
                                                        as learning resource <br>
                                                        P Hendikawati, R Arifudin, MZ Zahid <br>
                                                        Journal of Physics: Conference Series 983 (1), 012057
                                                    </td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Much Aziz Muslim S.Kom., M.Kom.</td>
                                                    <td>
                                                        SVM Optimization Based on PSO and AdaBoost to 
                                                        Increasing Accuracy of CKD Diagnosis <br>
                                                        AF Indriani, MA Muslim <br>
                                                        Lontar Komputer : Jurnal Ilmiah Teknologi Informasi 10 
                                                        (2), 119-127
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>Much Aziz Muslim S.Kom., M.Kom.</td>
                                                    <td>
                                                        Decision Support System for the Selection of 
                                                        Outstanding Students Using the AHP-TOPSIS 
                                                        Combination Method <br>
                                                        VD Iswari, FY Arini, MA Muslim <br>
                                                        Lontar Komputer: Jurnal Ilmiah Teknologi Informasi, 40-
                                                        48
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>Much Aziz Muslim S.Kom., M.Kom.</td>
                                                    <td>
                                                        Forecasting Inflation Rate Using Support Vector 
                                                        Regression (SVR) Based Weight Attribute Particle 
                                                        Swarm Optimization (WAPSO) <br>
                                                        EM Priliani, AT Putra, MA Muslim <br>
                                                        Scientific Journal of Informatics 5 (2), 118-127
                                                    </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Much Aziz Muslim S.Kom., M.Kom.</td>
                                                    <td>
                                                        Analisis dan Perancangan Sistem Informasi Penerbitan 
                                                        Surat di PDAM Tirta Moedal Kota Semarang Cabang 
                                                        Timur <br>
                                                        R Kurniawan, JN Rifa’i, MA Muslim <br>
                                                        Techno. Com 17 (2), 145-157
                                                    </td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>Much Aziz Muslim S.Kom., M.Kom.</td>
                                                    <td>
                                                        Improving Accuracy of C4. 5 Algorithm Using Split 
                                                        Feature Reduction Model and Bagging Ensemble for 
                                                        Credit Card Risk Prediction <br>
                                                        MA Muslim, A Nurzahputra, B Prasetiyo <br>
                                                        International Conference on Information and 
                                                        Communications Technology (ICOIACT)
                                                    </td>
                                                    <td>7</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>Much Aziz Muslim S.Kom., M.Kom.</td>
                                                    <td>
                                                        Perencanaan dan Analisis E-Book Interaktif Materi 
                                                        ASEAN <br>
                                                        WT Astuti, MA Muslim <br>
                                                        JISKA (Jurnal Informatika Sunan Kalijaga) 2 (3), 127-
                                                        134
                                                    </td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>Zaenal Abidin S.Si., M.Cs., Ph.D.</td>
                                                    <td>
                                                        Factors influencing internet users’ intention to sign epetitions
                                                        KLM Ulo, AN Hidayanto, PI Sandhyaduhita, WR Fitriani, <br>
                                                        Z Abidin <br>
                                                        Transforming Government: People, Process and Policy
                                                    </td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>Zaenal Abidin S.Si., M.Cs., Ph.D.</td>
                                                    <td>
                                                        Gender-related differences in the use of technology in 
                                                        mathematics classrooms <br>
                                                        Z Abidin, A Mathrani, R Hunter <br>
                                                        The International Journal of Information and Learning 
                                                        Technology
                                                    </td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>Dr. Djuniadi M.T</td>
                                                    <td>
                                                        Pengembangan Media Pembelajaran Interaktif 3 
                                                        Dimensi untuk Pembelajaran Materi Pengenalan 
                                                        Lingkungan Pada Anak Usia Dini di Indonesia. <br>
                                                        D Febiharsa, Djuniadi <br>
                                                        Journal of SECE (Studies in Early Chilhood Education) 
                                                        1 (1), 75-82
                                                    </td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>Dr. Feddy Setio Pribadi  S.Pd., MT. </td>
                                                    <td>
                                                        A scoring rubric for automatic short answer grading 
                                                        system <br>
                                                        U Hasanah, AE Permanasari, SS Kusumawardani, FS 
                                                        Pribadi <br>
                                                        Telkomnika 17 (2), 763-770
                                                    </td>
                                                    <td>1</td>
                                                </tr> 
                                                <tr>
                                                    <td>31</td>
                                                    <td>Dr. Feddy Setio Pribadi  S.Pd., MT. </td>
                                                    <td>
                                                        Short answer scoring system using automatic reference 
                                                        answer generation and geometric average normalizedlongest common subsequence (GAN-LCS) <br>
                                                        FS Pribadi, AE Permanasari, TB Adji <br>
                                                        Education and Information Technologies 23 (6), 2855-
                                                        2866
                                                    </td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>Dr. Feddy Setio Pribadi  S.Pd., MT. </td>
                                                    <td>
                                                        Short answer scoring using W-Bleu for regular 
                                                        assessment in vocational high school <br>
                                                        FS Pribadi, TB Adji, AE Permanasari, T Ninomiya <br>
                                                        International Journal of Innovation and Learning 24 (4), 
                                                        437-447
                                                    </td>
                                                    <td>1</td>
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