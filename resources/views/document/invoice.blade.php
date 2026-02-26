<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Invoice') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            padding: 40px 0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif !important;
            font-size: 12px;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border: 1px solid #ddd;
        }

        .invoice-title {
            margin-bottom: 20px;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6 !important;
        }

        .text-muted-small {
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>

<body>

<div class="invoice-box">

    <!-- Company Info -->
    <div class="row invoice-title">
        <div class="col-md-6">
            <h5 class="fw-bold">Tallow Skin Care j.d.o.o</h5>
            <p class="text-muted-small mb-0">
                Donja Švarča 79c<br>
                Karlovac, Karlovačka, 47000<br>
                Croatia
            </p>
        </div>

        <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <p class="mb-1">
                <strong>{{ __('Invoice Number') }}:</strong> #12235569
            </p>
            <p class="mb-1">
                <strong>{{ __('Invoice Date') }}:</strong> 05 Jun 2025
            </p>
            <p class="mb-0">
                <strong>{{ __('Payment Method') }}:</strong> Credit Card
            </p>
        </div>
    </div>

    <hr>

    <!-- Billing & Shipping -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h6 class="fw-bold bg-light p-2">{{ __('Bill To') }}</h6>
            <p class="text-muted-small">
                Donja Švarča 79c<br>
                Karlovac, Karlovačka, 47000<br>
                Croatia
            </p>
        </div>

        <div class="col-md-6">
            <h6 class="fw-bold bg-light p-2">{{ __('Ship To') }}</h6>
            <p class="text-muted-small">
                Donja Švarča 79c<br>
                Karlovac, Karlovačka, 47000<br>
                Croatia
            </p>
        </div>
    </div>

    <!-- Invoice Items -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>{{ __('Item') }}</th>
                    <th class="text-end">{{ __('Qty') }}</th>
                    <th class="text-end">{{ __('Price') }}</th>
                    <th class="text-end">{{ __('Total') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tallow Skincare - Tallow balm 30g</td>
                    <td class="text-end">2</td>
                    <td class="text-end">€25.00</td>
                    <td class="text-end">€50.00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-end"><strong>{{ __('Subtotal') }}</strong></td>
                    <td class="text-end">€50.00</td>
                </tr>
                <tr>
                    <td colspan="4" class="text-end"><strong>{{ __('Discount') }} (25%)</strong></td>
                    <td class="text-end">€12.50</td>
                </tr>
                <tr>
                    <td colspan="4" class="text-end"><strong>{{ __('Total') }}</strong></td>
                    <td class="text-end fw-bold">€62.50</td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>

</body>
</html>