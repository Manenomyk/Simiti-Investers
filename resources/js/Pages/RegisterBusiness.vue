<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";
export default {
components: {Sidebar, AppLayout },
name: "modal",
    data() {
        return {
            toggleModal: false,
        };
    },
    method: {},
}
</script>

<template>
  <div>
    <AppLayout title="Dashboard" class="flex-1">
        <div class="flex min-h-screen">
            <Sidebar />
            <div
                        class="w-full mt-5 flex justify-center items-center"
                      
                     >
                        <div class=" mx-auto w-auto max-w-2xl">
                            <div
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
                                        <input
                                            class="h-8 rounded"
                                            type="text"
                                        />
                                    </div>
                                    <div class="flex flex-col">
                                        <span>Email</span>
                                        <input
                                            class="h-8 rounded"
                                            type="text"
                                        />
                                    </div>
                                </div>
                                <div class="md:flex gap-3 mb-5">
                                    <div class="flex flex-col">
                                        <span>Gender</span>
                                        <input
                                            class="h-8 rounded"
                                            type="text"
                                        />
                                    </div>
                                    <div class="flex flex-col">
                                        <span>Location</span>
                                        <input
                                            class="h-8 rounded"
                                            type="text"
                                        />
                                    </div>
                                </div>
                                <div class="md:flex gap-3 mb-5">
                                    <div class="flex flex-col">
                                        <span>Region</span>
                                        <input
                                            class="h-8 rounded"
                                            type="text"
                                        />
                                    </div>
                                    <div class="flex flex-col">
                                        <span>Phone</span>
                                        <input
                                            class="h-8 rounded"
                                            type="text"
                                        />
                                    </div>
                                </div>
                                <div class="md:flex gap-3 mb-5">
                                    <div class="flex flex-col">
                                        <span>Photo</span>
                                        <input
                                            class="h-8 rounded"
                                            type="text"
                                        />
                                    </div>
                                    <div class="flex flex-col">
                                        <span>Annual Turnover</span>
                                        <input
                                            class="h-8 rounded"
                                            type="text"
                                        />
                                    </div>
                                </div>
                                <div class="md:flex gap-3 mb-5">
                                    <div class="flex flex-col">
                                        <span>Category</span>
                                        <select
                                            name="Category"
                                            class="h-8 rounded"
                                            id="Category"
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
                                            <option value="audi">
                                                Borehole
                                            </option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col">
                                        <span>Sub-Category</span>
                                        <select
                                            name="Category"
                                            class="h-8 rounded"
                                            id="Category"
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
                                            <option value="audi">
                                                Borehole
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="md:flex gap-3 mb-5">
                                    <div class="flex flex-col">
                                        <span>Comment</span>
                                        <textarea
                                            class="rounded"
                                            id="w3review"
                                            name="w3review"
                                            rows="4"
                                        >
                                        </textarea>
                                    </div>
                                    <div class="flex flex-col">
                                        <span>Boost</span>
                                        <div class="flex flex-col">
                                            <form>
                                                 
                                                <input
                                                    type="radio"
                                                    id="html"
                                                    name="fav_language"
                                                    value="HTML"
                                                />
                                                  <label for="html">Yes</label
                                                ><br />
                                                 
                                                <input
                                                    type="radio"
                                                    id="css"
                                                    name="fav_language"
                                                    value="CSS"
                                                />
                                                  <label for="css">No</label>
                                                 
                                            </form>
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
                                        class="rounded bg-green-800 text-white px-6 mt-1 py-2"
                                        
                                    >
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </AppLayout>
  </div>
</template>


