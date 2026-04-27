@extends('layouts.app')
@section('title', __('Opći uvjeti'))
@section('content')
    <div>
        <div style="height: 100px"></div>
        <style>
            .h5-title {
                font-size: 15px;
                font-weight: 600;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;


            }

            .p-text {
                /* font-family: Georgia, 'Times New Roman', Times, serif; */
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 15px;
            }

            .p-text a,
            ul li a {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 15px;
                text-decoration: underline;
                color: #0000EE;
            }

            .li-list {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 15px;
                margin: 0;
                padding: 0;
                list-style: none;
            }

            br {
                margin-bottom: 8px !important;
            }
        </style>
        <div class="container my-5">
            <div class="terms-container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="shadow-sm p-3 rounded bg-white">
                            <section class="mb-3">
                                <h5 class="h5-title">Dostava</h5>
                                <p class="p-text">
                                    Na našem webshopu možete naručiti bilo koju količinu mesa i mi ćemo Vam je dostaviti
                                    kurirskom službom (cijela Hrvatska, Slovenija).<br></br>

                                    Meso se isporučuje svježe vakumirano, u termo kutijama hlađenim ledenim gelom koji
                                    garantira održavanje hladnog lanca u dostavi hrane. a za Italiju se dostavlja sa frigo
                                    transportom.

                                    Narudžbe zaprimljene od nedjelje do srijede u 12 sati idu u isporuku isti tjedan do
                                    petka. Narudžbe zaprimljene nakon toga idu u isporuku sljedeći tjedan. Nakon slanja,
                                    paket stiže na vašu adresu unutar 24 sata.

                                    Troškovi dostave
                                    HRVATSKA

                                    Cijena dostave u slučaju plaćanja pouzećem je 10,00 eura (bez obzira na iznos narudžbe).

                                    Cijena dostave u slučaju kartičnog plaćanja za narudžbe do 100,00 eura je 10,00 eura, a
                                    za narudžbe iznad 100 eura – dostava je BESPLATNA.

                                    SLOVENIJA

                                    Cijena dostave za Sloveniju u slučaju plaćanja pouzećem je 15,00 eura (bez obzira na
                                    iznos narudžbe).

                                    Cijena dostave za Sloveniju u slučaju kartičnog plaćanja za narudžbe do 100,00 eura je
                                    15,00 eura, a za narudžbe iznad 100 eura – dostava je BESPLATNA.

                                    OSOBNO PREUZIMANJE

                                    Svoje narudžbe možete podići i osobno na našim lokacijama u Velikoj Gorici i Karlovcu.
                                    Proizvodi će biti spremni u roku od 24 sata od zaprimanja narudžbe. Obavijest da je vaš
                                    paket spreman dobiti ćete pozivom ili porukom.

                                    Odabirom opcije Osobno preuzimanje ostvarujete 10% popusta na ukupnu kupovinu.

                                    📍Poštanska ul. 1b, 10410, Velika Gorica

                                    📍Donja Švarča 79c, 47000, Karlovac

                                    Kako izgleda tijek dostave?
                                    Nakon rezanja svi naši komadi mesa odmaraju na temperaturama do 4°C. Idealno odležani
                                    pakiraju se u vakuum ambalažu kako bi u potpunosti zadržali kvalitetu okusa.

                                    Zaprimili smo vašu narudžbu i bacamo se na pakiranje! Ali prije toga kontaktirali smo
                                    dostavnu službu i najavili vaš paket.

                                    Komad koji ste odabrali i naručili za dostavu pakira se u prikladnu ambalažu koja će
                                    osigurati da meso do vas stigne hladno. Vanjska kutija iznutra se oblaže savršeno
                                    iskrojenim stiropor pločama koje imaju za zadatak zadržati odgovarajuću temperaturu. U
                                    tako obloženu kutiju umeće se nova kutija u koju dolazi rashlađeno meso i ledeni gel
                                    koji će unutarnju kutiju i meso u njoj održavati hladnom.

                                    Dostavna služba preuzima meso.

                                    Meso putuje.

                                    Ding-dong. 🔔 Meso je pred vašim vratima. 24 sata od slanja. Hladno.

                                    Spremni za narudžbu?
                                    Trgovina >>
                                </p>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
