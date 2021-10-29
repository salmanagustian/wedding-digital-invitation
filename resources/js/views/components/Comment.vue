<template>
    <div>
        <div class="tw-bg-white tw-w-full tw-py-5 tw-px-4 tw-h-32 tw-mb-4 tw-rounded-lg">
            <div class="tw-flex tw-space-x-2">
                <div class="tw-flex-none tw-h-12 tw-w-12 tw-rounded-full tw-bg-brown-lighter tw-relative"> </div>
                <div class="tw-min-w-0 tw-flex tw-flex-wrap tw-w-full tw-justify-between">
                    <div class="tw-ml-2">
                        <p class="tw-text-gray-600 tw-font-semibold">{{ comment.name }}</p>
                    </div>
                    <div>
                        <span class="tw-text-xs tw-px-2 tw-font-medium tw-rounded-md tw-py-0.5" :class="badgeClass(comment.presence)">
                            {{ comment.presence | presenceText }}
                        </span>
                    </div>
                </div>
              
            </div>
            <div class="tw-flex-auto">
                <p class="tw-text-gray-600 tw-font-medium tw-mt-3">{{comment.comment }}</p>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    props: ['index','comment'],

    filters: {
        presenceText(presence) {
            if(presence == 1)
                return 'Berkenan hadir';
            else
                return 'Maaf tidak bisa hadir'
        }
    },

    methods: {
        badgeClass(presence) {
            if(presence == 1)
                return 'tw-bg-opacity-50 tw-bg-brown-lighter tw-text-yellow-900';
            else
                return 'tw-bg-opacity-10 tw-bg-gray-500 tw-text-gray-800';
        }
    },
}
</script>