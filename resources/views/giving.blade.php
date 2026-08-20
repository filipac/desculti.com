<x-layout title="Giving | Desculți">
  @include('partials.hero', [
    'title' => 'Giving',
    'minHeight' => '28vh',
    'showButtons' => false,
    'compact' => true,
  ])

  <section class="s-content s-giving" style="padding:3rem 1rem 6rem 1rem; background-color:#00294F; color:#ffffff;">
    <div class="row">
      <div class="column large-8 large-centered" style="color:#ffffff;">
        <h2 class="subhead" style="font-size:2.5rem;font-weight:bold;margin-bottom:1.5rem;color:#ffffff;">
          Susține Desculți Homecoming
        </h2>

        <p class="lead" style="margin-bottom:1.5rem;color:#ffffff;">
          Desculți Homecoming a crescut de-a lungul anilor prin oameni care au crezut în această lucrare și au ales să se implice — prin prezență, slujire, rugăciune și susținere financiară.
        </p>
        <p class="lead" style="margin-bottom:1.5rem;color:#ffffff;">
          Pregătirea unui eveniment de această amploare începe cu mult înainte de weekendul în care ne întâlnim. Logistica, echipamentele, producția media, materialele necesare organizării, dar mai ales pregătirea și servirea a 5 mese pentru peste 500 de persoane, la fiecare masă, înseamnă un efort considerabil și resurse pe măsură.
        </p>
        <p class="lead" style="margin-bottom:2rem;color:#ffffff;">
          Dacă dorești să fii parte din ceea ce facem, poți susține Desculți Homecoming printr-o donație. Fiecare contribuție, indiferent de valoare, ne ajută să pregătim evenimentul și să continuăm să dezvoltăm această lucrare pentru anii care urmează.
        </p>

        <div class="giving-actions" style="display:flex;flex-wrap:wrap;gap:1.2rem;margin-bottom:3.5rem;">
          @if(config('giving.stripe_onetime'))
            <a href="{{ config('giving.stripe_onetime') }}" target="_blank" rel="noopener noreferrer" class="btn btn--stroke giving-btn">
              Dăruiește o dată
            </a>
          @else
            <span class="btn btn--stroke giving-btn giving-btn--soon" aria-disabled="true">Dăruiește o dată — în curând</span>
          @endif
        </div>

        <h3 class="subhead" style="font-size:2.2rem;font-weight:bold;margin-bottom:1.5rem;color:#ffffff;">
          Puțin și cu consecvență
        </h3>

        <p class="lead" style="margin-bottom:1.5rem;color:#ffffff;">
          Pregătim și posibilitatea de susținere lunară recurentă, pentru cei care preferă un angajament simplu și constant:
        </p>
        <p class="lead" style="margin-bottom:1.5rem;font-weight:700;letter-spacing:.04em;color:#ffffff;">
          $5 · $10 · $15 · $25 · $50 pe lună
        </p>
        <p class="lead" style="margin-bottom:1.5rem;color:#ffffff;">
          Nu este nevoie ca o singură persoană să facă mult. Credem în puterea unei comunități în care mulți aleg să facă puțin, dar împreună și cu consecvență.
        </p>
        <p class="lead" style="margin-bottom:2rem;color:#ffffff;">
          Chiar și o contribuție lunară mică ne ajută să anticipăm cheltuielile, să planificăm din timp și să pregătim mai responsabil fiecare ediție Desculți Homecoming.
        </p>

        <div class="giving-actions" style="display:flex;flex-wrap:wrap;gap:1.2rem;margin-bottom:3.5rem;">
          @if(config('giving.stripe_monthly'))
            <a href="{{ config('giving.stripe_monthly') }}" target="_blank" rel="noopener noreferrer" class="btn btn-live giving-btn">
              Dăruiește lunar
            </a>
          @else
            <span class="btn btn-live giving-btn giving-btn--soon" aria-disabled="true">Dăruiește lunar — în curând</span>
          @endif
        </div>

        <p class="lead" style="margin-bottom:1.5rem;color:#ffffff;">
          Desculți există prin oameni și pentru oameni.
        </p>
        <p class="lead" style="margin-bottom:1.5rem;color:#ffffff;">
          Dacă această lucrare înseamnă ceva pentru tine și dorești să faci parte din continuarea ei, îți mulțumim pentru fiecare formă de susținere.
        </p>
        <p class="lead" style="margin-bottom:0;color:#ffffff;">
          Împreună nu susținem doar un weekend. Construim continuitatea Desculți.
        </p>
      </div>
    </div>
  </section>

  @include('partials.social')
</x-layout>
