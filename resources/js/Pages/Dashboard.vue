<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { HomeIcon } from "@heroicons/vue/24/solid";
import Sidebar from "../Components/Sidebar.vue";
import Chart from 'chart.js/auto';


defineProps({
    data: Object,
    suppliers: Object,
    categories: Object,
    blogs: Object,
});

</script>

<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Accountant</h2>
        </template> -->
            <div class="flex">
                <div class="min-h-screen">
                    <Sidebar />
                </div>
                <div class="w-screen my-5  ">
                   
                    <div class="flex gap-10 justify-center">
                        <div class="card1 mx-auto mb-3 ">
                            <div class="text-center mt-2">
                                <p class="cardhead">
                                    <i>Total Suppliers</i>
                                </p>
                            </div>
                            <div class="">
                                <p class="text-3xl">{{data}}</p>

                            </div>
                        </div>
                        <div class="card2 mx-auto mb-3">
                            <div class="cardhead text-center mt-2">
                                <p>
                                    <i>Total Categories</i>
                                </p>
                            </div>
                            <div class="">
                                <p class="text-4xl">8</p>

                            </div>
                        </div>


                        <div class="card3 mx-auto mb-3 ">
                            <div class="cardhead text-center mt-2">
                                <p>
                                    <i>Total Sub-Categories</i>
                                </p>
                            </div>
                            <div class="">
                                <p class="text-3xl">12</p>
                                <!-- <h3>customers</h3> -->
                            </div>
                        </div>
                        <div class="card4 mx-auto mb-3">
                            <div class="cardhead text-center mt-2">
                                <p>
                                    <i>Total Blogs</i>
                                </p>
                            </div>
                            <div class="">
                                <p class="text-3xl">6</p>
                                <!-- <h3>profitx</h3> -->
                            </div>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 m-10 gap-4">
                        <div class="flex justify-center">

                            <div class="flex ">
                                <img src="../../Assets/adventure.svg " class=" " alt="">

                            </div>

                        </div>
                        <div class="bg-white shadow-xl p-5 rounded-md">

                            <div class="flex w-24 mb-4">
                                <img src="../../Assets/log.png " class="rounded-[50%] " alt="">

                            </div>
                            <p class="text-sm">
                                Welcome to Simiti Constructors, where craftsmanship meets innovation in every project we
                                undertake.
                                As purveyors of architectural excellence, we pride ourselves on seamlessly blending
                                timeless design
                                with cutting-edge technology to bring your visions to life. With a meticulous attention
                                to detail
                                and an unwavering commitment to quality, we transform spaces into masterpieces that not
                                only inspire
                                but also endure the test of time.
                            </p>
                            <hr class="mt-2 text-gray-800">
                            <div class="mt-6 bg-[#0f7955] flex justify-center rounded-lg text-white p-2 w-48">
                                Upgrade Your Package
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </AppLayout>
    </div>
</template>
