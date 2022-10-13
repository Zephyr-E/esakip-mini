<div class="card-header">
    <h5>INDIKATOR KINERJA UTAMA</h5>
</div>

<div class="card-block">
    <div class="card-block table-responsive">
        <table class="table table-bordered datatables" style="white-space: nowrap">
            <thead>
                <tr>
                    <th scope="col" class="text-center" style="width: 10%">No</th>
                    <th scope="col" class="text-center">OTORISASI</th>
                    <th scope="col" class="text-center">INDIKATOR KINERJA UTAMA</th>
                    <th scope="col" class="text-center">TW I</th>
                    <th scope="col" class="text-center">TW II</th>
                    <th scope="col" class="text-center">TW III</th>
                    <th scope="col" class="text-center">TW IV</th>
                </tr>
            </thead>
            <tbody>

                {{-- iku --}}
                <?php $nomor = 1 ?>
                @foreach ($ikus as $iku)
                <tr>
                    <td>{{ $nomor++ }}</td>
                    <td>{{ $iku->otorisasi }}</td>
                    <td>{{ $iku->indikator }}</td>
                    {{-- TW I --}}
                    @if ( !is_null($iku->tw_i) && !is_null($iku->pagu_i) &&
                    !is_null($iku->kendala_i) && !is_null($iku->solusi_i) &&
                    !is_null($iku->tindak_lanjut_i) )
                    <td class="text-center">
                        <i class="fas fa-check fa-fw text-success"></i>
                    </td>
                    @else
                    <td class="text-center">
                        <i class="fas fa-times-circle fa-fw text-danger"></i>
                    </td>
                    @endif
                    {{-- TW II --}}
                    @if ( !is_null($iku->tw_ii) && !is_null($iku->pagu_ii) &&
                    !is_null($iku->kendala_ii) && !is_null($iku->solusi_ii) &&
                    !is_null($iku->tindak_lanjut_ii) )
                    <td class="text-center">
                        <i class="fas fa-check fa-fw text-success"></i>
                    </td>
                    @else
                    <td class="text-center">
                        <i class="fas fa-times-circle fa-fw text-danger"></i>
                    </td>
                    @endif
                    {{-- TW III --}}
                    @if ( !is_null($iku->tw_iii) && !is_null($iku->pagu_iii) &&
                    !is_null($iku->kendala_iii) && !is_null($iku->solusi_iii) &&
                    !is_null($iku->tindak_lanjut_iii) )
                    <td class="text-center">
                        <i class="fas fa-check fa-fw text-success"></i>
                    </td>
                    @else
                    <td class="text-center">
                        <i class="fas fa-times-circle fa-fw text-danger"></i>
                    </td>
                    @endif
                    {{-- TW IV --}}
                    @if ( !is_null($iku->tw_iv) && !is_null($iku->pagu_iv) &&
                    !is_null($iku->kendala_iv) && !is_null($iku->solusi_iv) &&
                    !is_null($iku->tindak_lanjut_iv) )
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

            </tbody>
        </table>
    </div>
</div>