<a href="/" class=" <?= urlIs('/') ? "text-blue-500" : "text-white" ?> text-sm/6 font-semibold ">Home</a>
<a href="/features" class="<?= urlIs('/features') ? "text-blue-500" : "text-white" ?> text-sm/6 font-semibold ">Features</a>
<a href="/notes" class="<?= (urlIs('/notes') || urlIs('/create')) || urlIs('/note') ? "text-blue-500" : "text-white" ?> text-sm/6 font-semibold ">Notes</a>
<a href="/pricing" class="<?= urlIs('/pricing') ? "text-blue-500" : "text-white" ?> text-sm/6 font-semibold ">Pricing</a>
</el-popover-group>
<div class="hidden lg:flex lg:flex-1 lg:justify-end">
  <div class="text-gray-100 px-4 py-1 rounded-lg font-medium tracking-wide">
    <?php if ($_SESSION["name"] ?? false): ?>
      <div class="text-gray-100 px-4 py-1 rounded-lg font-medium tracking-wide">
        <a href="/register"> <?= $_SESSION["name"] ?></a>
      </div>
    <?php else : ?>
      <?php if (!urlIs('/register')): ?>
        <a href="/register" class="text-sm/6 font-semibold text-white">Log in <span aria-hidden="true">&rarr;</span>
        </a>
  </div>
<?php endif; ?>
<?php endif; ?>
</div>
</nav>
<el-dialog>
  <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
    <div tabindex="0" class="fixed inset-0 focus:outline-none">
      <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
          </a>

          <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-400">
            <span class="sr-only">Close menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-white/10">
            <div class="space-y-2 py-6">
              <div class="-mx-3">
                <button type="button" command="--toggle" commandfor="products" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-white hover:bg-white/5">
                  Product
                  <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none in-aria-expanded:rotate-180">
                    <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                  </svg>
                </button>
                <el-disclosure id="products" hidden class="mt-2 block space-y-2">
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-white hover:bg-white/5">Analytics</a>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-white hover:bg-white/5">Engagement</a>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-white hover:bg-white/5">Security</a>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-white hover:bg-white/5">Integrations</a>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-white hover:bg-white/5">Automations</a>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-white hover:bg-white/5">Watch demo</a>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-white hover:bg-white/5">Contact sales</a>
                </el-disclosure>
              </div>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Features</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Marketplace</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Company</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-white/5">Log in</a>
            </div>
          </div>
        </div>
      </el-dialog-panel>
    </div>
  </dialog>
</el-dialog>
</header>