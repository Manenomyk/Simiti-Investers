<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../../Components/Sidebar.vue";

defineProps({
    data: Object,
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
                    <div class="w-[400px] flex justify-center align-center">
                        <img src="../../../Assets/pic.svg" alt="" />
                    </div>
                    <div>
                        <h2 class="text-gray-700 font-bold text-3xl mt-4 pb-4">
                            {{data.name}}
                        </h2>

                        <span class="text-gray-500">
                            By
                            <span class="font-bold italic text-gray-800"
                                >Amazing Bahati</span
                            >, Created on {{ data.updated_at }}
                        </span>

                        <p
                            class="text-md text-gray-700 pt-8 pb-5 leading-8 font-light"
                        >
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Error consequuntur ratione officia, minima
                            quaerat quos? Natus, molestias? Suscipit totam,
                            nulla excepturi natus aliquid nemo veniam fuga
                            atque, voluptatum rem nostrum?
                        </p>

                        <a
                            href=""
                            class="bg-green-800 text-white font-extrabold py-2 m-2 px-6 rounded-lg"
                            >Read more</a
                        >
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
