
<template>
    <nav>

        <button @click="toggleMenu" class="  text-black  justify-end mr-8 mt-4">
            <IconNavbarDicht v-if="menuOpen" />
            <IconNavbarOpen v-else />
        </button>
        <div v-if="menuOpen" class="fixed inset-0 flex items-center justify-center">
            <div @click="closeMenu" class="absolute inset-0 bg-black opacity-50 "></div>
            <div
                class="relative w-96 bg-white border-2  border-primary-color rounded-lg shadow-lg justify-center items-center text-center ">

                <h1 class="text-left ml-14 text-2xl mt-10">Ga naar</h1>
                <hr class="w-24 ml-14 border-2  border-secondary-color">



                <router-link to="/" @click="closeMenu" class="ml-14 mt-20 text-lg flex flex-row "
                    exact-active-class="border-b-4 border-primary-color w-24 font-bold">Begin</router-link>
                <br>

                <router-link to="/taxi" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                    exact-active-class="border-b-4 border-primary-color w-24 font-bold">Taxi</router-link>
                <br>

                <router-link to="/school" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                    exact-active-class="border-b-4 border-primary-color w-24 font-bold">School</router-link>
                <br>

                <router-link to="/thuis" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                    exact-active-class="border-b-4 border-primary-color w-24 font-bold">Thuis</router-link>
                <br>

                <router-link to="/contact" @click="closeMenu" class="ml-14 text-lg flex flex-row "
                    exact-active-class="border-b-4 border-primary-color w-24 font-bold">Contact</router-link>
                <br>
            </div>
        </div>

    </nav>
</template>
   
<script>
import IconNavbarOpen from '@/components/IconNavbarOpen.vue';
import IconNavbarDicht from '@/components/IconNavbarDicht.vue';


export default {
    components: {
        IconNavbarOpen,
        IconNavbarDicht,
    },
    data() {
        return {
            menuOpen: false,
        };
    },
    methods: {
        toggleMenu() {
            this.menuOpen = !this.menuOpen;
        },
        closeMenu() {
            this.menuOpen = false;
        },
    },

};
</script>


<style>

</style>

    