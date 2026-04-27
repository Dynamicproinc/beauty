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
                                <h5 class="h5-title">Delivery</h5>
                                <p class="p-text">
                                    You can order any quantity of meat on our webshop and we will deliver it to you by
                                    courier service (all over Croatia, Slovenia).</br></br>

                                    The meat is delivered freshly vacuum-packed, in thermal boxes cooled with ice gel, which
                                    guarantees the maintenance of the cold chain in food delivery. For Italy, it is
                                    delivered with refrigerated transport.</br></br>

                                    Orders received from Sunday to Wednesday at 12 noon will be delivered the same week
                                    until Friday. Orders received after that will be delivered the following week. Once
                                    shipped, the package will arrive at your address within 24 hours.</br></br>

                                    Shipping costs<br>
                                   <b>Croatia</b></br></br>

                                    The delivery fee for cash on delivery is €3.00, regardless of the order
                                    amount.</br></br>

                                    Delivery is free for orders paid by card.</br></br>

                                    <b>Slovania</b></br></br>

                                     The delivery fee for cash on delivery is €3.00, regardless of the order
                                    amount.</br></br>

                                    Delivery is free for orders paid by card.</br></br>


                                    <b>Personal pickup</b></br></br>

                                    You can also pick up your orders in person at our locations in Velika Gorica and
                                    Karlovac. The products will be ready within 24 hours of receiving your order. You will
                                    be notified that your package is ready by phone or message.</br></br>

                                    By choosing the Personal Pickup option, you will receive a 10% discount on your total
                                    purchase.</br></br>

                                    📍 Postanska Street 1b, 10410, Velika Gorica</br>

                                    📍 Donja Švarča 79c, 47000, Karlovac</br></br>

                                    What does the delivery process look like?</br>
                                    After cutting, all our cuts of meat rest at temperatures up to 4°C. Ideally aged, they
                                    are packed in vacuum packaging to fully preserve the quality of their taste.</br></br>

                                    We have received your order and we are busy packing! But before that we contacted the
                                    delivery service and announced your package.</br></br>

                                    The piece you have selected and ordered for delivery is packed in suitable packaging
                                    that will ensure that the meat reaches you cold. The outer box is lined with perfectly
                                    cut Styrofoam panels on the inside, which are tasked with maintaining the appropriate
                                    temperature. A new box is inserted into the lined box, which contains the chilled meat
                                    and ice gel that will keep the inner box and the meat inside it cold.</br></br>

                                    The delivery service picks up the meat.</br></br>

                                    Meat travels.</br></br>

                                    Ding-dong. 🔔The meat is at your door. 24 hours from shipping. Cold.</br></br>

                                    Ready to order?</br>
                                   <a href="/"> Visit Shop</a>
                                </p>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
