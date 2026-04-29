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
                                    Na našem webshopu možete naručiti bilo koju količinu proizvoda i mi ćemo Vam ih
                                    dostaviti kurirskom službom (cijela Hrvatska, Slovenija).
                                </p>
                                 <p class="p-text">
                                    Proizvodi se pakiraju po uvjetovanim standardima kvalitete te se isporučuju u adekvatnoj
                                    ambalaži.
                                </p>
                                 <p class="p-text">
                                    Narudžbe zaprimljene od nedjelje do srijede u 12 sati idu u isporuku isti tjedan do
                                    petka.
                                    Narudžbe zaprimljene nakon toga idu u isporuku sljedeći tjedan. Nakon slanja paket
                                    stiže na vašu adresu unutar 24 sata.
                                </p>
                                 <p class="p-text">
                                    Ako na zalihama prodavaonice iz koje se vrši dostava nema naručenog Proizvoda,
                                    Tallow skin care će o tome obavijestiti Kupca telefonski ili pisanim putem. Svi ostali
                                    naručeni Proizvodi isporučit će se Kupcu.
                                </p>
                                <h5 class="h5-title">
                                    Troškovi dostave
                                </h5>
                                <h5 class="h5-title">
                                    HRVATSKA
                                </h5>
                                 <p class="p-text">Naknada za dostavu za plaćanje pouzećem iznosi 3,00 €, bez obzira na iznos narudžbe.</p>
                                 <p class="p-text">Dostava je besplatna za narudžbe plaćene karticom u većem iznosu od 50 eur.</p>
                                <h5 class="h5-title">SLOVENIJA</h5>
                                 <p class="p-text">Naknada za dostavu za plaćanje pouzećem iznosi 3,00 €, bez obzira na iznos narudžbe.</p>
                                 <p class="p-text">Dostava je besplatna za narudžbe plaćene karticom u većem iznosu od 50 eur.</p>
                                <h5 class="h5-title">OSOBNO PREUZIMANJE</h5>
                                 <p class="p-text">Svoje narudžbe možete podići i osobno na našim lokacijama u Velikoj Gorici i Karlovcu.
                                    Proizvodi će biti spremni u roku od 24 sata od zaprimanja narudžbe. Obavijest da je vaš
                                    paket spreman dobiti ćete pozivom ili porukom.</p>
                                 <p class="p-text">Odabirom opcije Osobno preuzimanje ostvarujete 10% popusta na ukupnu kupovinu.</p>
                                 <p class="p-text">
                                    📍Poštanska ul. 1b, 10410, Velika Gorica<br>

                                    📍Donja Švarča 79c, 47000, Karlovac
                                </p>
                                <h5 class="h5-title">Preuzimanje</h5>
                                 <p class="p-text">
                                    Naručeni Proizvodi bit će složeni na način da se uobičajenom manipulacijom u
                                    transportu ne mogu oštetiti. Kupcu se savjetuje prije preuzimanja pregledati pošiljku, a
                                    eventualna vidljiva oštećenja odmah prijaviti te odbiti primiti oštećenu
                                    pošiljku.</br></br>
                                    Nakon isporuke robe nije moguće otkazivanje kupnje i povrat novca.
                                </p>


                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
