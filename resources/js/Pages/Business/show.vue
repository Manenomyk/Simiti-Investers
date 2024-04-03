<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../../Components/Sidebar.vue";
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
                <div>
                    <Sidebar />
                </div>

                <!-- {{ data }} -->
                <div class="grid md:grid-cols-2 m-10 gap-4">
                    <div class="flex justify-center">

                        <div class="flex ">
                            <img :src="computedImagePath(data.photo)" class="" alt="" />

                        </div>

                    </div>
                    <div class="bg-white shadow-xl p-5 rounded-md">

                        <div class="flex w-24 mb-4">
                            <img src="../../../Assets/log.png " class="rounded-[50%] " alt="">

                        </div>
                        <div class="">
                            <h2 class="text-gray-700 font-bold text-3xl mt-4 pb-4">
                                {{ data.name }}
                            </h2>

                            <span class="text-gray-500">
                                <span class="font-bold italic text-gray-800">{{
                                data.email
                            }}</span>, Created on {{ data.updated_at }}
                            </span>

                            <div class="md:flex gap-3 mb-5 mt-10">
                                <div class="flex flex-col">
                                    <span class="text-sm">Region</span>
                                    <p class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1">
                                        {{ data.region }}
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm">Location</span>
                                    <p class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1">
                                        {{ data.location }}
                                    </p>
                                </div>
                            </div>

                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span class="text-sm">Category Name</span>
                                    <p class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1">
                                        {{ data.category }}
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm">Sub-Category Name</span>
                                    <p class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1">
                                        {{ data.sub_category }}
                                    </p>
                                </div>
                            </div>

                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span class="text-sm">Gender</span>
                                    <p class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1">
                                        {{ data.gender }}
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm">Annual Turnover</span>
                                    <p class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1">
                                        {{ data.annual_turnover }}
                                    </p>
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span class="text-sm">Contact Number</span>
                                    <p class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1">
                                        {{ data.phone }}
                                    </p>
                                </div>

                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm">Comment</span>
                                <p class="bg-blue-50 text-gray-500 w-[420px] border-gray-100 rounded-md px-5 py-1">
                                    {{ data.comment }}
                                </p>
                            </div>

                            <div class="flex gap-4">
                                <a href=""
                                    class="flex justify-center w-[200px] bg-green-800 text-white font-extrabold py-2 my-2 px-6 rounded-lg">Rate</a>
                                <a href=""
                                    class="flex justify-center w-[200px] bg-green-800 text-white font-extrabold py-2 my-2 px-6 rounded-lg">Review</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </AppLayout>
    </div>
</template>
