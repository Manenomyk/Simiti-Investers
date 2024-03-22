<script setup>
import Footer from "@/Components/Footer.vue";
import TopNav from "../Components/TopNav.vue";
import "../../css/app.css";
</script>

<template>
    <div>
        <TopNav />
        <div
            className="about_background w-full h-[30rem] mt-18 bg-cover bg-center"
        >
            <h1
                className="w-full text-3xl font-bold text-[#e4c131] text-end absolute top-[25rem] pr-6 "
            >
                Explore a world of posibilities
            </h1>
        </div>
        <div>
            <div className="w-full p-[5rem] px-4 bg-white">
                <div className="max-w-[1240px] mx-auto grid md:grid-cols-2">
                    <img
                        className="w-[300px] mx-auto my-3"
                        src="../../Assets/log.png"
                        alt="logo images"
                    />
                    <div className="flex flex-col justify-center">
                        <h1
                            className="w-full text-3xl font-bold text-yellow-500"
                        >
                            Simiti Constructors
                        </h1>

                        <p
                            className="md:text-2xl sm:text-xl text-lg font-bold py-2"
                        >
                        Building Connections, Constructing Futures
                        </p>

                        <p>
                            Welcome to Simiti, your premier destination for all
                            things construction. With a passion for innovation
                            and a commitment to excellence, we bring together
                            builders, contractors, and suppliers to streamline
                            the construction process. Whether you're searching
                            for the perfect contractor or showcasing your latest
                            project, Simiti is your trusted partner in building
                            success. Join us as we redefine construction, one
                            project at a time.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <Footer />
        </div>
    </div>
</template>
