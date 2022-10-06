<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>RENJA</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ url('templates/backend') }}/css/bootstrap.min.css">
    <style>
        table {
            font-size: 12px;
        }

        .bg-blue {
            background: rgb(55, 161, 254);
        }

        .bg-orange {
            background: rgb(255, 234, 49)
        }
    </style>
</head>

<body>
    <h6 class="text-center"><b>Dokumen Renja</b></h6>
    <h6 class="text-center"><b>Dinas Perdagangan Kab. Tapin</b></h6>
    <div class="col-12">
        <div class="container">
            <div class="wrapper mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center" style="vertical-align: middle" rowspan="2"
                                style="width: 10%">No</th>
                            <th scope="col" class="text-center" style="vertical-align: middle" rowspan="2" colspan="2">
                                SASARAN
                                SKPD/PROGRAM/PROGRAM INDIKATOR</th>
                            <th scope="col" rowspan="2" style="vertical-align: middle" class="text-center">SATUAN</th>
                            <th scope="col" class="text-center">TARGET</th>
                            <th scope="col" rowspan="2" style="vertical-align: middle" class="text-center">PAGU</th>
                            <th scope="col" rowspan="2" style="vertical-align: middle" class="text-center">UNIT KERJA
                                PENANGGUNG JAWAB</th>
                        </tr>
                        <tr>
                            <th class="text-center">2022</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- sasaran renstra --}}
                        @forelse ($sasaran_renstras as $sasaran_renstra)
                        <tr>
                            <td colspan="10" class="bg-blue">
                                <b>Sasaran SKPD : </b>{{ $sasaran_renstra->name }}
                            </td>
                        </tr>

                        {{-- program --}}
                        @foreach ($sasaran_renstra->program as $program)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td colspan="5">
                                <b>Program : </b>{{ $program->name }}
                            </td>
                            <td class="text-center">{{ $program->otorisasi }}</td>
                        </tr>

                        {{-- program indikator --}}
                        @foreach ($program->program_indikator as $program_indikator)
                        <tr>
                            <td></td>
                            <td>
                                {{ $program_indikator->indikator }}
                            </td>
                            <td>{{ $program_indikator->satuan }}</td>
                            <td>{{ $program_indikator->target }}</td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        @endforeach
                        {{-- program indikator berakhir --}}








                        {{-- kegiatan --}}
                        @foreach ($program->kegiatan as $kegiatan)
                        <tr>
                            <td></td>
                            <td colspan="5">
                                <b>-- Kegiatan : </b>{{ $kegiatan->name }}
                            </td>
                            <td class="text-center">{{ $kegiatan->otorisasi }}</td>
                        </tr>

                        {{-- kegiatan indikator --}}
                        @foreach ($kegiatan->kegiatan_indikator as $kegiatan_indikator)
                        <tr>
                            <td></td>
                            <td>
                                -- {{ $kegiatan_indikator->indikator }}
                            </td>
                            <td>{{ $kegiatan_indikator->satuan }}</td>
                            <td>{{ $kegiatan_indikator->target }}</td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        @endforeach
                        {{-- kegiatan indikator berakhir --}}




                        {{-- sub kegiatan --}}
                        @foreach ($kegiatan->sub_kegiatan as $sub_kegiatan)
                        <tr>
                            <td></td>
                            <td colspan="5">
                                <b>--- Sub Kegiatan : </b>{{ $sub_kegiatan->name }}
                            </td>
                            <td class="text-center">{{ $sub_kegiatan->otorisasi }}</td>
                        </tr>

                        {{-- sub kegiatan indikator --}}
                        @foreach ($sub_kegiatan->sub_kegiatan_indikator as $sub_kegiatan_indikator)
                        <tr>
                            <td></td>
                            <td>
                                --- {{ $sub_kegiatan_indikator->indikator }}
                            </td>
                            <td>{{ $sub_kegiatan_indikator->satuan }}</td>
                            <td>{{ $sub_kegiatan_indikator->target }}</td>
                            <td></td>
                            <td colspan="2"></td>
                        </tr>
                        @endforeach
                        {{-- sub kegiatan indikator berakhir --}}

                        @endforeach
                        {{-- sub kegiatan kerakhir --}}




                        @endforeach
                        {{-- kegiatan berakhir --}}












                        @endforeach
                        {{-- program berakhir --}}

                        @empty
                        <tr>
                            <td></td>
                            <td colspan="9" class="text-center">Kosong</td>
                        </tr>
                        @endforelse
                        {{-- sasaran renstra berakhir --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ url('templates/backend') }}/js/core/jquery.3.2.1.min.js "></script>
    <script type="text/javascript" src="{{ url('templates/backend') }}/js/core/popper.min.js"></script>
    <script type="text/javascript" src="{{ url('templates/backend') }}/js/core/bootstrap.min.js "></script>

    {{-- <script>
        window.print()
    </script> --}}
</body>

</html>