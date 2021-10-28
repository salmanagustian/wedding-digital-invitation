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
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <title>Khansa & Salman</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
        <link rel="stylesheet" href="{{ asset('css/invitation-dark.css') }}">
        
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.ico') }}"/>

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
                background-image: url({{ url('assets/images/p01-min.jpg') }})
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
                background-image: url({{ url('assets/images/p02-min.jpg') }})
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
            

        </style>
    </head>
    <body uk-scrollspy="target: .yn-anim; cls: uk-animation-fade; delay: 350">
        <div id="root">
            <audio id="audio" autoplay loop>
                    <source src="{{ asset('assets/music/music.mp3') }}">
            </audio>

            <section class="tw-bg-cover tw-bg-center" style="background-image: url({{ url('assets/images/gallery/cover.jpg') }})">
                <div class="outer-cover tw-px-2.5 tw-pt-5 tw-pb-16">
                    <div class="tw-p-4">
                        <p class="tw-font-light tw-text-sm lg:tw-text-md lg:tw-font-normal tw-text-center" style="letter-spacing: 3px; color:#ffffffb3;">WEDDING INVITATION</p>
                        <div class="tw-h-64"></div>
                        <div class="tw-py-4">
                            <h2 class="tw-text-4xl lg:tw-text-5xl tw-text-center tw-font-light">Khansa & Salman</h2>
                        </div>
                        <p class="tw-text-center tw-font-light tw-text-xs lg:tw-text-lg lg:tw-font-normal" style="color: #bdaa8b; letter-spacing: 3px;">07.11.2021</p>
                    </div>
                </div>
            </section>

            <section id="mempelai">
                @include('sections.mempelai')
            </section>

            <section id="acara">
                @include('sections.acara')
            </section>

            <section id="gallery" class="uk-section uk-section-default bg-f2" style="padding-bottom: 40px;">
                @include('sections.gallery')
            </section>

            <section id="guess-book" class="uk-container uk-container-small">
                @include('sections.guest-book')
            </section>

          

            <section>
                <div class="tw-h-64"></div>
            </section>

            <div id="my_id" uk-modal="" bg-close="false" class="uk-modal uk-flex uk-open" tabindex="0">
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center " style="background: transparent; background-image: url({{ url('assets/images/evp.png') }}); padding:20px 15px 60px 15px; background-position: center;
                background-repeat: unset;
                background-size: cover; border-radius:16px;  height: 400px;
                width: 342px;
                ">

                    <div class="tw-mt-24 tw-text-center">
                        <p class="uk-text-medium uk-margin-remove-bottom txt-simple">HALLO</p>
                        <p class="uk-text-bold uk-margin-remove-bottom" style="font-size:16px;
                        font-weight: 400; margin-top:8px;">
                            </p>
                        <p class="uk-text-medium txt-simple">YOU'RE INVITED TO OUR WEDDING</p>
                        <h2 class="yn-color tw-mt-4" style="line-height:1; margin-bottom:9px !important; font-size:28px;">
                            Khansa &amp; Salman	</h2>
                    </div>

                    <div class="tw-mt-20">
                        <button id="play-sound" class="uk-modal-close tw-bg-white tw-text-gray-600 tw-text-xs tw-tracking-widest tw-py-2 tw-px-4 tw-rounded-lg tw-w-3/5" type="button">OPEN INVITATION</button>
                    </div>
                    
                </div>
            </div>

            <!-- navbar -->
            <div id="navbar" class="uk-section uk-section-xsmall uk-section-muted uk-position-bottom uk-position-fixed bg-menu" style="z-index: 121; bottom: -78px;">
                <div class="uk-container uk-container-small">
                    <div class="uk-text-small yn-menu">
                        <nav class="uk-navbar" uk-navbar="">
                            <div class="uk-navbar-center">
                                <ul id="ynMn" class="uk-navbar-nav" uk-scrollspy-nav="closest: li; scroll: true">
                                    <li class="icon-menu uk-active"><a href="#opening" uk-scroll=""><img src="{{ asset('assets/images/menu/icon-opening.svg') }}" alt="Icon Opening"></a></li>
                                    <li class="icon-menu"><a href="#mempelai" uk-scroll=""><img src="{{ asset('assets/images/menu/icon-couple.svg') }}"></a></li>
                                    <li class="icon-menu"><a href="#acara" uk-scroll=""><img src="{{ asset('assets/images/menu/icon-date.svg') }}"></a>
                                    </li>
                                    <li class="icon-menu"><a href="#gallery" uk-scroll=""><img src="{{ asset('assets/images/menu/icon-gallery.svg') }}"></a></li>
                                    <li class="icon-menu"><a href="#bukutamu" uk-scroll=""><img src="{{ asset('assets/images/menu/icon-chat.svg') }}"></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
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
            
            </div>   
    </body>

    <script src="{{ asset('js/uikit.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        let prevScrollpos = window.pageYOffset;
	
        const modal = UIkit.modal("#my_id");
        modal.show();
		

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
        
    </script>
</html>
