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
                                <h5 class="h5-title">Opći uvjeti</h5>
                                <p class="p-text">
                                    Ovim se uvjetima utvrđuje postupak naručivanja, plaćanja, isporuke te reklamacija
                                    proizvoda koji su ponuđeni na ovim stranicama. Tallow Skin Care j.d.o.o Internet
                                    stranice mogu se
                                    koristiti za Vašu privatnu upotrebu bezi kakvih naknada za korištenje, a prema sljedećim
                                    uvjetima i pravilima.</br></br>

                                    Tallow Skin Care j.d.o.o putem Online prodaje omogućuje kupnju cjelokupnog asortimana
                                    Proizvoda
                                    koji se nalazi u ponudi i na zalihi iz koje se Proizvod dostavlja pojedinom Kupcu, a
                                    prema adresi dostave Kupca.</br></br>

                                    Kupci pravne osobe podliježu primjeni važećeg Zakona o obveznim odnosima i Zakona o
                                    elektroničkoj trgovini te se na njih ne primjenjuje Zakon o zaštiti potrošača.</br></br>

                                    Sve cijene izražene su u službenoj valuti Republike Hrvatske i uključuju PDV. Proizvodi
                                    se isporučuju po Maloprodajnim cijenama važećim na dan naručivanja bez obzira na
                                    odabrani datum isporuke.</br></br>

                                    U slučaju sumnje na zlouporabu sa strane Kupca, Tallow Skin Care j.d.o.o zadržava pravo
                                    neisporuke
                                    narudžbe kao i raskida Ugovora u bilo kojem trenutku. Tallow Skin Care j.d.o.o zadržava
                                    pravo
                                    trenutno ukinuti bilo koje zaporke ili korisničke račune Kupca, odnosno Korisnika u
                                    slučaju bilo kakvog ponašanja Kupca/Korisnika koje Tallow Skin Care j.d.o.o prema svojoj
                                    diskrecijskoj ocjeni, smatra neprihvatljivim, kao i u svakom slučaju nepoštivanja ovih
                                    Općih uvjeta i pravila.</br></br>

                                    Postupak te uvjeti kupnje/prodaje Proizvoda putem online prodaje definirani su kroz
                                    sljedeće faze:</br></br>
                                </p>
                                <ul class="li-list">
                                    <li>Registracija</li>
                                    <li>Naručivanje</li>
                                    <li>Kupnja/ Plaćanje</li>
                                    <li>Dostava</li>
                                    <li>Preuzimanje</li>
                                    <li>Povrat/reklamacija</li>
                                    <li>Općenito</li>
                                </ul>
                            </section>
                            <section class="mb-3">
                                <h5 class="h5-title">Registracija</h5>
                                <p class="p-text">
                                    Registracija korisnika se vrši putem web stranica, prilikom čega će korisnik biti
                                    obvezan upisati određene osobne podatke i pristati na korištenje takvih osobnih
                                    podataka.</br></br>
                                    Nakon uspješne registracije, registrirani korisnik dobiva na korištenje korisničko ime i
                                    lozinku koji služe za autorizaciju korištenja Webtrgovine</br></br>
                                    Registracijom korisnik potvrđuje:</br>
                                    – da u cijelosti prihvaća ove opće uvjete;</br>
                                    – potpunost, točnost, istinitost i ažurnost osobnih podataka;</br></br>
                                    – da daje Tallow Skin Care j.d.o.o-u izričitu suglasnost da može sukladno odredbama
                                    Zakona o
                                    zaštiti osobnih podataka, obrađivati dane osobne podatke za potrebe vlastitih evidencija
                                    i pružanja drugih usluga, potrebe stvaranja baze podataka o kupcima, obavještavanja o
                                    novim proizvodima i uslugama.</br></br>
                                    Registrirani korisnik pristaje da se kupnja putem Web trgovine vrši na način da
                                    registrirani korisnik kupuje proizvode i usluge dostupne putem Web trgovine na način da
                                    ih bira na temelju slike i osnovnog opisa proizvoda.</br></br>

                                    Obavezujemo se pružati zaštitu osobnim podacima kupaca, na način da prikupljamo samo
                                    nužne, osnovne podatke o kupcima / korisnicima koji su nužniza ispunjenje naših obveza;
                                    informiramo kupce o načinu korištenja prikupljenih podataka, redovito dajemo kupcima
                                    mogućnost izbora o upotrebi njihovih podataka, uključujući mogućnost odluke žele li ili
                                    ne da se njihovo ime ukloni s lista koje se koriste za marketinške kampanje. Svi se
                                    podaci o korisnicima strogo čuvaju i dostupni su samo djelatnicima kojima su ti podaci
                                    nužni za obavljanje posla. Svi naši djelatnici i poslovni partneri odgovorni su za
                                    poštivanje načela zaštite privatnosti.</br></br>
                                </p>
                            </section>
                            <section class="mb-3">
                                <h5 class="h5-title">Naručivanje</h5>
                                <p class="p-text">
                                    Kupac naručuje proizvod ili proizvode putem elektronskog obrasca narudžbe. Kupcem se
                                    smatra svaka osoba koja elektronski naruči barem jedan proizvod, popuni tražene podatke
                                    i pošalje narudžbu. Sve cijene izražene su u hrvatskoj nacionalnoj valutu,
                                    Euro</br></br>


                                    Roba se naručuje elektronskim putem, pritiskom na određeni proizvod te spremanjem istog
                                    u košaricu.</br></br>

                                    Roba se smatra naručenom u trenutku kada kupac odabere te potvrdi način
                                    plaćanja.</br></br>

                                    Nakon izrade i potvrde narudžbe, na E-mail adresu dobiti ćete E-mail potvrdu da je
                                    narudžba zaprimljena od strane Tallow Skin Care j.d.o.o. Potvrda se generira automatski
                                    od strane
                                    servera te prosljeđuje Kupcu u trenutku potvrde narudžbe. U ovom trenutku smatra se da
                                    je ugovor o kupoprodaji za naručene artikle sklopljen te nadalje nije moguće mijenjati
                                    podatke ili narudžbu (dodavati artikle, mijenjati količine ili slično). U slučaju da
                                    želite promijeniti narudžbu ili podatke, obratite se našem Kontakt centru što je prije
                                    moguće, ali budite svjesni da je moguća promjena termina isporuke, ovisno o
                                    raspoloživosti.</br></br>

                                    Ako ne dobijete E-mail potvrdu da je narudžba zaprimljena od strane Tallow Skin Care
                                    j.d.o.o,
                                    molimo provjerite:</br></br>

                                    je li potvrda u Vašem Junk/Spam folderu, je li Vaš mailbox pun, nalaze li se Proizvodi u
                                    Vašoj košarici nakon prijave na Internet stranicu te u tom slučaju ponovite proces
                                    naručivanja.
                                </p>
                            </section>
                            <section class="mb-3">
                                <h5 class="h5-title">Plaćanje</h5>
                                <p class="p-text">
                                    Naručeni proizvodi ili usluge plaćaju se online jednom od kreditnih kartica: Mastercard,
                                    Maestro, Visa, Amex ili digital wallets (Apple Pay, Google Pay, Cash App Pay). Naručeni
                                    proizvodi pakiraju se na način da tokom uobičajene
                                    manipulacije ne budu oštećeni. Prilikom preuzimanja kupac je dužan provjeriti stanje
                                    pošiljke te u slučaju oštećenja odmah reklamirati proizvod dostavljaču (zaposleniku
                                    tvrtke koja vrši dostavu). Prodavatelj se odriče svake odgovornosti u vezi oštećenja
                                    koja mogu nastati prilikom dostave.</br></br>

                                    Ako kupac ne primi robu, ili obavijest o isporuci, nakon što je poslana, u očekivanom
                                    vremenu, kupac ima pravo o tome obavijestiti prodavatelj kako bi se poduzele radnje
                                    pronalaska pošiljke ili kako bi se poslala zamjenska pošiljka.</br></br>




                                </p>
                            </section>
                            <section class="mb-3">
                                <h5 class="h5-title">Sigurnost online plaćanja</h5>
                                <p class="p-text">
                                    Tallow-skincare.hr koristi Stripe za online plaćanja. Stripe je siguran sustav za
                                    internetsko plaćanje koji omogućuje plaćanja u stvarnom vremenu, kreditnim i debitnim
                                    karticama te drugim metodama plaćanja. Stripe osigurava kupcu i trgovcu siguran unos i
                                    prijenos podataka o kartici, što potvrđuje PCI DSS certifikat tvrtke Stripe. Stripe
                                    koristi 256-bitni SSL certifikat i kriptografski protokol TLS 1.2 kao najvišu razinu
                                    zaštite pri unosu i prijenosu podataka.
                                </p>
                            </section>
                            <section class="mb-3">
                                <h5 class="h5-title">Dostava</h5>
                                <p class="p-text">
                                    Proizvodi se pakiraju po uvjetovanim standardima kvalitete te se isporučuju u adekvatnoj
                                    ambalaži.</br></br>

                                    Narudžbe zaprimljene od nedjelje do srijede u 12 sati idu u isporuku isti tjedan do
                                    petka. Narudžbe zaprimljene nakon toga idu u isporuku sljedeći tjedan. Nakon slanja
                                    paket stiže na vašu adresu unutar 24 sata.</br></br>

                                    Ako na zalihama prodavaonice iz koje se vrši dostava nema naručenog Proizvoda,
                                    Tallow skin care će o tome obavijestiti Kupca telefonski ili pisanim putem. Svi ostali
                                    naručeni Proizvodi isporučit će se Kupcu.
                                </p>
                                <p class="p-text">
                                    <strong>
                                        Troškovi dostave
                                    </strong>
                                </p>

                                <h5 class="h5-title text-uppercase">HRVATSKA</h5>
                                <p class="p-text">
                                    Naknada za dostavu za plaćanje pouzećem iznosi 3,00 €, bez obzira na iznos
                                    narudžbe.</br></br>

                                    Dostava je besplatna za narudžbe plaćene karticom u većem iznosu od 50 eur.


                                </p>
                                <h5 class="h5-title text-uppercase">SLOVENIJA</h5>
                                <p class="p-text">
                                    Naknada za dostavu za plaćanje pouzećem iznosi 3,00 €, bez obzira na iznos
                                    narudžbe.</br></br>

                                    Dostava je besplatna za narudžbe plaćene karticom u većem iznosu od 50 eur.


                                </p>
                                <h5 class="h5-title text-uppercase">OSOBNO PREUZIMANJE</h5>
                                <p class="p-text">
                                    Svoje narudžbe možete podići i osobno na našim lokacijama u Velikoj Gorici i Karlovcu.
                                    Proizvodi će biti spremni u roku od 24 sata od zaprimanja narudžbe. Obavijest da je vaš
                                    paket spreman dobiti ćete pozivom ili porukom.</br></br>

                                    Odabirom opcije Osobno preuzimanje ostvarujete 10% popusta na ukupnu kupovinu.</br></br>
                                    Poštanska ulica 1b, 10410, Velika Gorica</br>
                                    Donja Švarča 79c, 47000, Karlovac



                                </p>

                            </section>
                            <section class="mb-3">
                                <h5 class="h5-title">Preuzimanje</h5>
                                <p class="p-text">
                                    Naručeni Proizvodi bit će složeni na način da se uobičajenom manipulacijom u transportu
                                    ne mogu oštetiti. Kupac se savjetuje prije preuzimanja pregledati pošiljku, a eventualna
                                    vidljiva oštećenja odmah prijaviti te odbiti primiti oštećenu pošiljku.</br></br>

                                    Nakon isporuke robe nije moguće otkazivanje kupnje i povrat novca.
                                </p>
                            </section>

                            <section class="mb-3">
                                <h5 class="h5-title">Reklamacije</h5>
                                <p class="p-text">
                                    Prodavatelj se obvezuje isporučiti proizvod koji je tehnički ispravan te odgovara opisu
                                    proizvoda navedenom na www.tallow-skincare.hr Slika koja ilustrira proizvod na Internet
                                    stranici ne mora odgovarati stvarnom izgledu proizvoda te kupac ne može reklamirati ovaj
                                    segment.</br></br>

                                    Prodavatelj nije odgovoran za eventualna oštećenja i ostale obveze koje se nalaze u
                                    domeni dostavljača (tvrtka koja obavlja poslove dostave proizvoda).</br></br>

                                    Povrat sredstava moguć je unutar roka za reklamacije, koji iznosi 7 dana od primitka
                                    narudžbe, pod uvjetom da je reklamacija opravdana.</br></br>

                                    U slučaju odustajanja od kupnje obavezno nas obavijestiti unutar 24 sata od kreiranja
                                    narudžbe da ne dođe do slanja paketa. U tom slučaju Vam vraćamo novac ako ste uplatili
                                    karticom. Ako ste odabrali plaćanje pouzećem onda u toj fazi nije do uplate ni došlo pa
                                    nema ni povrata. Nakon isporuke robe nije moguće otkazivanje kupnje i povrat
                                    novca.</br></br>

                                    Ako je reklamacija opravdana, povrat sredstava bit će isplaćen u cijelosti na račun koji
                                    kupac dostavi prodavatelju ili na račun s kojeg je narudžba uplaćena.</br></br>

                                    Nezadovoljni ste našom uslugom? Nezadovoljni ste isporučenim Proizvodom?</br></br>

                                    Obratite nam se s povjerenjem i Vaš ćemo prigovor/reklamaciju riješiti u najkraćem
                                    mogućem roku, a uslugu kojom ste nezadovoljni ćemo pokušati unaprijediti i poboljšati na
                                    Vaše zadovoljstvo.</br></br>

                                    Pisani prigovor možete uputiti putem e-maila na info@tallow-skincare.hr</br></br>

                                    Na isti način možete nam se obratiti i ako ste nezadovoljni našom uslugom.</br></br>

                                    Kako bi što brže mogli provjeriti narudžbu na koju imate prigovor, molimo da navedete
                                    broj narudžbe, broj računa te da navedete opisno na što se prigovor odnosi (npr. u
                                    slučaju reklamacije na hranu, molimo da navedete ili fotografirate Proizvod (ako se
                                    reklamacije može vizualno predočiti) te nam pošaljete lot oznaku i datum minimalne
                                    trajnosti („Upotrijebiti do“, „Najbolje upotrijebiti do (kraja)“ datum). Nakon
                                    zaprimljenog prigovora, poslat ćemo Vam potvrdu da smo isti zaprimili te ćemo Vam
                                    najkasnije u roku od 15 kalendarskih dana odgovoriti na prigovor (15 kalendarskih dana
                                    od dana kada smo zaprimili prigovor), sukladno odredbama važećeg Zakona o zaštiti
                                    potrošača.</br></br>
                                </p>
                            </section>
                            <section class="mb-3">
                                <h5 class="h5-title">Općenito</h5>
                                <p class="p-text">
                                    Usluge koje Vam pruža tallow-skincare.hr Internet prodavaonica ne uključuje troškove
                                    koje snosite koristeći računalnu opremu i usluge za pristup našim stranicama Tallow skin
                                    care nije odgovorna za troškove telefona, Internet prometa ili bilo koje druge troškove
                                    do kojih može doći.</br></br>

                                    Iako Vam Tallow Skin Care j.d.o.o nastoji dati najbolju moguću ponudu usluga, Tallow
                                    Skin Care j.d.o.o ne može garantirati da će usluge na tallow-skincare.hr odgovarati
                                    Vašim potrebama.<br></br>

                                    Tallow Skin Care j.d.o.o također ne može garantirati da će usluga biti bez pogrešaka.
                                    Ukoliko dođe do pogreške, molimo Vas da je prijavite našem Kontakt centru ili na e-mail
                                    info@tallow-skincare.hr kako bismo je otklonili na najbrži mogući način.
                                </p>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
