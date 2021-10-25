<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Khansa&Salman</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/uikit.css') }}"> --}}
        
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
            body {
                background-color: #1e1d1b;
                color: #fff;
                
                background-image: url({{ url('assets/images/diamond.svg') }})
            }

            hr {
                overflow: visible;
                text-align: inherit;
                margin: 0 0 20px 0;
                border: 0;
                border-top: 1px solid rgba(255,255,255,.2);
            }

            .acara-cover {
                background-size: cover;
                background-position: center;
                background-image: url({{ url('assets/images/bg-acara.jpg') }})
            }

            .pl {
                width: 200px;
                height: 200px;
                padding: 1rem;
                background-size: contain;
                background-position: center;
                background-repeat: no-repeat;
                mask-image: url(images/mask.png);
                -webkit-mask-image:  url({{ url('assets/images/mask.png') }});
                mask-size: 200px;
                -webkit-mask-size: 200px;
                mask-repeat: no-repeat;
                -webkit-mask-repeat: no-repeat;
                mask-position: center;
                -webkit-mask-position: center;
                background-image: url({{ url('assets/images/p01.jpg') }})
            }

            .pw {
                width: 200px;
                height: 200px;
                padding: 1rem;
                background-size: contain;
                background-position: center;
                background-repeat: no-repeat;
                mask-image: url(images/mask.png);
                -webkit-mask-image:  url({{ url('assets/images/mask.png') }});
                mask-size: 200px;
                -webkit-mask-size: 200px;
                mask-repeat: no-repeat;
                -webkit-mask-repeat: no-repeat;
                mask-position: center;
                -webkit-mask-position: center;
                background-image: url({{ url('assets/images/p02.jpg') }})
            }

            .m-name {
                font-family: Greenlight Script;
            }

            blockquote footer {
                margin-top: 10px;
                font-size: .875rem;
                line-height: 1.5;
                color: #666;
            }

            blockquote footer::before {
                content: "— ";
            }

            .yn-color {
                font-family: Scarlet;
                background: #D6BA8D;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .cover {
                width: 100%;
                background-size: cover;
                background-repeat: unset;
                background-position: center;
                
            }

            /** music box */
            .music-box {
                position: fixed;
                width: 37px;
                height: 160px;
                z-index: 9;
                bottom: 81px;
                right: 10px;
            }

            .music-box .music-holder {
                width: 100%;
                height: 100%;
                position: absolute;
                right: 0;
                bottom: -30px;
                visibility: hidden;
                opacity: 0;
                -webkit-transition: all 0.5s ease-out;
                -o-transition: all 0.5s ease-out;
                transition: all 0.5s ease-out;
            }

            .music-box .music-holder iframe {
                width: 100%;
                height: 100%;
            }

            .music-box button {
                
                background: #FBFBFB;
                box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
                width: 37px;
                height: 37px;
                font-size: 18px;
                font-size: 1rem;
                outline: 0;
                padding: 0;
                margin: 0;
                position: absolute;
                right: 0;
                bottom: 20px;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -o-border-radius: 50%;
                -ms-border-radius: 50%;
                border-radius: 50%;
                border: 0px;
            }

            .music-box button i {
                font-size: 20px;
            }

            .music-box .toggle-music-box {
                top: -50px;
                visibility: visible;
                opacity: 1;

            }

            .music {
                padding: 0;
                background: none !important;
                position: relative;
                top: 103px;
                right: 180px;
            }

            .music:focus {
                outline: none;
            }

            .uk-icon-image {
                width: 20px;
                height: 20px;
                background-position: 50% 50%;
                background-repeat: no-repeat;
                background-size: contain;
                vertical-align: middle;
            }

            .uk-icon {
                margin: 0;
                border: none;
                border-radius: 0;
                overflow: visible;
                font: inherit;
                color: inherit;
                text-transform: none;
                padding: 0;
                background-color: transparent;
                display: inline-block;
                fill: currentcolor;
                line-height: 0;
            }

            /* .icon-menu>a {
                padding: 8 px 9 px !important;
                margin: 0 5 px;
            } */
            .uk-active>a>img {
                opacity: .6;
                height: 30px;
                filter: invert(1);
            }

            .uk-active {
                background: rgb(214, 186, 141);
                border-radius: 8px;
                padding:  8px 9px !important;
            }


        </style>
    </head>
    <body>
        <audio id="audio" autoplay loop>
            <source src="{{ asset('assets/music/music.mp3') }}">
        </audio>
    {{-- <div class="container mx-auto"> --}}
        <section class="bg-cover bg-center" style="background-image: url({{ url('assets/images/bg-small.jpg') }})">
            <div class="outer-cover px-2.5 pt-5 pb-16">
                <div class="p-4">
                    <p class="font-light text-sm lg:text-md lg:font-normal text-center" style="letter-spacing: 3px; color:#ffffffb3;">WEDDING INVITATION</p>
                    <div class="h-64"></div>
                    <div class="py-4">
                        <h2 class="text-4xl lg:text-5xl text-center font-light">Khansa & Salman</h2>
                    </div>
                    <p class="text-center font-light text-xs lg:text-lg lg:font-normal" style="color: #bdaa8b; letter-spacing: 3px;">07.11.2021</p>
                </div>
            </div>
        </section>

        <section id="mempelai">
            <div class="
                md:max-w-screen-md lg:max-w-screen-lg
                mx-auto 
                px-2.5 pt-10 pb-10">

                <img src="{{ asset('assets/images/bismillah.png') }}" class="mx-auto mb-3 sm:mb-5" style="opacity: 0.7; filter: invert()" alt="Bismillah" width="212">

                <p class=
                    "text-sm sm:text-base lg:text-base md:text-base text-center 
                    py-2">
                    Assalamualaikum warahmatullahi wabarakatuh</p>
                <p class=
                    "text-sm sm:text-base lg:text-base md:text-base text-center 
                    py-4 mb-10">
                    Dengan memohon rahmat dan ridho-Mu Ya
                    Allah, <br> Kami bermaksud mengadakan acara pernikahan putra dan putri kami.</p>

                <div class="lg:w-3/4 lg:mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-4 md:gap-2 lg:gap-6 mx-auto">
                        <div class="text-center">
                            <div class="pl mx-auto"></div>
                            <h2 class="py-3 m-name text-xl sm:text-lg md:text-lg lg:text-lg">Muhammad Salman Agustian, S.Kom.</h2>
                            {{-- <a href="" class="">@salmanagustian</a> --}}
                            <p class="text-sm mb-10">
                                Putra dari Bpk H. Agus Suryana <br>& Ibu Titin Sunarti
                            </p>
                        </div>
                        <div class="text-center">
                            <div class="pw mx-auto"></div>
                            <h2 class="py-3 m-name text-xl sm:text-lg md:text-lg lg:text-lg">Khansa Izzatun Nissa, S.Kom.</h2>
                            {{-- <a href="" class="">@zakhansa</a> --}}
                            <p class="text-sm mb-12 sm:mb-20 md:mb-20 lg:mb-20">
                                Putri dari Bpk. (Alm) Iwan Sumantri <br>& Ibu Indrawati
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="h-16 mb-2.5"></div> --}}
                <div class="text-center">
                    <p class="text-sm mb-7">وَمِن كُلِّ شَىْءٍ خَلَقْنَا زَوْجَيْنِ لَعَلَّكُمْ تَذَكَّرُونَ</p>
                    <blockquote class="italic text-sm sm:text-base lg:text-base md:text-base">
                        “Dan segala sesuatu Kami ciptakan berpasang-pasangan supaya 
                        kamu mengingat kebesaran Allah.”

                        <footer>
                            (QS. Az-Zariyat:49)
                        </footer>
                    </blockquote>
                </div>

            </div>
        </section>

       
    
    {{-- <div id="my_id" uk-modal="" bg-close="false" class="uk-modal uk-flex uk-open" tabindex="0">
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center " style="background: transparent; background-image: url({{ url('assets/images/evp.png') }}); padding:20px 15px 60px 15px; background-position: center;
        background-repeat: unset;
        background-size: cover; border-radius:16px;  height: 400px;
        width: 342px;
        ">
        <p class="uk-text-medium uk-margin-remove-bottom txt-simple" style="margin-top:69px;">HALLO</p>
        <p class="uk-text-bold uk-margin-remove-bottom" style="font-size:16px;
        font-weight: 400; margin-top:8px;">
            </p>
        <p class="uk-text-medium txt-simple">YOU'RE INVITED TO OUR WEDDING</p>
        
            <h2 class="uk-text-center uk-margin-remove yn-color" style="line-height:1; margin-bottom:9px !important; font-size:28px;">
                Khansa &amp; Salman		</h2>
            
            <p class="uk-text-center">
                <button id="play-sound" class="uk-button uk-button-primary uk-modal-close" type="button" style="
        border-radius: .5rem;
        background-color: #fff;
        color: #333;
        margin-top: 56px;
        line-height: 34px;
        padding-top: 4px;
        font-weight: 400;">OPEN INVITATION</button>
            </p>
        </div>
    </div> --}}

    <!-- modal open invitation -->
    <div class="fixed inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            
            <!-- inset modal background -->
            <div class="overlay fixed inset-0 bg-black bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- modal panel invitation -->
            <div class="modal-panel z-10 inline-block align-middle bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                style="background: transparent; background-image: url({{ url('assets/images/evp.png') }}); padding:20px 15px 60px 15px; background-position: center;
                background-repeat: unset;
                background-size: cover;
                height: 400px;
                width: 342px;">
                <div>
                    <p class="text-center text-sm mt-20"> HALLO </p>
                    <p class="text-center text-sm py-4">YOU'RE INVITED TO OUR WEDDING</p>
                    <h2 class="text-center yn-color " style="font-size: 28px">Khansa &amp; Salman</h2>
                </div>
                <div class="text-center">
                    <button class="mt-16 px-6 py-2 rounded-lg font-normal" id="open-invitation" style="background-color:#E7E5E4; color:#78716C;">OPEN INVITATION</button>
                </div>
                {{-- <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: outline/exclamation -->
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        Deactivate account
                        </h3>
                        <div class="mt-2">
                        <p class="text-sm text-gray-500">
                            Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Deactivate
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                    </button>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- navbar -->
    <div id="container-navbar" class="w-full mx-auto sm:max-w-screen-sm md:max-w-screen-md py-4 px-4" style="bottom: 0px">
        <div class="bg-white px-4 py-2 shadow-lg rounded-lg">
            <nav class="navbar flex flex-wrap justify-center items-center relative">
                <ul id="ynMn" class="flex justify-center items-center space-x-7 box-border m-0 p-6 list-none h-8 min-h-full" uk-scrollspy-nav="closest: li; scroll: true" style="color: #D6BA8D;">
                    <li class="icon-menu uk-active"><a href="#opening" class="w-10 bg-gray-400 rounded-lg"><img src="https://yakinikah.com/assets/icons/icon-opening.svg" width="33" height="33" style="opacity: 0.6"></a></li>
                    <li class="icon-menu"><a href="#mempelai" uk-scroll=""><img src="https://yakinikah.com/assets/icons/icon-couple.svg" width="33" height="33" style="opacity: 0.6"></a></li>
                    <li class="icon-menu"><a href="#acara" uk-scroll=""><img src="https://yakinikah.com/assets/icons/icon-date.svg" width="33" height="33" style="opacity: 0.6"></a>
                    </li>
                    <li class="icon-menu"><a href="#gallery" uk-scroll=""><img src="https://yakinikah.com/assets/icons/icon-gallery.svg" width="33" height="33" style="opacity: 0.6"></a></li>
                    <li class="icon-menu"><a href="#bukutamu" uk-scroll=""><img src="https://yakinikah.com/assets/icons/icon-chat.svg" width="33" height="33" style="opacity: 0.6"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- music box -->
    <div class="music-box">
        <button class="music-box-toggle-btn"></button>
        <button class="music" id="unmute-sound">
            <span class="uk-icon uk-icon-image" style="background-image: url({{ asset('assets/images/unmute.png') }})"></span>
        </button>
        <button class="music" id="mute-sound" style="display: none">
            <span class="uk-icon uk-icon-image" style="background-image: url({{ asset('assets/images/mute.png') }})"></span>
        </button>
    </div>
    
    </body>

    {{-- <script src="{{ asset('js/uikit.js') }}"></script> --}}
    <script>
        const buttonOpenInvitation =  document.getElementById('open-invitation');
        const overlay =  document.querySelector('.overlay');
        const modalPanel =  document.querySelector('.modal-panel');
        const audio =  document.getElementById('audio');

        buttonOpenInvitation.addEventListener('click', function() {
            modalPanel.classList.add('hidden');
            overlay.classList.add('hidden');
            audio.play();
        });

        document.getElementById('mute-sound').style.display = 'none';
        document.getElementById('unmute-sound').addEventListener('click', function (event) {
            document.getElementById('unmute-sound').style.display = 'none';
            document.getElementById('mute-sound').style.display = 'inline-block';
            document.getElementById('audio').pause();
        });

        document.getElementById('mute-sound').addEventListener('click', function (event) {
            document.getElementById('mute-sound').style.display = 'none';
            document.getElementById('unmute-sound').style.display = 'inline-block';
            document.getElementById('audio').play();
        });
        // audio.play();
    </script>
</html>
