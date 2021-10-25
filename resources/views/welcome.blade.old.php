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

        </style>
    </head>
    <body>
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
                            <h2 class="py-3 m-name text-lg sm:text-md md:text-xl lg:text-xl">Muhammad Salman Agustian, S.Kom.</h2>
                            {{-- <a href="" class="">@salmanagustian</a> --}}
                            <p class="text-xs mb-10">
                                Putra dari Bpk H. Agus Suryana <br>& Ibu Titin Sunarti
                            </p>
                        </div>
                        <div class="text-center">
                            <div class="pw mx-auto"></div>
                            <h2 class="py-3 m-name text-lg sm:text-md md:text-xl lg:text-xl">Khansa Izzatun Nissa, S.Kom.</h2>
                            {{-- <a href="" class="">@zakhansa</a> --}}
                            <p class="text-xs mb-12 sm:mb-20 md:mb-20 lg:mb-20">
                                Putri dari Bpk Iwan Sumantri (Alm) <br>& Ibu Indrawati
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

        {{-- <section id="acara" class="acara-cover" style="background-color: #807d71">
            <div class="px-2.5 py-10 text-md font-light">
                <h2 class="text-3xl yn-color text-center">
                    Save The Date
                </h2>

                <div class="h-8"></div>


                <div class="bg-blue-50 py-2 px-4 rounded opacity-60">
                    <div class="space-x-3 text-center font-light" style="color: #cbb898">
                        <div class="inline-block">
                            <span class="text-3xl block" id="days"></span>
                            Hari
                        </div>
                        <div class="inline-block">
                            <span class="text-3xl block" id="hours"></span>
                            Jam
                        </div>
                        <div class="inline-block">
                            <span class="text-3xl block" id="minutes"></span>
                            Menit
                        </div>
                        <div class="inline-block">
                            <span class="text-3xl block" id="seconds"></span>
                            Detik
                        </div>
                    </div>
                </div>
               
                
                <div class="h-10"></div>

                <p class="text-sm text-center pt-4">
                    Ungkapan terima kasih yang tulus dari kami apabila Bapak/Ibu/Teman-teman berkenan hadir dan memberikan do’a restu.
                </p>
            </div>
        </section> --}}
    {{-- </div> --}}
    
    <div id="my_id" uk-modal="" bg-close="false" class="uk-modal uk-flex uk-open" tabindex="0">
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
    </div>

    </body>

    {{-- <script src="{{ asset('js/uikit.js') }}"></script> --}}
    <script>
     
    </script>
</html>
