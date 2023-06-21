@extends('layouts.app-layout')
@extends('layouts.nav')

@section('content')
    <div class="container my-24 px-6 mx-auto">

        <section class="mb-32 text-gray-800">
            <div class="grid lg:grid-cols-2 gap-4 lg:gap-x-12 lg:mb-0">
                <div class="mb-12 lg:mb-0">
                    <h2 class="text-3xl font-bold mb-6">Stress</h2>

                    <p class="text-gray-500 mb-12">
                        Bent u op zoek naar manieren om uw financiële situatie te verbeteren en minder stress te ervaren
                        aan het einde van de maand? Dan bent u op de juiste plaats! Bekijk onze 10 eenvoudige geldtips
                        voor werkende armen en ontdek hoe u slim kunt omgaan met uw geld om meer stabiliteit te bereiken.
                        Onze tips kunnen u helpen om uw financiën beter te beheren en uw geld langer mee te laten gaan.
                    </p>
                    <h2 class="text-3xl font-bold mb-6">Meer ondersteuning nodig?</h2>

                    <p class="text-gray-500 mb-12">
                        Heb je behoefte aan meer uitgebreide hulp? Ervaar je ook stress aan
                        het einde van de maand? Aarzel dan niet om contact op te nemen met een van onze professionals
                        voor persoonlijk advies.
                    </p>

                    <form>
                        <div class="form-group mb-6">
                            <input type="text"
                                   class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                   id="exampleInput7" placeholder="Naam" />
                        </div>
                        <div class="form-group mb-6">
                            <input type="email"
                                   class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                   id="exampleInput8" placeholder="Email" />
                        </div>
                        <div class="form-group mb-6">
            <textarea
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="exampleFormControlTextarea13" rows="3" placeholder="Bericht"></textarea>
                        </div>
                        <div class="form-group form-check text-center mb-6">
                            <input type="checkbox"
                                   class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                   id="exampleCheck87" checked />
                            <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Stuur mij een kopie van dit bericht
                            </label>
                        </div>
                        <button type="submit"
                                class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Verstuur
                        </button>
                    </form>
                </div>
                <div class="mb-6 md:mb-0">
                    <h2 class="text-3xl font-bold mb-6">De Geldtips</h2>

                    <p class="font-bold mb-4">Maak een begroting</p>
                    <p class="text-gray-500 mb-12">
                        Maak een overzicht van al je inkomsten en uitgaven om te weten hoeveel geld je hebt en waar het naartoe gaat.
                    </p>

                    <p class="font-bold mb-4">vermijd leningen</p>
                    <p class="text-gray-500 mb-12">
                        Probeer leningen te vermijden, omdat je uiteindelijk meer geld terug moet betalen dan je hebt geleend.
                    </p>

                    <p class="font-bold mb-4">
                        Bespaar op boodschappen</p>
                    <p class="text-gray-500 mb-12">
                        Koop voordeligere merken en koop alleen wat je nodig hebt. Maak ook een boodschappenlijstje om impulsaankopen te voorkomen.
                    </p>

                    <p class="font-bold mb-4">eet thuis</p>
                    <p class="text-gray-500 mb-12">
                        Ga minder vaak uit eten en kook thuis. Dit bespaart niet alleen geld, maar het is ook gezonder.
                    </p>

                    <p class="font-bold mb-4">Gebruik energiezuinige apparaten</p>
                    <p class="text-gray-500 mb-12">
                        Vervang oude, energieverslindende apparaten door energiezuinige alternatieven om je energierekening te verlagen.
                    </p>

                </div>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->
    </section>
    </div>

    @endsection

    </body>
