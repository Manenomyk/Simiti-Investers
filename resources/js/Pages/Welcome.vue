<script setup>
import { Head, Link } from '@inertiajs/vue3';
import '../../css/welcome.css';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="back relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-blue-500 selection:text-white">
       
        <div v-if="canLogin" class="sm:absolute sm:top-0 sm:end-0 p-6 text-end z-10">
            
            
                <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-boldbold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="font-bold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</Link>

                <Link v-if="canRegister" :href="route('register')" class="ms-4 font-bold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link>
            </template>
            
        </div>

        <div class="md:w-[50%] text-center">
            <h1 class="font-bold text-5xl text-gray-300">
                 <span class="text-yellow-400">Find the Best</span> Construction Material Suppliers
             </h1>
             <div>
                <h3 class="mt-[2rem] mb-[2rem] text-lg font-bold text-green-500">Find access to the markets leading brands</h3>
                <input type="text" placeholder="Search for Suppliers " class="rounded-lg "/>
                <button type="reset" class="px-8 py-2.5 bg-green-900 text-white rounded-lg ml-2 hover:bg-green-800">Search</button>
             </div>
        </div>
        

    </div>
</template>

