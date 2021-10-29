<template>
  <div>
       <div class="tw-h-20"></div>
       
        <section id="guess-book" class="uk-container uk-container-small">
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

            <FormGuestBook v-on:completed="addComment"></FormGuestBook>

        </section>

        <div class="tw-h-20"></div>

        <section id="guest_comment" class="uk-container uk-container-small">
       
            <Comment 
                v-for="(comment, index) in comments"
                v-bind:comment="comment"
                v-bind:index="index"
                v-bind:key="comment.id"></Comment>
            </section>

        </section>
  </div>
</template>

<script>

import Comment from './components/Comment.vue';
import FormGuestBook from './components/FormGuestBook.vue';

export default {
    components: {
        Comment,
        FormGuestBook
    },

    data() {
        return {
            comments: [],
        }
    },

    created() {
        axios.get('comments')
            .then(({data}) => {
                this.comments = data;
            });
    },

    methods: {
        addComment(comment) {
            this.comments.unshift(comment);
        }
    },
}
</script>

<style scoped>

</style>