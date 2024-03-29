<script setup>
import TopNav from "../../Components/TopNav.vue";
import Footer from "../../Components/Footer.vue";

defineProps({
    data: Object,
});
</script>
<template>
    <div>
        <TopNav />
        <div class="bg-gray-100 mb-10">
            <div
                className="max-w-[1240px] mt-4 mx-auto py-10 grid md:grid-cols-4 gap-8 text-gray-300"
            >
                <div
                    class="mt-10 rounded-md shadow-lg sm:items-center bg-white text-black"
                >
                
                    <div class=" ">
                        <img
                            src="../../../Assets/team.svg"
                            class="rounded-full object-cover mb-5 h-[150px]"
                            alt="logo image"
                        />
                        <div
                            class="mt-4 mb-4 font-bold text-green-800 m-3 text-lg"
                        >
                            Building & Constructing Futures
                        </div>
                        <div class="text-sm m-2">
                            Welcome to Simiti, your premier destination for all
                            things construction. With a passion for innovation
                            and a commitment to excellence, we bring together
                            builders, contractors, and suppliers to streamline
                            the construction process.
                        </div>
                        <a href="/About">
                            <div
                                class="bg-[#ecba00] rounded-lg w-[150px] text-white py-1 m-2 px-6"
                            >
                                Learn More
                            </div>
                        </a>
                    </div>
                </div>
                <div
                    className=" container mx-2 md:col-span-3 rounded-md shadow-lg bg-white flex justify-between mt-10"
                >
                    <div class="w-full bg-gray-100 rounded-lg shadow-xl">
                        <div
                            class="mt-3 ml-3 text-xl text-[#c95906] font-bold mb-2"
                        >
                            Supplier search results
                            {{ data }}
                        </div>
                        <div class="w-full p-1 bg-white md">
                            <table
                                class="min-w-full border border-spacing-y-2 border-spacing-x-2 border-gray-300 rounded-sm"
                            >
                                <caption
                                    class="caption-bottom text-[11px] mb-1"
                                >
                                    Supplier search results
                                    
                                </caption>
                                <thead
                                    class="sm:table-header-group hidden border-b border-gray-300"
                                >
                                    <tr>
                                        <th
                                            class="whitespace-normal py-4 text-sm font-semibold sm:px-6"
                                        >
                                            Supplier Name
                                        </th>

                                        <th
                                            class="whitespace-normal py-4 text-sm font-semibold sm:px-6"
                                        >
                                            Category
                                        </th>
                                        <th
                                            class="whitespace-normal py-4 text-sm font-semibold sm:px-6"
                                        >
                                            Region
                                        </th>
                                        <th
                                            class="whitespace-normal py-4 text-sm font-semibold sm:px-6"
                                        >
                                            Location
                                        </th>
                                        <th
                                            class="whitespace-normal py-4 text-sm font-semibold sm:px-6"
                                        >
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr
                                        v-for="item in data"
                                        :key="item.id"
                                        class="text-sm border border-slate-200 flex flex-col mb-6 py-1 divide-y divide-y-slate-50 sm:border-0 sm:table-row sm:mb-0 sm:py-0 sm:divide-none"
                                    >
                                        <td
                                            class="flex flex-col px-4 py-2 sm:table-cell sm:py-4 lg:table-cell before:content-[attr(data-label)] sm:before:content-none before:text-[0.625rem] before:uppercase before:font-medium sm:pl-6"
                                            data-label="Farm Name"
                                        >
                                            {{ item.name }}
                                        </td>
                                        <td
                                            class="flex flex-col px-4 py-2 sm:table-cell sm:py-4 lg:table-cell before:content-[attr(data-label)] sm:before:content-none before:text-[0.625rem] before:uppercase before:font-medium sm:pl-6"
                                            data-label="Farm Name"
                                        >
                                            {{ item.category }}
                                        </td>
                                        <td
                                            class="flex flex-col px-4 py-2 sm:table-cell sm:py-4 lg:table-cell before:content-[attr(data-label)] sm:before:content-none before:text-[0.625rem] before:uppercase before:font-medium sm:pl-6"
                                            data-label="Farm Name"
                                        >
                                            {{ item.region }}
                                        </td>
                                        <td
                                            class="flex flex-col px-4 py-2 sm:table-cell sm:py-4 lg:table-cell before:content-[attr(data-label)] sm:before:content-none before:text-[0.625rem] before:uppercase before:font-medium sm:pl-6"
                                            data-label="Farm Name"
                                        >
                                            {{ item.location }}
                                        </td>
                                        <td
                                            class="flex flex-col px-4 py-2 sm:table-cell sm:py-4 lg:table-cell before:content-[attr(data-label)] sm:before:content-none before:text-[0.625rem] before:uppercase before:font-medium sm:pl-6"
                                            data-label="Farm Name"
                                        >
                                            view
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>
