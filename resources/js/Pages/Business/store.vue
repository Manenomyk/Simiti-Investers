<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../../Components/Sidebar.vue";
import { useForm } from "@inertiajs/vue3";


defineProps({
    data: Object,
});

const form = useForm({
    name: "",
    email: "",
    phone: "",
    gender: "",
    location: "",
    region: "",
    photo: "",
    category: "",
    sub_category: "",
    annual_turnover: "",
    comment: "",
    boost: "",
});
const submit = () => {
    form.post(route("biz.store"), {
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex min-h-screen">
                <Sidebar />
                <div class="w-full mt-5 flex justify-center items-center">
                    <div class="mx-auto w-auto max-w-2xl">
                        <form enctype="multipart/form-data" @submit.prevent="submit"
                            class="bg-white w-full rounded shadow-2xl py-2 px-5 flex flex-col">
                            <div class="text-2xl font-bold mb-5 pt-4 flex justify-between">
                                <!-- {{ data }} -->
                                <span>Register Your Business</span>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Name</span>
                                    <input required class="h-8 rounded" name="name" type="text" v-model="form.name" />
                                </div>
                                <div class="flex flex-col">
                                    <span>Email</span>
                                    <input required class="h-8 rounded" name="email" type="text" v-model="form.email" />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Location</span>
                                    <input required class="h-8 rounded" name="location" type="text"
                                        v-model="form.location" />
                                </div>
                                <div class="flex flex-col">
                                    <span>Region</span>
                                    <input required class="h-8 rounded" name="region" type="text"
                                        v-model="form.region" />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Phone</span>
                                    <input required class="h-8 rounded" name="phone" type="text" v-model="form.phone" />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Photo</span>
                                    <input required class="h-8 rounded" name="photo" type="file" @input="
                            form.photo = $event.target.files[0]
                            " />
                                </div>
                                <div class="flex flex-col">
                                    <span>Annual Turnover</span>
                                    <input required class="h-8 rounded" name="annual" type="text"
                                        v-model="form.annual_turnover" />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Category</span>
                                    <select name="category" class="h-8 rounded w-[250px]" v-model="form.category">
                                        <option value="Select Category">
                                            Select Category
                                        </option>
                                        <option value="Heavy Machine">
                                            Heavy Machine
                                        </option>
                                        <option value="Drilling">
                                            Drilling
                                        </option>
                                        <option value="Borehole">
                                            Borehole
                                        </option>
                                    </select>
                                </div>
                                <div class="flex flex-col">
                                    <span>Sub-Category</span>
                                    <select class="h-8 rounded w-[240px]" name="sub_category"
                                        v-model="form.sub_category">
                                        <option value="Select Category">
                                            Select Category
                                        </option>
                                        <option value="Heavy Machine">
                                            Heavy Machine
                                        </option>
                                        <option value="Drilling">
                                            Drilling
                                        </option>
                                        <option value="Borehole">
                                            Borehole
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Comment</span>
                                    <textarea class="rounded" name="comment" rows="4" cols="45" v-model="form.comment">
                                    </textarea>
                                </div>
                            </div>
                            <div class="md:flex justify-between gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Gender</span>
                                    <div class="flex flex-col">
                                        <div>
                                             
                                            <input required type="radio" name="gender" value="Male"
                                                v-model="form.gender" />
                                              <label for="html">Male</label><br />
                                             
                                            <input required type="radio" name="gender" value="Female"
                                                v-model="form.gender" />
                                              <label for="css">Female</label>
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <span>Boost</span>
                                    <div class="flex flex-col">
                                        <div>
                                             
                                            <input required type="radio" name="boost" value="Yes"
                                                v-model="form.boost" />
                                              <label for="html">Yes</label><br />
                                             
                                            <input required type="radio" name="boost" value="No" v-model="form.boost" />
                                              <label for="css">No</label>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 justify-center mt-1">
                                <input required type="submit"
                                    class="rounded bg-green-800 text-white px-6 mt-1 py-2 w-[200px] flex text-center"
                                    value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
