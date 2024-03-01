<template>
  <div class="min-h-screen flex flex-col">
    <!-- Hero Section -->
    <HeroComponent/>  

    <!-- Service Boxes -->
    <div class="flex-grow grid grid-cols-1 md:grid-cols-3 gap-4 p-4 mt-20">
      <!-- Taxi -->
     <TaxiComponent/>

      <!-- School -->
     <SchoolComponent/>

      <!-- Thuis -->
      <ThuisComponent/>
    
    </div>

    <!-- Contact Button -->
    <div class="text-center py-4">
      <router-link to="/contact" class="bg-primary-color border-2 border-secondary-color font-bold py-2 px-4 rounded-lg">
        Neem Contact Op
      </router-link>
    </div>
  </div>
  <br>
  <br>


</template>

<script>
import TaxiComponent from '@/components/TaxiComponent.vue';
import SchoolComponent from '@/components/SchoolComponent.vue';
import ThuisComponent from '@/components/ThuisComponent.vue';
import HeroComponent from '@/components/HeroComponent.vue';


export default {
  components: {
    TaxiComponent,
    SchoolComponent,
    ThuisComponent,
    HeroComponent,

},
};


</script>
