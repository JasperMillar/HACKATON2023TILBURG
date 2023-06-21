@extends('layouts.app-layout')
@extends('layouts.nav')

@section('content')
    <div class="flex justify-center items-center pt-20">


        <form action="{{ route('rekenmachine.store') }}" method="POST">
            @csrf
            <label class="text-3xl font-bold"> Hier kunt u zien of u mogelijk recht heeft op bijzondere bijstand</label><br><br>
            <p class="text-gray-500 mb-12 max-w-md">
                Vul dit formelier in en dan kunt u zien of u mogelijk recht heeft.
                Vul alle informatie in zo dat we een duidelijk uitslag aan u kunnen geven of u recht heeft.
                Hierna zou u een link krijgen van de website van gemeente tilburg.
                Met nog extra informatie en een formelier waar u alles officieel kan invullen om de aanvraag echt te maken.
            </p>
            <label class="text-3xl font-bold"> Heeft u thuiswoonende kinderen?</label><br>
            <label>Ja</label>
            <input type="radio" name="kinderen" value="ja">
            <br>
            <label>Nee</label>
            <input type="radio" name="kinderen" value="nee">
            <br>
            <br>
            <label class="text-3xl font-bold">Woont u samen met een partner?</label><br>
            <label>Ja</label>
            <input type="radio" name="partner" value="ja">
            <br>
            <label>Nee</label>
            <input type="radio" name="partner" value="nee">
            <br>
            <br>
            <label class="text-3xl font-bold">Wat is uw vermogen</label><br>
            <label class="text-gray-500 mb-12 max-w-md">
                Dit is u totaal aantal vermogen bijvoorbeeld auto of spaargeld
            </label><br>
            <input type="text" name="vermogen" class=" border-2 rounded border-black">
            <br>
            <br>
            <label class="text-3xl font-bold">Wat is uw Neto inkomen</label><br>
            <label class="text-gray-500 mb-12 max-w-md">
                Dit is zonder vakantie geld
            </label>
            <br>
            <input type="text" name="inkomen" class=" border-2 rounded border-black">
            <br>
            <br>
            <button class="px-4 py-2 text-white bg-blue-800 rounded text-3xl font-bold">Uitvoeren</button>
        </form>
    </div>
@endsection
