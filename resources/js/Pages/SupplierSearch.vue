<script>
import TopNav from "../Components/TopNav.vue";
export default {
    components: { TopNav },
};
</script>
<template>
    <div>
        <TopNav />
        <div
            className="max-w-[1240px] mt-4 mx-auto py-10 grid md:grid-cols-4 gap-8 text-gray-300"
        >
            <div
                class="mt-10 rounded-md shadow-lg sm:items-center bg-gray-100 text-black"
            >
                <div class=" ">
                    <img
                        src="../../Assets/log.png"
                        class="rounded-full object-cover mb-5 h-[150px]"
                        alt="logo image"
                    />
                    <div class="mt-4 mb-4 font-bold text-green-800 m-3 text-lg">
                        Building & Constructing Futures
                    </div>
                    <div class="text-sm m-2">
                        Welcome to Simiti, your premier destination for all
                        things construction. With a passion for innovation and a
                        commitment to excellence, we bring together builders,
                        contractors, and suppliers to streamline the
                        construction process.
                    </div>
                    <div
                        class="bg-[#c95906] rounded-lg w-[150px] text-white py-1 m-2 px-6"
                    >
                        Learn More
                    </div>
                </div>
            </div>
            <div
                className=" container mx-2 md:col-span-3 rounded-md shadow-lg bg-gray-100 flex justify-between mt-10"
            >
                <div class="m-3 text-xl text-[#c95906] font-bold mb-6">Supplier search results</div>
            </div>
        </div>
    </div>
</template>
