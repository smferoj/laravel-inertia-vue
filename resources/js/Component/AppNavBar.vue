<script setup>
import { Link } from '@inertiajs/vue3';

 
</script>

<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel-vue</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <Link class="nav-link" href="/">Home <span class="sr-only"></span></Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" href="/Page1">Page1</Link>
        </li>
        
        <li class="nav-item">
          <Link class="nav-link" href="/Page2">Page2</Link>
        </li>
        
        <li class="nav-item">
          <Link class="nav-link" href="/Page3">Page3</Link>
        </li>
        
      </ul>
       
    </div>
  </nav>
</template>

<style scoped>
</style>