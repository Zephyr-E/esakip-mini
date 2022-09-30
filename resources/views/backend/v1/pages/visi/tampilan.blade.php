<div class="card-block accordion-block color-accordion-block">
    <div class="color-accordion" id="color-accordion">

        {{-- ambil visi yang aktif --}}
        @forelse ($visis->where('aktif', 1) as $visi)
        <div class="accordion-desc text-center">
            <h6>
                {{ $visi->name }}
            </h6>
            <h6>
                {{ $visi->tahun_awal . '-' . $visi->tahun_akhir }}
            </h6>
        </div>

        {{-- query semua misi --}}
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
        {{-- misi berakhir --}}

        @empty
        <div class="accordion-desc text-center">
            <h6>
                Visi & Misi Kosong
            </h6>
        </div>
        @endforelse
        {{-- visi berakhir --}}

    </div>
</div>