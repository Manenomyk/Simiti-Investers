<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Sidebar from "../Components/Sidebar.vue";


</script>
<template>
  <div>
        <AppLayout title="Dashboard" class="flex-1">
            <div class="flex min-h-screen">
                <Sidebar />
                <div class="w-full mt-5 flex justify-center items-center">
                    <div class="mx-auto w-auto max-w-2xl">
                        <form
                           
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
                                        name="name"
                                        type="text"
                                        
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <span>Email</span>
                                    <input
                                        class="h-8 rounded"
                                        name="email"
                                        type="text"
                                        
                                    />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Gender</span>
                                    <input
                                        class="h-8 rounded"
                                        name="gender"
                                        type="text"
                                        
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <span>Location</span>
                                    <input
                                        class="h-8 rounded"
                                        name="location"
                                        type="text"
                                        
                                    />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Region</span>
                                    <input
                                        class="h-8 rounded"
                                        name="region"
                                        type="text"
                                       
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <span>Phone</span>
                                    <input
                                        class="h-8 rounded"
                                        name="phone"
                                        type="text"
                                        
                                    />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Photo</span>
                                    <input
                                        class="h-8 rounded"
                                        name="photo"
                                        type="text"
                                        
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <span>Annual Turnover</span>
                                    <input
                                        class="h-8 rounded"
                                        name="annual"
                                        type="text"
                                        
                                    />
                                </div>
                            </div>
                            <div class="md:flex gap-3 mb-5">
                                <div class="flex flex-col">
                                    <span>Category</span>
                                    <select
                                        name="category"
                                        class="h-8 rounded"
                                        
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
                                        class="h-8 rounded"
                                        name="sub_category"
                                       
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
                                        name="comment"
                                        rows="4"
                                        
                                    >
                                    </textarea>
                                </div>
                                <div class="flex flex-col">
                                    <span>Boost</span>
                                    <div class="flex flex-col">
                                        <div>
                                             
                                            <input
                                                type="radio"
                                                name="boost"
                                                value="HTML"
                                                
                                            />
                                              <label for="html">Yes</label
                                            ><br />
                                             
                                            <input
                                                type="radio"
                                                name="boost"
                                                value="CSS"
                                                
                                            />
                                              <label for="css">No</label>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 justify-end mt-1">
                                <input
                                    type="submit"
                                    class="rounded bg-green-800 text-white px-6 mt-1 py-2"
                                    value="Submit"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </AppLayout>
    </div>

</template>


