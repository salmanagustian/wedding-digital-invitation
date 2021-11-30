<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="title" content="Khansa & Salman">
    <meta name="description" content="Landing page wedding personal Khansa & Salman">
    <meta name="keywords" content="khansa & salman, wedding, wedding invitation, villa lagenta">
    <meta name="author" content="Salman">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5">
    <meta name="format-detection" content="telephone=no">
    <title>Khansa & Salman</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/flickity.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/invitation-dark.css') }}">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.ico') }}"/>
    <!-- CSS -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> --}}
    <style>
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: Signature;
            color: #D6BA8D !important;
        }
    </style>
    <style>
        body{background-color:#1e1d1b;color:#fff;background-image:url("{{ url('assets/images/diamond.svg') }}")}.yn-color{font-family:Scarlet;background:#d6ba8d;-webkit-background-clip:text;-webkit-text-fill-color:transparent}
    </style>
</head>
<body uk-scrollspy="target: .yn-anim; cls: uk-animation-fade; delay: 350">
    <div id="root">
        <router-view></router-view>

        <div class="tw-h-64"></div>

        <div id="my_id" uk-modal="" bg-close="false" class="uk-modal uk-flex uk-open" tabindex="0">
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center " style="background: transparent; background-image: url({{ url('assets/images/evp.png') }}); padding:20px 15px 60px 15px; background-position: center;
            background-repeat: unset;
            background-size: cover; border-radius:16px;  height: 400px;
            width: 342px;
            ">

                <div class="@if(request()->has('name')) tw-mt-20 @else tw-mt-24 @endif tw-text-center">
                    <p class="uk-text-medium uk-margin-remove-bottom txt-simple">HALLO ✌</p>
                    
                    @if (request()->has('name'))
                        <div class="tw-mb-5 tw-mt-0.5 tw-text-base tw-w-semibold tw-text-center">
                            {{ request()->get('name') }}
                        </div>
                    @else
                        <div class="tw-mb-3"></div>
                    @endif

                    <p class="uk-text-medium txt-simple">YOU'RE INVITED TO OUR WEDDING</p>
                    <h2 class="yn-color tw-mt-4" style="line-height:1; margin-bottom:9px !important; font-size:28px;">
                        Khansa &amp; Salman	</h2>
                </div>

                <div class="tw-mt-20">
                    <button id="play-sound" class="uk-modal-close tw-bg-white tw-text-gray-600 tw-text-xs tw-tracking-widest tw-py-2 tw-px-4 tw-rounded-lg tw-w-3/5" type="button">OPEN INVITATION</button>
                </div>
                
            </div>
        </div>
    </div>   
</body>

<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{ asset('assets/js/uikit.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>
