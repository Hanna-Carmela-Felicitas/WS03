<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<!-- Login Form Box -->
<div class="min-h-screen bg-gray-50 flex justify-center items-center py-20 px-6">
    <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-md w-full md:w-1/3">
        <h2 class="text-4xl text-center font-bold mb-4 text-gray-800">
            Login
        </h2>

        <?php loadPartial('errors', [
            'errors' => $errors ?? []
        ]) ?>

        <form method="POST" action="/auth/login">
            <div class="mb-4">
                <input
                    type="text"
                    name="email"
                    placeholder="Email Address"
                    class="w-full px-4 py-2 border border-gray-200 bg-gray-50 rounded focus:outline-none focus:ring-2 focus:ring-purple-400"
                />
            </div>

            <div class="mb-4">
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    class="w-full px-4 py-2 border border-gray-200 bg-gray-50 rounded focus:outline-none focus:ring-2 focus:ring-purple-400"
                />
            </div>

            <button
                type="submit"
                class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 transition duration-300 text-white px-4 py-2 rounded shadow-sm"
            >
                Login
            </button>

            <p class="mt-4 text-gray-500 text-center">
                Don't have an account?

                <a
                    class="text-purple-600 hover:text-pink-500 transition"
                    href="/auth/register"
                >
                    Register
                </a>
            </p>
        </form>
    </div>
</div>

<?php loadPartial('footer'); ?>