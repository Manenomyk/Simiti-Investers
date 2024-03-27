<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../../Components/Sidebar.vue";
</script>
<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex min-h-screen">
                <Sidebar />
                
            </div>
        </AppLayout>
    </div>
</template>
