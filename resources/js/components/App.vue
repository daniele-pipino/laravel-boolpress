<template>
  <div class="container">
    <PostList />
  </div>
</template>

<script>
import PostList from "./Post/PostList.vue";
export default {
  name: "App",
  components: {
    PostList,
  },
};
</script>
