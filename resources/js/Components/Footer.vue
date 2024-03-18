<script></script>
<template>
    <div
        className="max-w-[1240px] mx-auto py-10 grid md:grid-cols-3 gap-8 text-gray-300"
    >
        <div>
            <div className="flex gap-2 ">
                <a href="/"
                    ><img
                        src="../../Assets/log.png"
                        alt="/"
                        className="w-20 rounded-[50%] shadow-lg mx-2"
                /></a>
                <h1 className="w-full text-2xl mt-4 font-bold text-green-800">
                    Simiti Constructors
                </h1>
            </div>
            <p className="my-4 text-gray-600">
                Unlock Your Next Building Venture: Explore Listings from Leading
                Contractors
            </p>
            <form className="mt-9">
                <input
                    placeholder="Enter your name"
                    type="text"
                    name="name"
                    required
                    className="px-2 py-1 rounded-lg text-black mb-2 w-[360px] "
                />
                <input
                    placeholder="Email adress"
                    type="email"
                    name="email"
                    required
                    className="px-2 py-1 rounded-lg text-black mb-2 w-[360px] "
                />
                <textarea
                    placeholder="Your Message"
                    name="message"
                    required
                    rows="{4}"
                    className="text-black w-[360px] rounded-lg px-2 py-1 mb-3"
                />
                <input
                    type="submit"
                    value="Send Message"
                    className="bg-green-800 w-[180px] rounded-md  my-3  p-2 text-white font-bold focus:ring-1"
                />
            </form>
        </div>

        <div className="mx-2 md:col-span-2 flex justify-between mt-5">
            <div>
                <h2 className="text-yellow-500 font-bold text-2xl mb-4">Services</h2>
                <ul>
                    
                        <li className="py-1 text-sm text-gray-600 hover:text-[#00df9a]">
                            Best Supplier Listing
                        </li>
                    
                    
                        <li className="py-1 text-sm text-gray-600 hover:text-[#00df9a]">
                            Quality Assurance
                        </li>
                    
                    
                        <li className="py-1 text-sm text-gray-600 hover:text-[#00df9a]">
                            Market Advice
                        </li>
                    
                    
                        <li className="py-1 text-sm text-gray-600 hover:text-[#00df9a]">
                            Access to Quality
                        </li>
                        <li className="py-1 text-sm text-gray-600 hover:text-[#00df9a]">
                            Upto date Blogs
                        </li>
                    
                    
                </ul>
            </div>

            <div>
                <h2 className="text-yellow-500 mb-4 font-bold text-2xl">
                    Quick Access
                </h2>
                <ul>
                    <a href="/">
                        <li className="py-1 text-sm text-gray-600 hover:text-[#00df9a]">
                            Home
                        </li>
                    </a>
                    <a href="/Blogs">
                        <li className="py-1 text-sm text-gray-600 hover:text-[#00df9a]">
                            Blogs
                        </li>
                    </a>
                    <a href="/About">
                        <li className="py-1 text-sm text-gray-600 hover:text-[#00df9a]">
                            About
                        </li>
                    </a>
                    <a href="#Contact">
                        <li className="py-1 text-sm text-gray-600 hover:text-[#00df9a]">
                            Contact
                        </li>
                    </a>
                </ul>
            </div>
            <div>
                <h2 className="text-green-800 font-bold text-2xl mb-4">Contacts</h2>
                <ul>
                    <li className="py-1 text-gray-600 text-sm">0725613974</li>
                    <li className="py-1 text-gray-600 text-sm">+254725613974</li>
                    <li className="py-1 text-gray-600 text-sm">
                        Simiti@gmail.com
                    </li>
                    <li className="py-1 text-gray-600 text-sm">Nairobi.</li>
                </ul>
            </div>
        </div>
    </div>
</template>
