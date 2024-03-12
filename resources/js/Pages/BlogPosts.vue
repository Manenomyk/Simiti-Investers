<script setup>
import { Head, Link } from "@inertiajs/vue3";
import "../../css/welcome.css";
import Modal from "@/Components/Modal.vue";
// import method from "vendor/livewire/livewire/js/action/method";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />
    <div>
        <div class="">
            <div class="w-screen justify-item-center">
                <div class="fixed z-20 top-0 left-0 bg-white w-full shadow-md">
                    <div
                        class="container m-auto flex justify-between items-center text-gray-700"
                    >
                        <h1 class="pl-8 py-4 text-xl font-bold">SIMITI</h1>
                        <ul
                            class="hidden md:flex items-center text-base font-semibold cursor-pointer"
                        >
                            <a href="/">
                                <li
                                class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                            >
                                Home
                            </li>
                            </a>
                            <li
                                class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                            >
                                About
                            </li>
                            <li
                                class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                            >
                                <button
                                    class="relative flex justify-center items-center gap-5 pt-0 bg-gray-100 border focus:outline-none shadow text-gray-600 rounded focus:ring ring-gray-800 hover:rounded-lg group"
                                >
                                    <p class="px-4">Find suppliers</p>
                                    <span class="border-l p-2 hover:bg-gray-100"
                                        ><img
                                            src="../../Assets/arrow.png"
                                            class="w-3"
                                            alt=""
                                    /></span>
                                    <div
                                        class="absolute hidden group-focus:block z-20 top-full min-w-full w-max bg-white shadow-md mt-1 rounded"
                                    >
                                        <ul class="text-left border rounded">
                                            <li
                                                class="px-4 py-1 hover:bg-gray-100 border-b"
                                            >
                                                Featured Suppliers
                                            </li>
                                            <li
                                                class="px-4 py-1 hover:bg-gray-100 border-b"
                                            >
                                                Search By Category
                                            </li>
                                            <li
                                                class="px-4 py-1 hover:bg-gray-100 border-b"
                                            >
                                                Search By Region
                                            </li>
                                        </ul>
                                    </div>
                                </button>
                            </li>
                            <li
                                class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                            >
                                Contact
                            </li>
                            <a href="BlogPosts">
                                <li
                                class="bg-green-800 rounded-lg text-white py-2 px-6 mr-5"
                            >
                                Blogs
                            </li>
                            </a>

                            
                        </ul>
                        <button
                            class="block md:hidden py-3 px-3 mx-2 rounded focus:outline-none hover:bg-gray-200 group"
                        >
                            <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                            <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                            <div class="w-5 h-1 bg-gray-600"></div>
                            <div
                                class="absolute top-0 -right-full opacity-0 h-screen w-8/12 bg-white border transform group-focus:right-0 group-focus:opacity-100 transition-all duration-300"
                            >
                                <ul
                                    class="flex flex-col items-center w-full text-base cursor-pointer pt-10"
                                >
                                    <li
                                        class="bg-green-800 rounded-lg text-white py-2 px-6"
                                    >
                                        <a href="/">Home</a>
                                    </li>
                                    <li
                                        class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                                    >
                                        About
                                    </li>
                                    <li
                                        class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                                    >
                                        <button
                                            class="relative flex justify-center items-center gap-5 pt-0 bg-gray-100 border focus:outline-none shadow text-gray-600 rounded focus:ring ring-gray-800 hover:rounded-lg group"
                                        >
                                            <p class="px-4">Find suppliers</p>
                                            <span
                                                class="border-l p-2 hover:bg-gray-100"
                                                ><img
                                                    src="../../Assets/arrow.png"
                                                    class="w-3"
                                                    alt=""
                                            /></span>
                                            <div
                                                class="fixed hidden group-focus:block z-20 top-full min-w-full w-max bg-white shadow-md mt-1 rounded"
                                            >
                                                <ul
                                                    class="text-left border rounded"
                                                >
                                                    <li
                                                        class="px-4 py-1 hover:bg-gray-100 border-b"
                                                    >
                                                        Featured Suppliers
                                                    </li>
                                                    <li
                                                        class="px-4 py-1 hover:bg-gray-100 border-b"
                                                    >
                                                        Search By Category
                                                    </li>
                                                    <li
                                                        class="px-4 py-1 hover:bg-gray-100 border-b"
                                                    >
                                                        Search By Region
                                                    </li>
                                                </ul>
                                            </div>
                                        </button>
                                    </li>
                                    <li
                                        class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                                    >
                                        Contact
                                    </li>

                                    <li>
                                        <div
                                            v-if="canLogin"
                                            class="sm:top-0 sm:end-0 p-6 text-end z-10"
                                        >
                                            <Link
                                                v-if="$page.props.auth.user"
                                                :href="route('dashboard')"
                                                class="font-boldbold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-100"
                                                >Dashboard</Link
                                            >

                                            <template v-else>
                                                <Link
                                                    :href="route('login')"
                                                    class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6 font-bold text-black hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-100"
                                                    >Log in</Link
                                                >

                                                <Link
                                                    v-if="canRegister"
                                                    :href="route('register')"
                                                    class="ms-4 font-bold hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6 text-black hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-100"
                                                    >Register</Link
                                                >
                                            </template>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</template>

<script>
export default {};
</script>
