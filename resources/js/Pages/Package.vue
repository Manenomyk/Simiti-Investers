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

                        <div class="absolute top-[450px] h-auto bg-white">
                            <div
                                class="flex justify-center pb-4 bg-gray-100 pt-10 text-4xl font-bold text-shadow-lg text-gray-600"
                            >
                                Best deals just For you
                            </div>
                            <hr class="p-[1px] bg-yellow-600 mx-auto w-[300px]">
                            <div
                                className="max-w-[1240px] bg-gray-100 mx-auto py-10 flex  gap-8 text-gray-300 mb-10 justify-center"
                            >
                                <div
                                    class="mt-10 w-[250px] rounded-md shadow-lg sm:items-center text-black"
                                >
                                    <div class=" ">
                                        <div
                                            class="mt-4 mb-4 font-bold text-green-800 m-3 text-lg"
                                        >
                                            Free package
                                        </div>
                                        <hr class="" />
                                        <img
                                            src="../../Assets/bronze.png"
                                            class="mx-auto rounded-full object-cover mb-5 h-[150px]"
                                            alt="logo image"
                                        />
                                        <div
                                            class="font-bold text-3xl text-yellow-600 text-center"
                                        >
                                            Free Package
                                        </div>
                                        <hr
                                            class="bg-green-800 p-[1px] mx-auto w-[100px] mb-6"
                                        />
                                        <div class="text-sm m-2">
                                            <p>Access to blogs</p>
                                            <p>Supplier view</p>
                                            <p>Unlimited Customer Service</p>
                                            <p>
                                                Minimal access to supplier
                                                profile
                                            </p>
                                            <p>No Rating</p>
                                            <p>No review</p>
                                            <p>
                                                No Access to Insurance Providers
                                            </p>
                                            <p>
                                                No Access to Logistics Providers
                                            </p>
                                        </div>
                                        <div
                                            class="bg-green-800 mx-auto rounded-lg w-[150px] text-white text-center py-1 m-2 px-6"
                                        >
                                            Upgrade
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-10 w-[250px] rounded-md shadow-lg sm:items-center text-black"
                                >
                                    <div class=" ">
                                        <div
                                            class="mt-4 mb-4 font-bold text-green-800 m-3 text-lg"
                                        >
                                            Silver Package
                                        </div>
                                        <hr />
                                        <img
                                            src="../../Assets/silver.png"
                                            class="mx-auto rounded-full object-cover mb-5 h-[150px]"
                                            alt="logo image"
                                        />
                                        <div
                                            class="font-bold text-3xl text-yellow-600 text-center"
                                        >
                                            Ksh 1,200<span
                                                class="text-gray-500 text-lg font-bold"
                                                >/Month</span
                                            >
                                        </div>
                                        <hr
                                            class="bg-green-800 p-[1px] mx-auto w-[100px] mb-6"
                                        />
                                        <div class="text-sm m-2">
                                            <p>Access to blogs</p>
                                            <p>Supplier view</p>
                                            <p>Unlimited Customer Service</p>
                                            <p>Access to supplier profile</p>
                                            <p>Supplier Rating Rights</p>
                                            <p>Supplier review Rights</p>
                                            <p>Access to Insurance Providers</p>
                                            <p>Access to Logistics Providers</p>
                                        </div>
                                        <div
                                            class="bg-green-800 mx-auto rounded-lg w-[150px] text-white text-center py-1 m-2 px-6"
                                        >
                                            Upgrade
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="mt-10 w-[250px] rounded-md shadow-lg sm:items-center text-black"
                                >
                                    <div class=" ">
                                        <div
                                            class="mt-4 mb-4 font-bold text-green-800 m-3 text-lg"
                                        >
                                            Gold Package
                                        </div>
                                        <hr />
                                        <img
                                            src="../../Assets/gold.png"
                                            class="mx-auto rounded-full object-cover mb-5 h-[150px]"
                                            alt="logo image"
                                        />

                                        <div
                                            class="font-bold text-3xl text-yellow-600 text-center"
                                        >
                                            Ksh 800<span
                                                class="text-gray-500 text-lg font-bold"
                                                >/Year</span
                                            >
                                        </div>
                                        <hr
                                            class="bg-green-800 p-[1px] mx-auto w-[100px] mb-6"
                                        />
                                        <div class="text-sm m-2">
                                            <p>Access to blogs</p>
                                            <p>Supplier view</p>
                                            <p>Unlimited Customer Service</p>
                                            <p>Access to supplier profile</p>
                                            <p>Supplier Rating Rights</p>
                                            <p>Supplier review Rights</p>
                                            <p>Access to Insurance Providers</p>
                                            <p>Access to Logistics Providers</p>
                                            <p>Cheaper Cost</p>
                                        </div>
                                        <div
                                            class="bg-green-800 mx-auto rounded-lg w-[150px] text-white text-center py-1 m-2 px-6"
                                        >
                                            Upgrade
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-4"><Footer /></div>
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
