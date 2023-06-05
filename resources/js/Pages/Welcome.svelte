<script>
  import Layout from "./Layout.svelte";
  import Button from "../Components/Button.svelte";

  export let counter;

  function increment() {
    counter ++;
  }
</script>

<Layout>
  <section class="flex justify-center items-center flex-col min-h-screen">
    <h1 class="text-3xl uppercase font-bold mb-2">Welcome to Laravelte</h1>
    <p class="mb-5">This project was setup with Laravel, Svelte and Tailwind using InertiaJS</p>
      <Button text="Counter is {counter}" onClick={increment}/>
  </section>
</Layout>