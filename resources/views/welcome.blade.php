<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Khansa&Salman</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
        <link rel="stylesheet" href="{{ asset('css/invitation-dark.css') }}">
        
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


        </style>
    </head>
    <body uk-scrollspy="target: .yn-anim; cls: uk-animation-fade; delay: 350">
        {{-- <audio id="audio" autoplay loop>
            <source src="{{ asset('assets/music/music.mp3') }}">
        </audio> --}}
    {{-- <div class="container mx-auto"> --}}
        <section class="tw-bg-cover tw-bg-center" style="background-image: url({{ url('assets/images/bg-small.jpg') }})">
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
            <div class="
                md:tw-max-w-screen-md
                tw-mx-auto 
                tw-px-2.5 tw-pt-10 tw-pb-10">

                <img src="{{ asset('assets/images/bismillah.png') }}" class="tw-mx-auto tw-mb-3 tw-sm:mb-5" style="opacity: 0.7; filter: invert()" alt="Bismillah" width="212">

                <p class=
                    "tw-font-semibold tw-text-base tw-text-center 
                    tw-py-2">
                    Assalamualaikum warahmatullahi wabarakatuh</p>
                <p class=
                    "tw-font-semibold tw-text-base tw-text-justify md:tw-text-center lg:tw-text-center 
                    tw-py-4 tw-mb-10">
                    Dengan memohon rahmat dan ridho-Mu Ya
                    Allah, Kami bermaksud mengadakan acara pernikahan putra dan putri kami.</p>

                <div class="tw-lg:w-3/4 tw-lg:mx-auto">
                    <div class="tw-grid tw-grid-cols-1 sm:tw-grid-cols-2 sm:tw-gap-4 md:tw-gap-2 lg:tw-gap-6 tw-mx-auto">
                        <div class="tw-text-center">
                            <div class="pl tw-mx-auto"></div>
                            <h2 class="tw-py-3 m-name tw-text-xl">Muhammad Salman Agustian, S.Kom.</h2>
                            {{-- <a href="" class="">@salmanagustian</a> --}}
                            <p class="tw-text-sm tw-font-semibold tw-mb-10">
                                Putra dari Bpk H. Agus Suryana <br>& Ibu Titin Sunarti
                            </p>
                        </div>
                        <div class="tw-text-center">
                            <div class="pw tw-mx-auto"></div>
                            <h2 class="tw-py-3 m-name tw-text-xl">Khansa Izzatun Nissa, S.Kom.</h2>
                            {{-- <a href="" class="">@zakhansa</a> --}}
                            <p class="tw-text-sm tw-font-semibold tw-mb-12 sm:tw-mb-20 md:tw-mb-20 lg:tw-mb-20">
                                Putri dari Bpk. (Alm) Iwan Sumantri <br>& Ibu Indrawati
                            </p>
                        </div>
                    </div>
                </div>

                {{-- <div class="tw-text-center">
                    <p class="tw-text-base tw-font-semi-bold tw-mb-7">وَمِن كُلِّ شَىْءٍ خَلَقْنَا زَوْجَيْنِ لَعَلَّكُمْ تَذَكَّرُونَ</p>
                    <blockquote class="tw-italic tw-font-semi-bold tw-text-base sm:tw-text-lg">
                        “Dan segala sesuatu Kami ciptakan berpasang-pasangan supaya 
                        kamu mengingat kebesaran Allah.”

                        <footer>
                            (QS. Az-Zariyat:49)
                        </footer>
                    </blockquote>
                </div> --}}

            </div>
        </section>

        <section id="acara">
            <div class="uk-container uk-container-small">
                <h2 class="tw-text-3xl yn-color tw-text-center uk-scrollspy-inview tw-mt-3"> Save The Date </h2>
                <p class="uk-text-center uk-margin-bottom" style="margin:0px; font-weight:500">Minggu,07 November 2021</p>

                <div class="uk-grid-small uk-flex-center uk-child-width-auto uk-margin-top yn-color2 yn-anim uk-grid uk-countdown uk-scrollspy-inview " uk-grid uk-countdown="date: 2021-11-07T11:00:00+07:00">
                    <div>
                        <div class="uk-countdown-number uk-countdown-days"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center">Hari</div>
                    </div>
                    <div class="uk-countdown-separator"></div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-hours"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center">Jam</div>
                    </div>
                    <div class="uk-countdown-separator"></div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-minutes"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center">Menit</div>
                    </div>
                    <div class="uk-countdown-separator"></div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-seconds"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center">Detik</div>
                    </div>
                </div>

                <div class="uk-width-1-1 uk-text-center" style="color:#fff">

                    <div class="uk-grid-small uk-child-width-expand uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-first-column">
                            <!-- <p class="uk-card-title yn-color2" style="margin:8px; 0 8px 0;"
                                uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Akad Nikah</p>
        
                            <p style="margin:4px 0px 16px 0px; font-size:13px;">(Pukul 15.30 - 17.00 WIB)</p>
                            
                             -->
                            <hr class="style-2w"  style="margin-top: 20px">
        
                            <p class="uk-card-title yn-color2" style="margin:8px; 0 8px 0;" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Resepsi</p>
        
                            <p style="margin:4px 0px 16px 0px; font-size:13px;">Pukul 11.00 - 14.00 WIB</p>
        
        
        
                            <p style="font-size:16px; text-align:center; margin: 8px 0 0px 0;">
                                Villa Lagenta                    </p>
                            <p style="font-size:14px; text-align:center; margin: 8px 0 0px 0;">
                                Jl. Kol. Masturi No.8, Lembang, Jawa Barat 40391                    </p>
        
                            <!-- <a href="https://goo.gl/maps/3hJuBKyUa6R5TksZ8"
                                class="uk-button uk-button-default uk-button-small btn-white"
                                style="margin-top:16px; padding: 4px 16px; border-radius: 20px;">Petunjuk Arah
                                <span uk-icon="icon: arrow-right"></span></a> -->
        
        
        
        
                            <!-- <p style="font-size:16px; text-align:center; margin: 8px 0 0px 0;">
                                                    </p> -->
                            <p style="font-size:14px; text-align:center; margin: 8px 0 0px 0;">
                                                    </p>
        
                            <a href="https://goo.gl/maps/GrcAzNeiZMVEhWzcA" class="uk-button uk-button-default uk-button-small btn-white" style="margin-top:16px; padding: 4px 16px; border-radius: 20px;">Liat Lokasi Via Google Map
                                <span uk-icon="icon: arrow-right" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline><line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line></svg></span></a>
                            

                              <hr class="style-2w" style="margin-top: 20px">
                                <p style="font-size:14px; margin: 0px 0 16px 0;">
                                    Ungkapan terima kasih yang tulus dari kami apabila Bapak/Ibu/Teman-teman berkenan hadir dan memberikan do’a restu.                        </p>
        
        
                        </div>
                    </div>
                </div>
               
            </div>
        </section>

        <section id="gallery" class="uk-section uk-section-default bg-f2" style="padding-bottom: 40px;">
            <div class="uk-container uk-container-small">
                <h2 class="uk-text-center uk-margin-bottom midnight yn-color yn-anim uk-scrollspy-inview " style="">
                    Gallery
                </h2>
                <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid" uk-grid="" uk-lightbox="animation: slide">
                                <div class="uk-first-column">
                        <a class="uk-inline yn-anim uk-scrollspy-inview " href="{{ asset('assets/images/gallery/1.jpg') }}" style="">
                            <img class="thumb-gallery" src="{{ asset('assets/images/gallery/1.jpg') }}">
                        </a>
                    </div>
                                <div>
                        <a class="uk-inline yn-anim uk-scrollspy-inview " href="{{ asset('assets/images/gallery/2.jpg') }}" style="">
                            <img class="thumb-gallery" src="{{ asset('assets/images/gallery/2.jpg') }}">
                        </a>
                    </div>
                                <div>
                        <a class="uk-inline yn-anim uk-scrollspy-inview " href="{{ asset('assets/images/gallery/3.jpg') }}" style="">
                            <img class="thumb-gallery" src="{{ asset('assets/images/gallery/3.jpg') }}">
                        </a>
                    </div>
                                <div>
                        <a class="uk-inline yn-anim uk-scrollspy-inview " href="{{ asset('assets/images/gallery/6.jpg') }}" style="">
                            <img class="thumb-gallery" src="{{ asset('assets/images/gallery/6.jpg') }}">
                        </a>
                    </div>
                                <div>
                        <a class="uk-inline yn-anim uk-scrollspy-inview " href="{{ asset('assets/images/gallery/4.jpg') }}" style="">
                            <img class="thumb-gallery" src="{{ asset('assets/images/gallery/4.jpg') }}">
                        </a>
                    </div>
                                <div>
                        <a class="uk-inline yn-anim uk-scrollspy-inview " href="{{ asset('assets/images/gallery/5.jpg') }}" style="">
                            <img class="thumb-gallery" src="{{ asset('assets/images/gallery/5.jpg') }}">
                        </a>
                    </div>
                </div>       
                           
           </div>
        </section>

        <section id="guess-book" class="uk-container uk-container-small">
            <div class="tw-h-8"></div>

            <h2 class="tw-text-3xl yn-color tw-text-center"> Buku Tamu </h2>

            <button class="uk-button uk-button-success uk-align-center" type="button"
                uk-toggle="target: #buku; animation:  uk-animation-slide-left;" style="margin-bottom:0px;"
                aria-expanded="true"><span uk-icon="icon: file-edit;" class="uk-icon"><svg width="20" height="20"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke="#000"
                            d="M18.65,1.68 C18.41,1.45 18.109,1.33 17.81,1.33 C17.499,1.33 17.209,1.45 16.98,1.68 L8.92,9.76 L8,12.33 L10.55,11.41 L18.651,3.34 C19.12,2.87 19.12,2.15 18.65,1.68 L18.65,1.68 L18.65,1.68 Z">
                        </path>
                        <polyline fill="none" stroke="#000" points="16.5 8.482 16.5 18.5 3.5 18.5 3.5 1.5 14.211 1.5">
                        </polyline>
                    </svg></span>
                Isi Buku Tamu</button>

            <a class="uk-button uk-button-success uk-align-center" href="#modal-center" uk-toggle="" style="width: 171px;
            margin-top: 8px;" aria-expanded="false">GIFTS</a>

            <!-- gifts -->
            <div id="modal-center" class="uk-flex-top uk-modal" uk-modal="">
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="color:#333">

                    <button class="uk-modal-close-default uk-icon uk-close" type="button" uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>
                    <p class="uk-text-center">Scan untuk memberikan kebahagian untuk Pengantin.</p>
                    <ul uk-accordion="" class="uk-accordion">
                    <li class="uk-open">
                        <a class="uk-accordion-title" href="#">GOPAY</a>
                        <div class="uk-accordion-content">
                            <img src="images/gopay.jpeg">
                        </div>
                    </li>
                    <li class="uk-open">
                        <a class="uk-accordion-title" href="#">BCA</a>
                        <div class="uk-accordion-content">
                            <img src="images/bca.jpeg">
                        </div>
                    </li>
                    
                </ul>
                </div>
            </div>

            <!-- guest book -->
            <div id="buku" hidden class="uk-card uk-card-default uk-margin-top uk-card-body uk-align-center uk-width-1-2@m" style="">
                <form method="POST" id="comment_form">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                            <div class="uk-form-label">Nama Tamu :</div>
                            <input type="text" id="author" name="author" class="tw-bg-gray-lighter tw-appearance-none tw-rounded tw-w-full tw-py-2 tw-px-4 tw-ring-opacity-20 focus:tw-ring focus:tw-ring-brown-lighter focus:tw-outline-none">
                            {{-- <span style="font-size:12px;"><span id="charName"></span></span> --}}
                        </div>

                        <div class="uk-margin">
                            <div class="uk-form-label">Pilih Kehadiran :</div>
                            <select id="presence" name="presence" class="tw-bg-gray-lighter tw-appearance-none tw-rounded tw-w-full tw-py-2 tw-px-4 tw-ring-opacity-20 focus:tw-ring focus:tw-ring-brown-lighter focus:tw-outline-none" onchange="showDiv('hidden_div', this)">
                                <option value="yes" selected="">Berkenan hadir</option>
                                <option value="no">Maaf tidak bisa hadir</option>
                            </select>
                        </div>
                    
                        <div id="hidden_div" class="uk-margin" style="display: block;">
                            <div class="uk-form-label">Jumlah Tamu:</div>
                            <select id="person" name="person" class="uk-select">
                                
                                <option value="1">1 Orang</option>
                                <option value="2">2 Orang</option>
                                <option class="uk-hidden" id="kosong" value="0">Pilih</option> 
                            </select>
                        </div>

                        <div class="uk-margin">
                            <div class="uk-form-label">Isi Ucapan :</div>
                            <textarea id="comment_content" name="comment_content"class="tw-bg-gray-lighter tw-appearance-none tw-rounded tw-w-full tw-py-2 tw-px-4 tw-ring-opacity-20 focus:tw-ring focus:tw-ring-brown-lighter focus:tw-outline-none" rows="5" placeholder="Ucapan Selamat" onkeyup="countComm(this)"></textarea>
                            <span style="font-size:12px;"><span id="charNum"></span></span>
                        </div>
                        <!-- id undangan -->
                        <input type="hidden" name="comment_id" id="comment_id" value="81">
                    </fieldset>
                    <button id="submit" class="uk-button uk-button-primary uk-width-1-1" style="margin-bottom:4px; background: #d6ba8d !important;" uk-toggle="target: #buku; animation:  uk-animation-slide-left, uk-animation-slide-left uk-animation-reverse;" aria-expanded="true">Kirim Pesan</button>
                    <button class="tw-bg-gray-100 tw-text-black tw-text-base tw-font-medium tw-w-full tw-p-2 tw-mt-3 tw-rounded-lg" type="button" uk-toggle="target: #buku; animation:  uk-animation-slide-left, uk-animation-slide-left uk-animation-reverse;" aria-expanded="true">Batal</button>
                </form>
            </div>
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

      
    
    </body>

    <script src="{{ asset('js/uikit.js') }}"></script>
    <script>
        var prevScrollpos = window.pageYOffset;
		window.onscroll = function () {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.getElementById("navbar").style.bottom = "0";
			} else {
				document.getElementById("navbar").style.bottom = "-78px";
			}
			prevScrollpos = currentScrollPos;
		}

		// $(function () {
			var modal = UIkit.modal("#my_id");
			modal.show();
		// });
        // const buttonOpenInvitation =  document.getElementById('open-invitation');
        // const overlay =  document.querySelector('.overlay');
        // const modalPanel =  document.querySelector('.modal-panel');
        // const audio =  document.getElementById('audio');

        // buttonOpenInvitation.addEventListener('click', function() {
        //     modalPanel.classList.add('hidden');
        //     overlay.classList.add('hidden');
        //     audio.play();
        // });

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
