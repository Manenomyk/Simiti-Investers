<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";

defineProps({
    data: Object,
});

</script>

<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex">
                <div class="min-h-screen">
                    <Sidebar />
                </div>
                <div class="bg-gray-100">
                    {{ data }}
                    <div
                        className="max-w-[1240px] mx-auto mx-3 grid md:grid-cols-4 gap-2 text-gray-300"
                    >
                        <div
                            className=" container md:col-span-4 rounded-md shadow-lg bg-white flex justify-between mt-10"
                        >
                            <div
                                class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-10 border-b border-gray-200"
                            >
                            
                                <div>
                                    <img src="../../Assets/pic.svg" alt="" />
                                </div>
                                <div>
                                    <h2
                                        class="text-gray-700 font-bold text-4xl pb-4"
                                    >
                                        My amazing blog post
                                    </h2>

                                    <span class="text-gray-500">
                                        By
                                        <span
                                            class="font-bold italic text-gray-800"
                                            >Amazing Bahati</span
                                        >, daily routine
                                    </span>

                                    <p
                                        class="text-md text-gray-700 pt-8 pb-5 leading-8 font-light"
                                    >
                                        Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit. Culpa obcaecati,
                                        facilis quis quas beatae asperiores,
                                        dignissimos, dolore nostrum rem minus
                                        quo dolorum. Voluptates, libero
                                        accusamus assumenda nobis repellat
                                        numquam suscipit.
                                    </p>

                                    <a
                                        href=""
                                        class=" bg-green-800 text-white font-extrabold py-2 m-2 px-6 rounded-lg"
                                        >Read more</a
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- <div
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
                                    Welcome to Simiti, your premier destination
                                    for all things construction. With a passion
                                    for innovation and a commitment to
                                    excellence, we bring together builders,
                                    contractors, and suppliers to streamline the
                                    construction process.
                                </div>
                                <a href="/About">
                                    <div
                                        class="bg-[#ecba00] rounded-lg w-[150px] text-black py-1 m-2 px-6"
                                    >
                                        Learn More
                                    </div>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
