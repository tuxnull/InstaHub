@extends('layouts.app')

@section('content')
<div id="username" style="display: none;">{{ Auth::user()->username }}</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('flash::message')
            <div class="card">
                <div class="card-body">

        <h1>{{ __('messages.ad.heading') }}</h1>
        <p><img src='/img/ad/_main.jpg' alt='happy women' referrerPolicy='no-referrer' style="width:100%" /></p>
        <p>
            {{ __('messages.ad.intro') }}
        </p>
        <p>&nbsp;</p>
        <h2>{{ __('Motivate People to Act') }}</h2>
            {!! __('messages.ad.howItWorks') !!}
        <p>&nbsp;</p>
        <h2>{{ __('Success Stories') }}</h2>
        <p>{{ __('messages.ad.reference') }}</p>
        <h3>Freizeitpark Gützlow - Immer ein Abenteuer wert!</h3>
        <p><img src='/img/ad/freizeitpark.jpg' alt='freizeitpark' referrerPolicy='no-referrer' style="width:100%" /></p>
        <p><em>Junge Männer suchen den Kick. Nur bei uns in Güterslow erlebst du den Kick! Seit 20 Jahren kein TÜV mehr. Hier wird auch das Karusell zur ultimativen Nervenkitzel.</em></p>
        <p class="text-right">Tom Strauß, CEO</p>
        <h3>Ivo</h3>
        <p><img src='/img/ad/maze3.jpg' alt='maze3'  style="width:100%"/></p>
        <p><em>Wer ein Maze 3 hat braucht keinen anderes Gerät mehr. Daher sprechen wir primär Nutzer an, welche noch ohne Smartphone im Internet surfen.</em></p>
        <p class="text-right">Chantelle Puckett, International Sales Force bei Ivo</p>
        <h3>princess - dein Shoppingpalast</h3>
        <p><img src='/img/ad/princess.jpg' alt='princess' style="width:100%" /></p>
        <p><em>Unsere Zielgruppe sind junge Frauen. Genau diese anspruchsvolle Zielgruppe finden wir hier.</em></p>
        <p class="text-right">Ute Fink, Public Relation</p>
        <h3>Oodel - Besser als Petersilie</h3>
        <p><img src='/img/ad/reinehaut.jpg' alt='reinehaut' style="width:100%" /></p>
        <p><em>72% aller Teenies haben zeitweise Probleme mit unreiner Haut. Da können wir helfen.</em></p>
        <p class="text-right">Ulrich Fürst, Chief of Administration</p>
        <h3>Bergalmen e.V.</h3>
        <p><img src='/img/ad/bergalm.jpg' alt='bergalm' style="width:100%" /></p>
        <p><em>Oft sind nur die Bergalmen in Hochgebirgen bekannt. Der Bergalmen e.V. macht sich dafür stark, dass auch die in Mittelgebirgen und Großstädten beachtet werden. Gemeinsam werben wir bei Naturbegeisterten für unsere bodenständigen Unterkünfte.</em></p>
        <p class="text-right">Dietmar Heidenreich, Vorstandsvorsitzender </p>
        <h3>Truti - Dein Ferienspaß am Meer ;-)</h3>
        <p><img src='/img/ad/sommerferien.jpg' alt='sommerferien' style="width:100%" /></p>
        <p><em>Jeder mag Urlaub. Egal ob Schüler, Erwachsene, Renter oder unser Karnickel Gerd. Unser Motte: Meer ist mehr.</em> </p>
        <p class="text-right">Laura Kaiser, Head of Sales</p>
        <h3>Burgerhaus</h3>
        <p><img src='/img/ad/brokkoli.jpg' alt='brokkolie' style="width:100%" /></p>
        <p><em>Burgerhaus ist ein neues Fastfood-Restaurant in jeder großen Stadt. Wir möchten den Kunden neugierig auf neues Essen machen. Es muss nicht immer Sellerie sein.</em> </p>
        <p class="text-right">Alexander Wirtz, Burgermeister</p>
        <h3>Andromeda Publishing Ltd</h3>
        <p><img src='/img/ad/smoothie.jpg' alt='smoothie' style="width:100%" /></p>
        <p><em>Als Offshore-Firma in Panama, suchen wir einen Weg im deutschen Markt wertvollen Content in Buchform anzubieten. Wir sind sehr gut.</em> </p>
        <p class="text-right">Bernd Herrmann, Founder and Head of Service</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
