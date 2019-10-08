<template>
  <div class="max-w-sm w-full lg:max-w-full lg:flex shadow mb-8">
    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" title="rocket->name">
      <img class="w-full h-full bg-cover" :src="post.rocket.imageURL"/>
    </div>
    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal w-full">
      <div class="mb-8">
        <p class="text-sm text-gray-600 flex items-center">
          {{ post.windowstart }} &nbsp; <span class="rounded-full py-1 px-2 bg-green-200 text-gray-600"> {{ post.status }} </span>
        </p>
        <div class="text-gray-900 font-bold text-xl mb-2">{{ post.name }}</div>
        <p v-if="post.missions.length > 0" class="text-gray-700 text-base">{{ post.missions[0].description }}</p>
      </div>
      <div class="flex items-center">
        <div class="text-sm">
          <p class="text-gray-900 leading-none">{{ post.rocket.name }}</p>
          <p v-if="post.missions.length > 0" class="text-gray-600">{{ post.missions[0].typeName }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        props: ['post']
    }
</script>
