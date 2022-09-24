<div class="card-block accordion-block color-accordion-block">
    <div class="color-accordion" id="color-accordion">

        @forelse ($visis->where('aktif', 1) as $visi)
        <div class="accordion-desc text-center">
            <h6>
                {{ $visi->name }}
            </h6>
            <h6>
                {{ $visi->tahun_awal . '-' . $visi->tahun_akhir }}
            </h6>
        </div>
        @forelse ($visi->misi->sortBy('nomor') as $misi)
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