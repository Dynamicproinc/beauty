
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dodijeljeni nagradni bodovi</title>
</head>

<body style="margin:0; padding:0; background-color:#f6f7f9; font-family:Arial, Helvetica, sans-serif; color:#222;">

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f6f7f9; padding:40px 20px;">
    <tr>
      <td align="center">

        <table width="100%" cellpadding="0" cellspacing="0" border="0"
               style="max-width:560px; background:#ffffff; border-radius:12px; overflow:hidden;">

          <!-- Header -->
          <tr>
            <td style="padding:28px 32px; text-align:center; border-bottom:1px solid #eeeeee;">
              <h1 style="margin:0; font-size:24px; color:#222;">
                Nagradni bodovi su dodijeljeni 🎉
              </h1>
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td style="padding:36px 32px;">

              <p style="margin:0 0 16px; font-size:16px; line-height:1.6; text-transform:capitalize;">
                Pozdrav {{$customer_name}},
              </p>

              <p style="margin:0 0 24px; font-size:16px; line-height:1.6;">
                odlične vijesti! Na Vaš korisnički račun upravo smo dodali
                nagradne bodove ostvarene Vašom nedavnom narudžbom.
              </p>

              <!-- Points -->
              <table width="100%" cellpadding="0" cellspacing="0" border="0"
                     style="background:#f5f8ff; border-radius:10px; margin-bottom:24px;">
                <tr>
                  <td style="padding:24px; text-align:center;">
                    <div style="font-size:36px; font-weight:bold; color:#315efb;">
                      +{{$points}} bodova
                    </div>
                    <div style="margin-top:6px; font-size:14px; color:#666;">
                      Nagradni bodovi dodani na Vaš račun
                    </div>
                  </td>
                </tr>
              </table>

              <p style="margin:0 0 8px; font-size:14px; color:#666;">
                <strong>Broj narudžbe:</strong> #{{$order_number}}
              </p>

              <p style="margin:24px 0 0; font-size:16px; line-height:1.6;">
                Hvala Vam na kupnji i što ste dio našeg programa nagrađivanja!
              </p>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="padding:24px 32px; background:#fafafa; text-align:center;">
              <p style="margin:0; font-size:12px; color:#888;">
                Ovu poruku primili ste jer su nagradni bodovi dodani na Vaš korisnički račun.
              </p>
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

</body>
</html>
```
