<div class="card-block table-responsive">
    <table class="table table-bordered" style="white-space: nowrap;">
        <thead>
            <tr>
                <th scope="col" class="text-center" rowspan="3" style="vertical-align: middle">No</th>
                <th scope="col" class="text-center" rowspan="3" style="vertical-align: middle" colspan="2">SASARAN
                    SKPD/INDIKATOR
                    KINERJA UTAMA</th>
                <th scope="col" class="text-center" rowspan="2" colspan="2" style="vertical-align: middle">TARGET
                    KINERJA & ANGGARAN</th>
                <th scope="col" class="text-center" colspan="8">KINERJA & ANGGARAN TRIWULAN</th>
                <th scope="col" class="text-center" style="vertical-align: middle" rowspan="3">CAPAIAN</th>
                <th scope="col" class="text-center" style="vertical-align: middle" rowspan="3">OTORISASI</th>
            </tr>
            <tr>
                <th class="text-center" colspan="2">TW I</th>
                <th class="text-center" colspan="2">TW II</th>
                <th class="text-center" colspan="2">TW III</th>
                <th class="text-center" colspan="2">TW IV</th>
            </tr>
            <tr>
                <th class="text-center">K</th>
                <th class="text-center">Rp.</th>
                <th class="text-center">K</th>
                <th class="text-center">Rp.</th>
                <th class="text-center">K</th>
                <th class="text-center">Rp.</th>
                <th class="text-center">K</th>
                <th class="text-center">Rp.</th>
                <th class="text-center">K</th>
                <th class="text-center">Rp.</th>
            </tr>
        </thead>
        <tbody>

            @php
            $no = 1;
            @endphp

            {{-- sasaran renstra --}}
            @forelse ($sasaran_renstras as $sasaran_renstra)
            <tr>
                <td colspan="15">
                    {{ $sasaran_renstra->name }}
                </td>
            </tr>

            {{-- iku --}}
            @foreach ($sasaran_renstra->iku as $iku)
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="form-inline">
                        {{ 'Indikator Kinerja Utama : ' . $iku->indikator }}
                        &nbsp;

                        {{-- edit --}}
                        @include('backend.v1.pages.monev.edit-iku')
                        &nbsp;

                    </div>
                </td>
                <td class="text-center"> {{ $iku->target .' '. $iku->satuan }} </td>
                <td class="text-center"> @currency($iku->pagu_target) </td>
                <td class="text-center">{{ $iku->tw_i .' '. $iku->satuan }}</td>
                <td class="text-center">@currency($iku->pagu_i)</td>
                <td class="text-center">{{ $iku->tw_ii .' '. $iku->satuan }}</td>
                <td class="text-center">@currency($iku->pagu_ii)</td>
                <td class="text-center">{{ $iku->tw_iii .' '. $iku->satuan }}</td>
                <td class="text-center">@currency($iku->pagu_iii)</td>
                <td class="text-center">{{ $iku->tw_iv .' '. $iku->satuan }}</td>
                <td class="text-center">@currency($iku->pagu_iv)</td>
                <td class="text-center">{{ $iku->capaian .' '. $iku->satuan }}</td>
                <td class="text-center">{{ $iku->otorisasi }}</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">-- Kendala : </td>
                <td colspan="2">
                    {{ $iku->kendala_i }}
                </td>
                <td colspan="2">
                    {{ $iku->kendala_ii }}
                </td>
                <td colspan="2">
                    {{ $iku->kendala_iii }}
                </td>
                <td colspan="2">
                    {{ $iku->kendala_iv }}
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">-- Solusi : </td>
                <td colspan="2">
                    {{ $iku->solusi_i }}
                </td>
                <td colspan="2">
                    {{ $iku->solusi_ii }}
                </td>
                <td colspan="2">
                    {{ $iku->solusi_iii }}
                </td>
                <td colspan="2">
                    {{ $iku->solusi_iv }}
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">-- Tindak Lanjut : </td>
                <td colspan="2">
                    {{ $iku->tindak_lanjut_i }}
                </td>
                <td colspan="2">
                    {{ $iku->tindak_lanjut_ii }}
                </td>
                <td colspan="2">
                    {{ $iku->tindak_lanjut_iii }}
                </td>
                <td colspan="2">
                    {{ $iku->tindak_lanjut_iv }}
                </td>
                <td colspan="2"></td>
            </tr>
            @endforeach
            {{-- iku berakhir --}}

            <tr class="bg-warning text-dark">
                <td colspan="15">PROGRAM INDIKATOR/KEGIATAN INDIKATOR/SUB KEGIATAN INDIKATOR</td>
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
                @php
                $pagu = 0;
                foreach ($program->sasaran_kegiatan as $sasaran_kegiatan) {
                foreach ($sasaran_kegiatan->kegiatan as $kegiatan) {
                foreach ($kegiatan->sub_kegiatan as $sub_kegiatan) {
                $pagu = $sub_kegiatan->pagu + $pagu;
                }
                }
                }
                @endphp
                <td class="text-center">@currency($pagu)</td>
                <td class="text-center">{{ $program_indikator->tw_i .' '. $program_indikator->satuan }}</td>
                <td class="text-center">@currency($program_indikator->pagu_i)</td>
                <td class="text-center">{{ $program_indikator->tw_ii .' '. $program_indikator->satuan }}</td>
                <td class="text-center">@currency($program_indikator->pagu_ii)</td>
                <td class="text-center">{{ $program_indikator->tw_iii .' '. $program_indikator->satuan }}</td>
                <td class="text-center">@currency($program_indikator->pagu_iii)</td>
                <td class="text-center">{{ $program_indikator->tw_iv .' '. $program_indikator->satuan }}</td>
                <td class="text-center">@currency($program_indikator->pagu_iv)</td>
                <td class="text-center">{{ $program_indikator->capaian .' '. $program_indikator->satuan }}</td>
                <td class="text-center">{{ $program->otorisasi }}</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">-- Kendala : </td>
                <td colspan="2">
                    {{ $program_indikator->kendala_i }}
                </td>
                <td colspan="2">
                    {{ $program_indikator->kendala_ii }}
                </td>
                <td colspan="2">
                    {{ $program_indikator->kendala_iii }}
                </td>
                <td colspan="2">
                    {{ $program_indikator->kendala_iv }}
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">-- Solusi : </td>
                <td colspan="2">
                    {{ $program_indikator->solusi_i }}
                </td>
                <td colspan="2">
                    {{ $program_indikator->solusi_ii }}
                </td>
                <td colspan="2">
                    {{ $program_indikator->solusi_iii }}
                </td>
                <td colspan="2">
                    {{ $program_indikator->solusi_iv }}
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">-- Tindak Lanjut : </td>
                <td colspan="2">
                    {{ $program_indikator->tindak_lanjut_i }}
                </td>
                <td colspan="2">
                    {{ $program_indikator->tindak_lanjut_ii }}
                </td>
                <td colspan="2">
                    {{ $program_indikator->tindak_lanjut_iii }}
                </td>
                <td colspan="2">
                    {{ $program_indikator->tindak_lanjut_iv }}
                </td>
                <td colspan="2"></td>
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
                @php
                $pagu = 0;
                foreach ($kegiatan->sub_kegiatan as $sub_kegiatan) {
                $pagu = $sub_kegiatan->pagu + $pagu;
                }
                @endphp
                <td class="text-center">@currency($pagu)</td>
                <td class="text-center">{{ $kegiatan_indikator->tw_i .' '. $kegiatan_indikator->satuan }}</td>
                <td class="text-center">@currency($kegiatan_indikator->pagu_i)</td>
                <td class="text-center">{{ $kegiatan_indikator->tw_ii .' '. $kegiatan_indikator->satuan }}</td>
                <td class="text-center">@currency($kegiatan_indikator->pagu_ii)</td>
                <td class="text-center">{{ $kegiatan_indikator->tw_iii .' '. $kegiatan_indikator->satuan }}</td>
                <td class="text-center">@currency($kegiatan_indikator->pagu_iii)</td>
                <td class="text-center">{{ $kegiatan_indikator->tw_iv .' '. $kegiatan_indikator->satuan }}</td>
                <td class="text-center">@currency($kegiatan_indikator->pagu_iv)</td>
                <td class="text-center">{{ $kegiatan_indikator->capaian .' '. $kegiatan_indikator->satuan }}</td>
                <td class="text-center">{{ $kegiatan->otorisasi }}</td>
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
                <td class="text-center">@currency($sub_kegiatan->pagu)</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->tw_i .' '. $sub_kegiatan_indikator->satuan }}</td>
                <td class="text-center">@currency($sub_kegiatan_indikator->pagu_i)</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->tw_ii .' '. $sub_kegiatan_indikator->satuan }}</td>
                <td class="text-center">@currency($sub_kegiatan_indikator->pagu_ii)</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->tw_iii .' '. $sub_kegiatan_indikator->satuan }}</td>
                <td class="text-center">@currency($sub_kegiatan_indikator->pagu_iii)</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->tw_iv .' '. $sub_kegiatan_indikator->satuan }}</td>
                <td class="text-center">@currency($sub_kegiatan_indikator->pagu_iv)</td>
                <td class="text-center">{{ $sub_kegiatan_indikator->capaian .' '. $sub_kegiatan_indikator->satuan }}
                </td>
                <td class="text-center">{{ $sub_kegiatan->otorisasi }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">-- Kendala : </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->kendala_i }}
                </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->kendala_ii }}
                </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->kendala_iii }}
                </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->kendala_iv }}
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">-- Solusi : </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->solusi_i }}
                </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->solusi_ii }}
                </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->solusi_iii }}
                </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->solusi_iv }}
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">-- Tindak Lanjut : </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->tindak_lanjut_i }}
                </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->tindak_lanjut_ii }}
                </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->tindak_lanjut_iii }}
                </td>
                <td colspan="2">
                    {{ $sub_kegiatan_indikator->tindak_lanjut_iv }}
                </td>
                <td colspan="2"></td>
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
                <td colspan="13" class="text-center">Kosong</td>
            </tr>
            @endforelse
            {{-- sasaran renstra berakhir --}}

        </tbody>
    </table>
</div>