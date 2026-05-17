<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<!-- Login Form Box -->
<div class="min-h-screen bg-gradient-to-br from-purple-900 via-pink-900 to-purple-950 flex justify-center items-center py-20 px-6">
    <div class="bg-white/10 backdrop-blur-xl border border-white/20 p-10 rounded-3xl shadow-2xl w-full md:w-[450px]">
        <div class="text-center mb-8">
            <h2 class="text-5xl font-bold text-white mb-3">
                Welcome Back
            </h2>

            <p class="text-gray-200">
                Login to continue your creative journey.
            </p>
        </div>
        <?php loadPartial('errors', [
            'errors' => $errors ?? []
        ]) ?>

        <form method="POST" action="/auth/login">
            <div class="mb-4">
                <input
                    type="text"
                    name="email"
                    placeholder="Email Address"
                    class="w-full px-5 py-3 rounded-2xl border border-white/20 bg-white/10 text-white placeholder-gray-300 backdrop-blur-md focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
                />
            </div>

            <div class="mb-4">
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    class="w-full px-5 py-3 rounded-2xl border border-white/20 bg-white/10 text-white placeholder-gray-300 backdrop-blur-md focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
                />
            </div>

            <button
                type="submit"
                class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:scale-[1.02] hover:opacity-90 transition duration-300 text-white px-4 py-3 rounded-2xl shadow-2xl font-semibold"
            >
                Login
            </button>

            <p class="mt-6 text-gray-200 text-center">
                Don't have an account?

                <a
                    class="text-pink-300 hover:text-white transition"
                    href="/auth/register"
                >
                    Register
                </a>
            </p>
        </form>
    </div>
</div>

<?php loadPartial('footer'); ?>