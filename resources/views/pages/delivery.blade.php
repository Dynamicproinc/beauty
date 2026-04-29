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
                                    On our webshop, you can order any quantity of products and we will
                                    deliver them to you via courier service (throughout Croatia and Slovenia).
                                </p>
                                <p class="p-text">
                                    Products are packed according to defined quality standards and delivered in appropriate
                                    packaging.
                                </p>
                                <p class="p-text">
                                    Orders received from Sunday to Wednesday by 12:00 PM will be shipped the same week by
                                    Friday.
                                    Orders received after that will be shipped the following week. After dispatch, the
                                    package
                                    will arrive at your address within 24 hours.
                                </p>
                                <p class="p-text">
                                    If the ordered Product is not available in the store from which delivery is made,
                                    Tallow Skin Care will inform the Customer by phone or in writing. All other ordered
                                    Products will be delivered to the Customer.
                                </p>

                                <h5 class="h5-title">Delivery Costs</h5>
                                
                                <h5 class="h5-title">CROATIA</h5>
                                <p class="p-text">Cash on delivery fee is €3.00, regardless of the order amount.</p>
                                <p class="p-text">Delivery is free for orders paid by card over €50.</p>

                                <h5 class="h5-title">SLOVENIA</h5>
                                <p class="p-text">Cash on delivery fee is €3.00, regardless of the order amount.</p>
                                <p class="p-text">Delivery is free for orders paid by card over €50.</p>

                                <h5 class="h5-title">PERSONAL PICKUP</h5>
                                <p class="p-text">
                                    You can also pick up your orders in person at our locations in Velika Gorica and
                                    Karlovac.
                                    Products will be ready within 24 hours of receiving the order. You will be notified by
                                    phone call or message when your package is ready.
                                </p>
                                <p class="p-text">By selecting the Personal Pickup option, you get a 10% discount on the
                                    total purchase.</p>
                                <p class="p-text">
                                    📍Poštanska ul. 1b, 10410, Velika Gorica<br>
                                    📍Donja Švarča 79c, 47000, Karlovac
                                </p>

                                <h5 class="h5-title">Pickup</h5>
                                <p class="p-text">
                                    The ordered Products will be packed in such a way that they cannot be damaged during
                                    normal
                                    transport handling. Customers are advised to inspect the shipment before accepting it,
                                    and
                                    any visible damage should be reported immediately and the damaged shipment
                                    refused.<br><br>
                                    After delivery of the goods, cancellation of purchase and refunds are not possible.
                                </p>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
