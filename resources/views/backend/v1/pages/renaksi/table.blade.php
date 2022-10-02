<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" rowspan="2" style="width: 10%">No</th>
                <th scope="col" class="text-center" rowspan="2" class="text-center" colspan="2">SASARAN SKPD/INDIKATOR
                    KINERJA UTAMA</th>
                <th scope="col" class="text-center">TARGET</th>
                <th scope="col" class="text-center" colspan="4">TRIWULAN</th>
                <th scope="col" class="text-center">REALISASI</th>
                <th scope="col" class="text-center" rowspan="2">CAPAIAN</th>
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
            <tr>
                <td colspan="10">
                    {{ $sasaran_renstra->name }}
                </td>
            </tr>

            {{-- iku --}}
            @foreach ($sasaran_renstra->iku as $iku)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ $iku->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.renaksi.edit')
                        &nbsp;

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