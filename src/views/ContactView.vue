<template>
  <div class="max-w-[500px] mx-auto mt-20 flex flex-col ">
    <h1 class="m-2">Voor meer informatie, aarzel niet en neem contact met ons op via e-mail. </h1><h1 class=" font-bold m-2">We helpen je graag verder!</h1>
  </div>
  <br>
  <br>
  <div class="flex justify-center items-center m-2">
    <form action=" https://formsubmit.co/info@duidelijkheid.com" method="POST"
      class="w-full max-w-lg">
      <!-- https://formsubmit.co/el/jutilu -->
      <!-- Voornaam -->
      <div class="mb-4">
        <label class="block  text-sm font-bold mb-2" for="firstName">
          Voornaam
        </label>
        <input v-model="form.firstName" name="firstName" type="text"
          class="shadow appearance-none border rounded w-full py-2 px-3 " required>
      </div>

      <!-- Achternaam -->
      <div class="mb-4">
        <label class="block  text-sm font-bold mb-2" for="lastName">
          Achternaam
        </label>
        <input v-model="form.lastName" name="lastName" type="text"
          class="shadow appearance-none border rounded w-full py-2 px-3 " required>
      </div>

      <!-- E-mail -->
      <div class="mb-4">
        <label class="block  text-sm font-bold mb-2" for="email">
          E-mailadres
        </label>
        <input v-model="form.email" name="email" type="email"
          class="shadow appearance-none border rounded w-full py-2 px-3 " required>
      </div>
  <!-- Vraag / Bericht -->
        <div class="mb-4">
          <label class="block  text-sm font-bold mb-2" for="message">
            Uw Vraag of Bericht
          </label>
          <textarea name="message" class="shadow appearance-none border rounded w-full py-2 px-3  h-32" placeholder="Typ hier uw vraag of bericht" required></textarea>
        </div>
      <!-- Verzendknop -->
      <div class="mb-4">
        <button type="submit" class=" bg-primary-color hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Verstuur
        </button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        firstName: '',
        lastName: '',
        email: ''
      }
    };
  },
 
};
</script>
