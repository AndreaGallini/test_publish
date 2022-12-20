@extends('layouts.app')

<body>
    <div class="container">
        <div class="top">


            <h1>Boolean Station</h1>
            <div class="tabellone_row">
                <h3 class="left">Stazione di arrivo , Codice treno</h3>
                <h3 class="center">Orario Partenza</h3>
                <h3 class="right">Status</h3>
            </div>
            <div class="tabellone_orari">

                @foreach ($trains as $train)
                    <div class="orari">

                        <section class="left">{{ $train->stazione_arrivo }} , {{ $train->codice_treno }}</section>
                        <section class="center">{{ $train->ora_partenza }}</section>
                        <section class="right">
                            @if ($train->status == 1)
                                <div class="in_orario"></div>
                            @elseif ($train->status == 0)
                                <div class="in_ritardo"></div>
                            @endif
                        </section>
                    </div>
                @endforeach

            </div>
        </div>


        @foreach ($trains as $train)
            <div class="train">
                <section class="sinistra">
                    <img src="{{ $train->img }}" alt="">
                </section>
                <section class="centro">
                    <p class="title"><span class="strong">Company:</span> {{ $train->company }}</p>
                    <p><span class="strong"> Orario di partenza :</span> {{ $train->ora_partenza }}</p>
                    <p><span class="strong">Orario di arrivo :</span> {{ $train->ora_arrivo }}</p>
                    <p><span class="strong"> Numero del treno :</span> {{ $train->codice_treno }}</p>
                    <p><span class="strong"> Numero di carrozze :</span> {{ $train->n_carrozze }}</p>
                </section>
                <section class="destra">
                    @if ($train->status == 1)
                        <h3>Il treno è in orario</h3>
                        <div class="in_orario"></div>
                    @elseif ($train->status == 0)
                        <h3>Il treno è in ritardo</h3>
                        <div class="in_ritardo"></div>
                    @endif
                </section>
            </div>
        @endforeach
    </div>
</body>
