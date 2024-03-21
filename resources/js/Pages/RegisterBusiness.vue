<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";
import {useForm} from "@inertiajs/vue3";


const form = useForm({
    name: '',
    email: '',
    phone: '',
    gender: '',
    location: '',
    region: '',
    photo: '',
    category: '',
    sub_category: '',
    annual_turnover: '',
    comment: '',
    boost: '',

})
const submit = () => {
    form.post(route('supp.store'), {});
};

</script>

<template>
    <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex min-h-screen">
                <Sidebar />
                <div class="w-full mt-5 flex justify-center items-center">
                    <div class="mx-auto w-auto max-w-2xl">
                        <form
                        @submit.prevent="submit"
                            class="bg-white w-full rounded shadow-2xl py-2 px-5 flex flex-col"
                        >
                            <div
                                class="text-2xl font-bold mb-5 pt-4 flex justify-between"
                            >
                                <span>Register Your Business</span>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Name</span>
                                    <input class="h-8 rounded" id="name" type="text" v-model="form.name" />
                                </div>
                                <div class="flex flex-col">
                                    <span>Email</span>
                                    <input class="h-8 rounded" id="email" type="text" v-model="form.email" />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Gender</span>
                                    <input class="h-8 rounded" id="gender" type="text" v-model="form.gender" />
                                </div>
                                <div class="flex flex-col">
                                    <span>Location</span>
                                    <input class="h-8 rounded" id="location" type="text" v-model="form.location" />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Region</span>
                                    <input class="h-8 rounded" id="region" type="text" v-model="form.region" />
                                </div>
                                <div class="flex flex-col">
                                    <span>Phone</span>
                                    <input class="h-8 rounded" id="phone" type="text" v-model="form.phone" />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Photo</span>
                                    <input class="h-8 rounded" id="photo" type="text" v-model="form.photo" />
                                </div>
                                <div class="flex flex-col">
                                    <span>Annual Turnover</span>
                                    <input class="h-8 rounded" id="annual" type="text" v-model="form.annual_turnover" />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Category</span>
                                    <select
                                        name="Category"
                                        class="h-8 rounded"
                                        id="Category"
                                        v-model="form.category"
                                    >
                                        <option value="volvo">
                                            Select Category
                                        </option>
                                        <option value="saab">
                                            Heavy Machine
                                        </option>
                                        <option value="mercedes">
                                            Drilling
                                        </option>
                                        <option value="audi">Borehole</option>
                                    </select>
                                </div>
                                <div class="flex flex-col">
                                    <span>Sub-Category</span>
                                    <select
                                        name="Category"
                                        class="h-8 rounded"
                                        id="subCategory"
                                        v-model="form.sub_category"
                                    >
                                        <option value="volvo">
                                            Select Category
                                        </option>
                                        <option value="saab">
                                            Heavy Machine
                                        </option>
                                        <option value="mercedes">
                                            Drilling
                                        </option>
                                        <option value="audi">Borehole</option>
                                    </select>
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Comment</span>
                                    <textarea
                                        class="rounded"
                                        id="comment"
                                        name="comment"
                                        rows="4"
                                        v-model="form.comment"
                                    >
                                    </textarea>
                                </div>
                                <div class="flex flex-col">
                                    <span>Boost</span>
                                    <div class="flex flex-col">
                                        <div>
                                             
                                            <input
                                                type="radio"
                                                id="boost"
                                                name="boost"
                                                value="HTML"
                                                v-model="form.boost"
                                            />
                                              <label for="html">Yes</label
                                            ><br />
                                             
                                            <input
                                                type="radio"
                                                id="boost"
                                                name="fav_language"
                                                value="CSS"
                                                v-model="form.boost"
                                            />
                                              <label for="css">No</label>
                                             
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 justify-end mt-1">
                                <button
                                    class="rounded bg-red-500 text-white px-6 mt-1 py-2"
                                >
                                    Clear
                                </button>
                                <button
                                type="submit"
                                    class="rounded bg-green-800 text-white px-6 mt-1 py-2"
                                >
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>
</template>
