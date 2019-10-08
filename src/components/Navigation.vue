<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li v-for="link in links" v-bind:key="link.id" class="nav-item">
            <a class="nav-link" href="#">{{ link.name }}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  data() {
    return {
      links: [
        { id: 1, name: "How it works", url: "#" },
        { id: 2, name: "Courses", url: "#" },
        { id: 3, name: "News", url: "#" },
        { id: 4, name: "Contact Us", url: "#" },
        { id: 5, name: "Login", url: "#" }
      ]
    };
  }
};
</script>