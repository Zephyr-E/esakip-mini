<div class="card-block accordion-block color-accordion-block">
    <div class="color-accordion" id="color-accordion">

        @forelse ($visi_misis->where('aktif', 1) as $visi_misi)
        <div class="accordion-desc text-center">
            <h6>
                {{ $visi_misi->name }}
            </h6>
            <h6>
                {{ $visi_misi->tahun_awal . '-' . $visi_misi->tahun_akhir }}
            </h6>
        </div>
        @forelse ($visi_misi->misi->sortBy('nomor') as $misi)
        <div class="accordion-desc">
            <p>
                {{ $misi->nomor . ". ". $misi->name }}
            </p>
        </div>
        @empty
        <div class="accordion-desc">
            <p>
                Misi Kosong
            </p>
        </div>
        @endforelse
        @empty
        <div class="accordion-desc text-center">
            <h6>
                Visi & Misi Kosong
            </h6>
        </div>
        @endforelse
    </div>
</div>