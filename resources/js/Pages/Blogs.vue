<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";
export default {
    components: { Sidebar, AppLayout },
};
</script>

<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex">
                <div class="min-h-screen">
                    <Sidebar />
                </div>
                <div class="bg-gray-100">
                    <div
                        className="max-w-[1240px] mx-auto mx-3 grid md:grid-cols-4 gap-2 text-gray-300"
                    >
                        <div
                            className=" container md:col-span-3 rounded-md shadow-lg bg-white flex justify-between mt-10"
                        ></div>
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
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
