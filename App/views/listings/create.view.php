<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

    <!-- Post a Job Form Box -->
    <section class="min-h-screen bg-gradient-to-br from-gray-50 via-purple-50 to-pink-50 flex justify-center items-center py-20 px-6">
      <div class="bg-white/95 backdrop-blur-md p-10 rounded-3xl shadow-2xl hover:shadow-purple-200/50 transition duration-500 border border-gray-100 w-full max-w-4xl">
        <h2 class="text-4xl text-center font-bold mb-4">Post a Creative Opportunity</h2>
        <p class="text-gray-500 text-center mb-8">
          Share opportunities for designers, editors, artists, and creative professionals.
        </p>
        <form method="POST" action="/listings">
          <h2 class="text-2xl font-bold mb-6 text-center text-purple-600">
            Job Info
          </h2>
          <?php loadPartial('errors', [
          'errors' => $errors ?? []
          ]) ?>
          <div class="mb-4">
            <input
              type="text"
              name="title"
              placeholder="Job Title"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['title'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <textarea
              name="description"
              placeholder="Job Description"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition"
            ><?= $listing['description'] ?? '' ?></textarea>
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="salary"
              placeholder="Annual Salary"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['salary'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="requirements"
              placeholder="Requirements"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['requirements'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="benefits"
              placeholder="Benefits"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['benefits'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="tags"
              placeholder="Tags"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['tags'] ?? '' ?>"
            />
          </div>
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Company Info & Location
          </h2>
          <div class="mb-4">
            <input
              type="text"
              name="company"
              placeholder="Company Name"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['company'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="address"
              placeholder="Address"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['address'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="city"
              placeholder="City"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['city'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="state"
              placeholder="State"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['state'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="phone"
              placeholder="Phone"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['title'] ?? '' ?>"
            />
          </div>
          <div class="mb-4">
            <input
              type="email"
              name="email"
              placeholder="Email Address For Applications"
              class="w-full px-5 py-3 rounded-2xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-400 transition" value="<?= $listing['email'] ?? '' ?>"
            />
          </div>
          <button
            class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:scale-[1.02] hover:opacity-90 transition duration-300 text-white px-4 py-3 rounded-2xl shadow-lg font-semibold"
          >
            Save
          </button>
          <a
            href="/"
            class="block text-center w-full bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-3 rounded-2xl transition duration-300"
          >
            Cancel
          </a>
        </form>
      </div>
    </section>

    <?php loadPartial('footer'); ?>