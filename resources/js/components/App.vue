<template>
  <div>
    <h1>Posts List</h1>
    <ul>
      <li v-for="post in posts" :key="post.id">
        <h3>{{post.title}}</h3>
        <p>{{post.content}}</p>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "App",
  data(){
    return {
      posts: [],
    }
  },
  created(){
    axios.get('/api/posts')
    .then( (response) => {
      // handle success
      this.posts = response.data;
  })
  }
}
</script>

<style lang="scss">
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}

li {
  margin: 1rem 0;
}
</style>