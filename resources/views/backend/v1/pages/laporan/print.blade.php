<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MONEV</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ url('templates/backend') }}/css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        th,
        td,
        p {
            font-size: 12px;
        }

        .header {
            background: rgba(58, 240, 155, 0.723);
        }

        .header-2 {
            background: rgba(255, 255, 0, 0.793);
        }

        .sasaran-renstra td:not(:first-child) {
            background: rgba(236, 203, 17, 0.825)
        }

        .sasaran-program td:not(:first-child) {
            background: rgba(12, 119, 213, 0.838)
        }

        .sasaran-kegiatan td:not(:first-child) {
            background: rgba(157, 206, 248, 0.723);
        }

        .sasaran-sub-kegiatan td:not(:first-child) {
            background: rgba(192, 210, 226, 0.56)
        }
    </style>
</head>

<body>
    <h6 class="text-center"><b>MONITORING DAN EVALUASI CAPAIAN KINERJA ATAS RENCANA AKSI</b></h6>
    <h6 class="text-center"><b>DINAS PERDAGANGAN TAHUN</b></h6>
    <div class="wrapper mt-4">
        <p>NAMA SKPD : DINAS PERDAGANGAN</p>
        <p>TAHUN : 2022</p>
        <table class="table table-bordered">
            <thead>
                <tr class="header">
                    <th scope="col" class="text-center" style="vertical-align: middle" rowspan="2" style="width: 10%">No
                    </th>
                    <th scope="col" class="text-center" style="vertical-align: middle" rowspan="2">
                        KINERJA UTAMA/SASARAN STRATEGIS
                    </th>
                    <th scope="col" class="text-center" style="vertical-align: middle" rowspan="2">
                        TARGET KINERJA DAN ANGGARAN
                    </th>
                    <th scope="col" colspan="4" class="text-center">
                        REALISASI KINERJA DAN ANGGARAN TRIWULAN
                    </th>
                    <th scope="col" style="vertical-align: middle" class="text-center" rowspan="2">CAPAIAN</th>
                    <th scope="col" style="vertical-align: middle" class="text-center" rowspan="2">OTORISASI
                    </th>
                </tr>
                <tr class="header">
                    <th class="text-center">TW I</th>
                    <th class="text-center">TW II</th>
                    <th class="text-center">TW III</th>
                    <th class="text-center">TW IV</th>
                </tr>
            </thead>
            <tbody>

                {{-- iku --}}
            @foreach ($sasaran_renstras as $sasaran_renstra)
                {{-- ###################### --}}
                <tr class="sasaran-renstra">
                    <td>{{ $loop->iteration }}</td>
                    <td colspan="8"><b>Sasaran Strategis : </b>{{ $sasaran_renstra->name }}</td>
                </tr>
                {{-- <tr class="header-2">
                    <td></td>
                    <td colspan="9"><b>PROGRAM</b></td>
                </tr> --}}
                    @foreach ($sasaran_renstra->sasaran_program as $sasaran_program)
                        @foreach ($sasaran_program->program as $program)
                        <tr class="sasaran-renstra">
                            <td></td>
                            <td colspan="8"><b>-- Program : </b>{{ $program->name }}</td>
                        </tr>
                        @endforeach
                    @endforeach
                {{-- <tr class="header-2">
                    <td></td>
                    <td colspan="9"><b>INDIKATOR KINERJA UTAMA (IKU)</b></td>
                </tr> --}}
                    @foreach ($sasaran_renstra->iku as $iku)
                        <tr class="sasaran-renstra">
                            <td></td>
                            <td><b>-- Indikator Kinerja Utama : </b>{{ $iku->indikator }}</td>
                            <td class="text-center">{{ $iku->target .' '. $iku->satuan }}</td>
                            <td class="text-center">{{ $iku->tw_i }}</td>
                            <td class="text-center">{{ $iku->tw_ii }}</td>
                            <td class="text-center">{{ $iku->tw_iii }}</td>
                            <td class="text-center">{{ $iku->tw_iv }}</td>
                            <td class="text-center">{{ $iku->capaian }}</td>
                            <td></td>
                        </tr>
                        <tr class="sasaran-renstra">
                            <td></td>
                            <td>KENDALA</td>
                            <td colspan="7">{{ $iku->kendala }}</td>
                        </tr>
                        <tr class="sasaran-renstra">
                            <td></td>
                            <td>SOLUSI</td>
                            <td colspan="7">{{ $iku->solusi }}</td>
                        </tr>
                        <tr class="sasaran-renstra">
                            <td></td>
                            <td>TINDAK LANJUT</td>
                            <td colspan="7">{{ $iku->tindak_lanjut }}</td>
                        </tr>
                    @endforeach
            @endforeach
                {{-- ###################### --}}

                {{-- data sasaran program, program, program indikator dibawah ini hanya akan tampil ketika program
                indikator nya sudah diisi --}}
                {{-- sasaran renstra --}}
                @php
                $no = 1;
                @endphp
                @foreach ($sasaran_renstras as $sasaran_renstra)
                {{-- sasaran program --}}
                @foreach ($sasaran_renstra->sasaran_program as $sasaran_program)
                <tr class="header-2">
                    <td></td>
                    <td colspan="9"><b>SASARAN PROGRAM/PROGRAM/INDIKATOR PROGRAM</b></td>
                </tr>
                <tr class="sasaran-program">
                    <td>{{ $no++ }}</td>
                    <td colspan="8"><b>Sasaran Program : </b>{{ $sasaran_program->name }}</td>
                </tr>
                    {{-- program --}}
                    @foreach ($sasaran_program->program as $program)
                    <tr class="sasaran-program">
                        <td></td>
                        <td colspan="7"><b>-- Program : </b>{{ $program->name }}</td>
                        <td class="text-center">{{ $program->otorisasi }}</td>
                    </tr>
                        {{-- program indikator --}}
                        @foreach ($program->program_indikator as $program_indikator)
                        <tr class="sasaran-program">
                            <td></td>
                            <td><b>--- Indikator Program : </b>{{ $program_indikator->indikator }}</td>
                            <td class="text-center">{{ $program_indikator->target .' '. $program_indikator->satuan }}</td>
                            <td class="text-center">{{ $program_indikator->tw_i }}</td>
                            <td class="text-center">{{ $program_indikator->tw_ii }}</td>
                            <td class="text-center">{{ $program_indikator->tw_iii }}</td>
                            <td class="text-center">{{ $program_indikator->tw_iv }}</td>
                            <td class="text-center">{{ $program_indikator->capaian }}</td>
                            <td></td>
                        </tr>
                        @endforeach
                        {{-- program indikator berakhir --}}
                    <tr class="sasaran-program">
                        <td></td>
                        <td>KENDALA</td>
                        <td colspan="7">{{ $program->kendala }}</td>
                    </tr>
                    <tr class="sasaran-program">
                        <td></td>
                        <td>SOLUSI</td>
                        <td colspan="7">{{ $program->solusi }}</td>
                    </tr>
                    <tr class="sasaran-program">
                        <td></td>
                        <td>TINDAK LANJUT</td>
                        <td colspan="7">{{ $program->tindak_lanjut }}</td>
                    </tr>

                    {{-- sasaran kegiatan --}}
                    @foreach ($program->sasaran_kegiatan as $sasaran_kegiatan)
                    <tr class="header-2">
                        <td></td>
                        <td colspan="8"><b>SASARAN KEGIATAN/KEGIATAN/INDIKATOR KEGIATAN</b></td>
                    </tr>
                    <tr class="sasaran-kegiatan">
                        <td></td>
                        <td colspan="8"><b>-- Sasaran Kegiatan : </b>{{ $sasaran_kegiatan->name }}</td>
                    </tr>
                        {{-- kegiatan --}}
                        @foreach ($sasaran_kegiatan->kegiatan as $kegiatan)
                        <tr class="sasaran-kegiatan">
                            <td></td>
                            <td colspan="7"><b>-- Kegiatan : </b>{{ $kegiatan->name }}</td>
                            <td>{{ $kegiatan->otorisasi }}</td>
                        </tr>
                            {{-- kegiatan indikator --}}
                            @foreach ($kegiatan->kegiatan_indikator as $kegiatan_indikator)
                            <tr class="sasaran-kegiatan">
                                <td></td>
                                <td><b>-- Indikator Kegiatan : </b>{{ $kegiatan_indikator->indikator }}</td>
                                <td class="text-center">{{ $kegiatan_indikator->target .' '. $kegiatan_indikator->satuan }}</td>
                                <td class="text-center">{{ $kegiatan_indikator->tw_i }}</td>
                                <td class="text-center">{{ $kegiatan_indikator->tw_ii }}</td>
                                <td class="text-center">{{ $kegiatan_indikator->tw_iii }}</td>
                                <td class="text-center">{{ $kegiatan_indikator->tw_iv }}</td>
                                <td class="text-center">{{ $kegiatan_indikator->capaian }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                            {{-- kegiatan indikator berakhir --}}

                        {{-- <tr class="header-2">
                            <td></td>
                            <td colspan="8"><b>SUB KEGIATAN/INDIKATOR SUB KEGIATAN</b></td>
                        </tr> --}}
                        {{-- sub kegiatan --}}
                        @foreach ($kegiatan->sub_kegiatan as $sub_kegiatan)
                        <tr class="sasaran-sub-kegiatan">
                            <td></td>
                            <td colspan="7"><b>--- Sub Kegiatan : </b>{{ $sub_kegiatan->name }}</td>
                            <td>{{ $sub_kegiatan->otorisasi }}</td>
                        </tr>
                            {{-- sub kegiatan indikator --}}
                            @foreach ($sub_kegiatan->sub_kegiatan_indikator as $sub_kegiatan_indikator)
                            <tr class="sasaran-sub-kegiatan">
                                <td></td>
                                <td><b>--- Indikator Sub Kegiatan : </b>{{ $sub_kegiatan_indikator->indikator }}</td>
                                <td class="text-center">{{ $sub_kegiatan_indikator->target .' '. $sub_kegiatan_indikator->satuan }}</td>
                                <td class="text-center">{{ $sub_kegiatan_indikator->tw_i }}</td>
                                <td class="text-center">{{ $sub_kegiatan_indikator->tw_ii }}</td>
                                <td class="text-center">{{ $sub_kegiatan_indikator->tw_iii }}</td>
                                <td class="text-center">{{ $sub_kegiatan_indikator->tw_iv }}</td>
                                <td class="text-center">{{ $sub_kegiatan_indikator->capaian }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                            {{-- sub kegiatan indikator berakhir --}}
                        <tr class="sasaran-sub-kegiatan">
                            <td></td>
                            <td>KENDALA</td>
                            <td colspan="7">{{ $sub_kegiatan->kendala }}</td>
                        </tr>
                        <tr class="sasaran-sub-kegiatan">
                            <td></td>
                            <td>SOLUSI</td>
                            <td colspan="7">{{ $sub_kegiatan->solusi }}</td>
                        </tr>
                        <tr class="sasaran-sub-kegiatan">
                            <td></td>
                            <td>TINDAK LANJUT</td>
                            <td colspan="7">{{ $sub_kegiatan->tindak_lanjut }}</td>
                        </tr>
                        @endforeach
                        {{-- sub kegiatan berakhir --}}

                        @endforeach
                        {{-- kegiatan berakhir --}}
                    @endforeach
                    {{-- sasaran kegiatan berakhir --}}
                    @endforeach
                    {{-- program berakhir --}}
                @endforeach
                {{-- sasaran program berakhir --}}
                @endforeach
                {{-- sasaran renstra berakhir --}}
            </tbody>
        </table>
    </div>

    <script type="text/javascript" src="{{ url('templates/backend') }}/js/core/jquery.3.2.1.min.js "></script>
    <script type="text/javascript" src="{{ url('templates/backend') }}/js/core/popper.min.js"></script>
    <script type="text/javascript" src="{{ url('templates/backend') }}/js/core/bootstrap.min.js "></script>

    {{-- <script>
        window.print()
    </script> --}}
</body>

</html>