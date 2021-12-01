<template>
    <div>
        <div class="tw-bg-white tw-w-full tw-py-5 tw-px-4 tw-h-auto tw-mb-4 tw-rounded-lg">
            <div class="tw-flex tw-space-x-2 sm:tw-space-x-4">
                <div class="tw-flex-none tw-h-12 tw-w-12 sm:tw-h-14 sm:tw-w-14 md:tw-h-14 md:tw-w-14 tw-rounded-full tw-bg-brown-lighter tw-relative">
                    <span class="tw-font-extrabold tw-text-white tw-text-center tw-text-1xl tw-p-2 tw-mt-0.5 tw-absolute tw-top-0 tw-left-0 tw-right-0">
                        {{ comment.name | guestFirstName }}
                    </span>
                </div>
                <div class="tw-w-full">
                    <div class="tw-flex tw-justify-between">
                        <div>
                            <p class="tw-text-gray-600 sm:tw-text-base lg:tw-text-lg tw-font-semibold">{{ comment.name }}</p>
                        </div>
                        <div class="tw-flex-shrink-0">
                            <p class="tw-text-gray-600 tw-text-xs tw-mt-0.5 sm:tw-text-sm tw-font-light">{{ comment.created_at }}</p>
                        </div>
                    </div>
                    <div class="tw-mt-3">
                        <span class="tw-text-xs sm:tw-text-sm tw-px-2 tw-font-semibold tw-rounded-md tw-py-0.5" :class="badgeClass(comment.presence)">
                           {{ comment.presence | presenceFormat }}
                        </span>
                    </div>
                    <div class="tw-mt-0.5">
                        <p class="sm:tw-text-base lg:tw-text-lg white-space comment">{{ comment.comment }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.white-space {
    white-space: pre-line;
}
.comment {
    color: rgb(51, 51, 51);
    font-size: 14px;
    font-weight: 400 !important;
    line-height: 24px;
}
</style>

<script>
export default {
    props: ['comment'],

    filters: {
        presenceFormat(presence) {
            if(presence == 1)
                return 'Berkenan hadir';
            else
                return 'Maaf tidak bisa hadir'
        },
        guestFirstName(name) {
            return name.charAt(0).toUpperCase();
        }
    },

    methods: {
        badgeClass(presence) {
            if(presence == 1)
                return 'tw-bg-opacity-50 tw-bg-brown-lighter tw-text-brown-dark';
            else
                return 'tw-bg-opacity-10 tw-bg-gray-500 tw-text-gray-500';
        }
    },
}
</script>