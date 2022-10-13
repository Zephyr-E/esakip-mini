<div class="card-header">
    <h5>SUB KEGIATAN INDIKATOR</h5>
</div>

<div class="card-block">
    <div class="card-block table-responsive">
        <table class="table table-bordered datatables" style="white-space: nowrap">
            <thead>
                <tr>
                    <th scope="col" class="text-center" style="width: 10%">No</th>
                    <th scope="col" class="text-center">OTORISASI</th>
                    <th scope="col" class="text-center">SUB KEGIATAN INDIKATOR</th>
                    <th scope="col" class="text-center">TW I</th>
                    <th scope="col" class="text-center">TW II</th>
                    <th scope="col" class="text-center">TW III</th>
                    <th scope="col" class="text-center">TW IV</th>
                </tr>
            </thead>
            <tbody>

                {{-- program --}}
                <?php $nomor = 1 ?>
                @foreach ($sub_kegiatans as $sub_kegiatan)
                @foreach ($sub_kegiatan->sub_kegiatan_indikator as $sub_kegiatan_indikator)
                <tr>
                    <td>{{ $nomor++ }}</td>
                    <td>{{ $sub_kegiatan->otorisasi }}</td>
                    <td>{{ $sub_kegiatan_indikator->indikator }}</td>
                    {{-- TW I --}}
                    @if ( !is_null($sub_kegiatan_indikator->tw_i) && !is_null($sub_kegiatan_indikator->pagu_i) &&
                    !is_null($sub_kegiatan_indikator->kendala_i) && !is_null($sub_kegiatan_indikator->solusi_i) &&
                    !is_null($sub_kegiatan_indikator->tindak_lanjut_i) )
                    <td class="text-center">
                        <i class="fas fa-check fa-fw text-success"></i>
                    </td>
                    @else
                    <td class="text-center">
                        <i class="fas fa-times-circle fa-fw text-danger"></i>
                    </td>
                    @endif
                    {{-- TW II --}}
                    @if ( !is_null($sub_kegiatan_indikator->tw_ii) && !is_null($sub_kegiatan_indikator->pagu_ii) &&
                    !is_null($sub_kegiatan_indikator->kendala_ii) && !is_null($sub_kegiatan_indikator->solusi_ii) &&
                    !is_null($sub_kegiatan_indikator->tindak_lanjut_ii) )
                    <td class="text-center">
                        <i class="fas fa-check fa-fw text-success"></i>
                    </td>
                    @else
                    <td class="text-center">
                        <i class="fas fa-times-circle fa-fw text-danger"></i>
                    </td>
                    @endif
                    {{-- TW III --}}
                    @if ( !is_null($sub_kegiatan_indikator->tw_iii) && !is_null($sub_kegiatan_indikator->pagu_iii) &&
                    !is_null($sub_kegiatan_indikator->kendala_iii) && !is_null($sub_kegiatan_indikator->solusi_iii) &&
                    !is_null($sub_kegiatan_indikator->tindak_lanjut_iii) )
                    <td class="text-center">
                        <i class="fas fa-check fa-fw text-success"></i>
                    </td>
                    @else
                    <td class="text-center">
                        <i class="fas fa-times-circle fa-fw text-danger"></i>
                    </td>
                    @endif
                    {{-- TW IV --}}
                    @if ( !is_null($sub_kegiatan_indikator->tw_iv) && !is_null($sub_kegiatan_indikator->pagu_iv) &&
                    !is_null($sub_kegiatan_indikator->kendala_iv) && !is_null($sub_kegiatan_indikator->solusi_iv) &&
                    !is_null($sub_kegiatan_indikator->tindak_lanjut_iv) )
                    <td class="text-center">
                        <i class="fas fa-check fa-fw text-success"></i>
                    </td>
                    @else
                    <td class="text-center">
                        <i class="fas fa-times-circle fa-fw text-danger"></i>
                    </td>
                    @endif
                </tr>
                @endforeach
                @endforeach

            </tbody>
        </table>
    </div>
</div>