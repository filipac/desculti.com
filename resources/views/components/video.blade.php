@props(['id' => '', 'title' => ''])
<div class="{{ $attributes->class('') }}">
    <h4 class="text-white uppercase font-bold text-center">
        {{ $title }}
    </h4>
    <div class="flex justify-center mt-3">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
