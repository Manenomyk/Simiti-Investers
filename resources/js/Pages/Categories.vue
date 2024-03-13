<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";


 defineProps({
    data: Object,
})
// console.log(data)
</script>

<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex">
                <div class="min-full">
                    <Sidebar />
                </div>

                <!-- {{ data }} -->

                <div class="w-full p-6 bg-white rounded-lg shadow-xl">
                    <div class="w-full p-6 bg-white rounded-lg shadow-xl">
                        <table
                            class="min-w-full border border-spacing-y-2 border-spacing-x-2 border-gray-300 rounded-sm"
                        >
                            <caption class="caption-bottom text-[11px] mb-2">
                                List of Categories
                            </caption>
                            <thead
                                class="sm:table-header-group hidden border-b border-gray-300"
                            >
                                <tr>
                                    <th
                                        class="whitespace-normal py-4 text-sm font-semibold sm:px-6"
                                    >
                                        Category Name
                                    </th>
                                    <th
                                        class="whitespace-normal py-4 text-sm font-semibold sm:px-6"
                                    >
                                        Sub Category
                                    </th>
                                    <th
                                        class="whitespace-normal py-4 text-sm font-semibold sm:px-6"
                                    >
                                        Date created
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
                                        {{ item.categories_name }}
                                    </td>
                                    <td
                                        class="flex flex-col px-4 py-2 sm:table-cell sm:py-4 lg:table-cell before:content-[attr(data-label)] sm:before:content-none before:text-[0.625rem] before:uppercase before:font-medium sm:pl-6"
                                        data-label="Farm Name"
                                    >
                                        {{ item.sub_categories }}
                                    </td>
                                    <td
                                        class="flex flex-col px-4 py-2 sm:table-cell sm:py-4 lg:table-cell before:content-[attr(data-label)] sm:before:content-none before:text-[0.625rem] before:uppercase before:font-medium sm:pl-6"
                                        data-label="Farm Name"
                                    >
                                        {{ item.created_at }}
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
