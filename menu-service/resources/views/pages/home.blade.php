<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu Service</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>

        @vite([
            "resources/css/app.sass",
            "resources/js/app.js"
        ])
    </head>
    <body>
        <section class="menu">
            <section class="menu">
                <div class="title">
                    <h2>Our menu</h2>
                    <div class="underline"></div>
                </div>
                <div class="btn-container">
                    <!-- We gonna fill the options dinamically from the app.js-->
                </div>
            </section>
            <div class="section-center">
                @foreach ($menus as $menu)
                    <x-menu-card :menu="$menu"/>
                @endforeach
            </div>
        </section>
          
        <section class="faq">
            <div class="title">
                <h2>FAQs</h2>
                <div class="underline"></div>
            </div>

            <div class="section-center-question">
                @foreach ($faqs as $faq)
                    <x-faq-item :faq="$faq"/>
                @endforeach
            </div>
        </section>
      
        @include("layouts.footer")
    </body>
</html>
