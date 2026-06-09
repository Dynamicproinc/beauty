<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ __('Thanks for Subscribing') }}</title>
    <style>
      body {
        overflow-x: hidden;
        color: #3a3a3a;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        
      }
      p{
        font-size: 14px;
      }
      main {
        width: 100%;
        min-height: 100%;
        display: flex;
        justify-content: center;
        padding: 32px;
        align-items: center;
      }
      .main-content {
        width: 450px;

        height: 100%;
        padding: 32px;
        overflow: hidden;
      }
      .cover-image {
        width: 100%;
        height: auto;
      }
      .body-text-content {
        text-align: center;
      }
      .footer-content {
        margin-top: 32px;
       height: 100px ;
        background-color: #000;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 16px;
        font-size: 14px;
        background-color: #A5AE9A;
       
      }
      h4{
        margin: 0;
      }
    </style>
  </head>
  <body>
    <main>
      <div class="main-content">
        <div>
  <img
    class="cover-image"
    src="{{ asset('media/images/email_tallow_text.png') }}"
    alt="{{ __('Tallow Skin Care') }}"
  />
</div>

<div class="body-text-content">
  <h3 style="text-transform: uppercase">{{ __('trnid243') }}</h3>
  <p>
    {{ __('trnid244') }}
  </p>
</div>

<div class="footer-content">
  <div>
    <h4>{{ __('Tallow Skin Care') }}</h4>
    <small>
      {{ __('Tallow Skin Care j.d.o.o') }}<br />
      {{ __('Donja Švarča 79c') }}<br />
      {{ __('47000 Karlovac, Hrvatska.') }}
    </small>
  </div>

  <div style="width:50%">
    <p>
      <small>
        {{ __('trnid245') }}
        <a href="{{route('unsubscribe-email',[$data['reference'], $data['email']])}}">{{ __('trnid246') }}</a>
      </small>
    </p>
  </div>
</div>
      </div>
    </main>
  </body>
</html>
