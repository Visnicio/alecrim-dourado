<script>
  import "../../css/app.css"
  import { inertia } from '@inertiajs/svelte'
</script>

<header class="border">
  <div class="py-3 container mx-auto flex justify-between items-center">
    <div use:inertia href="/" class="font-bold text-2xl"><span class="text-purple-400">Lara</span>v<span class="text-orange-400">elte</span></div>
    <div>
      <a href="https://github.com/Visnicio/laravel-svelte-tailwind" class="mr-2">Github</a>
    </div>
  </div>
</header>
<main>
  <slot />
</main>