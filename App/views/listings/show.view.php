<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php loadPartial('top-banner'); ?>

<section class="container mx-auto p-4 mt-4">
    <div class="rounded-lg shadow-md bg-white border border-gray-100 p-3">
        <?php loadPartial('message') ?>
        <div class="flex justify-between items-center">
            <a class="block p-4 text-purple-600 hover:text-pink-500 transition" href="/listings">
                <i class="fa fa-arrow-alt-circle-left"></i>
                Back To Listings
            </a>
            <?php if(Framework\Authorization::isOwner($listing->user_id)) : ?>
            <div class="flex space-x-4 ml-4">
                <a
                    href="/listings/edit/<?= $listing->id ?>"
                    class="px-4 py-2 bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 text-white rounded shadow-sm transition duration-300"
                >
                    Edit
                </a>
                <!-- Delete Form -->
                <form method="POST" action="/listings/<?= $listing->id ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <button
                        type="submit"
                        class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded shadow-sm transition duration-300"
                    >
                        Delete
                    </button>
            </form>
                <!-- End Delete Form -->
            </div>
            <?php endif; ?>
        </div>
        <div class="p-4">
            <h2 class="text-xl font-semibold text-gray-800">
                <?= $listing->title ?>
            </h2>
            <p class="text-gray-600 text-lg mt-2">
                <?= $listing->description ?>
            </p>
            <ul class="my-4 bg-gray-50 border border-gray-100 p-4 rounded">
                <li class="mb-2">
                    <strong>Salary:</strong>
                    <?= formatSalary($listing->salary) ?>
                </li>
                <li class="mb-2">
                    <strong>Location:</strong>
                    <?= $listing->city ?>, <?= $listing->state ?>
                    <span
                        class="text-xs bg-purple-500 text-white rounded-full px-2 py-1 ml-2"
                    >
                        Local
                    </span>
                </li>
                <?php if(!empty($listing->tags)): ?>
                <li class="mb-2">
                    <strong class="text-purple-600">Tags:</strong>
                    <?= $listing->tags ?>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>

<section class="container mx-auto p-4">
    <h2 class="text-xl font-semibold mb-4 text-gray-800">
        Job Details
    </h2>
    <div class="rounded-lg shadow-md bg-white border border-gray-100 p-4">
        <h3 class="text-lg font-semibold mb-2 text-purple-600">
            Job Requirements
        </h3>
        <p class="text-gray-600">
            <?= $listing->requirements ?>
        </p>
        <h3 class="text-lg font-semibold mt-4 mb-2 text-purple-600">
            Benefits
        </h3>
        <p class="text-gray-600">
            <?= $listing->benefits ?>
        </p>
    </div>

    <p class="my-5 text-gray-600">
        Put "Job Application" as the subject of your email and attach your
        resume.
    </p>

    <a
        href="mailto:<?= $listing->email ?>"
        class="block w-full text-center px-5 py-2.5 shadow-sm rounded text-base font-medium cursor-pointer text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 transition duration-300"
    >
        Apply Now
    </a>

</section>

<?php loadPartial('bottom-banner'); ?>
<?php loadPartial('footer'); ?>