<script setup>
import Footer from "@/Components/Footer.vue";
import TopNav from "../Components/TopNav.vue";

defineProps({
    data: Object,
});

</script>
<template>
    <div>
        <TopNav />
        <div className="about_background w-full h-[30rem] mt-18 bg-cover bg-center">
            <h1 className="w-full text-3xl font-bold text-[#e4c131] text-end absolute top-[25rem] pr-6 ">
                Explore a world of posibilities
            </h1>
        </div>
    </div>
</template>