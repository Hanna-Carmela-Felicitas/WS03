 <!-- Showcase -->
    <section
        class="relative bg-cover bg-center bg-no-repeat h-[620px] flex items-center"
        style="background-image: url('images/updated.jpg');"
          >
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="absolute inset-0 bg-gradient-to-r from-purple-900/30 to-pink-900/20"></div>
      <div class="container mx-auto text-center z-10 relative px-6">
      <div class="inline-block mb-6 px-5 py-2 rounded-full border border-white/20 bg-white/10 backdrop-blur-md text-white text-sm">
        Designed for Creatives. Built for Opportunities.
      </div>
        <h2 class="text-5xl md:text-6xl text-white font-bold mb-4">Find Creative Work That Inspires You</h2>
        <p class="text-gray-200 text-lg md:text-xl mb-8 max-w-3xl mx-auto"> Explore opportunities for designers, editors, photographers, and creative professionals.</p>
        <form method="GET" action="/listings/search" class="flex flex-col md:flex-row gap-3 justify-center items-center mx-5">
          <input
            type="text"
            name="keywords"
            placeholder="Keywords"
            class="w-full md:w-64 mb-2 px-5 py-3 rounded-xl bg-white/90 backdrop-blur-md border border-white/20 focus:outline-none focus:ring-2 focus:ring-purple-400"
          />
          <input
            type="text"
            name="location"
            placeholder="Location"
            class="w-full md:w-64 mb-2 px-5 py-3 rounded-xl bg-white/90 backdrop-blur-md border border-white/20 focus:outline-none focus:ring-2 focus:ring-purple-400"
          />
          <button
            class="w-full md:w-auto bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 rounded-xl px-6 py-3 font-medium shadow-2xl transition duration-300 text-white px-4 py-2 focus:outline-none"
          >
          <i class="fa fa-search"></i> Search
          </button>
        </form>
      </div>
    </section>