<script>
import { Link } from "@inertiajs/vue3";
</script>
<template>
  <div class="w-screen justify-item-center">
            <div class="fixed z-20 top-0 left-0 bg-white w-full shadow-md">
                <div
                    class="container my-2 flex justify-between items-center text-gray-700"
                >
                    <div className="flex gap-2 ">
                        <a href="/"
                            ><img
                                src="../../Assets/log.png"
                                alt="/"
                                className="w-20 rounded-[50%] shadow-lg mx-2"
                        /></a>
                        <h1
                            className="w-full text-2xl mt-4 font-bold text-green-800"
                        >
                            Simiti Constructors
                        </h1>
                    </div>
                    <ul
                        class="hidden md:flex items-center text-base font-semibold cursor-pointer"
                    >
                        <a href="/">
                            <li
                                class="bg-green-800 rounded-lg text-white py-2 px-6"
                            >
                                Home
                            </li>
                        </a>
                        <a href="/About">
                            <li
                            class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                        >
                            About
                        </li>
                        </a>
                        <Link :href="route('sarch.index')">
                                <li class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6">
                                    Quick Access
                                </li>
                            </Link>
                        <li
                            class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                        >
                            Contact
                        </li>
                        <a href="BlogPosts">
                            <li
                                class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
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
                                    Home
                                </li>
                                <li
                                    class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                                >
                                    About
                                </li>
                                import { Head, Link } from "@inertiajs/vue3";
                                <li
                                    class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                                >
                                    Contact
                                </li>
                            </ul>
                        </div>
                    </button>
                </div>
            </div>
        </div>
</template>



<style>

</style>