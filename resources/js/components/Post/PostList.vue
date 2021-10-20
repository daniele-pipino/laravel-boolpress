<template>
  <div>
    <h1 class="text-center">Lista Post</h1>
    <PostCard v-for="post in posts" :key="post.id" :post="post" />
  </div>
</template>

<script>
import PostCard from "./PostCard.vue";
export default {
  name: "PostList",
  components: {
    PostCard,
  },
  data() {
    return {
      posts: [],
    };
  },
  methods: {
    getPosts() {
      axios
        .get("http://127.0.0.1:8000/api/posts")
        .then((response) => (this.posts = response.data));
    },
  },
  created() {
    this.getPosts();
    console.log(this.posts);
  },
};
</script>

<style>
</style>