<template>
  <div class="card my-5">
    <h3 class="card-header text-primary">{{ post.title }}</h3>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>{{ post.content }}</p>
        <footer class="blockquote-footer">
          AUTHOR: <cite title="Source Title">{{ post.author }}</cite>
          <p>Categoria:{{ post.category }}</p>
        </footer>
      </blockquote>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: ["post"],
};
</script>

<style>
</style>