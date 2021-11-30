<template>
    <div>
        
        <Audio></Audio>

        <Cover></Cover>

        <Mempelai></Mempelai>

        <Acara></Acara>

        <Gallery></Gallery>
        
        <Protocol></Protocol>

        <section id="bukutamu" class="uk-container uk-container-small">
           <div class="tw-h-24"></div>

            <section>
                <h2 class="tw-text-3xl sm:tw-text-4xl tw-text-center" style="font-family: Scarlet"> Buku Tamu </h2>

                <button class="uk-button uk-button-success uk-align-center" type="button" uk-toggle="target: #buku; animation:  uk-animation-slide-left;" style="margin-bottom:0px;" aria-expanded="false"><span uk-icon="icon: file-edit;" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke="#000" d="M18.65,1.68 C18.41,1.45 18.109,1.33 17.81,1.33 C17.499,1.33 17.209,1.45 16.98,1.68 L8.92,9.76 L8,12.33 L10.55,11.41 L18.651,3.34 C19.12,2.87 19.12,2.15 18.65,1.68 L18.65,1.68 L18.65,1.68 Z"></path><polyline fill="none" stroke="#000" points="16.5 8.482 16.5 18.5 3.5 18.5 3.5 1.5 14.211 1.5"></polyline></svg></span>
                Isi Buku Tamu</button>

                <a class="uk-button uk-button-success uk-align-center" href="#modal-center" uk-toggle="" style="width: 171px;
                    margin-top: 8px;" aria-expanded="false">Gifts</a>

                <!-- gifts -->
                <div id="modal-center" class="uk-flex-top uk-modal" uk-modal="">
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="color:#333">

                        <button class="uk-modal-close-default uk-icon uk-close" type="button" uk-close="">
                            
                        </button>
                        <p class="uk-text-center tw-mb-5">Scan untuk memberikan kebahagian kepada Pengantin.</p>
                        <ul uk-accordion="" class="uk-accordion">
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">OVO</a>
                                <div class="uk-accordion-content">
                                    <img src="assets/images/gifts/ovo.jpg" class="tw-mx-auto tw-h-auto" width="400" alt="OVO QR CODE">
                                </div>
                            </li>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">BCA</a>
                                <div class="uk-accordion-content">
                                     <img src="assets/images/gifts/bca.jpg" class="tw-mx-auto tw-h-auto" width="400" alt="BCA QR CODE">
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <FormGuestBook v-on:completed="addComment"></FormGuestBook>

            </section>

            <div class="tw-h-16"></div>

            <div id="guest_comment" class="uk-container uk-container-small">
                <div>
                    <Comment 
                        v-for="(comment, index) in comments"
                        v-bind:comment="comment"
                        v-bind:key="index"></Comment>
                </div>
            </div>
        </section>

        <div class="tw-h-28"></div>

        <p class="tw-text-xs tw-text-extralight tw-text-center tw-italic text-thelast">
            - 'the last good man'
        </p>

        <hr class="divider-thelast">

        <div class="tw-h-12"></div>

        <Navbar></Navbar>
        <MusicBox></MusicBox>
    </div>
</template>

<script>

import Comment from './components/Comment.vue';
import Gallery from './components/Gallery.vue';
import Acara from './components/Acara.vue';
import Mempelai from './components/Mempelai.vue';
import Cover from './components/Cover.vue';
import FormGuestBook from './components/FormGuestBook.vue';

import Audio from './addon/Audio.vue';
import Navbar from './addon/Navbar.vue';
import MusicBox from './addon/MusicBox.vue';
import Protocol from './addon/Protocol.vue';

export default {
    components: {
        Cover,
        Mempelai,
        Acara,
        Gallery,
        Protocol,
        FormGuestBook,
        Comment,
        Audio,
        Navbar,
        MusicBox,
    },

    data() {
        return {
            comments: [],
            limit: 10,
            busy: false
        }
    },

    created() {
        // this.fetchComments();
        this.loadMore();
    },

    methods: {
        fetchComments() {
            axios.get('comments')
                .then(({data}) => {
                    this.comments = data;
                });
        },
        addComment(comment) {
            this.comments.unshift(comment);
        },

        loadMore() {
            console.log("Adding 10 more data results");
            this.busy = true;
              axios.get('comments')
                .then(({data}) => {
                    this.comments = data.data;

                    const append = response.data.slice(this.comments.length, this.comments.length + this.limit);
                    this.comments = this.comments.concat(append);
                    this.busy = false;
                });
        }

          
    },
}
</script>

<style scoped>
.text-thelast {
    color: rgba(206, 180, 108, 0.75);
}

.divider-thelast {
    margin: 0 auto;
    width: 15%;
    margin-top: 3px;
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(206, 180, 108, 0.75), rgba(255, 255, 255, 0));
}
</style>