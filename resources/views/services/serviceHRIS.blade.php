@extends('layout')

@section('content')

    <section class="page-header custom-product" style="border-top-width: 0px;border-bottom-width: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h1 style="color: #222;">Satu solusi untuk semua kebutuhan HR</h1>
                    <p class="lead" style="color: #222;">Optimalkan pengelolaan operasi HR Anda dengan bantuan solusi terintegrasi dari Kami.</p>

                    <img class="" alt="" src="{{ asset('template/img/logos/logo-present.png') }}" width="118px" style="bottom: 37px;">
                    <span class="arrow hlt" style="top: 10px;">
                        
                    </span>
                </div>
                <div class="col-sm-5">
                    <img class="pull-right img-responsive" alt="" src="{{ asset('template/img/logos/present.png') }}">
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <h1 class="word-rotator-title mb-sm">
                    Pekerjaan HR sangat 
                    <strong class="inverted">
                        <span class="word-rotate" data-plugin-options='{"delay": 2000}'>
                            <span class="word-rotate-items">
                                <span>padat.</span>
                                <span>rumit.</span>
                                <span>memakan waktu</span>
                            </span>
                        </span>
                    </strong>
                    Kami bisa membantu.
                </h1>
                <p class="lead">
                    Manajemen HR dan karyawan menjadi lebih efisien dan jauh lebih mudah. Berikut fitur kami
                </p>
            </div>
        </div>
    </div>

    <hr class="tall">
  

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="fa fa-group"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-xs">Organization</h4>
                        <p>Orgaisasi dapat dilihat secara dinamis untuk melihat pertumbuhan perusahaan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="fa fa-film"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-xs">Career</h4>
                        <p>History perjalanan karir karyawan anda dari mulai bekerja sampai selesai bekerja.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-xs">Employee</h4>
                        <p>Kelola data dan administrasi karyawan otomatis dibantu oleh sistem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg">
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="fa fa-file"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-xs">Performance</h4>
                        <p>Kelola hasil kinerja, analisis dan peningkatan karyawan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-xs">Payroll</h4>
                        <p>Hilangkan penghitungan manual untuk proses payroll yang cepat dan tanpa risiko salah hitung dengan software payroll.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-xs">Training</h4>
                        <p>Bekali karyawan anda dengan training dengan metode pembelajaran e-Learning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>				

    <section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mt-lg">Fitur <strong>Unggulan</strong></h2>
                    <p class="lead">
                        Cara Termudah untuk Memantau Absensi Karyawan 
                        
                    </p>
                    <p class="mt-lg">
                        Karyawan cenderung menjadi kurang produktif ketika budaya kerja terus mengalami perubahan. Awasi kehadiran karyawan dan shift kerja setiap hari dengan sistem manajemen kehadiran yang komprehensif. 
                    </p>
                </div>
                <div class="col-md-6 mt-lg">
                    <img class="img-responsive appear-animation" src="{{ asset('template/img/present-hr-device.png') }}" data-appear-animation="fadeInRight" alt="">
                </div>
            </div>
        </div>
    </section>


    
@endsection