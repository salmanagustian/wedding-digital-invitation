<template>
    <div>
        <div class="music-box">
            <button class="music-box-toggle-btn"></button>
            <button class="music" id="unmute-sound" @click="unMuteAudio" v-show="!isMute">
                <span class="uk-icon uk-icon-image"
                    style="background-image: url('assets/images/unmute.png'); margin-top: -5px;"></span>
            </button>
            <button class="music" id="mute-sound" @click="muteAudio" v-show="isMute">
                <span class="uk-icon uk-icon-image"
                    style="background-image: url('assets/images/mute.png'); margin-top: -5px;"></span>
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isMute: false
            }
        },
        methods: {
            unMuteAudio() {
                this.isMute = true;
                document.getElementById('audio').pause();
            },
            muteAudio() {
                this.isMute = false;
                document.getElementById('audio').play();
            }
        },
    }
</script>

<style scoped>
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