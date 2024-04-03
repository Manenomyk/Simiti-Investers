<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";
import { computed } from "vue";

defineProps({
    data: Object,
});

const computedImagePath = computed(() => (image) => {
    if (!image || !image) {
        console.error("Image or image name is missing:", image);
        return ""; // Or provide a default path
    }
    return `/storage/${image}`;
});
</script>

<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex">
                <div class="min-h-screen">
                    <Sidebar />
                </div>
                <div class="bg-gray-100 mx-4">
                    {{ data }}
                    <div
                        v-for="item in data"
                        :key="item.id"
                        className="max-w-[1240px] mx-auto mx-3 grid md:grid-cols gap-2 text-gray-300"
                    >
                        <div
                            className=" container rounded-md shadow-lg bg-white flex justify-between mt-10"
                        >
                            <div
                                class="sm:grid grid-cols-2 gap-20 w-full mx-auto py-10 border-b border-gray-200"
                            >
                                <div>
                                    <img
                            :src="computedImagePath(item.image1)"
                            class="absolute flex align-center"
                            style="width: 100%;height:100%; object-fit:fill;"
                            alt=""
                        />
                                </div>
                                <div>
                                    <h2
                                        class="text-gray-700 font-bold text-3xl pb-4"
                                    >
                                        {{ item.title }}
                                    </h2>

                                    <span class="text-gray-500">
                                        By
                                        <span
                                            class="font-bold italic text-gray-800"
                                            >Amazing Bahati</span
                                        >, Created on {{ item.updated_at }}
                                    </span>

                                    <p
                                        class="text-md text-gray-700 pt-8 pb-5 leading-8 font-light"
                                    >
                                        {{ item.content1 }}
                                    </p>

                                    <a
                                        href=""
                                        class="bg-green-800 text-white font-extrabold py-2 m-2 px-6 rounded-lg"
                                        >Read more</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
