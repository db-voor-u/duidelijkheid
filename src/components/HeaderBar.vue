<template>
    <header class="w-full fixed  top-0  bg-primary-color h-20 rounded-b-lg flex flex-row justify-between border-b-2 border-secondary-color">
         <router-link to="/" >
        <h1 class="mt-6 ml-10">Duidelijkheid.com</h1>
         </router-link>
        <NavBar @click="$emit('menu-icon-clicked')" class="mt-4 " />
    </header> 
</template>


<script>
import NavBar from '@/components/NavBar.vue';
export default {
    components: {
  
    NavBar
    },
data() {
    return {
        logo: "@/assets/logo.png",
    };
},


}

</script>