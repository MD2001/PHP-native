<el-popover-group class="hidden lg:flex lg:gap-x-12">
  <a href="/" class=" <?= urlIs('/') ? "text-blue-500" : "text-white" ?> text-sm/6 font-semibold ">Home</a>
  <a href="/features" class="<?= urlIs('/features') ? "text-blue-500" : "text-white" ?> text-sm/6 font-semibold ">Features</a>
  <a href="/notes" class="<?= (urlIs('/notes') || urlIs('/create')) || urlIs('/note') ? "text-blue-500" : "text-white" ?> text-sm/6 font-semibold ">Notes</a>
  <a href="/pricing" class="<?= urlIs('/pricing') ? "text-blue-500" : "text-white" ?> text-sm/6 font-semibold ">Pricing</a>
</el-popover-group>
<div class="hidden lg:flex lg:flex-1 lg:justify-end">
  <div class="text-gray-100 px-4 py-1 rounded-lg font-medium tracking-wide">
    <?php if ($_SESSION["login"] ?? false): ?>
      <div class="text-gray-100 px-4 py-1 rounded-lg font-medium tracking-wide">
        <a href="/logout"> <?= $_SESSION["name"] ?? "Unkonwn" ?></a>
      </div>
    <?php else : ?>
      <?php if ((!urlIs('/register')) && (!urlIs('/login'))): ?>
        <a href="/login" class="text-sm/6 font-semibold text-white px-2 hover:text-gray-500">Log in <span aria-hidden="true"></span>
          <a href="/register" class="text-sm/6 font-semibold text-white px-2 hover:text-gray-500">Register <span aria-hidden="true"></span>
          </a>
        <?php else : ?>
          <a href="/"
            class="flex items-center text-sm font-semibold text-white hover:text-gray-400 transition-colors duration-200">
            <span class="mr-1 text-lg">&larr;</span>
            Home
          </a>

  </div>
<?php endif; ?>
<?php endif; ?>
</div>
</nav>
</header>