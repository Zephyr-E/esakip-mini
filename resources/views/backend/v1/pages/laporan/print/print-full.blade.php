<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>monev</title>
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

        .sasaran-program {
            background: rgba(157, 206, 248, 0.723);
        }

        .sasaran-kegiatan {
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
                        PROGRAM/KEGIATAN/SUB KEGIATAN
                    </th>
                    <th scope="col" class="text-center" style="vertical-align: middle" rowspan="2">
                        INDIKATOR KINERJA UTAMA (IKU)
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

                {{-- data sasaran program, program, program indikator dibawah ini hanya akan tampil ketika program
                indikator nya sudah diisi --}}
                {{-- sasaran renstra --}}
                @php
                $no = 1;
                @endphp
                @foreach ($sasaran_renstras as $sasaran_renstra)
                {{-- sasaran program --}}
                @foreach ($sasaran_renstra->sasaran_program as $sasaran_program)
                {{-- program --}}
                @foreach ($sasaran_program->program as $program)
                {{-- program indikator --}}
                @foreach ($program->program_indikator as $program_indikator)
                <tr class="sasaran-program">
                    <td rowspan="4">{{ $no++ }}</td>
                    <td rowspan="4">{{ $sasaran_program->name }}</td>
                    <td rowspan="4">{{ $program->name }}</td>
                    <td>{{ $program_indikator->indikator }}</td>
                    <td class="text-center">{{ $program_indikator->target .' '. $program_indikator->satuan }}</td>
                    <td class="text-center">{{ $program_indikator->tw_i }}</td>
                    <td class="text-center">{{ $program_indikator->tw_ii }}</td>
                    <td class="text-center">{{ $program_indikator->tw_iii }}</td>
                    <td class="text-center">{{ $program_indikator->tw_iv }}</td>
                    <td class="text-center">{{ $program_indikator->capaian }}</td>
                    <td rowspan="4" class="text-center">{{ $program->otorisasi }}</td>
                </tr>
                <tr class="sasaran-program">
                    <td>KENDALA</td>
                    <td colspan="6">{{ $program->kendala }}</td>
                </tr>
                <tr class="sasaran-program">
                    <td>SOLUSI</td>
                    <td colspan="6">{{ $program->solusi }}</td>
                </tr>
                <tr class="sasaran-program">
                    <td>TINDAK LANJUT</td>
                    <td colspan="6">{{ $program->tindak_lanjut }}</td>
                </tr>
                @endforeach
                {{-- program indikator berakhir --}}

                {{-- sasaran kegiatan --}}
                @foreach ($program->sasaran_kegiatan as $sasaran_kegiatan)
                {{-- kegiatan --}}
                @foreach ($sasaran_kegiatan->kegiatan as $kegiatan)
                {{-- kegiatan indikator --}}
                @foreach ($kegiatan->kegiatan_indikator as $kegiatan_indikator)
                <tr class="sasaran-kegiatan">
                    <td></td>
                    <td>{{ $sasaran_kegiatan->name }}</td>
                    <td>{{ $kegiatan->name }}</td>
                    <td>{{ $kegiatan_indikator->indikator }}</td>
                    <td class="text-center">{{ $kegiatan_indikator->target .' '. $kegiatan_indikator->satuan }}</td>
                    <td class="text-center">{{ $kegiatan_indikator->tw_i }}</td>
                    <td class="text-center">{{ $kegiatan_indikator->tw_ii }}</td>
                    <td class="text-center">{{ $kegiatan_indikator->tw_iii }}</td>
                    <td class="text-center">{{ $kegiatan_indikator->tw_iv }}</td>
                    <td class="text-center">{{ $kegiatan_indikator->capaian }}</td>
                    <td class="text-center">{{ $kegiatan->otorisasi }}</td>
                </tr>
                @endforeach
                {{-- kegiatan indikator berakhir --}}

                {{-- sub kegiatan --}}
                @foreach ($kegiatan->sub_kegiatan as $sub_kegiatan)
                {{-- sub kegiatan indikator --}}
                @foreach ($sub_kegiatan->sub_kegiatan_indikator as $sub_kegiatan_indikator)
                <tr>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                    <td rowspan="4">{{ $sub_kegiatan->name }}</td>
                    <td>{{ $sub_kegiatan_indikator->indikator }}</td>
                    <td class="text-center">{{ $sub_kegiatan_indikator->target .' '. $sub_kegiatan_indikator->satuan }}
                    </td>
                    <td class="text-center">{{ $sub_kegiatan_indikator->tw_i }}</td>
                    <td class="text-center">{{ $sub_kegiatan_indikator->tw_ii }}</td>
                    <td class="text-center">{{ $sub_kegiatan_indikator->tw_iii }}</td>
                    <td class="text-center">{{ $sub_kegiatan_indikator->tw_iv }}</td>
                    <td class="text-center">{{ $sub_kegiatan_indikator->capaian }}</td>
                    <td rowspan="4" class="text-center">{{ $sub_kegiatan->otorisasi }}</td>
                </tr>
                <tr>
                    <td>KENDALA</td>
                    <td colspan="6">{{ $sub_kegiatan->kendala }}</td>
                </tr>
                <tr>
                    <td>SOLUSI</td>
                    <td colspan="6">{{ $sub_kegiatan->solusi }}</td>
                </tr>
                <tr>
                    <td>TINDAK LANJUT</td>
                    <td colspan="6">{{ $sub_kegiatan->tindak_lanjut }}</td>
                </tr>
                @endforeach
                {{-- sub kegiatan indikator berakhir --}}
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