<template>
    <div>
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
  
              <button class="uk-modal-close-default uk-icon uk-close" type="button" uk-close=""><svg width="14" height="14"
                      viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                      <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
                      <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
                  </svg></button>
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
      <div id="buku" hidden class="uk-card uk-card-default uk-margin-top uk-card-body uk-align-center uk-width-1-2@m">
        {{-- <div class="tw-w-full">
            <img src="{{ asset('assets/images/decor4.png') }}" width="175" class="tw--mt-5 tw-mb-1 tw-mx-auto" alt="">
        </div> --}}
          <form @submit.prevent="onSubmit"  id="comment_form">
              <fieldset class="uk-fieldset">
                  <div class="uk-margin">
                      <div class="uk-form-label">Nama Tamu :</div>
                      <input type="text" id="guest_name" name="guest_name" class="guestbook-form">
                  </div>
  
                  <!-- <div class="uk-margin">
                      <div class="uk-form-label">Alamat Kamu:</div>
                      <textarea name="guestaddress" rows="2" class="guestbook-form"></textarea>
                  </div>  -->
  
                  <div class="uk-margin">
                      <div class="uk-form-label">Pilih Kehadiran :</div>
                      <select id="guest_presence" name="guest_presence" class="guestbook-form"
                          onchange="showDiv('hidden_div', this)">
                          <option value="1" selected="">Berkenan hadir</option>
                          <option value="0">Maaf tidak bisa hadir</option>
                      </select>
                  </div>
  
                  <div id="hidden_div" class="uk-margin" style="display: block;">
                      <div class="uk-form-label">Jumlah Tamu:</div>
                      <select id="guestperson" name="guestperson" class="guestbook-form">
  
                          <option value="1">1 Orang</option>
                          <option value="2">2 Orang</option>
                          <option class="uk-hidden" id="kosong" value="0">Pilih</option>
                      </select>
                  </div>
  
                  <div class="uk-margin" style="margin-bottom: 0px">
                      <div class="uk-form-label">Isi Ucapan :</div>
                      <textarea id="guest_comment" name="guest_comment" class="guestbook-form" rows="5"
                          placeholder="Ucapan Selamat"></textarea>
                  </div>
  
              </fieldset>
  
              <div class="tw-h-4"></div>
              <button class="tw-bg-brown-lighter tw-text-white tw-text-sm tw-w-full tw-p-2 tw-rounded-lg hover:tw-shadow-md" :class="{ 'tw-opacity-50 tw-cursor-not-allowed' : isPressed }"
                  aria-expanded="true">Kirim Pesan</button>
              <button class="tw-bg-gray-100 tw-text-black tw-text-sm tw-w-full tw-p-2 tw-mt-3 tw-rounded-lg" type="button"
                  uk-toggle="target: #buku; animation:  uk-animation-slide-left, uk-animation-slide-left uk-animation-reverse;"
                  aria-expanded="true">Batal</button>
                  
          </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
      data() {
          return {
              isPressed: false,
          }
      },
      methods:{
          onSubmit() {
              this.isPressed = true;
          }
      }
  }
  </script>
  