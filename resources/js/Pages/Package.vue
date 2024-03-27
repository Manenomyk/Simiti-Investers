<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";
import "../../css/app.css";
</script>
<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex">
                <div class="min-h-screen">
                    <Sidebar />
                </div>
                <div class="back grid grid-cols-1 w-screen">
                    <div class="flex text-gray-100 pt-10">
                        <div
                            class="mx-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center"
                        >
                        <h1 class="text-yellow-600 text-3xl font-bold text-shadow-md">Upgrade today</h1>
                            <h1
                                class="sm:text-white text-5xl font-bold text-shadow-md pb-14"
                            >
                                Experience our best packages
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
