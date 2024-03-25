<script setup>
import Footer from "@/Components/Footer.vue";
import TopNav from "../Components/TopNav.vue";

defineProps({
    data: Object,
});
</script>

<template>
    <div>
        <TopNav />
        <div class="bg-gray-100">
            <div
                v-for="item in data"
                :key="item.id"
                className="max-w-[1240px] mt-4 mx-auto py-10 grid md:grid-cols-5 gap-8 text-gray-300 mb-10"
            >
                <div
                    class="mt-10 rounded-md shadow-lg sm:items-center text-black"
                >
                    <div class=" ">
                        <img
                            src="../../Assets/pic.svg"
                            class="rounded-full object-cover mb-5 h-[150px]"
                            alt="logo image"
                        />
                        <div
                            class="mt-4 mb-4 font-bold text-green-800 m-3 text-lg"
                        >
                            About the Owner
                        </div>
                        <div class="text-sm m-2">
                            {{ item.about }}
                        </div>
                        <div
                            class="bg-[#ecba00] rounded-lg w-[150px] text-black py-1 m-2 px-6"
                        >
                            Learn More
                        </div>
                    </div>
                </div>

                <div
                    className=" container md:col-span-3 rounded-md shadow-lg bg-white p-5 mt-10"
                >
                    <div class="w-[400px]">
                        <img src="../../Assets/pic.svg" alt="" />
                    </div>
                    <div>
                        <h2 class="text-gray-700 font-bold text-3xl pb-4">
                            {{ item.title }}
                        </h2>

                        <span class="text-gray-500">
                            By
                            <span class="font-bold italic text-gray-800"
                                >Amazing Bahati</span
                            >, Created on {{ item.updated_at }}
                        </span>

                        <p
                            class="text-md text-gray-700 pt-8 pb-5 leading-8 font-light"
                        >
                            {{ item.content1 }}
                        </p>

                        <a
                            href=""
                            class="bg-green-800 text-white font-extrabold py-2 m-2 px-6 rounded-lg"
                            >Read more</a
                        >
                    </div>
                </div>
                <div
                    class="mt-10 rounded-md shadow-lg sm:items-center bg-white text-black"
                >
                    <div class="m-2">
                        <h2 className="text-green-800 font-bold text-xl mb-4">
                            Contacts
                        </h2>
                        <ul>
                            <li className="py-1 text-gray-600 text-sm">
                                0725613974
                            </li>
                            <li className="py-1 text-gray-600 text-sm">
                                +254725613974
                            </li>
                            <li className="py-1 text-gray-600 text-sm">
                                Simiti@gmail.com
                            </li>
                            <li className="py-1 text-gray-600 text-sm">
                                Nairobi.
                            </li>
                        </ul>
                        <div
                            class="bg-green-800 rounded-lg w-[150px] text-white py-1 m-2 px-6"
                        >
                            Message us
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>
