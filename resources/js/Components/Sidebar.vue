<script setup>
import { HomeIcon } from "@heroicons/vue/24/solid";
import { ref } from "vue";

const menuOpen = ref(false);
</script>
<template>
    <div
        v-bind="{ menuOpen: false }"
        class="flex font-sans min-h-screen custom-scrollbar lg:w-[200px] w-[0px]"
    >
        <div
            :class="{ block: menuOpen, hidden: !menuOpen }"
            @click="menuOpen = false"
            class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"
        ></div>
        <aside
            :class="{
                'translate-x-0 ease-out': menuOpen,
                '-translate-x-full ease-in': !menuOpen,
            }"
            class="fixed font-sans z-30 inset-y-0 left-0 w-[200px] transition duration-300 bg-[#1F2937] border-green-200 overflow-y-auto lg:translate-x-0 lg:inset-0 custom-scrollbar"
        >
            <!-- start::Logo -->
            <div class="flex items-center px-4 bg-opacity-30 h-16">
                <div
                    class="text-gray-700 flex items-center space-x-2 group hover:text-black"
                >
                    <div className="block gap-2 ">
                        <a href="/"
                            ><img
                                src="../../Assets/log.png"
                                alt="/"
                                className="w-[80px] rounded-[50%] shadow-lg mx-2"
                        /></a>
                        <h1
                            className=" absolute top-12 w-full text-md mt-4 font-bold text-green-800"
                        >
                            Simiti Constructors
                        </h1>
                    </div>
                </div>
            </div>
            <!-- end::Logo -->
            <!-- start::Navigation -->
            <div class="py-4 mt-5">
                <div class="mx-3">
                    <a
                        href="/dashboard"
                        class="flex items-center py-2.5 text-white hover:text-orange-400 group"
                    >
                        <HomeIcon
                            class="h-5 w-5 text-white mr-2 group-hover:text-orange-600"
                        />
                        Home
                    </a>
                    <a
                        href="/RegisterBusiness"
                        class="flex items-center py-2.5 text-gray-500 hover:text-orange-400 group"
                    >
                        <HomeIcon
                            class="h-5 w-5 text-gray-400 mr-2 group-hover:text-orange-600"
                        />
                        Register Business
                    </a>
                    <a
                        href="/Portfolio"
                        class="flex items-center py-2.5 text-gray-500 hover:text-orange-400 group"
                    >
                        <HomeIcon
                            class="h-5 w-5 text-gray-400 mr-2 group-hover:text-orange-600"
                        />
                        Portfolio
                    </a>

                    <a
                        href="/Review"
                        class="flex items-center py-2.5 text-gray-500 hover:text-orange-400 group"
                    >
                        <HomeIcon
                            class="h-5 w-5 text-gray-400 mr-2 group-hover:text-orange-600"
                        />
                        Review
                    </a>
                    <a
                        href="/Categories"
                        class="flex items-center py-2.5 text-gray-500 hover:text-orange-400 group"
                    >
                        <HomeIcon
                            class="h-5 w-5 text-gray-400 mr-2 group-hover:text-orange-600"
                        />
                        Categories
                    </a>
                    <a
                        href="/Analytics"
                        class="flex items-center py-2.5 text-gray-500 hover:text-orange-400 group"
                    >
                        <HomeIcon
                            class="h-5 w-5 text-gray-400 mr-2 group-hover:text-orange-600"
                        />
                        Analytics
                    </a>
                    <a
                        href="/Insurers"
                        class="flex items-center py-2.5 text-gray-500 hover:text-orange-400 group"
                    >
                        <HomeIcon
                            class="h-5 w-5 text-gray-400 mr-2 group-hover:text-orange-600"
                        />
                        Insurance Providers
                    </a>
                    <a
                        href="/ServiceProviders"
                        class="flex items-center py-2.5 text-gray-500 hover:text-orange-400 group"
                    >
                        <HomeIcon
                            class="h-5 w-5 text-gray-400 mr-2 group-hover:text-orange-600"
                        />
                        Logistic Providers
                    </a>
                    <a
                        href="/Blogs"
                        class="flex items-center py-2.5 text-gray-500 hover:text-orange-400 group"
                    >
                        <HomeIcon
                            class="h-5 w-5 text-gray-400 mr-2 group-hover:text-orange-600"
                        />
                        Blogs
                    </a>
                </div>
            </div>
            <!-- end::Navigation -->
        </aside>
    </div>
</template>

<style></style>
