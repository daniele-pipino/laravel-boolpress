<template>
  <div>
    <h1 class="text-center">Lista Post</h1>
    <PostCard />
  </div>
</template>

<script>
import PostCard from "./PostCard.vue";
export default {
  name: "PostList",
  components: {
    PostCard,
  },
};
</script>

<style>
</style>