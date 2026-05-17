<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<!-- Registration Form Box -->
<div class="min-h-screen bg-gradient-to-br from-purple-900 via-pink-900 to-purple-950 flex justify-center items-center px-6 pt-24 pb-10">

    <div class="bg-white/10 backdrop-blur-xl border border-white/20 p-10 rounded-3xl shadow-2xl w-full md:w-[620px]">

        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-white mb-3">
                Join CreativeHub
            </h2>

            <p class="text-gray-200">
                Create your account and discover creative opportunities.
            </p>
        </div>

        <?php loadPartial('errors', [
            'errors' => $errors ?? []
        ]) ?>

        <form method="POST" action="/auth/register">
            <div class="mb-4">
                <input
                    type="text"
                    name="name"
                    placeholder="Full Name"
                    class="w-full px-5 py-3 rounded-2xl border border-white/20 bg-white/10 text-white placeholder-gray-300 backdrop-blur-md focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
                    value="<?= $user['name'] ?? '' ?>"
                />
            </div>

            <div class="mb-4">
                <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    class="w-full px-5 py-3 rounded-2xl border border-white/20 bg-white/10 text-white placeholder-gray-300 backdrop-blur-md focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
                    value="<?= $user['email'] ?? '' ?>"
                />
            </div>

            <div class="mb-4">
                <input
                    type="text"
                    name="city"
                    placeholder="City"
                    class="w-full px-5 py-3 rounded-2xl border border-white/20 bg-white/10 text-white placeholder-gray-300 backdrop-blur-md focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
                    value="<?= $user['city'] ?? '' ?>"
                />
            </div>

            <div class="mb-4">
                <input
                    type="text"
                    name="state"
                    placeholder="State"
                    class="w-full px-5 py-3 rounded-2xl border border-white/20 bg-white/10 text-white placeholder-gray-300 backdrop-blur-md focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
                    value="<?= $user['state'] ?? '' ?>"
                />
            </div>

            <div class="mb-4">
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    class="w-full px-5 py-3 rounded-2xl border border-white/20 bg-white/10 text-white placeholder-gray-300 backdrop-blur-md focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
                    value="<?= $user['password'] ?? '' ?>"
                />
            </div>

            <div class="mb-6">
                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirm Password"
                    class="w-full px-5 py-3 rounded-2xl border border-white/20 bg-white/10 text-white placeholder-gray-300 backdrop-blur-md focus:outline-none focus:ring-2 focus:ring-pink-400 transition"
                />
            </div>

            <button
                type="submit"
                class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:scale-[1.02] hover:opacity-90 transition duration-300 text-white px-4 py-3 rounded-2xl shadow-2xl font-semibold"
            >
                Register
            </button>

            <p class="mt-6 text-gray-200 text-center">
                Already have an account?
                <a
                    class="text-pink-300 hover:text-white transition"
                    href="/auth/login"
                >
                    Login
                </a>
            </p>
        </form>
    </div>
</div>

<?php loadPartial('footer'); ?>