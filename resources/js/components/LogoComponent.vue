<template>
  <header>
    <a :href="url">
      <img :src="icon" width="128" class="mx-auto" />
    </a>
  </header>
</template>

<script>
    export default {
        props: ['url', 'icon']
    }
</script>
