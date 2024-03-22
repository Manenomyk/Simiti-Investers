<script></script>
<template>
    <div>
        <div class="w-screen justify-item-center">
            <div class="fixed z-20 top-0 left-0 bg-white w-full shadow-md">
                <div
                    class="container my-2 flex justify-between items-center text-gray-700"
                >
                    <div className="flex gap-2 ">
                        <a href="/"
                            ><img
                                src="../../Assets/log.png"
                                alt="/"
                                className="w-20 rounded-[50%] shadow-lg mx-2"
                        /></a>
                        <h1
                            className="w-full text-2xl mt-4 font-bold text-green-800"
                        >
                            Simiti Constructors
                        </h1>
                    </div>
                    <ul
                        class="hidden md:flex items-center text-base font-semibold cursor-pointer"
                    >
                        <a href="/">
                            <li
                                class="bg-green-800 rounded-lg text-white py-2 px-6"
                            >
                                Home
                            </li>
                        </a>
                        <li
                            class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                        >
                            About
                        </li>
                        <li
                            class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                        >
                            <button
                                class="relative flex justify-center items-center gap-5 pt-0 bg-gray-100 border focus:outline-none shadow text-gray-600 rounded focus:ring ring-gray-800 hover:rounded-lg group"
                            >
                                <p class="px-4">Find suppliers</p>
                                <span class="border-l p-2 hover:bg-gray-100"
                                    ><img
                                        src="../../Assets/arrow.png"
                                        class="w-3"
                                        alt=""
                                /></span>
                                <div
                                    class="absolute hidden group-focus:block z-20 top-full min-w-full w-max bg-white shadow-md mt-1 rounded"
                                >
                                    <ul class="text-left border rounded">
                                        <li
                                            class="px-4 py-1 hover:bg-gray-100 border-b"
                                        >
                                            Featured Suppliers
                                        </li>
                                        <li
                                            class="px-4 py-1 hover:bg-gray-100 border-b"
                                        >
                                            Search By Category
                                        </li>
                                        <li
                                            class="px-4 py-1 hover:bg-gray-100 border-b"
                                        >
                                            Search By Region
                                        </li>
                                    </ul>
                                </div>
                            </button>
                        </li>
                        <li
                            class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                        >
                            Contact
                        </li>
                        <a href="BlogPosts">
                            <li
                                class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                            >
                                Blogs
                            </li>
                        </a>
                    </ul>
                    <button
                        class="block md:hidden py-3 px-3 mx-2 rounded focus:outline-none hover:bg-gray-200 group"
                    >
                        <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                        <div class="w-5 h-1 bg-gray-600 mb-1"></div>
                        <div class="w-5 h-1 bg-gray-600"></div>
                        <div
                            class="absolute top-0 -right-full opacity-0 h-screen w-8/12 bg-white border transform group-focus:right-0 group-focus:opacity-100 transition-all duration-300"
                        >
                            <ul
                                class="flex flex-col items-center w-full text-base cursor-pointer pt-10"
                            >
                                <li
                                    class="bg-green-800 rounded-lg text-white py-2 px-6"
                                >
                                    Home
                                </li>
                                <li
                                    class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                                >
                                    About
                                </li>
                                <li
                                    class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                                >
                                    <button
                                        class="relative flex justify-center items-center gap-5 pt-0 bg-gray-100 border focus:outline-none shadow text-gray-600 rounded focus:ring ring-gray-800 hover:rounded-lg group"
                                    >
                                        <p class="px-4">Find suppliers</p>
                                        <span
                                            class="border-l p-2 hover:bg-gray-100"
                                            ><img
                                                src="../../Assets/arrow.png"
                                                class="w-3"
                                                alt=""
                                        /></span>
                                        <div
                                            class="fixed hidden group-focus:block z-20 top-full min-w-full w-max bg-white shadow-md mt-1 rounded"
                                        >
                                            <ul
                                                class="text-left border rounded"
                                            >
                                                <li
                                                    class="px-4 py-1 hover:bg-gray-100 border-b"
                                                >
                                                    Featured Suppliers
                                                </li>
                                                <li
                                                    class="px-4 py-1 hover:bg-gray-100 border-b"
                                                >
                                                    Search By Category
                                                </li>
                                                <li
                                                    class="px-4 py-1 hover:bg-gray-100 border-b"
                                                >
                                                    Search By Region
                                                </li>
                                            </ul>
                                        </div>
                                    </button>
                                </li>
                                <li
                                    class="hover:bg-green-800 hover:rounded-lg hover:text-white py-2 px-6"
                                >
                                    Contact
                                </li>
                            </ul>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div
            className="max-w-[1240px] mx-auto py-10 grid md:grid-cols-4 gap-8 text-gray-300"
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
                    <div
                        class="mt-4 mb-4 font-bold text-green-800 m-3 text-lg"
                    >
                    Building & Constructing Futures
                    </div>
                    <div class="text-sm m-2">
                        Welcome to Simiti, your premier destination for all
                        things construction. With a passion for innovation and a
                        commitment to excellence, we bring together builders,
                        contractors, and suppliers to streamline the
                        construction process.
                    </div>
                    <div  class="bg-green-800 rounded-lg w-[150px] text-white py-1 m-2 px-6">Learn More</div>
                </div>
            </div>
        </div>
    </div>
</template>
