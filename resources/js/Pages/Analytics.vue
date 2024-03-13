<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";
import {useForm} from "@inertiajs/vue3";


const form = useForm({
    name: '',
    email: '',
    phone: '',
    location: '',

})
const submit = () => {
    form.post(route('analytics.store'), {});
};

export default {
components: {Sidebar, AppLayout }
}

</script>
<template>
  <div>
    <AppLayout title="Dashboard" class="flex-1">
        <div class="flex min-h-screen">
            <Sidebar />

            <form @submit.prevent="submit">
              <div>
                name
              <input type="text" id="name" v-model="form.name">
              </div>
              <div>
                email
              <input type="text" id="email" v-model="form.email">
              </div>
              <div>
                phone
              <input type="text" id="phone" v-model="form.phone">
              </div>
              <div>
                location
              <input type="text" id="location" v-model="form.location">
              </div>
              <input type="submit" placeholder="Submit" :class="{ 'opacity-25': form.processing }"
                                       :disabled="form.processing"/>
            </form>
        </div>
    </AppLayout>
  </div>
</template>