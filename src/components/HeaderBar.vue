<template>
    <header class="w-full fixed  top-0  bg-primary-color h-20 rounded-b-lg flex flex-row justify-between border-b-2 border-secondary-color">
         <router-link to="/" >
        <img :src="imageSrc" class="object-cover h-18 w-24 ml-4 ">
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
         imageSrc: 'src/assets/logo.png'
    };
},


}

</script>