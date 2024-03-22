<script setup>
import Footer from "@/Components/Footer.vue";
import TopNav from "../Components/TopNav.vue";

</script>

<template>
    <div>
        <TopNav />
        <div class="bg-gray-100">
        <div
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
                    <div class="mt-4 mb-4 font-bold text-green-800 m-3 text-lg">
                        About the Owner
                    </div>
                    <div class="text-sm m-2">
                        Welcome to Simiti, your premier destination for all
                        things construction. With a passion for innovation and a
                        commitment to excellence, we bring together builders,
                        contractors, and suppliers to streamline the
                        construction process.
                    </div>
                    <div
                        class="bg-[#ecba00] rounded-lg w-[150px] text-black py-1 m-2 px-6"
                    >
                        Learn More
                    </div>
                </div>
            </div>
            <div
                className=" container md:col-span-3 rounded-md shadow-lg bg-white flex justify-between mt-10"
            ></div>
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
                        <li className="py-1 text-gray-600 text-sm">Nairobi.</li>
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
