<div class="card-block accordion-block color-accordion-block">
    <div class="color-accordion" id="color-accordion">

        @if (count($visi_misis->where('aktif', 1)) > 0)
        <div class="accordion-desc text-center">
            <h6>
                {{ $visi_misis[0]->name }}
            </h6>
        </div>
        @forelse ($visi_misis[0]->misi->sortBy('nomor') as $misi)
        <div class="accordion-desc">
            <p>
                {{ $misi->nomor . ". ". $misi->name }}
            </p>
        </div>
        @empty
        <div class="accordion-desc">
            <p>
                Kosong
            </p>
        </div>
        @endforelse
        @else
        <div class="accordion-desc text-center">
            <h6>
                Misi Kosong
            </h6>
        </div>
        @endif
    </div>
</div>