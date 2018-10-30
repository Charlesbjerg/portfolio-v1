<template>
  <div id="app">
    <nav>
      <section class="top">
        <router-link to="/"><i class="i i-back"></i></router-link>
      </section>
      <section class="main">
        <router-link class="link" to="/"><i class="i i-home"></i>Home</router-link>
        <router-link class="link" to="/about"><i class="i i-about"></i>About</router-link>
        <router-link class="link" to="/portfolio"><i class="i i-portfolio"></i>My Work</router-link>
        <router-link class="link" to="/contact"><i class="i i-contact"></i>Contact</router-link>
      </section>
      <section class="bottom">
        <span><i class="i i-info"></i></span>
      </section>
    </nav>
    <main>
      <router-view/>
    </main>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
#app {
  background-color: #1c2b3c;
  color: #fff;
  position: relative;
  height: 100vh;
  width: calc(100vw - 85px);
}
#app nav {
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100vh;
  width: 85px;
  position: absolute;
  z-index: 2;
  right: -85px;
  top: 0px;
  background-color: #fecb56;
  border-left: 5px solid #e5b74d;
}
#app nav section {
  width: 100%;
  padding: 0.25em;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
#app nav section.top,
#app nav section.bottom {
  height: 60px;
}
#app nav section.top a {
  margin-top: 1em;
}
#app nav section.bottom span {
  margin-bottom: 1em;
}
#app nav section.main {
  display: flex;
  flex-direction: column;
  justify-content: center;
  flex-grow: 1;
}
#app nav section.main a {
  margin-bottom: 0.75em;
}
#app nav section.main a:last-child {
  margin-bottom: 0;
}
#app nav section a,
#app nav section span {
  width: 100%;
  height: 60px;
  display: block;
  text-align: center;
  color: #000;
  font-family: 'IBM Plex Mono', monospace;
  font-size: 1em;
}
main {
  height: 100%;
}
</style>
