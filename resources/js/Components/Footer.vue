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
            <p className="my-4 text-black">
                Unlock Your Next Building Venture: Explore Listings from Leading
                Contractors
            </p>
            <form className="mt-9">
                <input
                    placeholder="Email adress"
                    type="email"
                    name="user_email"
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
                    className="bg-[#e4c131] w-[180px] rounded-md  my-3  p-2 text-black font-bold focus:ring-1"
                />
            </form>
        </div>

        <div className="mx-2 md:col-span-2 flex justify-between">
            <div>
                <h2 className="text-[#e4c131] font-bold text-lg">Services</h2>
                <ul>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Payroll Services
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Accounting & Bookkeeping
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Taxation & Tax compliance
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Business advisory services
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Kenya Diaspora tax services
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Vat filing Services
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Auditing and assurance
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Monthly Rental Income tax
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Business Immigration Services
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Transfer Pricing
                        </li>
                    </a>
                </ul>
            </div>

            <div>
                <h2 className="text-[#e4c131] font-bold text-lg">
                    Quick Access
                </h2>
                <ul>
                    <a href="/">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Home
                        </li>
                    </a>
                    <a href="/Services">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Services
                        </li>
                    </a>
                    <a href="/About">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            About
                        </li>
                    </a>
                    <a href="#Contact">
                        <li className="py-1 text-sm hover:text-[#00df9a]">
                            Contact
                        </li>
                    </a>
                </ul>
            </div>
            <div>
                <h2 className="text-[#e4c131] font-bold text-lg">Contacts</h2>
                <ul>
                    <li className="py-1 text-sm">+254720565289</li>
                    <li className="py-1 text-sm">+254734565289</li>
                    <li className="py-1 text-sm">
                        optimalauditadvisors@gmail.com
                    </li>
                    <li className="py-1 text-sm">Upperhill, Nairobi.</li>
                </ul>
            </div>
        </div>
    </div>
</template>
