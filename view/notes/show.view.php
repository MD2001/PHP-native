<?php view("partials/head.php") ?>
<?php view("partials/Header.php") ?>

<!-- Back Button -->
<a
    href="/notes"
    class="block text-blue-500 hover:text-blue-900 hover:underline px-6 py-4 text-sm font-medium">
    ← Go back
</a>

<!-- Main Content -->
<main class="mx-auto max-w-4xl bg-white rounded-2xl shadow-md border border-gray-200 p-8 mt-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Your Note</h1>

    <p class="text-gray-700 leading-relaxed whitespace-pre-line border-l-4 border-blue-300 pl-4">
        <?= htmlspecialchars($data['body']) ?>
    </p>

    <!-- Actions -->
    <div class="flex items-center justify-between mt-8 border-t pt-4">
        <a
            href="/note/edit?userid=<?= $userid ?>&id=<?= $_GET['id'] ?>"
            class="text-gray-500 hover:text-gray-800 hover:underline text-sm font-medium">
            ✏️ Edit
        </a>

        <!-- Future Delete Form -->
        <!--
    <form action="/note" method="POST" class="inline">
      <input type="hidden" name="__method" value="DELETE">
      <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
      <button 
        type="submit" 
        class="text-red-400 hover:text-red-600 hover:underline text-sm font-medium"
      >
        🗑️ Delete
      </button>
    </form>
    -->
    </div>
</main>

<?php view("partials/body.php") ?>