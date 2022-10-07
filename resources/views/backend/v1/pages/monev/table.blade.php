<div class="card-block table-responsive">
    <table class="table table-bordered datatables">
        <thead>
            <tr>
                <th scope="col" class="text-center" rowspan="2" style="width: 10%; vertical-align: middle">No</th>
                <th scope="col" class="text-center" rowspan="2" style="vertical-align: middle" colspan="2">SASARAN
                    SKPD/INDIKATOR
                    KINERJA UTAMA</th>
                <th scope="col" class="text-center">TARGET</th>
                <th scope="col" class="text-center" colspan="4">TRIWULAN</th>
                <th scope="col" class="text-center" style="vertical-align: middle" rowspan="2">CAPAIAN</th>
            </tr>
            <tr>
                <th class="text-center">2022</th>
                <th class="text-center">TW I</th>
                <th class="text-center">TW II</th>
                <th class="text-center">TW III</th>
                <th class="text-center">TW IV</th>
            </tr>
        </thead>
        <tbody>

            @php
            $no = 1;
            @endphp

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
                <td>{{ $no++ }}</td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ 'IKU : ' . $iku->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.monev.edit-iku')
                        &nbsp;

                    </div>
                </td>
                <td class="text-center">{{ $iku->target .' '. $iku->satuan }}</td>
                <td class="text-center">{{ $iku->tw_i }}</td>
                <td class="text-center">{{ $iku->tw_ii }}</td>
                <td class="text-center">{{ $iku->tw_iii }}</td>
                <td class="text-center">{{ $iku->tw_iv }}</td>
                <td class="text-center">{{ $iku->capaian }}</td>
            </tr>

            @endforeach
            {{-- iku berakhir --}}

            <tr class="bg-warning text-dark">
                <td colspan="10">PROGRAM INDIKATOR/KEGIATAN INDIKATOR/SUB KEGIATAN INDIKATOR</td>
            </tr>

            @foreach ($sasaran_renstra->sasaran_program as $sasaran_program)
            @foreach ($sasaran_program->program as $program)

            {{-- program indikator --}}
            @foreach ($program->program_indikator as $program_indikator)
            {{-- isi --}}
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ 'Program Indikator : '. $program_indikator->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.monev.edit-program-indikator')
                        &nbsp;

                    </div>
                </td>
                <td class="text-center">{{ $program_indikator->target .' '. $program_indikator->satuan }}</td>
                <td class="text-center">{{ $program_indikator->tw_i }}</td>
                <td class="text-center">{{ $program_indikator->tw_ii }}</td>
                <td class="text-center">{{ $program_indikator->tw_iii }}</td>
                <td class="text-center">{{ $program_indikator->tw_iv }}</td>
                <td class="text-center">{{ $program_indikator->capaian }}</td>
            </tr>
            @endforeach

            @foreach ($program->sasaran_kegiatan as $sasaran_kegiatan)
            @foreach ($sasaran_kegiatan->kegiatan as $kegiatan)

            {{-- kegiatan indikator --}}
            @foreach ($kegiatan->kegiatan_indikator as $kegiatan_indikator)
            {{-- isi --}}
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ 'Kegiatan Indikator : '. $kegiatan_indikator->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.monev.edit-kegiatan-indikator')
                        &nbsp;

                    </div>
                </td>
                <td class="text-center">{{ $kegiatan_indikator->target .' '. $kegiatan_indikator->satuan }}</td>
                <td class="text-center">{{ $kegiatan_indikator->tw_i }}</td>
                <td class="text-center">{{ $kegiatan_indikator->tw_ii }}</td>
                <td class="text-center">{{ $kegiatan_indikator->tw_iii }}</td>
                <td class="text-center">{{ $kegiatan_indikator->tw_iv }}</td>
                <td class="text-center">{{ $kegiatan_indikator->capaian }}</td>
            </tr>
            @endforeach

            @foreach ($kegiatan->sub_kegiatan as $sub_kegiatan)

            {{-- sub kegiatan indikator --}}
            @foreach ($sub_kegiatan->sub_kegiatan_indikator as $sub_kegiatan_indikator)
            {{-- isi --}}
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ 'Sub Kegiatan Indikator : '. $sub_kegiatan_indikator->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.monev.edit-sub-kegiatan-indikator')
                        &nbsp;

                    </div>
                </td>
                <td class="text-center">{{ $sub_kegiatan_indikator->target .' '. $sub_kegiatan_indikator->satuan }}</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->tw_i }}</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->tw_ii }}</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->tw_iii }}</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->tw_iv }}</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->capaian }}</td>
            </tr>
            @endforeach

            @endforeach
            @endforeach
            @endforeach
            @endforeach
            @endforeach

            @empty
            <tr>
                <td></td>
                <td colspan="8" class="text-center">Kosong</td>
            </tr>
            @endforelse
            {{-- sasaran renstra berakhir --}}

        </tbody>
    </table>
</div>