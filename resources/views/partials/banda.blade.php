{{-- ============================== LIFESTYLE BAND (reusable) ==============================
     Params: id, img, side ('left'|'right' = image side), eyebrow, titulo (HTML), texto, cta? --}}
@php $imgRight = ($side ?? 'left') === 'right'; @endphp
<section @if(!empty($id)) id="{{ $id }}" @endif class="bg-sand-50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            <div class="reveal overflow-hidden rounded-3xl shadow-xl shadow-ink/10 {{ $imgRight ? 'lg:order-2' : '' }}">
                <img src="{{ asset('images/' . $img) }}" alt="{{ $eyebrow }}" loading="lazy"
                    class="aspect-[4/3] w-full object-cover">
            </div>
            <div class="reveal-group {{ $imgRight ? 'lg:order-1' : '' }}">
                <p class="eyebrow text-gold-500">{{ $eyebrow }}</p>
                <h2 class="display mt-5 text-4xl font-light text-ink sm:text-5xl">{!! $titulo !!}</h2>
                <p class="mt-6 text-lg leading-relaxed text-ink-soft">{{ $texto }}</p>
                @if (!empty($cta))
                    <a href="{{ $cta['href'] }}" class="eyebrow mt-8 inline-flex items-center justify-center rounded-full border border-ink/20 px-7 py-3.5 text-[0.65rem] text-ink transition-colors hover:border-ink hover:bg-ink hover:text-sand-50">{{ $cta['label'] }}</a>
                @endif
            </div>
        </div>
    </div>
</section>
