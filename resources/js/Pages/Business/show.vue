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
                <div
                    className=" container grid grid-cols-2 rounded-md  shadow-lg bg-white p-5 mx-10 my-2"
                >
                    <div
                        class="relative flex justify-center align-center"
                    >
                        <img
                            :src="computedImagePath(data.photo)"
                            class="absolute flex align-center"
                            alt=""
                        />
                    </div>
                    <div class="relative">
                        <h2 class="text-gray-700 font-bold text-3xl mt-4 pb-4">
                            {{ data.name }}
                        </h2>

                        <span class="text-gray-500">
                            <span class="font-bold italic text-gray-800">{{
                                data.email
                            }}</span
                            >, Created on {{ data.updated_at }}
                        </span>

                        <div class="md:flex gap-3 mb-5 mt-10">
                            <div class="flex flex-col">
                                <span class="text-sm">Region</span>
                                <p
                                    class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1"
                                >
                                    {{ data.region }}
                                </p>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm">Location</span>
                                <p
                                    class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1"
                                >
                                    {{ data.location }}
                                </p>
                            </div>
                        </div>

                        <div class="md:flex gap-3 mb-5">
                            <div class="flex flex-col">
                                <span class="text-sm"
                                    >Category Name</span
                                >
                                <p
                                    class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1"
                                >
                                    {{ data.category }}
                                </p>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm"
                                    >Sub-Category Name</span
                                >
                                <p
                                    class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1"
                                >
                                    {{ data.sub_category }}
                                </p>
                            </div>
                        </div>

                        <div class="md:flex gap-3 mb-5">
                            <div class="flex flex-col">
                                <span class="text-sm">Gender</span>
                                <p
                                    class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1"
                                >
                                    {{ data.gender }}
                                </p>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm"
                                    >Annual Turnover</span
                                >
                                <p
                                    class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1"
                                >
                                    {{ data.annual_turnover }}
                                </p>
                            </div>
                        </div>
                        <div class="md:flex gap-3 mb-5">
                            <div class="flex flex-col">
                                <span class="text-sm"
                                    >Contact Number</span
                                >
                                <p
                                    class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1"
                                >
                                    {{ data.phone }}
                                </p>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm">Comment</span>
                                <p
                                    class="bg-blue-50 text-gray-500 w-[200px] border-gray-100 rounded-md px-5 py-1"
                                >
                                    {{ data.comment }}
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <a
                                href=""
                                class="flex justify-center w-[200px] bg-green-800 text-white font-extrabold py-2 my-2 px-6 rounded-lg"
                                >Rate</a
                            >
                            <a
                                href=""
                                class="flex justify-center w-[200px] bg-green-800 text-white font-extrabold py-2 my-2 px-6 rounded-lg"
                                >Review</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
