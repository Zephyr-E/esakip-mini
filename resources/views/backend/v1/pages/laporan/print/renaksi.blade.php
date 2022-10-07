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
            font-size: 12px;
        }
        .sasaran-renstra {
            background: rgb(55, 161, 254);
        }
    </style>
</head>

<body>
    <h6 class="text-center"><b>Dokumen Monev</b></h6>
    <h6 class="text-center"><b>Dinas Perdagangan Kab. Tapin</b></h6>
    <div class="col-12">
        <div class="container">
            <div class="wrapper mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center" style="vertical-align: middle" rowspan="2" style="width: 10%">No</th>
                            <th scope="col" class="text-center" style="vertical-align: middle" rowspan="2" colspan="2">
                                SASARAN
                                SKPD/INDIKATOR
                                KINERJA UTAMA</th>
                            <th scope="col" class="text-center">TARGET</th>
                            <th scope="col" class="text-center" colspan="4">TRIWULAN</th>
                            <th scope="col" class="text-center">REALISASI</th>
                            <th scope="col" style="vertical-align: middle" class="text-center" rowspan="2">CAPAIAN</th>
                        </tr>
                        <tr>
                            <th class="text-center">2022</th>
                            <th class="text-center">TW I</th>
                            <th class="text-center">TW II</th>
                            <th class="text-center">TW III</th>
                            <th class="text-center">TW IV</th>
                            <th class="text-center">2022</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- sasaran renstra --}}
                        @forelse ($sasaran_renstras as $sasaran_renstra)
                        <tr >
                            <td colspan="10" class="sasaran-renstra">
                                <b>Sasaran SKPD : </b>{{ $sasaran_renstra->name }}
                            </td>
                        </tr>

                        {{-- iku --}}
                        @foreach ($sasaran_renstra->iku as $iku)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td colspan="2">
                                <div class="form-inline">
                                    {{ $iku->indikator }}
                                </div>
                            </td>
                            <td class="text-center">{{ is_null($iku->target) ? 0 : $iku->target }}</td>
                            <td class="text-center">{{ is_null($iku->tw_i) ? 0 : $iku->tw_i }}</td>
                            <td class="text-center">{{ is_null($iku->tw_ii) ? 0 : $iku->tw_ii }}</td>
                            <td class="text-center">{{ is_null($iku->tw_iii) ? 0 : $iku->tw_iii }}</td>
                            <td class="text-center">{{ is_null($iku->tw_iv) ? 0 : $iku->tw_iv }}</td>
                            <td class="text-center">{{ is_null($iku->realisasi) ? 0 : $iku->realisasi }}</td>
                            <td class="text-center">{{ is_null($iku->capaian) ? 0 : $iku->capaian }}</td>
                        </tr>

                        @endforeach
                        {{-- iku berakhir --}}

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