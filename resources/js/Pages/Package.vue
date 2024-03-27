<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";
import "../../css/app.css";
import Footer from "@/Components/Footer.vue";
</script>
<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex">
                <div class="min-h-screen">
                    <Sidebar />
                </div>
                <div class="h-[500px]">
                    <div class="back grid grid-cols-1 w-[1080px]">
                        <div class="flex text-gray-100 bottom-20">
                            <div
                                class="mx-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center"
                            >
                                <h1
                                    class="text-yellow-600 text-3xl font-bold text-shadow-md"
                                >
                                    Upgrade today
                                </h1>
                                <h1
                                    class="sm:text-white text-5xl font-bold text-shadow-md pb-14"
                                >
                                    Experience our best packages
                                </h1>
                            </div>
                        </div>

                        <div class="absolute top-[500px] h-auto bg-gray-100">
                            <div
                                className="max-w-[1240px] mt-4 mx-auto py-10 flex  gap-8 text-gray-300 mb-10 justify-center"
                            >
                                <div
                                    class="mt-10 w-[250px] rounded-md shadow-lg sm:items-center text-black"
                                >
                                    <div class=" ">
                                        <img
                                            src="../../Assets/pic.svg"
                                            class="rounded-full object-cover mb-5 h-[150px]"
                                            alt="logo image"
                                        />
                                        <div
                                            class="mt-4 mb-4 font-bold text-yellow-600 m-3 text-lg"
                                        >
                                            Free package
                                        </div>
                                        <div class="text-sm m-2">
                                            <p>Access to blogs</p>
                                            <p>Supplier  view</p>
                                            <p>Minimal access to supplier profile</p>
                                            <p>No Rating</p>
                                            <p>No review</p>
                                            <p>No Access to Insurance Providers</p>
                                            <p>No Access to Logistics Providers</p>
                                        </div>
                                        <div
                                            class="bg-green-800 mx-auto  rounded-lg w-[150px] text-white text-center py-1 m-2 px-6"
                                        >
                                            Upgrade
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-10 w-[250px] rounded-md shadow-lg sm:items-center text-black"
                                >
                                    <div class=" ">
                                        <img
                                            src="../../Assets/pic.svg"
                                            class="rounded-full object-cover mb-5 h-[150px]"
                                            alt="logo image"
                                        />
                                        <div
                                            class="mt-4 mb-4 font-bold text-yellow-600 m-3 text-lg"
                                        >
                                            Silver Package
                                        </div>
                                        <div class="text-sm m-2">
                                            <p>Access to blogs</p>
                                            <p>Supplier  view</p>
                                            <p>Access to supplier profile</p>
                                            <p>Supplier Rating Rights</p>
                                            <p>Supplier review Rights</p>
                                            <p>Access to Insurance Providers</p>
                                            <p>Access to Logistics Providers</p>
                                        </div>
                                        <div
                                            class="bg-green-800 mx-auto  rounded-lg w-[150px] text-white text-center py-1 m-2 px-6"
                                        >
                                            Upgrade
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="mt-10 w-[250px] rounded-md shadow-lg sm:items-center text-black"
                                >
                                    <div class=" ">
                                        <img
                                            src="../../Assets/pic.svg"
                                            class="rounded-full object-cover mb-5 h-[150px]"
                                            alt="logo image"
                                        />
                                        <div
                                            class="mt-4 mb-4 font-bold text-yellow-600 m-3 text-lg"
                                        >
                                            Gold Package
                                        </div>
                                        <div class="text-sm m-2">
                                            <p>Access to blogs</p>
                                            <p>Supplier  view</p>
                                            <p>Access to supplier profile</p>
                                            <p>Supplier Rating Rights</p>
                                            <p>Supplier review Rights</p>
                                            <p>Access to Insurance Providers</p>
                                            <p>Access to Logistics Providers</p>
                                            <p>Cheaper Cost</p>
                                        </div>
                                        <div
                                            class="bg-green-800 mx-auto  rounded-lg w-[150px] text-white text-center py-1 m-2 px-6"
                                        >
                                            Upgrade
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <Footer />
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
