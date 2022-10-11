<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>IKU</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ url('templates/backend') }}/css/bootstrap.min.css">
    <style>
        table {
            font-size: 12px
        }

        .sasaran-renstra {
            background: rgb(55, 161, 254);
        }
    </style>
</head>

<body>
    <h6 class="text-center"><b>Dokumen IKU</b></h6>
    <h6 class="text-center"><b>Dinas Perdagangan Kab. Tapin</b></h6>
    <div class="col-12">
        <div class="container">
            <div class="wrapper mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col" colspan="3">SASARAN SKPD/INDIKATOR KINERJA UTAMA</th>
                            <th scope="col">OTORISASI</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- sasaran renstra --}}
                        @forelse ($sasaran_renstras as $sasaran_renstra)
                        <tr class="sasaran-renstra">
                            <td colspan="5" style="font-weight: bold">
                                {{ strtoupper($sasaran_renstra->name) }}
                            </td>
                        </tr>

                        {{-- iku --}}
                        @foreach ($sasaran_renstra->iku as $iku)
                        <tr>
                            <td></td>
                            <td colspan="3">
                                <div class="form-inline">
                                    <b>Indikator Kinerja Utama {{ $loop->iteration }}</b> {{ ': '.
                                    $iku->indikator }}
                                </div>
                            </td>
                            <td>{{ $iku->otorisasi }}</td>
                        </tr>

                        @endforeach
                        {{-- iku berakhir --}}

                        @empty
                        <tr>
                            <td></td>
                            <td colspan="5" class="text-center">Kosong</td>
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

    <script>
        window.print()
    </script>
</body>

</html>