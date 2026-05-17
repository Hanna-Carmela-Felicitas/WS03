<?php
use Framework\Session;
?>
      <!-- Bottom Banner -->
      <section class="container mx-auto my-6">
      <div
        class="bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-2xl p-8 flex items-center justify-between"
      >
        <div>
          <h2 class="text-xl font-semibold">Looking for creative professionals?</h2>
          <p class="text-white-700 text-lg mt-2">
            Post creative job opportunities and connect with talented designers, editors, and artists.
          </p>
        </div>


        <?php if(Session::has('user')) : ?>
        <a
            href="/listings/create"
            class="bg-white text-purple-600 hover:bg-gray-100 px-4 py-2 rounded-xl hover:shadow-md transition duration-300"
        >
            <i class="fa fa-edit"></i> Post a Job
        </a>
        <?php endif; ?>
      </div>
    </section>