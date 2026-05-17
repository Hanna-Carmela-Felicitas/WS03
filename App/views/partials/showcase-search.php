 <!-- Showcase -->
    <section
        class="relative bg-cover bg-center bg-no-repeat h-[620px] flex items-center pt-24"
        style="background-image: url('images/updated.jpg');"
          >
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="absolute inset-0 bg-gradient-to-r from-purple-900/30 to-pink-900/20"></div>
      <div class="container mx-auto text-center z-10 relative px-6">
      <div class="inline-flex items-center gap-2 mb-6 px-5 py-2 rounded-full border border-white/20 bg-white/10 backdrop-blur-xl shadow-lg text-white text-sm">
        Designed for Creatives. Built for Opportunities.
      </div>
        <h2 class="text-5xl md:text-6xl text-white font-bold mb-4 leading-tight drop-shadow-2xl">Find Creative Opportunities That Inspire Your Passion</h2>
        <p class="text-gray-200 text-lg md:text-xl mb-8 max-w-3xl mx-auto"> Explore opportunities for designers, editors, photographers, and creative professionals.</p>
        <div class="max-w-4xl mx-auto bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl p-5 shadow-2xl">
        <form method="GET" action="/listings/search" class="flex flex-col md:flex-row gap-3 justify-center items-center mx-5">
          <input
            type="text"
            name="keywords"
            placeholder="Keywords"
            class="w-full md:w-64 mb-2 px-5 py-3 rounded-xl bg-white/80 shadow-lg placeholder-gray-500 backdrop-blur-md border border-white/20 focus:outline-none focus:ring-2 focus:ring-purple-400"
          />
          <input
            type="text"
            name="location"
            placeholder="Location"
            class="w-full md:w-64 mb-2 px-5 py-3 rounded-xl bg-white/80 shadow-lg placeholder-gray-500 backdrop-blur-md border border-white/20 focus:outline-none focus:ring-2 focus:ring-purple-400"
          />
          <button
            class="w-full md:w-auto bg-gradient-to-r from-purple-500 to-pink-500 hover:scale-105 hover:opacity-90 rounded-xl px-6 py-3 font-medium shadow-2xl transition duration-300 text-white px-4 py-2 focus:outline-none"
          >
          <i class="fa fa-search"></i> Search
          </button>
        </form>
        </div>
      </div>
    </section>