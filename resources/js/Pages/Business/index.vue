<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../../Components/Sidebar.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    data: Object,
});
</script>
<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex">
                <div>
                    <Sidebar />
                </div>

                <div
                    className=" container mx-2 md:col-span-3 rounded-md shadow-lg bg-white flex justify-between mt-2"
                >
                    <div class="w-full bg-white rounded-lg shadow-xl">
                        <div
                            class="mt-3 ml-3 text-xl text-[#c95906] font-bold mb-2"
                        >
                            Supplier Portfolio
                        </div>
                        <div class="w-full p-1 bg-white md">
                            <table
                                class="min-w-full border border-spacing-y-2 border-spacing-x-2 border-gray-300 rounded-sm"
                            >
                                <caption
                                    class="caption-bottom text-[11px] mb-1"
                                >
                                    Supplier Portfolio
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
                                        <td class="" data-label="Farm Name">
                                            <Link
                                                :href="
                                                    route('biz.show', {
                                                        id: item.id,
                                                    })
                                                "
                                            >
                                                <button
                                                    class="rounded bg-green-800 text-white px-6 mt-1 py-1 w-[85px] flex text-center"
                                                >
                                                    View
                                                </button>
                                            </Link>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
