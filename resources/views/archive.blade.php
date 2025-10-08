


<x-layout title="Desculti Archive">
  {{-- Hero (nudged title up by 40px) --}}
  @include('partials.hero', [
    'title' => '<span style="position:relative;top:-100px;">Desculti Archive</span>',
    'minHeight' => '40vh',
    'showButtons' => true
  ])

  {{-- Page content --}}
  <section class="s-content" style="padding:2rem 1rem 6rem 1rem;">
    <div class="row">
      <div class="column large-full">
        <h2 class="subhead" style="font-size:2.5rem;font-weight:bold;margin-bottom:1rem;">
          Desculți Homecoming 2024
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 w-full gap-4 items-start">
          <div><x-video id="eOLemOiVU_c" title="Sesiunea 1 - Vineri" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="2gTHESiExPQ" title="Sesiunea 2 - Sâmbătă" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="N-uKgwk1b0I" title="Sesiunea 3 - Sâmbătă" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="vWol8o3FnS4" title="Sesiunea 4 - Sâmbătă" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="N4_j4Ts1n9Y" title="Sesiunea 5 - Duminică" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="WGCHWuFw_fI" title="Sesiunea Specială" /></div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top:3rem;">
      <div class="column large-full">
        <h2 class="subhead" style="font-size:2.5rem;font-weight:bold;margin-bottom:1rem;">
          Desculți Homecoming 2023
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 w-full gap-4 items-start">
          <div><x-video id="nABu68SYjdI" title="Sesiunea 1 - Vineri" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="mV28T7jtwTo" title="Sesiunea 2 - Sâmbătă" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="p8SUY6lBdIM" title="Sesiunea 3 - Sâmbătă" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="fAR-IoW7ZJY" title="Sesiunea 4 - Sâmbătă" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="k8_uGXvCdG8" title="Sesiunea 5 - Duminică" /></div>
          <div class="mt-0 lg:mt-4"><x-video id="rjcBsxKUEDg" title="Sesiunea Specială" /></div>
        </div>
      </div>
    </div>

    <div class="row row-y-center about-content mt-12" style="margin-top: 6rem;">
        <div class="column">
            <h3 class="subhead" style="font-size: 2.5rem; font-weight: bold;">Desculți Homecoming 2022</h3>
        <div class="grid grid-cols-1 lg:grid-cols-3 w-full gap-4 items-center justify-center">
            <div>
                <x-video id="W09ksf5chsk" title="Sesiunea 1 - Vineri" /></div>
            <div class="mt-0 lg:mt-4">
                <x-video id="muyCOxcfB_Q" title="Sesiunea 2 - Sâmbătă" /></div>
            <div class="mt-0 lg:mt-4">
                <x-video id="5UzMtO0FKOo" title="Sesiunea 3 - Sâmbătă" /></div>
            <div class="mt-0 lg:mt-4">
                <x-video id="gA3gEV7s59E" title="Sesiunea 4 - Sâmbătă" /></div>
            <div class="mt-0 lg:mt-4">
                <x-video id="Pb_poWpvGpE" title="Sesiunea 5 - Duminică" /></div>
            <div class="mt-0 lg:mt-4">
                <x-video id="sSxM7R4hTAI" title="Sesiunea Specială" /></div> 
        </div>
        </div>
    </div>

  </section>

  @include('partials.social')

  
</x-layout>

