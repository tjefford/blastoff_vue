<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blastoff Vue</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body class="bg-gray-200 antialiased font-sans">

        <div id="app">

          <logo class="my-8"
            url="{{ url('/') }}"
            icon="{{ asset('images/logo.png') }}"
          ></logo>

          <main class="mt-8 max-w-6xl mx-auto px-8">
            <card
              v-for="post in list"
              :post="post"
            ></card>
          </main>


          <end></end>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
