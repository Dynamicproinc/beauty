@extends('layouts.app')
@section('title', __('Terms and Conditions'))
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
                                <h5 class="h5-title">General Terms</h5>
                                <p class="p-text">
                                    These terms define the procedure for ordering, payment, delivery, and complaints regarding products offered on this website. Tallow Skin Care j.d.o.o website may be used for your private use free of charge, subject to the following terms and rules.</br></br>

                                    Tallow Skin Care j.d.o.o enables online purchase of the entire product assortment available in stock, delivered to the customer’s address.</br></br>

                                    Business customers are subject to the Obligations Act and Electronic Commerce Act, and the Consumer Protection Act does not apply to them.</br></br>

                                    All prices are expressed in the official currency of the Republic of Croatia and include VAT. Products are delivered at retail prices valid on the day of ordering.</br></br>

                                    In case of suspected abuse by the customer, Tallow Skin Care j.d.o.o reserves the right to cancel the order and terminate the contract at any time. The company also reserves the right to deactivate user accounts if behavior is deemed unacceptable or violates these terms.</br></br>

                                    The purchase process includes the following steps:</br></br>
                                </p>
                                <ul class="li-list">
                                    <li>Registration</li>
                                    <li>Ordering</li>
                                    <li>Purchase / Payment</li>
                                    <li>Delivery</li>
                                    <li>Pickup</li>
                                    <li>Returns / Complaints</li>
                                    <li>General</li>
                                </ul>
                            </section>

                            <section class="mb-3">
                                <h5 class="h5-title">Registration</h5>
                                <p class="p-text">
                                    User registration is done via the website, where users must provide personal data and agree to its use.</br></br>

                                    After successful registration, users receive a username and password for accessing the webshop.</br></br>

                                    By registering, the user confirms:</br>
                                    – acceptance of these terms;</br>
                                    – accuracy and completeness of personal data;</br></br>
                                    – consent for Tallow Skin Care j.d.o.o to process personal data for internal records and marketing purposes.</br></br>

                                    Users agree to purchase products based on images and descriptions.</br></br>

                                    We protect customer data by collecting only necessary information, informing users about data usage, and allowing control over marketing preferences. All data is securely stored.</br></br>
                                </p>
                            </section>

                            <section class="mb-3">
                                <h5 class="h5-title">Ordering</h5>
                                <p class="p-text">
                                    Customers place orders through an electronic form. A customer is anyone who orders at least one product and submits required data. Prices are in Euros.</br></br>

                                    Products are ordered by adding them to the cart.</br></br>

                                    An order is considered completed when payment is confirmed.</br></br>

                                    After confirmation, a confirmation email is sent. At this point, the purchase contract is concluded and cannot be modified.</br></br>

                                    If you do not receive confirmation, check spam or repeat the order process.
                                </p>
                            </section>

                            <section class="mb-3">
                                <h5 class="h5-title">Payment</h5>
                                <p class="p-text">
                                    Payment is made online via Mastercard, Maestro, Visa, Amex, or digital wallets (Apple Pay, Google Pay, Cash App Pay).</br></br>

                                    Products are packaged securely. Customers must inspect packages upon delivery and report damage immediately.</br></br>

                                    If delivery is delayed, customers should notify the seller to resolve the issue.
                                </p>
                            </section>

                            <section class="mb-3">
                                <h5 class="h5-title">Online Payment Security</h5>
                                <p class="p-text">
                                    Payments are processed via Stripe, ensuring secure transactions with PCI DSS certification, 256-bit SSL, and TLS 1.2 encryption.
                                </p>
                            </section>

                            <section class="mb-3">
                                <h5 class="h5-title">Delivery</h5>
                                <p class="p-text">
                                    Orders placed before Wednesday noon are delivered within the same week. Others are shipped the following week.</br></br>

                                    Delivery time is within 24 hours after dispatch.</br></br>

                                    If a product is unavailable, the customer will be notified.
                                </p>

                                <p class="p-text"><strong>Shipping Costs</strong></p>

                                <h5 class="h5-title text-uppercase">CROATIA</h5>
                                <p class="p-text">
                                    Cash-on-delivery fee: €3.00.</br></br>
                                    Free shipping for card payments over €50.
                                </p>

                                <h5 class="h5-title text-uppercase">SLOVENIA</h5>
                                <p class="p-text">
                                    Cash-on-delivery fee: €3.00.</br></br>
                                    Free shipping for card payments over €50.
                                </p>

                                <h5 class="h5-title text-uppercase">PERSONAL PICKUP</h5>
                                <p class="p-text">
                                    Pickup available in Velika Gorica and Karlovac within 24 hours.</br></br>
                                    10% discount applies for personal pickup.
                                </p>
                            </section>

                            <section class="mb-3">
                                <h5 class="h5-title">Pickup</h5>
                                <p class="p-text">
                                    Customers should inspect goods before accepting delivery. Returns are not possible after delivery.
                                </p>
                            </section>

                            <section class="mb-3">
                                <h5 class="h5-title">Complaints</h5>
                                <p class="p-text">
                                    The seller guarantees product correctness. Product images may differ.</br></br>

                                    Complaints are accepted within 7 days.</br></br>

                                    Refunds are issued if justified.</br></br>

                                    Complaints can be sent to info@tallow-skincare.hr and will be answered within 15 days.
                                </p>
                            </section>

                            <section class="mb-3">
                                <h5 class="h5-title">General</h5>
                                <p class="p-text">
                                    The webshop does not cover internet or device costs.</br></br>

                                    The company does not guarantee uninterrupted service.</br></br>

                                    Errors should be reported via email for correction.
                                </p>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection