<template>
    <h1 class="mt-20 text-xl text-center">Vervoer</h1>
      <div class="max-w-[580px] mx-auto p-4 mt-4">
        <h1 class="text-left">
     Welkom bij de handleiding voor ons unieke taxirit-programma!<br> Deze handleiding is speciaal ontworpen voor jou als taxichauffeur om
    jouw ritten interactiever en leerzaam te maken. Met het gebruik van creatieve zoekkaarten verander je elke rit in een
    ontdekkingstocht voor jouw cliënten of leerlingen. Jouw rol is cruciaal voor het succes van dit programma.</h1>
    <br>
    <h2 class="text-left">
        1. Voorbereiding:<br>    Zorg dat je voor de rit goed bekend bent met de zoekkaarten en hun doel. Het is belangrijk dat je de betekenis van de
    afbeeldingen en symbolen goed kunt uitleggen
    </h2>
    <br>
    <h2 class="text-left">
        2. Materialen:<br>   
    Geef elke cliënt of leerling een whiteboardstift voor hun gelamineerde zoekkaart. Deze zoekkaarten kunnen na gebruik
    eenvoudig worden schoongeveegd voor hergebruik.

    </h2>
    <br>
    <h2 class="text-left">3. Tijdens de rit:<br>
   
    Moedig de cliënten/leerlingen aan om de whiteboardstift te gebruiken voor het invullen van hun zoekkaart. Dit helpt hen om
    betrokken en gefocust te blijven tijdens de rit. Het Stoplicht zoekkaart is een leuke, creatieve aanvulling op de andere kaarten. 
</h2>
    <br>
    <h2 class="text-left">4. Complimentkaarten:<br>
    Aan het einde van elke rit kijk je de kaarten na en beloon je de inspanningen met een complimentkaart, die volledig gericht is op de
    prestaties tijdens de rit. Dit stimuleert hen om de volgende keer weer hun best te doen.</h2>
    <br>
    <h2 class="text-left">5. Belang van jouw rol:<br>
    Jouw positieve en consequente communicatie is essentieel.
    Vermijd het terugvallen in oude gewoontes. Wees duidelijk, kort van stof, volg de gemaakte afspraken.
    Doe wat je zegt en zeg wat je doet. Gebruik hiervoor de ‘’geef me de 5 kaart.’’
    Jouw standvastigheid en positieve benadering zijn cruciaal voor het succes van dit plan.</h2>
    <br>
    <h3 class="text-left ">Heel veel succes!</h3>
    </div>
    <br>
      <div class="max-w-lg mx-auto">
        <img 
          src="../assets/taxi.jpeg" 
          alt="taxifoto"
          class="w-full h-auto object-contain"
        />
      </div>
      <br>
          <div class="max-w-lg mx-auto">
            <img 
              src="../assets/taxivoorbeeld1.jpeg" 
              alt="taxifoto"
              class="w-full h-auto object-contain"
            />
          </div>
          <br>
              <div class="max-w-lg mx-auto">
                <img 
                  src="../assets/taxivoorbeeld2.jpeg" 
                  alt="taxifoto"
                  class="w-full h-auto object-contain"
                />
              </div>
<br>
<br>
<br>
     <div class="flex flex-col max-w-[500px] mx-auto mb-28">
        <h2 class="text-lg md:text-xl font-semibold mb-4 m-2">
          Ontdek onze Gratis PDF!
        </h2>
        <p class="text-lg  mb-6 text-left m-2">
          Klik op de knop hieronder en begin met het verkennen van onze waardevolle bronnen, helemaal gratis.
        </p> 
        <button @click="downloadPdf" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition-colors duration-300 m-2">
          Download Nu Gratis
        </button>
      </div>


</template>




<script>
export default {
  data() {
        return {
           

        };
 
  },
   methods: {
        downloadPdf() {
            const link = document.createElement('a');
            link.href = 'src/assets/taxi.pdf'; // Update dit met het werkelijke pad naar je PDF
            link.download = 'taxi.pdf'; // Optionele downloadnaam voor het bestand
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    },

};

</script>