<script>
  export let text;
  export let onClick;
</script>

<button on:click={onClick} class="rounded-lg border border-primary-100 bg-primary-100 px-5 py-2.5 text-center text-sm font-medium text-primary-600 transition-all hover:border-primary-200 hover:bg-primary-200 focus:ring focus:ring-primary-50 disabled:border-primary-50 disabled:bg-primary-50 disabled:text-primary-400">
  {text}
</button>