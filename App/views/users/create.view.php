<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<!-- Registration Form Box -->
<div class="min-h-screen bg-gray-50 flex justify-center items-center py-20 px-6">

    <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-md w-full md:w-1/3">

        <h2 class="text-4xl text-center font-bold mb-6 text-gray-800">
            Register
        </h2>

        <?php loadPartial('errors', [
            'errors' => $errors ?? []
        ]) ?>

        <form method="POST" action="/auth/register">
            <div class="mb-4">
                <input
                    type="text"
                    name="name"
                    placeholder="Full Name"
                    class="w-full px-4 py-2 border border-gray-200 bg-gray-50 rounded focus:outline-none focus:ring-2 focus:ring-purple-400"
                    value="<?= $user['name'] ?? '' ?>"
                />
            </div>

            <div class="mb-4">
                <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    class="w-full px-4 py-2 border border-gray-200 bg-gray-50 rounded focus:outline-none focus:ring-2 focus:ring-purple-400"
                    value="<?= $user['email'] ?? '' ?>"
                />
            </div>

            <div class="mb-4">
                <input
                    type="text"
                    name="city"
                    placeholder="City"
                    class="w-full px-4 py-2 border border-gray-200 bg-gray-50 rounded focus:outline-none focus:ring-2 focus:ring-purple-400"
                    value="<?= $user['city'] ?? '' ?>"
                />
            </div>

            <div class="mb-4">
                <input
                    type="text"
                    name="state"
                    placeholder="State"
                    class="w-full px-4 py-2 border border-gray-200 bg-gray-50 rounded focus:outline-none focus:ring-2 focus:ring-purple-400"
                    value="<?= $user['state'] ?? '' ?>"
                />
            </div>

            <div class="mb-4">
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    class="w-full px-4 py-2 border border-gray-200 bg-gray-50 rounded focus:outline-none focus:ring-2 focus:ring-purple-400"
                    value="<?= $user['password'] ?? '' ?>"
                />
            </div>

            <div class="mb-6">
                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirm Password"
                    class="w-full px-4 py-2 border border-gray-200 bg-gray-50 rounded focus:outline-none focus:ring-2 focus:ring-purple-400"
                />
            </div>

            <button
                type="submit"
                class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 transition duration-300 text-white px-4 py-2 rounded shadow-sm"
            >
                Register
            </button>

            <p class="mt-4 text-gray-500 text-center">
                Already have an account?
                <a
                    class="text-purple-600 hover:text-pink-500 transition"
                    href="/auth/login"
                >
                    Login
                </a>
            </p>
        </form>
    </div>
</div>

<?php loadPartial('footer'); ?>