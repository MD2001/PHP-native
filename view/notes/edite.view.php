<?php view("partials/head.php") ?>
<?php view("partials/Header.php") ?>


<main class="container ml-6 p-3 mr-auto mt-10 max-w-3xl bg-gray-100 rounded-md">
    <form action="/note/edit" method="POST">
        <input type="hidden" name="__method" value="PATCH">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="hidden" name="userid" value="<?= $userid ?>">
        <div class="space-t-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-t-8 sm:grid-cols-6">

                <div class="col-span-full">
                    <label for="about" class="block text-sm/6 font-medium text-gray-900">About</label>
                    <div class="mt-2">
                        <textarea id="about" name="about" rows="3" class="block w-full 
                        rounded-md bg-white px-3 py-1.5 text-base text-gray-900
                         outline outline-1 -outline-offset-1 outline-gray-300 
                         placeholder:text-gray-400 focus:outline focus:outline-2 
                         focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?= $note ?></textarea>
                    </div>
                </div>
            </div>
            <p class="font-sm text-red-500 px-3">
                <?= isset($error['about']) ? $error['about'] : '' ?>

            </p>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a class=" rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="/note?id=<?= $id ?>"> Go back</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </form>
</main>
<?php view("partials/body.php") ?>