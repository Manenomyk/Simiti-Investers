<script>

</script>
<template>
  <div>
        <div className="flex gap-2">
          <a href="/"><img src={logo} alt="/" className="w-20 rounded-full mx-2" /></a>
          <rev.Zoom delay={200}>
            <h1 className="w-full text-3xl font-bold text-[#00df9a]">
              Optimal Audit Advisors
            </h1>
          </rev.Zoom>
        </div>
        <p className="my-4">
          <rev.Zoom delay={300}>
            Navigating Finances, Ensuring Compliance: Your Success, Our
            Assurance Optimal Audit Advisors at Your Service!
          </rev.Zoom>
        </p>
        <form ref={form} onSubmit={sendEmail} className="mt-9">
          <rev.Zoom delay={300}>
            <input
              placeholder="Email adress"
              type="email"
              name="user_email"
              required
              className="px-2 py-1 rounded-lg text-black mb-2 w-[360px] "
            />
          </rev.Zoom>
          <rev.Zoom delay={400}>
            <textarea
              placeholder="Your Message"
              name="message"
              required
              rows={4}
              className="text-black w-[360px] rounded-lg px-2 py-1 mb-3"
            />
          </rev.Zoom>
          <rev.Zoom delay={500}>
            <input
              type="submit"
              value="Send Message"
              className="bg-[#e4c131] w-[180px] rounded-md  my-3  p-2 text-black font-bold focus:ring-1"
            />
          </rev.Zoom>
        </form>
      </div>

      <div className="mx-2 md:col-span-2 flex justify-between">
        <div>
          <rev.Zoom delay={200}>
            <h2 className="text-[#e4c131] font-bold text-lg">Services</h2>
          </rev.Zoom>
          <ul>
            <rev.Zoom delay={200}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Payroll Services
                </li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={300}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Accounting & Bookkeeping
                </li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={300}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Taxation & Tax compliance
                </li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={400}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Business advisory services
                </li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={400}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Kenya Diaspora tax services
                </li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={500}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Vat filing Services
                </li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={500}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Auditing and assurance
                </li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={500}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Monthly Rental Income tax
                </li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={500}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Business Immigration Services
                </li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={500}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">
                  Transfer Pricing
                </li>
              </a>
            </rev.Zoom>
          </ul>
        </div>

        <div>
          <rev.Zoom delay={200}>
            <h2 className="text-[#e4c131] font-bold text-lg">Quick Access</h2>
          </rev.Zoom>
          <ul>
            <rev.Zoom delay={300}>
              <a href="/">
                <li className="py-1 text-sm hover:text-[#00df9a]">Home</li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={400}>
              <a href="/Services">
                <li className="py-1 text-sm hover:text-[#00df9a]">Services</li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={500}>
              <a href="/About">
                <li className="py-1 text-sm hover:text-[#00df9a]">About</li>
              </a>
            </rev.Zoom>
            <rev.Zoom delay={600}>
              <a href="#Contact">
                <li className="py-1 text-sm hover:text-[#00df9a]">Contact</li>
              </a>
            </rev.Zoom>
          </ul>
        </div>
        <div>
          <rev.Zoom delay={200}>
            <h2 className="text-[#e4c131] font-bold text-lg">Contacts</h2>
          </rev.Zoom>
          <ul>
            <rev.Zoom delay={300}>
              <li className="py-1 text-sm">+254720565289</li>
            </rev.Zoom>
            <rev.Zoom delay={400}>
              <li className="py-1 text-sm">+254734565289</li>
            </rev.Zoom>
            <rev.Zoom delay={500}>
              <li className="py-1 text-sm">optimalauditadvisors@gmail.com</li>
            </rev.Zoom>
            <rev.Zoom delay={500}>
              <li className="py-1 text-sm">Upperhill, Nairobi.</li>
            </rev.Zoom>
          </ul>
        </div>
      </div>
</template>


