<?php 
  use Framework\Session;
  ?>

<!-- Nav -->
    <header class="bg-white text-gray-900 p-4 border-b">
      <div class="container mx-auto flex justify-between items-center py-2">
      <h1 class="text-3xl font-semibold">
          <a href="/">
            <span class="text-purple-600">Creative</span>Hub</a>
        </h1>
        <nav class="space-x-4">
          <?php if(Session::has('user')) : ?>
            <div class="flex justify-between items-center gap-4">
            <div class="text-gray-700 font-medium">
              Welcome back, <?= Session::get('user')['name'] ?>
            </div>
            <form method="POST" action="/auth/logout">
                  <button
                      type="submit"
                      class="text-gray-700 inline hover:text-purple-600 transition"
                  >
                      Logout
                  </button>
              </form>
            <a
            href="/listings/create"
            class="bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 transition duration-300 text-white px-4 py-2 rounded shadow-sm"
            ><i class="fa fa-edit"></i> Post a Job</a>
          </div>
            <?php else: ?>
            <a href="/auth/login" class="text-gray-700 hover:text-purple-600 transition">Login</a>
            <a href="/auth/register" class="text-gray-700 hover:text-purple-600 transition">Register</a>
          <?php endif; ?>

         
        </nav>
      </div>
    </header>