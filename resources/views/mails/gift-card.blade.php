<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('Gift Card')}}</title>
</head>

<body style="margin:0; padding:0; background-color:#f5f5f5; font-family:Arial, Helvetica, sans-serif;">

    <!-- Wrapper -->
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f5f5f5; padding:20px;">
        <tr>
            <td align="center">

                <!-- Card Container -->
                <table width="400" cellpadding="0" cellspacing="0" border="0" style="background-color:#ffffff;">

                    <!-- Image -->
                    <tr>
                        <td>
                            <img src="{{ asset('media/card_design/' . $gift_card->getDesign()?->file_path) }}" 
                                 alt="Gift Card Image"
                                 width="400"
                                 style="display:block; width:100%; height:243px;">
                        </td>
                    </tr>

                    <!-- From / To -->
                    <tr>
                        <td style="padding:16px; border-bottom:1px solid #dddddd; font-size:12px; color:#333333;">
                            <span style="color:#888888;">{{__('From')}}</span> {{ $gift_card->from }}
                            &nbsp;&nbsp;
                            <span style="color:#888888;">{{__('To')}}</span> {{ $gift_card->to }}
                        </td>
                    </tr>

                    <!-- Message -->
                    <tr>
                        <td style="padding:16px; border-bottom:1px solid #dddddd; color:#333333;">
                            <p style="margin:0; font-size:14px; line-height:1.5;">
                                {{ $gift_card->Message }}
                            </p>
                        </td>
                    </tr>

                    <!-- Price + Logo -->
                    <tr>
                        <td style="padding:16px; border-bottom:1px solid #dddddd;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="left" style="color:#333333;">
                                        <p style="margin:0; font-size:20px; font-weight:bold;">
                                            {{ number_format($gift_card->amount ?? 0, 2, ',', '.') }}€
                                        </p>
                                        <p style="margin:4px 0 0 0; font-size:11px; text-transform:uppercase;">
                                            {{ __('Tallow skin care') }}
                                        </p>
                                    </td>
                                    <td align="right">
                                        <img src="{{ asset('media/images/logo.png') }}" 
                                             alt="Logo"
                                             width="50"
                                             height="50"
                                             style="display:block;">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Gift Code -->
                    <tr>
                        <td align="center" style="padding:16px; font-size:14px; color:#777777;">
                            <strong>{{ $gift_card->gift_code }}</strong>
                        </td>
                    </tr>

                </table>
                <!-- End Card -->

            </td>
        </tr>
    </table>

</body>
</html>