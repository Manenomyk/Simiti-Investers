<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { HomeIcon } from "@heroicons/vue/24/solid";
import Sidebar from "../Components/Sidebar.vue";
</script>

<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Accountant</h2>
        </template> -->
            <div class="flex min-h-screen">
                <Sidebar />
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
