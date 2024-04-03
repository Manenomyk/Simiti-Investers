<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { HomeIcon } from "@heroicons/vue/24/solid";
import Sidebar from "../Components/Sidebar.vue";
import Chart from 'chart.js/auto';


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
                                <p class="text-3xl">154</p>
                                
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
                </div>
                <div class="grid grid-cols-2">
                    
                </div>
                
            </div>
        </AppLayout>
    </div>
</template>
