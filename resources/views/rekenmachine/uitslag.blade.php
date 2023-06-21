@extends('layouts.app-layout')
@extends('layouts.nav')

@section('content')
    @php
        $maxvermogen = 0;
        $maxinkomen = 0;
        $recht = "";

        if($uitslag->kinderen == "ja"){
            $maxvermogen = 15210;
            $maxinkomen = 1752.49;
        }
        else if ($uitslag->partner == "ja") {
            $maxvermogen = 15210;
            $maxinkomen = 1947.22;
        }
        else {
            $maxvermogen = 7605;
            $maxinkomen = 1363.06;

        }

        if ($uitslag->vermogen <= $maxvermogen && $uitslag->inkomen <= $maxinkomen) {
            $recht = "U heeft mogelijk recht op bijzondere bijstand";
        }
        else {
            $recht = "U heeft waarschijnlijk geen recht op bijzondere bijstand";
        }
    @endphp

    <div class="flex justify-center items-center pt-20 text-2xl font-bold">
        {{$recht}}
        <br>
        Voor extra informatie ga naar
        <br>
    </div>
    <div class=" flex justify-center items-center text-2xl text-blue-500 hover:underline">
    <a href="https://www.tilburg.nl/inwoners/laag-inkomen/bijzondere-bijstand/" >bijzondere bijstand</a>
    </div>
@endsection
