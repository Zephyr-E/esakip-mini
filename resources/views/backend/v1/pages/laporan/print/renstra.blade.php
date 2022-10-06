<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>RENSTRA</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ url('templates/backend') }}/css/bootstrap.min.css">
    <style>
        table {
            font-size: 12px
        }

        .sasaran-rpjmd {
            background: rgb(55, 161, 254);
        }
    </style>
</head>

<body>
    <h6 class="text-center"><b>Dokumen Renstra</b></h6>
    <h6 class="text-center"><b>Dinas Perdagangan Kab. Tapin</b></h6>
    <div class="col-12">
        <div class="container">
            <div class="wrapper mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col" colspan="4">SASARAN RPJMD/TUJUAN SKPD/SASARAN SKPD</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- sasaran rpjmd --}}
                        @forelse ($sasaran_rpjmds as $sasaran_rpjmd)
                        <tr class="sasaran-rpjmd">
                            <td colspan="5" style="font-weight: bold">
                                {{ strtoupper($sasaran_rpjmd->name) }}
                            </td>
                        </tr>

                        {{-- tujuan skpd --}}
                        @foreach ($sasaran_rpjmd->tujuan_renstra as $tujuan_renstra)
                        <tr>
                            <td></td>
                            <td colspan="4">
                                <div class="form-inline">
                                    <b>{{ 'Tujuan SKPD '. $tujuan_renstra->nomor }}</b> {{ ': '.
                                    $tujuan_renstra->name }}
                                </div>
                            </td>
                        </tr>

                        {{-- sasaran skpd --}}

                        <tr>
                            <td></td>
                            <td colspan="4"><b>SASARAN STRATEGIS</b></td>
                        </tr>

                        @foreach ($tujuan_renstra->sasaran_renstra as $sasaran_renstra)
                        <tr>
                            <td></td>
                            <td colspan="4">
                                <div class="form-inline">
                                    <b>{{ ' -Sasaran SKPD '. $sasaran_renstra->nomor }}</b> {{ ': '.
                                    $sasaran_renstra->name }}
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        {{-- sasaran skpd berakhir --}}

                        @endforeach
                        {{-- tujuan skpd berakhir --}}

                        @empty
                        <tr>
                            <td></td>
                            <td colspan="4" class="text-center">Kosong</td>
                        </tr>
                        @endforelse
                        {{-- sasaran rpjmd berkahir --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ url('templates/backend') }}/js/core/jquery.3.2.1.min.js "></script>
    <script type="text/javascript" src="{{ url('templates/backend') }}/js/core/popper.min.js"></script>
    <script type="text/javascript" src="{{ url('templates/backend') }}/js/core/bootstrap.min.js "></script>

    <script>
        window.print()
    </script>
</body>

</html>