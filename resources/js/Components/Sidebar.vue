<script setup>
import { HomeIcon } from "@heroicons/vue/24/solid";
import { ref } from "vue";

const menuOpen = ref(false);
</script>
<template>
    <div class="">

    
    <div
        v-bind="{ menuOpen: false }"
        class=" flex font-sans min-h-screen custom-scrollbar  lg:w-[200px] w-[0px]"
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
                <h1 className=" absolute top-12 w-full text-md mt-4 font-bold text-green-800">
                    Simiti Constructors
                </h1>
            </div>
                </div>
            </div>
            <!-- end::Logo -->
            <!-- start::Navigation -->
            <div class="py-4 mt-5 ">
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

        <div class="lg:pl-64 w-full flex flex-col">
            <div class="flex flex-col sticky top-0 z-10">
                <header
                    class="flex justify-between items-center h-16 py-4 px-6 bg-gray-100"
                >
                    <div class="flex items-center">
                        <button
                            @click="menuOpen = true"
                            class="text-gray-500 hover:text-primary focus:outline-none lg:hidden transition duration-200"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7"
                                ></path>
                            </svg>
                        </button>
                    </div>

                    <div class="sm:flex sm:items-center sm:ms-6">
                        <!-- Settings Dropdown -->
                        <div class="ms-3 relative">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                    <button
                                        v-if="
                                            $page.props.jetstream
                                                .managesProfilePhotos
                                        "
                                        class="flex text-sm border-2 border-transparent text-white rounded-full focus:outline-none focus:border-gray-300 transition"
                                    >
                                        <img
                                            class="h-8 w-8 rounded-full object-cover"
                                            :src="
                                                $page.props.auth.user
                                                    .profile_photo_url
                                            "
                                            :alt="$page.props.auth.user.name"
                                        />
                                    </button>

                                    <span v-else class="inline-flex rounded-md">
                                        <button
                                            type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150"
                                        >
                                            {{ $page.props.auth.user.name }}

                                            <svg
                                                class="ms-2 -me-0.5 h-4 w-4"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                                                />
                                            </svg>
                                        </button>
                                    </span>
                                </template>

                                <template #content>
                                    <!-- Account Management -->
                                    <div
                                        class="block px-4 py-2 text-xs text-gray-400"
                                    >
                                        Manage Account
                                    </div>
                                    <DropdownLink :href="route('profile.show')">
                                        Profile
                                    </DropdownLink>
                                    <DropdownLink
                                        v-if="
                                            $page.props.jetstream.hasApiFeatures
                                        "
                                        :href="route('api-tokens.index')"
                                    >
                                        API Tokens
                                    </DropdownLink>
                                    <div class="border-t border-gray-200" />
                                    <!-- Authentication -->
                                    <form @submit.prevent="logout">
                                        <DropdownLink as="button">
                                            Log Out
                                        </DropdownLink>
                                    </form>
                                </template>
                            </Dropdown>
                        </div>
                    </div>
                </header>
            </div>
            <!-- Page Heading -->
            <header v-if="$slots.header">
                <div
                    class="max-w-7xl mx-auto py-6 px-4 bg-white sm:px-6 lg:px-12 flex justify-between"
                >
                    <slot name="header" />
                </div>
            </header>
            <div class="h-full bg-white px-12">
                <slot />
            </div>
        </div>
    </div>
    <!-- <div class="w-[200px] bg-[#1F2937] border-green-200 min-h-screen">
        <div class="py-4">
            <div class="mb-10">
                <h3 class="mx-2 mb-2 text-gray-500 tracking-widest">
                    Main Tab
                </h3>
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
    </div> -->
</div>
</template>

<style></style>
