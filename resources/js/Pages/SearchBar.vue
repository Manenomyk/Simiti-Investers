<script setup>
import Footer from "@/Components/Footer.vue";
import TopNav from "../Components/TopNav.vue";
import { useForm } from "@inertiajs/vue3";
import '../../css/welcome.css';

defineProps({
    data: Object,
});

const form = useForm({
    search: "",
});
const submit = () => {
    form.get(route("search.index"), {});
};
</script>
<template>
    <div>
        <TopNav />
        <div
            class="back1 mt-20 sm:flex sm:justify-center sm:items-center h-[30rem] bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-blue-500 selection:text-white">
            <div class="md:w-[50%] text-center">
                <h1 class="font-bold text-5xl text-gray-300">
                    <span class="text-yellow-400">Find the Best</span>
                    Construction Material Suppliers
                </h1>
                <div class="mt-5">

                    <form @submit.prevent="submit">
                        <input type="text" name="search" v-model="form.search" placeholder="Search for Suppliers "
                            class="rounded-lg" />
                        <input type="submit" value="Search"
                            class="px-8 py-2.5 bg-green-500 text-white rounded-lg ml-2 hover:bg-green-500" />


                    </form>

                </div>

            </div>
        </div>

        <div class="flex gap-6 justify-center mt-10">
            <!-- {{ data }} -->
            <div class="w-64  bg-gray-100 p-5 shadow-lg rounded-md">
                <div>
                    <h2 className="text-gray-400 mb-4 font-bold text-xl">
                        Availlable Categories
                    </h2>

                    <div v-for="item in data" :key="item.id">
                        <p class="text-md text-green-500 font-bold">{{ item.categories_name }}</p>
                    </div>


                </div>

            </div>
            <div class="w-64  bg-gray-100 p-5 shadow-lg rounded-md">
                <div>
                    <h2 className="text-gray-400 mb-4 font-bold text-xl">
                        Sub-Categories
                    </h2>
                    <div v-for="item in data" :key="item.id">
                        <p class="text-md text-green-500 font-bold">{{ item.sub_categories }}</p>
                    </div>
                </div>

            </div>
            <div class="w-64  bg-gray-100 p-5 shadow-lg rounded-md">
                <div>
                    <h2 className="text-gray-400 mb-4 font-bold text-xl">
                        Featured Suppliers
                    </h2>
                    <div>
                        <p class="text-md text-green-500 font-bold">home</p>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <Footer />
        </div>
    </div>
</template>