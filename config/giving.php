<?php

return [

    /*
    | Stripe Payment Links from the Dashboard (Payment links → Create).
    | Leave empty until the committee account is live; the page then shows “în curând”.
    */
    'stripe_onetime' => env('GIVING_STRIPE_ONETIME'),
    'stripe_monthly' => env('GIVING_STRIPE_MONTHLY'),

];
