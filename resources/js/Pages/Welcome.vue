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
        <div class="">

            <div class=" w-screen justify-item-center">
                <div class="fixed top-0 left-0 bg-white w-full shadow-md">
                <div class="container m-auto flex justify-between items-center text-gray-700">
                    <h1 class="pl-8 py-4 text-xl font-bold">SIMITI</h1>
                    <ul class="hidden md:flex items-center text-base font-semibold cursor-pointer">
                        <li class="bg-green-800 rounded-lg text-white py-2 px-6">Home</li>
                        <li class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6">About</li>
                        <li class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6">
                            <button class="relative flex justify-center items-center gap-5 pt-0 bg-gray-100 border focus:outline-none shadow text-gray-600 rounded focus:ring ring-gray-800 hover:rounded-lg group">
                <p class="px-4">Find suppliers</p>
                <span class="border-l p-2 hover:bg-gray-100"><img src="../../Assets/arrow.png" class="w-3" alt=""></span>
                <div class="absolute hidden group-focus:block z-20 top-full min-w-full w-max bg-white shadow-md mt-1 rounded">
                    <ul class="text-left border rounded">
                        <li class="px-4 py-1 hover:bg-gray-100 border-b">Featured Suppliers </li>
                        <li class="px-4 py-1 hover:bg-gray-100 border-b">Search By Category</li>
                        <li class="px-4 py-1 hover:bg-gray-100 border-b">Search By Region</li>
                    </ul>
                  </div>
                </button>
                        </li>
                        <li class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6">Contact</li>
                        
                        <li>
                            <div v-if="canLogin" class=" sm:top-0 sm:end-0 p-6 text-end z-10">
                        
                        
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-boldbold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-100">Dashboard</Link>

                    <template v-else>
                        <Link :href="route('login')" class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6 font-bold text-black hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-100">Log in</Link>

                        <Link v-if="canRegister" :href="route('register')" class="ms-4 font-bold hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6 text-black hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-100">Register</Link>
                    </template>
                    
                </div>
                        </li>
                    </ul>
                    <button class="block md:hidden py-3 px-3 mx-2 rounded focus:outline-none hover:bg-gray-200 group">
                        <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                        <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                        <div class="w-5 h-1 bg-gray-600"></div>
                        <div class="absolute top-0 -right-full opacity-0 h-screen w-8/12 bg-white border transform group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
                            <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-10">
                                <li class="bg-green-800 rounded-lg text-white py-2 px-6">Home</li>
                        <li class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6">About</li>
                        <li class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6">
                            <button class="relative flex justify-center items-center gap-5 pt-0 bg-gray-100 border focus:outline-none shadow text-gray-600 rounded focus:ring ring-gray-800 hover:rounded-lg group">
                <p class="px-4">Find suppliers</p>
                <span class="border-l p-2 hover:bg-gray-100"><img src="../../Assets/arrow.png" class="w-3" alt=""></span>
                <div class="fixed hidden group-focus:block z-20 top-full min-w-full w-max bg-white shadow-md mt-1 rounded">
                    <ul class="text-left border rounded">
                        <li class="px-4 py-1 hover:bg-gray-100 border-b">Featured Suppliers </li>
                        <li class="px-4 py-1 hover:bg-gray-100 border-b">Search By Category</li>
                        <li class="px-4 py-1 hover:bg-gray-100 border-b">Search By Region</li>
                    </ul>
                  </div>
                </button>
                        </li>
                        <li class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6">Contact</li>
                        
                        <li>
                            <div v-if="canLogin" class=" sm:top-0 sm:end-0 p-6 text-end z-10">
                        
                        
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-boldbold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-100">Dashboard</Link>

                    <template v-else>
                        <Link :href="route('login')" class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6 font-bold text-black hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-100">Log in</Link>

                        <Link v-if="canRegister" :href="route('register')" class="ms-4 font-bold hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6 text-black hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-100">Register</Link>
                    </template>
                    
                </div>
                        </li>
                            </ul>
                        </div>

                    </button>
                </div>
            </div>

                
            </div>

                <div class="back mt-20  sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-blue-500 selection:text-white">
                
                   

                    <div class="md:w-[50%] text-center">
                        <h1 class="font-bold text-5xl text-gray-300">
                            <span class="text-yellow-400">Find the Best</span> Construction Material Suppliers
                        </h1>
                        <div>
                            <h3 class="mt-[2rem] mb-[2rem] text-lg font-bold text-green-500">Find access to the markets leading brands</h3>
                            <input type="text" placeholder="Search for Suppliers " class="rounded-lg "/>
                            <button type="reset" class="px-8 py-2.5 bg-green-900 text-white rounded-lg ml-2 hover:bg-green-800">Search</button>
                        </div>
                        <div class="flex justify-center gap-2 mt-5">
                            <h5 class="font-bold text-blue-600">Want to explore more <span class="text-white">?</span></h5>
                            <a href="/register" class="font-bold text-yellow-400">Join Us for free</a>
                        </div>

                        
                    </div>
                </div>

                <div className='w-full p-[5rem] px-4 bg-white'>
                    <div className='max-w-[1240px] mx-auto grid md:grid-cols-2'>
                        <div className='flex flex-col justify-center'>
                            <h1 className='text-[#00df9a] uppercase font-bold text-center mt-3'>Everything Optimized just for you</h1>
                            <p className='md:text-2xl sm:text-xl text-lg font-bold py-2'>Find Suppliers with ease</p>
                            <p class="">
                                Let's collaborate to elevate your sourcing strategy and unlock the potential for success. 
                                Reach out today to embark on a journey towards unparalleled efficiency and supplier 
                                satisfaction. Whether you're targeting
                              specific regions, seeking featured suppliers, or narrowing down by 
                              category, We are here to streamline your procurement process. 
                              <br>
                              With a keen eye for detail and a dedication to excellence, we ensure 
                              that each supplier match is optimized to meet your requirements, 
                              saving you time and resources.
                        </p>
                        <button className='bg-yellow-400 w-[200px] rounded-md  my-6 mx-auto md:mx-0 p-2 text-black font-bold'>Search Suppliers</button>
                        
                        </div>
                        <img className='w-[400px] mx-auto my-3' src='../../Assets/search.jpg' alt='accounting images' />
                    </div>
                </div>

                <div className='w-full p-[5rem] px-4 bg-[#144b6e]'>
                    <div className='max-w-[1240px] mx-auto grid md:grid-cols-2'>
                        <img className='w-[550px] mx-auto my-3' src='../../Assets/supplier.png  ' alt='accounting images' />
                        <div className='flex flex-col justify-center'>
                            <h1 className='text-yellow-400 uppercase font-bold text-center mt-3'>Want to join the Supply list?</h1>
                            <p className='md:text-2xl sm:text-xl text-lg font-bold py-2 text-gray-400' >Make your products known today</p>
                            <p class="text-white">
                                By joining forces with us, you gain access to a dynamic 
                                platform that values innovation, quality, and sustainable 
                                partnerships. Whether you specialize in construction, or offer unique solutions in material supply,
                                 we're excited to explore how your offerings can enrich our network 
                                 and benefit our valued customers. 
                        </p>
                        <button className='bg-green-800 w-[200px] rounded-md  my-6 mx-auto md:mx-0 p-2 text-white font-bold'>Register Business</button>
                        
                        </div>

                 </div>                        
                
                </div>
                <div className='w-full p-[5rem] px-4 bg-white'>
                    <div className='max-w-[1240px] mx-auto grid md:grid-cols-2'>
                        <div className='flex flex-col justify-center'>
                            <h1 className='text-[#00df9a] uppercase font-bold text-center mt-3'>Are you ready to level up?</h1>
                            <p className='md:text-2xl sm:text-xl text-lg font-bold py-2'>Elevate Your Presence with Our Featured Supplier Package today!</p>
                            <p class="">
                                We're excited to announce an exclusive opportunity for
                                 you to enhance your visibility and reach within our 
                                 network. Introducing our Featured Supplier Package - 
                                 a premium offering designed to spotlight your brand and 
                                 unlock unparalleled marketing benefits. <br><br>
            
                                 By upgrading to our Featured Supplier Package, you'll 
                                 enjoy a host of advantages, including:

                                    Prime Placement, 
                                    Enhanced Visibility, 
                                     Targeted Marketing,

                                    Priority Support,
                                     Performance Analytics.
                        </p>
                        <button className='bg-yellow-400 w-[200px] rounded-md  my-6 mx-auto md:mx-0 p-2 text-black font-bold'>Upgrade package</button>
                        
                        </div>
                        <img className='w-[600px] mx-auto my-3' src='../../Assets/upgrade.jpg' alt='accounting images' />
                    </div>
                </div>

                <div class=""></div>
            
        </div>
</template>

