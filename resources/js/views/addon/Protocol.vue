<template>
    <div class="sm:tw-max-w-screen-sm tw-px-3 sm:tw-px-7 tw-mx-auto protocol">
        <div class="tw-flex tw-py-4 tw-px-10">
            <div class="tw-mx-auto">
               <h2 class="tw-text-3xl sm:tw-text-4xl tw-text-center" style="font-family: Scarlet"> Tata Tertib Acara </h2>
            </div>
        </div>

        <div class="carousel tw-mt-8" data-flickity>
            <div class="carousel-cell tw-w-full tw-h-28">
                <div class="card tw-px-4 tw-py-4 tw-h-full">
                    <div class="tw-flex tw-items-center">
                        <div class="tw-w-1/4">
                            <img src="assets/images/protocol/protocol-1.png" width="85" class="tw-h-auto tw-mx-auto" alt="Masker">
                        </div>
                        <div class="tw-w-3/4 sm:tw-w-full">
                           <p class="tw-text-center tw-text-base sm:tw-text-xl tw-font-semibold tw-break-words">Wajib menggunakan masker</p> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell tw-w-full tw-h-28">
                <div class="card tw-px-4 tw-py-4 tw-h-full">
                    <div class="tw-flex  tw-items-center">
                        <div class="tw-w-1/4">
                            <img src="assets/images/protocol/protocol-4.png" width="85" class="tw-h-auto tw-mx-auto" alt="Mencuci Tangan">
                        </div>
                        <div class="tw-w-3/4">
                           <p class="tw-text-center tw-text-base sm:tw-text-xl tw-font-semibold tw-break-words">Mencuci tangan menggunakan hand sanitizer atau air dan sabun</p> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell tw-w-full tw-h-28">
                <div class="card tw-px-4 tw-py-4 tw-h-full">
                    <div class="tw-flex tw-items-center">
                        <div class="tw-w-1/4">
                            <img src="assets/images/protocol/protocol-3.png" width="85" class="tw-h-auto tw-mx-auto" alt="Physical Distancing">
                        </div>
                        <div class="tw-w-3/4">
                           <p class="tw-text-center tw-text-base sm:tw-text-xl tw-font-semibold tw-break-words">Menerapkan physical distancing</p> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell tw-w-full tw-h-28">
                <div class="card tw-px-4 tw-py-4 tw-h-full">
                    <div class="tw-flex  tw-items-center">
                        <div class="tw-w-1/4">
                            <img src="assets/images/protocol/protocol-2.png" width="85" class="tw-h-auto tw-mx-auto" alt="Berlaku 2 orang">
                        </div>
                        <div class="tw-w-3/4">
                           <p class="tw-text-center tw-text-base sm:tw-text-xl tw-font-semibold tw-break-words">Undangan ini hanya berlaku untuk 2 orang</p> 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

.card {
    border-color: #d6ba8d;
    border-radius: 0.9rem;
    border-width: 2px;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    overflow: hidden;
    position: relative;
    height: auto;
}

.tw-text-grey-darker {
    --tw-text-opacity: 1;
    color: rgba(96,111,123,var(--tw-text-opacity));
}

.carousel-cell {
  margin-right: 10px;
  height: 100px;
}


</style>