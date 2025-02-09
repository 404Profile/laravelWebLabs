<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import {router} from "@inertiajs/vue3";

const props = defineProps({
    post: Object,
})

const deletePost = () => {
    router.delete(route('posts.destroy', props.post.id));
}
</script>

<template>
    <AppLayout title="Show Post">
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center">
                    Post {{ post.id }}
                </h2>

                <div class="gap-3 flex flex-wrap items-center justify-start">
                    <button @click="deletePost" class="relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg gap-1.5 px-3 py-1.5 text-sm inline-grid shadow-sm bg-amber-600 text-white hover:bg-amber-500 focus-visible:ring-amber-500/50 dark:bg-amber-500 dark:hover:bg-amber-400 dark:focus-visible:ring-amber-400/50">
                        <span>
                            Delete post
                        </span>
                    </button>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ post.title }}
                        </h2>

                        <img class="lg:h-72 md:h-52 w-full object-cover object-center"
                             :src="'/storage/' + post.photo_path" alt="404">

                        <div>
                            {{ post.body }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>
</template>
