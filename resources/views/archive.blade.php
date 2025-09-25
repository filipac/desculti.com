


<x-layout title="Desculti Archive">
  {{-- Hero (nudged title up by 40px) --}}
  @include('partials.hero', [
    'title' => '<span style="position:relative;top:-170px;">Desculti Archive</span>',
    'minHeight' => '40vh',
    'showButtons' => true
  ])

  {{-- Page content --}}
  <section class="s-content" style="padding:2rem 1rem;">
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
  </section>
</x-layout>

