<?php 
  use Framework\Session;
  ?>

<!-- Nav -->
    <header class="fixed top-0 left-0 w-full z-50 bg-white/10 backdrop-blur-lg border-b border-white/20 shadow-lg">
      <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-3xl font-semibold">
          <a href="/" class="text-white">
            <span class="text-pink-300">Creative</span>Hub
          </a>
        </h1>
        <nav class="space-x-4">
          <?php if(Session::has('user')) : ?>
            <div class="flex justify-between items-center gap-4">
            <div class="text-gray-100 font-medium">
              Welcome back, <?= Session::get('user')['name'] ?>
            </div>
            <form method="POST" action="/auth/logout">
                  <button
                      type="submit"
                      class="text-gray-100 inline hover:text-pink-300 transition duration-300"
                  >
                      Logout
                  </button>
              </form>
            <a
            href="/listings/create"
            class="bg-gradient-to-r from-purple-500 to-pink-500 hover:scale-105 hover:opacity-90 transition duration-300 text-white px-5 py-2 rounded-xl shadow-lg"
            ><i class="fa fa-edit"></i> Post a Job</a>
          </div>
            <?php else: ?>
            <a href="/auth/login" class="text-gray-100 hover:text-pink-300 transition duration-300"">Login</a>
            <a href="/auth/register" class="text-gray-100 hover:text-pink-300 transition duration-300"">Register</a>
          <?php endif; ?>

         
        </nav>
      </div>
    </header>