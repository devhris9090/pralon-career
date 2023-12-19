<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .square {
            width: 20px;
            height: 20px;
            border: 1.5px solid black;
            border-radius: 10%;
        }

        .row {
            display: flex;
            margin-bottom: 28px;
            margin-right: 10px;
            margin-left: 10px;
            /* Add margin to create space between rows */
        }

        .column {
            flex: 1;
            padding: 0;
            text-align: center;
            justify-content: space-between;
        }

        .left-column {
            margin-top: 70px;
            margin-left: 15px;
        }

        .center-column {
            margin-top: 70px;
        }

        .right-column {
            margin-left: 15px;
            margin-top: 30px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5%;
        }

        .bordered-text {
            font-size: 22px;
            font-weight: bold;
            border: 1px solid #000000;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout:fixed;
        }

        th, td {
            border: 1px solid #000000;
            padding: 1px;
            text-align: center;
            border-style: solid;
        }

        .header-th {
            border: 0;
        }

        .text-in-table {
            text-align: left !important; 
            padding-left: 10px !important;
        }

        .h6-title {
            margin-top: 4px !important; margin-bottom: 4px !important; font-size: .875em;
        }

        .small-subtitle {
            margin-top: 0 !important; 
            margin-bottom: 0 !important;
            font-weight: lighter !important;
        }

        th {
            font-size : 22px;
        }

        td {
            position: relative;
            font-size: 16px
        }

        .top-left-text {
            position: absolute;
            top: 0;
            left: 0;
        }

        .inline-selected {
            display: flex;
            align-items: left;
        }

        .status-selected {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <!-- header -->
    <div class="row" style="margin-top: 30px !important; margin-bottom: 30px !important;">
        <div class="column">
            <table>
                <tr>
                    <th class="header-th">
                        <div class="bordered-text">
                            <h5 style="margin-top: 0 !important; margin-bottom: 0 !important;">
                                POSISI YANG DILAMAR
                            </h5>
                            <hr style="margin-top: 0 !important; margin-bottom: 0 !important;">
                            <h5 style="margin-top: 0 !important; margin-bottom: 0 !important; font-size: .875em;">
                                <small class="small-subtitle">
                                    {{-- @if ($applicant != null)
                                        {{ $applicant->id_vacancy }}
                                    @else
                                        {{ 'no data' }}
                                    @endif --}}
                                    {{ $applicant_applied }}
                                </small>
                            </h5>
                        </div>
                    </th>
                    <th class="header-th">
                        <div class="form-title" style="position: relative !important;">
                            <h5 style="font-size: 1.5rem; margin-top: 0 !important; margin-bottom: 0 !important;">
                                <strong>
                                    FORMULIR LAMARAN KERJA
                                </strong>
                            </h5>
                            <hr style="margin-top: 0 !important; margin-bottom: 0 !important; width: 80%;">
                            <h5 style="margin-top: 0 !important; margin-bottom: 0 !important;">
                                <strong>
                                    <i>
                                        EMPLOYMENT APPLICATION FORM
                                    </i>
                                </strong>
                            </h5>
                        </div>
                    </th>
                    <th class="header-th">
                        <img src="{{ public_path() .'/storage/' . $user->photo }}"
                    style="width: 130px; height: 170px;">
                    </th>
                </tr>
            </table>
        </div>
    </div>

    <!-- end header -->

    <!-- biodata -->
    <div class="row" style="margin-bottom: 0 !important; margin-top: 10px !important;">
        <table>
            <tr>
                <th class="header-th">
                    <div class="column" style="text-align-last: left;">
                        <h6 style="margin-top: 0 !important; margin-bottom: 0 !important; font-size: .875em !important">
                            HARAP DIISI DENGAN LENGKAP DAN BENAR, GUNAKAN HURUF CETAK
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Please fill in completely and truthfully, Use block letters.
                            </i>
                        </small>
                    </div>
                </th>
                <th class="header-th">
                    <div class="column" style="text-align-last: left;">
                        <h6 class="d-inline" style="margin-top: 0 !important; margin-bottom: 0 !important; font-size: .875em !important">HARAP
                            LAMPIRKAN FOTO DAN FOTO COPY KTP TERBARU</h6>
                        <small class="small-subtitle">
                            <i>
                                Please attached a copy of ID’s and photo
                            </i>
                        </small>
                    </div>
                </th>
            </tr>
        </table>        
    </div>
    <div class="row">
        <div class="column">
            <table>
                <tr>
                    <td colspan="4" style="text-align: left !important; padding-left: 10px !important;">
                        <h6 class="h6-title">
                            NAMA LENGKAP : {{ $user->full_name }}
                        </h6>
                        <small class="small-subtitle">
                            Full Name
                        </small>
                    </td>
                    <th style="text-align: left !important; padding-left: 10px !important;" colspan="3">
                        <div>
                            <i class="d-inline fa-regular fa-square fa-lg"></i>
                                <span>Laki-laki/Male</span>
                            <br>
                            <i class="d-inline fa-regular fa-square fa-lg"></i>
                            <span class="d-inline">Perempuan/Female</span>
                        </div>
                    </th>
                    <td colspan="2" style="text-align: left !important; padding-left: 10px !important;">
                        <h6 class="h6-title">
                            AGAMA :
                            @if ($user->religion != null)
                                {{ $user->religion }}
                            @endif
                        </h6>
                        <small class="small-subtitle">
                            Religion
                        </small>
                    </td>
                </tr>
                <tr>
                    <th class="text-in-table" colspan="3">
                        <h6 class="h6-title">
                            TANGGAL LAHIR : @if ($user->birthdate != null)
                            {{ $user->birthdate }}
                        @endif
                        </h6>
                        <small class="small-subtitle">
                            Date of birth
                        </small>
                    </th>
                    <th class="text-in-table" colspan="3">
                        <h6 class="h6-title">
                            TEMPAT LAHIR : @if ($user->birthplace != null)
                            {{ $user->birthplace }}
                        @endif
                        </h6>
                        <small class="small-subtitle">
                            Place of birth
                        </small>
                    </th>
                    <th class="text-in-table" colspan="3">
                        <h6 class="h6-title">
                            KEWARGANEGARAAN : Indonesia
                        </h6>
                        <small class="small-subtitle">
                            Nationality
                        </small>
                    </th>
                </tr>
                <tr>
                    <th class="text-in-table" colspan="2">
                        <h6 class="h6-title">
                            TINGGI :
                        </h6>
                        <small class="small-subtitle">
                            Height
                        </small>
                    </th>
                    <th class="text-in-table" colspan="2">
                        <h6 class="h6-title">
                            BERAT :
                        </h6>
                        <small class="small-subtitle">
                            Weight
                        </small>
                    </th>
                    <th class="text-in-table" colspan="3">
                        <h6 class="h6-title">
                            KTP :
                        </h6>
                        <small class="small-subtitle">
                            ID’s Number
                        </small>
                    </th>
                    <th class="text-in-table" colspan="2">
                        <div class="row" style="margin-bottom: 0 !important; margin-left: 0 !important; margin-right: 0 !important;">
                            <div class="column">
                                <div class="text-in-table">
                                    <h6 class="h6-title">
                                        SIM
                                    </h6>
                                    <small class="small-subtitle">
                                        Driver Licence Number
                                    </small>
                                </div>
                            </div>
                            <div class="column">
                                <div class="text-in-table">
                                    <i class="d-inline fa-regular fa-square fa-lg"></i>
                                    <small class="small-subtitle">A :</small>
                                    <br>
                                    <i class="d-inline fa-regular fa-square fa-lg"></i>
                                    <small class="small-subtitle">C :</small>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th colspan="9">
                        <table>
                            <tr>
                                <td class="header-th">
                                    <h6 class="h6-title">STATUS SIPIL</h6>
                                    <small class="small-subtitle">Civil</small>
                                </td>
                                <td class="header-th">
                                    <table>
                                        <tr>
                                            <td class="header-th" style="text-align: right;">
                                                <div class="square" style="position: absolute;
                                                top: 0;
                                                right: 0;"></div>
                                            </td>
                                            <td class="header-th">
                                                <div class="inline-selected status-selected">
                                                    <small class="small-subtitle">BELUM MENIKAH</small>
                                                    <small class="small-subtitle" style="position: left;">Single</small>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="header-th">
                                    <table>
                                        <tr>
                                            <td class="header-th" style="text-align: right;">
                                                <div class="square" style="position: absolute;
                                                top: 0;
                                                right: 0;"></div>
                                            </td>
                                            <td class="header-th">
                                                <div class="inline-selected status-selected">
                                                    <small class="small-subtitle">MENIKAH</small>
                                                    <small class="small-subtitle">Married</small>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="header-th">
                                    <table>
                                        <tr>
                                            <td class="header-th" style="text-align: right;">
                                                <div class="square" style="position: absolute;
                                                top: 0;
                                                right: 0;"></div>
                                            </td>
                                            <td class="header-th">
                                                <div class="inline-selected status-selected">
                                                    <small class="small-subtitle">CERAI</small>
                                                    <small class="small-subtitle">Divorced</small>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="header-th">
                                    <table>
                                        <tr>
                                            <td class="header-th" style="text-align: right;">
                                                <div class="square" style="position: absolute;
                                                top: 0;
                                                right: 0;"></div>
                                            </td>
                                            <td class="header-th">
                                                <div class="inline-selected status-selected">
                                                    <small class="small-subtitle">BERPISAH</small>
                                                    <small class="small-subtitle">Separated</small>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        
                    </th>
                </tr>
                <tr>
                    <th colspan="7" class="text-in-table">
                        <h6 class="h6-title">
                            ALAMAT SEKARANG : @if ($user->address != null)
                                {{ $user->address }}
                            @endif
                        </h6>
                        <small class="small-subtitle">
                            Current Address
                        </small>
                    </th>
                    <th colspan="2" class="text-in-table">
                        <h6 class="h6-title">
                            HANDPHONE : @if ($user->phone != null)
                            {{ $user->phone }}
                        @endif
                        </h6>
                        <small class="small-subtitle">
                            Mobile
                        </small>
                    </th>
                </tr>
                <tr>
                    <th colspan="7" class="text-in-table">
                        <h6 class="h6-title">
                            ALAMAT TETAP/ASAL : @if ($user->address != null)
                            {{ $user->address }}
                        @endif
                        </h6>
                        <small class="small-subtitle">
                            Permanent Address
                        </small>
                    </th>
                    <th colspan="2" class="text-in-table">
                        <h6 class="h6-title">
                            TELEPON : @if ($user->phone != null)
                            {{ $user->phone }}
                        @endif
                        </h6>
                        <small class="small-subtitle">
                            Telephone
                        </small>
                    </th>
                </tr>
                <tr>
                    <th colspan="7" class="text-in-table">
                        <h6 class="h6-title">
                            ALAMAT EMAIL : @if ($user->email != null)
                            {{ $user->email }}
                        @endif
                        </h6>
                    </th>
                    <th colspan="2" class="text-in-table">
                        <h6 class="h6-title">
                            KONTAK DARURAT :
                        </h6>
                        <small class="small-subtitle">
                            Emergency Contact
                        </small>
                    </th>
                </tr>
            </table>
        </div>
    </div>
    <!-- end biodata -->

    <!-- education -->
    <div class="row" style="margin-bottom: 0 !important; margin-top: 10px !important;">
        <div class="column">
            <table>
                <tr>
                    <th class="header-th">
                        <div class="column" style="text-align-last: left !important;">
                            <h6 style="margin-top: 0 !important; margin-bottom: 0 !important; font-size: .875em !important">
                                PENDIDIKAN (SEBUTKAN SEMUA PENDIDIKAN YANG DIIKUTI)
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Education (list all school attented)
                                </i>
                            </small>
                        </div>
                    </th>
                </tr>
            </table>  
        </div>
    </div>
    <div class="row">
        <div class="column">
            <table class="table table-sm table-bordered rounded">
                <thead>
                    <tr>
                        <th style="text-align: left !important; padding-left: 10px !important;"> 
                            <h6 class="h6-title">
                                SEKOLAH
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    school
                                </i>
                            </small>
                        </th>
                        <th style="text-align: left !important; padding-left: 10px !important;"> 
                            <h6 class="h6-title">
                                NAMA SEKOLAH
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Name of school
                                </i>
                            </small>
                        </th>
                        <th style="text-align: left !important; padding-left: 10px !important;"> 
                            <h6 class="h6-title">
                                KOTA
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    City
                                </i>
                            </small>
                        </th>
                        <th style="text-align: left !important; padding-left: 10px !important;"> 
                            <h6 class="h6-title">
                                JURUSAN
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Area of specialization
                                </i>
                            </small>
                        </th>
                        <th style="text-align: left !important; padding-left: 10px !important;"> 
                            <div>
                                <h6 class="h6-title">
                                    TAHUN PENDIDIKAN
                                </h6>
                                <small class="small-subtitle">
                                    <i>
                                        Year of education
                                    </i>
                                </small>
                            </div>
                            <hr style="margin: 0 !important; margin-bottom: 0 !important; border: 1px solid !important;">
                            <div>
                                <h6 class="h6-title">
                                    Dari / Sampai
                                </h6>
                                <small class="small-subtitle">
                                    <i>
                                        From / Until
                                    </i>
                                </small>
                            </div>
                        </th>
                        <th style="text-align: left !important; padding-left: 10px !important;"> 
                            <h6 class="h6-title">
                                KETERANGAN
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Explanation
                                </i>
                            </small>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($educations as $edu)
                    <tr>
                        <td>
                            <h6 class="h6-title">
                                {{ $edu->degree }}
                            </h6>
                            {{-- <small class="small-subtitle">
                                <i>
                                    Elementary
                                </i>
                            </small> --}}
                        </td>
                        <td>{{ $edu->institutionName }}</td>
                        <td></td>
                        <td>{{ $edu->major }}</td>
                        <td>{{ $edu->startYear.' - '. $edu->endYear  }}</td>
                        <td></td>
                    </tr>
                    @empty
                        <tr>
                            <td>
                                <h6 class="h6-title">
                                    SD
                                </h6>
                                <small class="small-subtitle">
                                    <i>
                                        Elementary
                                    </i>
                                </small>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="h6-title">
                                    SMP / SLTP
                                </h6>
                                <small class="small-subtitle">
                                    <i>
                                        Junior High School
                                    </i>
                                </small>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="h6-title">
                                    SMA / SLTA
                                </h6>
                                <small class="small-subtitle">
                                    <i>
                                        Senior High School
                                    </i>
                                </small>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="h6-title">
                                    AKADEMI / UNIVERSITAS
                                </h6>
                                <small class="small-subtitle">
                                    <i>
                                        Academy / University
                                    </i>
                                </small>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="h6-title">
                                    PASCA SARJANA
                                </h6>
                                <small class="small-subtitle">
                                    <i>
                                        Post. Graduate
                                    </i>
                                </small>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- end education -->

    <!-- course -->
    <div class="row" style="margin-bottom: 0 !important; margin-top: 10px !important;">
        <div class="column">
            <table>
                <tr>
                    <th class="header-th">
                        <div class="column" style="text-align-last: left !important;">
                            <h6 style="margin-top: 0 !important; margin-bottom: 0 !important; font-size: .875em !important">
                                PELATIHAN / KURSUS
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Training / Course
                                </i>
                            </small>
                        </div>
                    </th>
                </tr>
            </table>  
        </div>
    </div>
    <div class="row">
        <div class="column">
            <table class="table table-sm table-bordered rounded">
                <thead>
                    <tr class="text-center">
                        <th>
                            <h6 class="h6-title">
                                BIDANG
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Subject
                                </i>
                            </small>
                        </th>
                        <th>
                            <h6 class="h6-title">
                                LEMBAGA
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Institute
                                </i>
                            </small>
                        </th>
                        <th>
                            <h6 class="h6-title">
                                KOTA/KABUPATEN
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    City
                                </i>
                            </small>
                        </th>
                        <th>
                            <h6 class="h6-title">
                                Durasi
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Duration
                                </i>
                            </small>
                        </th>
                        <th>
                            <div>
                                <h6 class="h6-title">
                                    DIBIAYAI OLEH
                                </h6>
                                <small class="small-subtitle">
                                    <i>
                                        Financed by
                                    </i>
                                </small>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($training_achievement as $train)
                        <tr>
                            <td style="padding-left:5px; overflow:hidden; height: 40px;">
                                {{ $train->trachName }}
                            </td>
                            <td style="padding-left:5px; overflow:hidden; height: 40px;">
                                {{ $train->trachOrganizer }}
                            </td>
                            <td style="padding-left:5px; overflow:hidden; height: 40px;">
                                {{-- {{ $train->trachOrganizer }} --}}
                            </td>
                            <td style="padding-left:5px; overflow:hidden; height: 40px;">
                                {{ $train->trachStart . ' - ' . $train->trachEnd }}
                            </td>
                            <td style="padding-left:5px; overflow:hidden; height: 40px;">
                                {{-- {{ $train->trachOrganizer }} --}}
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 40px;"></td>
                    </tr>
                    @endforelse
                    
                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- end course -->

    <!-- question 1 -->
    <div class="row" style="margin-bottom: 0 !important; margin-top: 10px !important;">
        <div class="column">
            <table>
                <tr>
                    <th class="header-th">
                        <div class="column" style="text-align-last: left !important;">
                            <h6 style="margin-top: 0 !important; margin-bottom: 0 !important; font-size: .875em !important">
                                BERI TANDA SILANG (X) PADA KOTAK YANG SESUAI
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Give cross (x) in the suitable box
                                </i>
                            </small>
                        </div>
                    </th>
                </tr>
            </table>  
        </div>
    </div>
    <div class="row">
        <div class="column">
            <table width="100%">
                <thead>
                    <tr class="text-center">
                        <th rowspan="2">
                            <h6 class="h6-title">
                                BAHASA ASING
                            </h6>
                            <small class="small-subtitle">
                                <i>
                                    Foreign languages
                                </i>
                            </small>
                        </th>
                        <th colspan="3" rowspan="1">
                            <h6 class="h6-title">
                                Membaca / Read
                            </h6>
                        </th>
                        <th colspan="3" rowspan="1">
                            <h6 class="h6-title">
                                Bicara / Speak
                            </h6>
                        </th>
                        <th colspan="3" rowspan="1">
                            <h6 class="h6-title">
                                Menulis / Write
                            </h6>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Baik - Good
                        </td>
                        <td>
                            Cukup - Fair
                        </td>
                        <td>
                            Kurang - Poor
                        </td>
                        <td>
                            Baik - Good
                        </td>
                        <td>
                            Cukup - Fair
                        </td>
                        <td>
                            Kurang - Poor
                        </td>
                        <td>
                            Baik - Good
                        </td>
                        <td>
                            Cukup - Fair
                        </td>
                        <td>
                            Kurang - Poor
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                        <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border-right: 0px solid;">
                            <div>
                                <h6 class="h6-title">Keterampilan Lain</h6>
                                <small class="small-subtitle">
                                    <i>
                                        Other skills
                                    </i>
                                </small>
                            </div>
                        </td>
                        <td colspan="8" style="border-left: 0px solid;">
                            <table>
                                <tr class="header-th">
                                    <td class="header-th" style="height: 30px;">1. _________________________</td>
                                    <td class="header-th" style="height: 30px;">2. _________________________</td>
                                </tr>
                                <tr>
                                    <td class="header-th" style="height: 30px;">3. _________________________</td>
                                    <td class="header-th" style="height: 30px;">4. _________________________</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end question 1 -->

    <!-- family -->
    <div class="row" style="margin-bottom: 0 !important; margin-top: 10px !important;">
        <table>
            <tr>
                <th class="header-th">
                    <div class="column" style="text-align-last: left;">
                        <h6 style="margin-top: 0 !important; margin-bottom: 0 !important; font-size: .875em !important">
                            LATAR BELAKANG KELUARGA 
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Family Background
                            </i>
                        </small>
                    </div>
                </th>
                <th class="header-th">
                    <div class="column" style="text-align-last: left;">
                        <h6 class="d-inline" style="margin-top: 0 !important; margin-bottom: 0 !important; font-size: .875em !important">Harap
                            Beri tanda "+" disamping nama keluarga yang telah meninggal dunia
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Please put a "+" mark next to the person who has already passed away
                            </i>
                        </small>
                    </div>
                </th>
            </tr>
        </table>
    </div>
    <div class="row">
        <div class="column">
            <table>
                <thead>
                    <tr class="text-center">
                        <th rowspan="2">
                            <h6 class="h6-title">
                                KELUARGA
                            </h6>
                            <small class="small-subtitle">
                                <i>Family</i>
                            </small>
                        </th>
                        <th rowspan="2" colspan="2">
                            <h6 class="h6-title">
                                Nama
                            </h6>
                            <small class="small-subtitle">
                                <i>Name</i>
                            </small>
                        </th>
                        <th rowspan="2" colspan="2">
                            <h6 class="h6-title">
                                Tempat & Tgl. Lahir 
                            </h6>
                            <small class="small-subtitle">
                                <i>Place & Date of Birth</i>
                            </small>
                        </th>
                        <th rowspan="2">
                            <h6 class="h6-title">
                                Lk/Pr
                            </h6>
                            <small class="small-subtitle">
                                <i>M/F</i>
                            </small>
                        </th>
                        <th rowspan="2">
                            <h6 class="h6-title">
                                Pendidikan Terakhir
                            </h6>
                            <small class="small-subtitle">
                                <i>Last Education</i>
                            </small>
                        </th>
                        <th rowspan="1" colspan="2">
                            <h6 class="h6-title">
                                Pekerjaan / Occupation
                            </h6>
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>
                            <h6 class="h6-title">
                                Jabatan 
                            </h6>
                            <small class="small-subtitle">
                                <i>Position</i>
                            </small>
                        </th>
                        <th>
                            <h6 class="h6-title">
                                Perusahaan
                            </h6>
                            <small class="small-subtitle">
                                <i>Company</i>
                            </small>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($family as $fam)
                        <tr>
                            <td>
                                <h6 class="h6-title">{{ $fam->familyRelation }}</h6>
                                <small class="small-subtitle">
                                    <i>{{ $fam->familyRelation }}</i>
                                </small>
                            </td>
                            <td colspan="2">{{ $fam->familyName }}</td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td>{{ $fam->occupation }}</td>
                            <td></td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                <h6 class="h6-title">Ayah</h6>
                                <small class="small-subtitle">
                                    <i>Father</i>
                                </small>
                            </td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="h6-title">Ibu</h6>
                                <small class="small-subtitle">
                                    <i>Mother</i>
                                </small>
                            </td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td colspan="9">
                                <h6 class="h6-title">Saudara Kandung (termasuk diri sendiri)</h6>
                                <small class="small-subtitle">
                                    <i>Brother / Sister (including yourself)</i>
                                </small>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="h6-title">
                                    <small class="small-subtitle">Suami/Istri</small>
                                </h6>
                                <small class="small-subtitle">
                                    <i>Spouse</i>
                                </small>
                            </td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="9">
                                <h6 class="h6-title">Anak</h6>
                                <small class="small-subtitle">
                                    <i>Children</i>
                                </small>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- end family -->

    <!-- hobbies -->
    <div class="row">
        <div class="column">
            <table>
                <tr>
                    <td class="text-in-table header-th" width="38%">
                        <h6 class="h6-title">
                            HOBI / MINAT
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Hobbies / Interest
                            </i>
                        </small>
                    </td>
                    <td class="header-th" width="2%"></td>
                    <td class="text-in-table header-th" width="60%">
                        <h6 class="h6-title">
                            KEANGGOTAAN BIDANG PROFESI DAN SOSIAL
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Membership of professional or social club
                            </i>
                        </small>
                    </td>
                </tr>
                <tr>
                    <td class="header-th">
                        <table>
                            <tr>
                                <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                            </tr>
                            <tr>
                                <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                            </tr>
                            <tr>
                                <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                            </tr>
                        </table>
                    </td>
                    <td class="header-th"></td>
                    <td class="header-th">
                        <table>
                            <tr>
                                <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                            </tr>
                            <tr>
                                <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                            </tr>
                            <tr>
                                <td style="padding-left:5px; overflow:hidden; height: 30px;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- end hobbies -->

    <!-- question 2 -->
    <div class="row" style="margin-bottom: 0 !important; margin-top: 10px !important;">
        <table>
            <tr>
                <th class="text-in-table header-th" width="35%">
                    <h6 class="h6-title">
                        BERI TANDA SILANG (X) PADA KOTAK YANG DIPILIH
                    </h6>
                    <small class="small-subtitle">
                        <i>
                            Give cross (x) in the chosen box
                        </i>
                    </small>
                </th>
            </tr>
        </table>
    </div>
    <div class="row">
        <div class="column">
            <table>  
                <thead>
                    <tr>
                        <th width="40%">
                            <h6 class="h6-title">APAKAH ANDA PRIBADI :</h6>
                            <small class="small-subtitle">
                                <i>
                                    Do You Personally :
                                </i>
                            </small>
                        </th>
                        <th width="10%">
                            <h6 class="h6-title">YA</h6>
                            <small class="small-subtitle">
                                <i>
                                    Yes
                                </i>
                            </small>
                        </th>
                        <th width="10%">
                            <h6 class="h6-title">TIDAK</h6>
                            <small class="small-subtitle">
                                <i>
                                    No
                                </i>
                            </small>
                        </th>
                        <th width="40%">
                            <h6 class="h6-title">PENJELASAN</h6>
                            <small class="small-subtitle">
                                <i>
                                    Remarks
                                </i>
                            </small>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-in-table">
                            <h6 class="h6-title">
                                1. MEMILIKI RUMAH ?
                            </h6>
                            <small class="ml-3">
                                <i>
                                    Own a house ?
                                </i>
                            </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <h6 class="h6-title">
                                2. MEMILIKI SEBIDANG TANAH ?
                            </h6>
                            <small class="ml-3">
                                <i>
                                    Own a plot of land ?
                                </i>
                            </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <h6 class="h6-title">
                                3. MEMILIKI MOBIL ?
                            </h6>
                            <small class="ml-3">
                                <i>
                                    Own a car ?
                                </i>
                            </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <h6 class="h6-title">
                                4. MEMILIKI SEPEDA MOTOR ?
                            </h6>
                            <small class="ml-3">
                                <i>
                                    Own a motorcycle ?
                                </i>
                            </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <h6 class="h6-title">
                                5. MENYEWA RUMAH ?
                            </h6>
                            <small class="ml-3">
                                <i>
                                    Rent a house ?
                                </i>
                            </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <h6 class="h6-title">
                                6. TINGGAL DI RUMAH MILIK PERUSAHAAN ?
                            </h6>
                            <small class="ml-3">
                                <i>
                                    Reside in a house owned by the company ?
                                </i>
                            </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <h6 class="h6-title">
                                7. MENGGUNAKAN MOBIL / MOTOR MILIK PERUSAHAAN ?
                            </h6>
                            <small class="ml-3">
                                <i>
                                    Use a car / motorcycle owned by the company
                                </i>
                            </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end question 2 -->

    <!-- experience -->
    <div class="row" style="margin-bottom: 0 !important; margin-top: 10px !important;">
        <table>
            <tr>
                <th class="text-in-table header-th" width="35%">
                    <h6 class="h6-title">
                        RIWAYAT PEKERJAAN (Tuliskan riwayat pekerjaan Anda dengan lengkap dan benar, dimulai dari pekerjaan / jabatan : terakhir)
                    </h6>
                    <small class="small-subtitle">
                        <i>
                            Employment History (Please detail your employment history, starting with last position)
                        </i>
                    </small>
                </th>
            </tr>
        </table>
    </div>
    <div class="row">
        <div class="column">
            <table>
                <thead>
                    <tr class="text-center">
                        <th>
                            <h6 class="h6-title">IDENTITAS PERUSAHAAN</h6>
                            <small class="small-subtitle">
                                <i>
                                    Company Identity
                                </i>
                            </small>
                        </th>
                        <th>
                            <h6 class="h6-title">MASA KERJA</h6>
                            <small class="small-subtitle">
                                <i>
                                    Service Year
                                </i>
                            </small>
                        </th>
                        <th colspan="2">
                            <h6 class="h6-title">KETERANGAN</h6>
                            <small class="small-subtitle">
                                <i>
                                    Remarks
                                </i>
                            </small>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($experiences as $exp)
                        <tr>
                            <td class="text-in-table" rowspan="3">
                                <p>Nama : {{ $exp->companyName }}</p>
                                <p>Alamat : {{ $exp->companyAddress }}</p>
                                <p>Telepon :</p>
                                <p>Jenis Usaha :</p>
                                <p>Atasan / Direktur :</p>
                            </td>
                            <td rowspan="3">
                                {{ $exp->yosStart . ' - ' . $exp->yosEnd }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-in-table">
                                <span class="top-left-text">
                                    Jabatan : {{ $exp->posEnd }}
                                </span>
                            </td>
                            <td class="text-in-table">
                                <span class="top-left-text">
                                    Alasan Pengunduran Diri : {{ $exp->leavingReason }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-in-table">
                                <span class="top-left-text">
                                    Gaji Perbulan : {{"Rp." . number_format($exp->salaryEnd, 0, ",", ".") }}
                                </span>
                            </td>
                            <td class="text-in-table">
                                <span class="top-left-text">
                                    Jumlah Karyawan :
                                </span>
                            </td>
                        </tr>
                    @empty
                        
                    <tr>
                        <td class="text-in-table" rowspan="3">
                            <p>Nama :</p>
                            <p>Alamat :</p>
                            <p>Telepon :</p>
                            <p>Jenis Usaha :</p>
                            <p>Atasan / Direktur :</p>
                        </td>
                        <td rowspan="3"></td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Jabatan :
                            </span>
                        </td>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Alasan Pengunduran Diri :
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Gaji Perbulan :
                            </span>
                        </td>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Jumlah Karyawan :
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-in-table" rowspan="3">
                            <p>Nama :</p>
                            <p>Alamat :</p>
                            <p>Telepon :</p>
                            <p>Jenis Usaha :</p>
                            <p>Atasan / Direktur :</p>
                        </td>
                        <td rowspan="3"></td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Jabatan :
                            </span>
                        </td>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Alasan Pengunduran Diri :
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Gaji Perbulan :
                            </span>
                        </td>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Jumlah Karyawan :
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-in-table" rowspan="3">
                            <p>Nama :</p>
                            <p>Alamat :</p>
                            <p>Telepon :</p>
                            <p>Jenis Usaha :</p>
                            <p>Atasan / Direktur :</p>
                        </td>
                        <td rowspan="3"></td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Jabatan :
                            </span>
                        </td>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Alasan Pengunduran Diri :
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Gaji Perbulan :
                            </span>
                        </td>
                        <td class="text-in-table">
                            <span class="top-left-text">
                                Jumlah Karyawan :
                            </span>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- end experience -->

    <!-- desc of work -->
    <div class="row" style="margin-bottom: 30 !important; margin-top: 10px !important;">
        <table>
            <tr>
                <th class="text-in-table">
                    <h6 class="h6-title">
                        URAIKAN TUGAS DAN TANGGUNG JAWAB ANDA PADA JABATAN TERAKHIR DAN TULISKAN JUMLAH BAWAHAN ANDA
                    </h6>
                    <small class="small-subtitle">
                        <i>
                            Describe duties and responsibilities in your current / last position and number of your team
                        </i>
                    </small>
                </th>
            </tr>
            <tr>
                <td style="height: 50px;"></td>
            </tr>
            <tr>
                <td style="height: 50px;"></td>
            </tr>
            <tr>
                <td style="height: 50px;"></td>
            </tr>
            <tr>
                <td style="height: 50px;"></td>
            </tr>
            <tr>
                <th class="text-in-table">
                    <h6 class="h6-title">
                        GAMBARKAN STRUKTUR ORGANISASI SEDERHANA YANG MEMPERLIHATKAN POSISI ANDA SAAT INI/YANG TERAKHIR
                    </h6>
                    <small class="small-subtitle">
                        <i>
                            Please draw a simple chart showing the post of your present appointment in the organization
                        </i>
                    </small>
                </th>
            </tr>
            <tr>
                <td style="height: 250px;"></td>
            </tr>
        </table>
    </div>
    <!-- end desc of work -->

    <!-- question 2 -->
    <div class="row">
        <table class="table table-sm table-bordered rounded">   
            <thead>
                <tr>
                    <th width="40%">
                        <h6 class="h6-title">BERI TANDA SILANG (X) PADA KOTAK YANG SESUAI</h6>
                        <small class="small-subtitle">
                            <i>
                                <strong>
                                    Give cross mark (x) in the correct response box
                                </strong>
                            </i>
                        </small>
                    </th>
                    <th width="10%">
                        <h6 class="h6-title">YA</h6>
                        <small class="small-subtitle">
                            <i>
                                Yes
                            </i>
                        </small>
                    </th>
                    <th width="10%">
                        <h6 class="h6-title">TIDAK</h6>
                        <small class="small-subtitle">
                            <i>
                                No
                            </i>
                        </small>
                    </th>
                    <th width="40%">
                        <h6 class="h6-title">PENJELASAN</h6>
                        <small class="small-subtitle">
                            <i>
                                Remarks
                            </i>
                        </small>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            APAKAH ANDA PERNAH MELAMAR PADA PERUSAHAAN INI SEBELUMNYA ? BILAMANA DAN SEBAGAI APA ?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Have you previously applied to our company ? if so, when and what position ?
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            SELAIN DI SINI DI PERUSAHAAN MANA LAGI ANDA MELAMAR SAAT INI? SEBAGAI APA?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Are you also applying to other companies'? if yes please mention what companies and position applied !
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            APAKAH ANDA TERIKAT KONTRAK DENGAN PERUSAHAAN TEMPAT KERJA ANDA SAAT INI ?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Are you under any contract agreement with other companies ?
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            APAKAH ANDA MEMPUNYAl PEKERJAAN SAMPINGAN / PART TIME ? DIMANA DAN SEBAGAI APA?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Do you have any part time job ? Specify the name of the company and position mentioned !
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            APAKAH ANDA BERKEBERATAN BILA KAMI MINTA REFERENSI PADA PERUSAHAAN TEMPAT ANDA PERNAH BEKERJA ? SEBUTKAN NAMA YANG DAPAT MENJADI REFERENSI ANDA.
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Do have any objections if we contact your previous employer for reference checking ?Please, mention name and hp number your reference.
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            APAKAH ANDA MEMPUNYAI TEMAN / SANAK SAUDARA YANG BEKERJA PADA PERUSAHAAN INI ? SEBUTKAN NAMA DAN HUBUNGAN ANDA!
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Do you have any acquaintance (s) or relative (s) employed by our company Please, mention name and your relationship.
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            APAKAH ANDA PERNAH MENDERITA SAKIT KERAS / KRONIS / KECELAKAAN BERAT / OPERASI ? BILAMANA DAN MACAM APA ? JELASKAN!
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                What serious illnes / surgeries / accidents have you ever had ?
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            APAKAH ANDA PERNAH MENJALANI PEMERIKSAAN PSIKOLOGIS / PSIKOTES ? BILAMANA, DI MANA DAN UNTUK TUJUAN APA?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Have you ever undergone any psychological tests before ? If so, when, where and for purpose ?
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            APAKAH ANDA PERNAH BERURUSAN DENGAN POLISI KARENA TINDAK KEJAHATAN ?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Have you ever been involved in any administrative, civil or criminal case ?
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            BILA DITERIMA, BERSEDIAKAH ANDA BERTUGAS KELUAR KOTA?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                If accepted, do you agree to out to Jakarta assignment ?
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table">
                        <h6 class="h6-title">
                            BILA DITERIMA BERSEDIAKAH ANDA DITEMPATKAN DISELURUH DAERAH DI INDONESIA? SEBUTKAN NAMA KOTA DAN DAERAH YANG LEBIH DISUKAI !
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                If accepted, do you agree to be located anywhere in Indonesia ? Please mention the prefered cities of region ?
                            </i>
                        </small>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-in-table" colspan="4">
                        <h6 class="h6-title">
                            MACAM PEKERJAAN / JABATAN APAKAH YANG SESUAI DENGAN CITA - CITA ANDA ?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Describe any kind of jobs that are in line with your career plan.
                            </i>
                        </small>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-in-table" colspan="4">
                        <h6 class="h6-title">
                            MACAM PEKERJAAN / BAGAIMANAKAH YANG TIDAK ANDA SUKAI ?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Describe any kind of job that you don't like.
                            </i>
                        </small>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-in-table" colspan="4">
                        <h6 class="h6-title">
                            BERAPA BESARKAH PENGHASILAN ANDA SEBULAN DAN FASILITAS APA SAJA YANG ANDA PEROLEH SAAT INI ?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                Please state your current monthly income and facilities.
                            </i>
                        </small>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-in-table" colspan="4">
                        <h6 class="h6-title">
                            BILA DITERIMA, BERAPA GAJI DAN FASILITAS APA YANG ANDA HARAPKAN ?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                State salary and facilities desired.
                            </i>
                        </small>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-in-table" colspan="4">
                        <h6 class="h6-title">
                            BILA DITERIMA, KAPAN ANDA DAPAT MULAI BEKERJA?
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                If accepted, when you can start working ?
                            </i>
                        </small>
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-in-table" colspan="4"> 
                        <h6 class="h6-title">
                            DENGAN INI SAYA MENYATAKAN BAHWA KETERANGAN YANG SAYA BERIKAN DI ATAS ADALAH BENAR APABILA DI KEMUDIAN HARI DITEMUKAN KETIDAKSESUAIAN, SAYA BERTANGGUNG JAWAB PENUH ATAS SEGALA AKIBATNYA
                        </h6>
                        <small class="small-subtitle">
                            <i>
                                I hereby certify that the information given above is true. And if under any circumstances any misrepresentation or omission of information is found, I understand and that I shall fully be held responsible.
                            </i>
                        </small>
                        <div style="height: 120px; margin-top: 40px; margin-left: 40px;">
                            <span>
                                _____  _________________________  _____
                            </span>
                        </div>
                        <div style="height: 120px; margin-top: 20px; margin-left: 20px;">
                            <span>
                                (________________________________________)
                            </span>
                            <p style="margin-left: 100px;">Pelamar / Applicant</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- end question 2 -->

</body>

</html>