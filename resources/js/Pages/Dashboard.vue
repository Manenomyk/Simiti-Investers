<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { HomeIcon } from '@heroicons/vue/24/solid'
</script>

<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Accountant</h2>
        </template> -->
            <div class="flex min-h-screen">
                <div class="w-48 bg-green-200 border-green-200">
                    <div class="py-4">
                        <div class="mb-10">
                            <h3
                                class="mx-6 mb-2 text-gray-500  tracking-widest"
                            >
                                Main Tab
                            </h3>
                            <a href="/" class="flex items-center px-12 py-2.5 text-gray-500 hover:text-orange-400 group">
                                <HomeIcon class="h-5 w-5 text-gray-400 mr-2 group-hover:text-orange-600"/>
                            Home
                            </a>
                        </div>
                    </div>
                </div>

                <div class="outercard md:flex-row flex-col mt-4 flex-1">
                    <div class="flex">
                        <div class="card1 mx-auto mb-3 mr-[1rem]">
                            <div class="text-center mt-2">
                                <p class="cardhead">
                                    <i>Total Users</i>
                                </p>
                            </div>
                            <div class="">
                                <p>All Users:</p>
                                <h3>users</h3>
                            </div>
                        </div>
                        <div class="card2 mx-auto mb-3">
                            <div class="text-center mt-2">
                                <p>
                                    <i>Total Vehicles</i>
                                </p>
                            </div>
                            <div class="">
                                <p>All Vehicles:</p>
                                <h3>trucks</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="card3 mx-auto mb-3 mr-[1rem]">
                            <div class="text-center mt-2">
                                <p>
                                    <i>Total Customers</i>
                                </p>
                            </div>
                            <div class="">
                                <p>Customers:</p>
                                <h3>customers</h3>
                            </div>
                        </div>
                        <div class="card4 mx-auto mb-3">
                            <div class="text-center mt-2">
                                <p>
                                    <i>Total Sales</i>
                                </p>
                            </div>
                            <div class="">
                                <p>Sales margin:</p>
                                <h3>profitx</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <canvas id="first"></canvas>
            </div>
        </AppLayout>
    </div>
</template>
