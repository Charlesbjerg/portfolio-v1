<template>

  <div id="app">
    <div class="main-wrapper" id="mainWrapper">
      <button id="navBtn" class="menu" @click="this.menu"><i id="arrow" class="fa fa-arrow-left fa-1x"></i></button>
      <nav id="nav">
        <!-- <section class="top">
        </section> -->
        <section class="main">
          <router-link class="link" v-on:click.native="viewChange" to="/"><i class="i i-home"></i>Home</router-link>
          <router-link class="link" v-on:click.native="viewChange" to="/about"><i class="i i-about"></i>About</router-link>
          <router-link class="link" v-on:click.native="viewChange" to="/portfolio"><i class="i i-portfolio"></i>My Work</router-link>
          <router-link class="link" v-on:click.native="viewChange" to="/contact"><i class="i i-contact"></i>Contact</router-link>
        </section>
        <!-- <section class="bottom">
          <span><i class="i i-info"></i></span>
        </section> -->
      </nav>
      <keep-alive>
          <router-view id="main"></router-view>
      </keep-alive>
    </div>
    <div id="swipe" class="swipe-block"></div>
  </div>

</template>

<script>
export default {
  data() {
    return {
      menuOpen: false,
      nav: document.getElementById('nav'),
      navBtn: document.getElementById('navBtn'),
      wpData: {}
    };
  },
  watch: {
    '$route' (to, from) {
      // this will be triggered when the route changes
      // Need to trigger some kind of function that deals with animation
      // Add the function to methods
      console.log('Route changed');
    }
  },
  created: function() {
    // TODO: Use this to fetch json file of all required WP data
    console.log('Created');
  },
  beforeRouteEnter (to, from, next) {
    console.log('Before route enter');
    let swipe = document.getElementById('swipe'); 
    swipe.classList.add('animate-swipe');
      setTimeout(function() {
        swipe.classList.remove('animate-swipe');
      }, 2000); 

    next(true);
  },
  methods: {
    menu() {
      let navArrow = document.getElementById('arrow');
      if (this.menuOpen) {
        // Close menu
        nav.style.right = '-95px';
        navBtn.style.right = '5px';
        // Rotate Icon 180deg
        navArrow.style.transform = 'rotate(0deg)';
        // set menu open false
        this.menuOpen = false;
      } else {
        // Open menu
        nav.style.right = '0px';
        navBtn.style.right = '100px';
        // Rotate Icon 180deg
        navArrow.style.transform = 'rotate(180deg)';
        // set menu open true
        this.menuOpen = true;
      }
    },
    viewChange() {
      console.log('ViewChange');
      // Add class .animate-swipe to element
      let swipe = document.getElementById('swipe');
      let mainWrapper = document.getElementById('mainWrapper');
      mainWrapper.style.opacity = 0;
      swipe.classList.add('animate-swipe');
      setTimeout(function() {
        swipe.classList.remove('animate-swipe');
      }, 2000); 
    }
  },
} 

</script>


<style>
#app {
  background-color: #1c2b3c;
  color: #fff;
  position: relative;
  height: 100vh;
  width: calc(100vw - 85px);
  display: flex;
  align-items: center;
  position: relative;
}
#app button.menu {
  display: none;
}
#app nav {
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100vh;
  width: 85px;
  position: fixed;
  overflow-x: hidden;
  z-index: 10;
  right: 0;
  top: 0px;
  background-color: #fecb56;
  border-left: 5px solid #e5b74d;
  transition: 0.25s ease-in-out;
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
  opacity: 0.8;
  transition: all 0.25s ease-in-out;
}
#app nav section.main a:hover {
  opacity: 1;
  transform: translateY(-5px);
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
div.swipe-block {
  position: absolute;
  right: -100%;
  width: 100vw;
  height: 100vh;
  background-color: #002A59;
  z-index: 9;
  transition: 2s ease;
}
div.swipe-block.animate-swipe {
  transform: translateX(-100%);
}
#main {
  height: auto;
  width: 100%;
}
@media screen and (max-width: 768px) {
  body {
    overflow: auto;
    background-color: #1c2b3c;
  }
  #app {
    width: 100%;
    display: block;
  }
  #app button.menu {
    background-color: #e5b74d;
    border: none;
    padding: 0.5em;
    position: fixed;
    top: 1em;
    right: 5px;
    display: inline;
    transition: 0.25s ease-in-out;
  }
  #app button.menu svg#arrow {
    transition: 0.25s ease-in-out;
  }
  #app button.menu::after {
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 40px 51px 0;
    border-color: transparent #e5b74d transparent transparent;
    position: absolute;
    top: 0;
    left: -40px;
  }
  #app nav {
    width: 100px;
    right: -95px;
  }
}
</style>
