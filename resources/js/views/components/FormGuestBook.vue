<template>
  <div>
    <!-- guest book -->
    <div id="buku" hidden class="uk-card uk-card-default uk-margin-top uk-card-body uk-align-center uk-width-1-2@m">
        <form @submit.prevent="storeComment" id="guest_form">
            <fieldset class="uk-fieldset">
                <div class="uk-margin">
                    <div class="uk-form-label">Nama Tamu :</div>
                    <input type="text" v-model="guest.name" class="guestbook-form">
                </div>

                <!-- <div class="uk-margin">
                    <div class="uk-form-label">Alamat Kamu:</div>
                    <textarea name="guestaddress" rows="2" class="guestbook-form"></textarea>
                </div>  -->

                <div class="uk-margin">
                    <div class="uk-form-label">Pilih Kehadiran :</div>
                    <select v-model="guest.presence" class="guestbook-form">
                        <option value="1" :selected="true">Berkenan hadir</option>
                        <option value="0">Maaf tidak bisa hadir</option>
                    </select>
                </div>

                <div id="hidden_div" class="uk-margin">
                    <div class="uk-form-label">Jumlah Tamu:</div>
                    <select v-model="guest.person" class="guestbook-form">
                        <option value="1">1 Orang</option>
                        <option value="2">2 Orang</option>
                    </select>
                </div>

                <div class="uk-margin" style="margin-bottom: 0px">
                    <div class="uk-form-label">Isi Ucapan :</div>
                    <textarea v-model="guest.comment" class="guestbook-form" rows="5"
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
            isSelected: true,
            guest:{}
        }
    },
    methods:{
        storeComment() {
            this.isPressed = true;

            axios
                .post('comment/store', this.guest)
                .then(({data}) => {
                    this.isPressed = false;
                    this.guest.name = '';
                    this.guest.comment = '';
                    this.$emit('completed', data)
                })
                .catch(err => console.log(err))

        }
    }
}
</script>
