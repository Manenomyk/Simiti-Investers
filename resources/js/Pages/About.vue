<script setup>
import Footer from "@/Components/Footer.vue";
import TopNav from "../Components/TopNav.vue";
import "../../css/app.css";
</script>

<template>
    <div>
        <TopNav />
        <div className="about_background w-full h-[30rem] mt-18 bg-cover bg-center">
            <h1
                className="w-full text-3xl font-bold text-[#e4c131] text-end absolute top-[25rem] pr-6 "
            >
                Nurturing Visions, Building Legacies
            </h1>
        </div>
        <div>
            <div>
                <div
                    className="max-w-[1240px] mx-auto mt-10 gap-8 text-gray-300 mb-10"
                ></div>
            </div>
        </div>
        <div>
            <Footer />
        </div>
    </div>
</template>
