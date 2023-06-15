<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'connect.php';?>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Checklist.css" rel="stylesheet" />
    <title>Cartech</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    
</head>
<body>

<div id="page-container">
    <div class="header">
        <div class="triangle">
            <img src="./wallpapers/cartechlogo.png" class="logo" alt="Logo" >
            <div class="header-overlay">
            <h2>Cartech</h2>
            <p>Checklist aanmaken voor de klant</p>
            </div>
        </div>
    </div>

<div id="content-wrap">    
  <div class="container">
  <div class="col-sm-8">
    <fieldset class="fieldset">
      <legend>Toevoegen</legend>
      <div class="lists">
        <div id="list1" class="dropdown-check-list" tabindex="100">
        <input type="text" placeholder="Opmerking:">
          <span class='button1'>APK</span>
          <ul class="items">
            <li><input value="Reparatie" class="cb" type="checkbox" /><label for="checkbox32">Reparatie</label> </li>
            <li><input value="Onderhoud" class="cb" type="checkbox" /><label for="checkbox22">Onderhoud</label> </li>
            <li><input value="Storing" class="cb" type="checkbox" /><label for="checkbox32">Storing</label> </li>
          </ul>
        </div>
        <div id="list2" class="dropdown-check-list" tabindex="100">
        <input type="text" placeholder="Opmerking:">
          <span class='button1'>Proefrit</span>
          <ul class="items">
            <li><input value="Afstandsbediening/sleutelhuis" class="cb" type="checkbox" /><label for="checkbox32">Afstandsbediening/sleutelhuis</label> </li>
            <li><input value="Rijeigenschappen" class="cb" type="checkbox" /><label for="checkbox22">Rijeigenschappen</label> </li>
            <li><input value="Trillingen" class="cb" type="checkbox" /><label for="checkbox32">Trillingen</label> </li>
            <li><input value="Motor" class="cb" type="checkbox" /><label for="checkbox32">Motor</label> </li>
            <li><input value="Koppeling en versnellingsbak" class="cb" type="checkbox" /><label for="checkbox22">Koppeling en versnellingsbak</label> </li>
            <li><input value="Remmen" class="cb" type="checkbox" /><label for="checkbox32">Remmen</label> </li>
            <li><input value="Verlichting" class="cb" type="checkbox" /><label for="checkbox32">Verlichting</label> </li>
          </ul>
        </div>
        <div id="list3" class="dropdown-check-list" tabindex="100">
        <input type="text" placeholder="Opmerking:">
          <span class='button1'>In en om de auto</span>
          <ul class="items">
            <li><input value="Remmencontrole rollentestbank" class="cb" type="checkbox" /><label for="checkbox32">Remmencontrole rollentestbank</label> </li>
            <li><input value="EOBD, 4gas, Roetmeting of Deeltjestest" class="cb" type="checkbox" /><label for="checkbox22">EOBD, 4gas, Roetmeting of Deeltjestest</label> </li>
            <li><input value="Uitlezen op foutcodes (bij brandend lampje)" class="cb" type="checkbox" /><label for="checkbox32">Uitlezen op foutcodes (bij brandend lampje)</label> </li>
            <li><input value="Tijdklok goed instellen" class="cb" type="checkbox" /><label for="checkbox32">Tijdklok goed instellen</label> </li>
            <li><input value="AdBleu controleren (eventueel bijvullen)" class="cb" type="checkbox" /><label for="checkbox22">AdBleu controleren (eventueel bijvullen)</label> </li>
            <li><input value="Verwarming, ventilatie, airconditioning: controleer werking" class="cb" type="checkbox" /><label for="checkbox32">Verwarming, ventilatie, airconditioning: controleer werking</label> </li>
            <li><input value="Temperatuurmeting airco: uitstroom en omgeving noteren" class="cb" type="checkbox" /><label for="checkbox32">Temperatuurmeting airco: uitstroom en omgeving noteren</label> </li>
            <li><input value="Voorruit: ontwaseming controleren" class="cb" type="checkbox" /><label for="checkbox32">Voorruit: ontwaseming controleren</label> </li>
            <li><input value="Voorruit en spiegels: controleer op schade (barst/ster), staat en werking" class="cb" type="checkbox" /><label for="checkbox22">Voorruit en spiegels: controleer op schade (barst/ster), staat en werking</label> </li>
            <li><input value="Verlichting voor- en achterzijde: controleer werking en beeld/afstelling" class="cb" type="checkbox" /><label for="checkbox32">Verlichting voor- en achterzijde: controleer werking en beeld/afstelling</label> </li>
            <li><input value="Instrumenten, controlelampjes, binnenverlichting: controleer werking" class="cb" type="checkbox" /><label for="checkbox32">MotInstrumenten, controlelampjes, binnenverlichting: controleer werkingor</label> </li>
            <li><input value="Ruitenwissers, sproeiers: controleer staat en werking" class="cb" type="checkbox" /><label for="checkbox22">Ruitenwissers, sproeiers: controleer staat en werking</label> </li>
            <li><input value="Claxon: werking controleren" class="cb" type="checkbox" /><label for="checkbox32">Claxon: werking controleren</label> </li>
            <li><input value="Pedaalrubbers/matten: controleren" class="cb" type="checkbox" /><label for="checkbox32">Pedaalrubbers/matten: controleren</label> </li>
            <li><input value="Binnenzijde en gordels: bevestiging/staat controleren voorstoelen, achterbank en hemel" class="cb" type="checkbox" /><label for="checkbox32">Binnenzijde en gordels: bevestiging/staat controleren voorstoelen, achterbank en hemel</label> </li>
            <li><input value="Ruitbediening: controleren" class="cb" type="checkbox" /><label for="checkbox22">Ruitbediening: controleren</label> </li>
            <li><input value="Life-hamer: controleren aanwezigheid/monteren indien nodig" class="cb" type="checkbox" /><label for="checkbox32">Life-hamer: controleren aanwezigheid/monteren indien nodig</label> </li>
            <li><input value="Interieurfilter: controleren" class="cb" type="checkbox" /><label for="checkbox32">Interieurfilter: controleren</label> </li>
            <li><input value="Scharnieren, vanger, rubbers en sloten: controleren en smeren waar nodig (motorkap, portieren, achterklep)" class="cb" type="checkbox" /><label for="checkbox22">Scharnieren, vanger, rubbers en sloten: controleren en smeren waar nodig (motorkap, portieren, achterklep)</label> </li>
            <li><input value="RemCarrosserie en chassis: visuele controle staat automen" class="cb" type="checkbox" /><label for="checkbox32">Carrosserie en chassis: visuele controle staat auto</label> </li>
            <li><input value="Reservewiel: aanwezigheid, staat en bandenspanning controleren" class="cb" type="checkbox" /><label for="checkbox32">Reservewiel: aanwezigheid, staat en bandenspanning controleren</label> </li>
            <li><input value="Profieldiepte: invullen" class="cb" type="checkbox" /><label for="checkbox22">Profieldiepte: invullen</label> </li>
            <li><input value="Reparatieset banden: controleren op houdbaarheid" class="cb" type="checkbox" /><label for="checkbox32">Reparatieset banden: controleren op houdbaarheid</label> </li>
            <li><input value="Kentekenplaten en houder: controleer de leesbaarheid, staat en bevestiging" class="cb" type="checkbox" /><label for="checkbox32">Kentekenplaten en houder: controleer de leesbaarheid, staat en bevestiging</label> </li>
          </ul>
        </div>
        <div id="list4" class="dropdown-check-list" tabindex="100">
        <input type="text" placeholder="Opmerking:">
          <span class='button1'>Onder de moterkap</span>
          <ul class="items">
            <li><input value="Slangen en leidingen in motorruimte: controleren op bevestiging en beschadigingen" class="cb" type="checkbox" /><label for="checkbox32">Slangen en leidingen in motorruimte: controleren op bevestiging en beschadigingen</label> </li>
            <li><input value="Remvloeistof: kwaliteit testen en peil controleren" class="cb" type="checkbox" /><label for="checkbox22">Remvloeistof: kwaliteit testen en peil controleren</label> </li>
            <li><input value="Motorolie: peil en eventuele lekkage controleren" class="cb" type="checkbox" /><label for="checkbox32">Motorolie: peil en eventuele lekkage controleren</label> </li>
            <li><input value="Accu: controleren d.m.v. accutest" class="cb" type="checkbox" /><label for="checkbox32">Accu: controleren d.m.v. accutest</label> </li>
            <li><input value="Aandrijfriemen: controleer staat en spanning" class="cb" type="checkbox" /><label for="checkbox22">Aandrijfriemen: controleer staat en spanning</label> </li>
            <li><input value="Condensor: visueel en werking" class="cb" type="checkbox" /><label for="checkbox32">Condensor: visueel en werking</label> </li>
            <li><input value="Multiriem, Distributieriem, waterpomp: controleer staat, spanning, interval/vervangen op" class="cb" type="checkbox" /><label for="checkbox32">Multiriem, Distributieriem, waterpomp: controleer staat, spanning, interval/vervangen op</label> </li>
            <li><input value="Koelsysteem: controleer afdichting en staat van de radiateur" class="cb" type="checkbox" /><label for="checkbox32">Koelsysteem: controleer afdichting en staat van de radiateur</label> </li>
            <li><input value="Koelvloeistof: controleren, bijvullen of verversen" class="cb" type="checkbox" /><label for="checkbox22">Koelvloeistof: controleren, bijvullen of verversen</label> </li>
            <li><input value="Vacuümpomp en ventilatormotor: controleren" class="cb" type="checkbox" /><label for="checkbox32">Vacuümpomp en ventilatormotor: controleren</label> </li>
            <li><input value="Ruitensproeiervloeistof: controleren en bijvullen" class="cb" type="checkbox" /><label for="checkbox32">Ruitensproeiervloeistof: controleren en bijvullen</label> </li>
            <li><input value="Stuurbekrachtiging en koppeling: controleren, controleer peil en afdichting" class="cb" type="checkbox" /><label for="checkbox22">Stuurbekrachtiging en koppeling: controleren, controleer peil en afdichting</label> </li>
            <li><input value="Luchtfilter: controleren" class="cb" type="checkbox" /><label for="checkbox32">Luchtfilter: controleren</label> </li>
            <li><input value="(Gloei) Bougies en kabels: staat controleren" class="cb" type="checkbox" /><label for="checkbox32">(Gloei) Bougies en kabels: staat controleren</label> </li>
            <li><input value="Brandstoffilter: controleren" class="cb" type="checkbox" /><label for="checkbox32">Brandstoffilter: controleren</label> </li>
            <li><input value="Motorkapvergrendeling: smering controleren" class="cb" type="checkbox" /><label for="checkbox22">Motorkapvergrendeling: smering controleren</label> </li>
            <li><input value="Motorruimte: stickers en isolatie controleren" class="cb" type="checkbox" /><label for="checkbox32">Motorruimte: stickers en isolatie controleren</label> </li>
            <li><input value="Inwendige reiniging/toevoeging motor: noteren welke toevoeging" class="cb" type="checkbox" /><label for="checkbox32">Inwendige reiniging/toevoeging motor: noteren welke toevoeging</label> </li>
            <li><input value="Afwatering en paravaan: controleren" class="cb" type="checkbox" /><label for="checkbox22">Afwatering en paravaan: controleren</label> </li>
          </ul>
        </div>
        <div id="list5" class="dropdown-check-list" tabindex="100">
        <input type="text" placeholder="Opmerking:">
          <span class='button1'>Onder de auto</span>
          <ul class="items">
            <li><input value="Onderzijde motor: controleren of lekkage van vloeistoffen" class="cb" type="checkbox" /><label for="checkbox32">Onderzijde motor: controleren of lekkage van vloeistoffen</label> </li>
            <li><input value="Motorsteunen: staat controleren" class="cb" type="checkbox" /><label for="checkbox22">Motorsteunen: staat controleren</label> </li>
            <li><input value="Versnellingsbak: controleer afdichting" class="cb" type="checkbox" /><label for="checkbox32">Versnellingsbak: controleer afdichting</label> </li>
            <li><input value="Voor- en achterwielophanging: controleren staat, bevestigingen, speling en fuseekogels" class="cb" type="checkbox" /><label for="checkbox32">Voor- en achterwielophanging: controleren staat, bevestigingen, speling en fuseekogels</label> </li>
            <li><input value="Voorschokdempers: controleren staat en afdichting" class="cb" type="checkbox" /><label for="checkbox22">Voorschokdempers: controleren staat en afdichting</label> </li>
            <li><input value="Achterschokdempers: controleren staat en afdichting" class="cb" type="checkbox" /><label for="checkbox32">Achterschokdempers: controleren staat en afdichting</label> </li>
            <li><input value="Reservewielhouder, brandstoftank en handremkabels: controleer staat en bevestiging" class="cb" type="checkbox" /><label for="checkbox32">Reservewielhouder, brandstoftank en handremkabels: controleer staat en bevestiging</label> </li>
            <li><input value="Remslangen: controleren staat, afdichting en conditie" class="cb" type="checkbox" /><label for="checkbox32">Remslangen: controleren staat, afdichting en conditie</label> </li>
            <li><input value="Remleidingen: controleren staat en bevestiging" class="cb" type="checkbox" /><label for="checkbox22">Remleidingen: controleren staat en bevestiging</label> </li>
            <li><input value="Brandstofsysteem: controleren systeem en brandstoftank" class="cb" type="checkbox" /><label for="checkbox32">Brandstofsysteem: controleren systeem en brandstoftank</label> </li>
            <li><input value="Brandstofleidingen: controleren staat en bevestiging" class="cb" type="checkbox" /><label for="checkbox32">Brandstofleidingen: controleren staat en bevestiging</label> </li>
            <li><input value="Aandrijfas en stuurinrichting: controleer staat en bevestiging" class="cb" type="checkbox" /><label for="checkbox22">Aandrijfas en stuurinrichting: controleer staat en bevestiging</label> </li>
            <li><input value="Uitlaatsysteem en katalysator: controleren afdichting, staat en bevestiging" class="cb" type="checkbox" /><label for="checkbox32">Uitlaatsysteem en katalysator: controleren afdichting, staat en bevestiging</label> </li>
            <li><input value="Wiellagers: controleren staat, bevestiging en conditie" class="cb" type="checkbox" /><label for="checkbox32">Wiellagers: controleren staat, bevestiging en conditie</label> </li>
            <li><input value="Remsysteem: controleer staat, dikte van de remblokken, remschijven en remleidingen" class="cb" type="checkbox" /><label for="checkbox32">Remsysteem: controleer staat, dikte van de remblokken, remschijven en remleidingen</label> </li>
            <li><input value="Stofhoezen, silentsblocs, kogelgewricht: staat controleren" class="cb" type="checkbox" /><label for="checkbox22">Stofhoezen, silentsblocs, kogelgewricht: staat controleren</label> </li>
            <li><input value="Trekhaak en stekkerdoos: controleren" class="cb" type="checkbox" /><label for="checkbox32">Trekhaak en stekkerdoos: controleren</label> </li>
          </ul>
        </div>
        <div id="list6" class="dropdown-check-list" tabindex="100">
        <input type="text" placeholder="Opmerking:">
          <span class='button1'>Banden</span>
          <ul class="items">
            <li><input value="Bandenregistratie:" class="cb" type="checkbox" /><label for="checkbox32">Bandenregistratie:</label> </li>
            <li><input value="Linksvoor soort band (zomer/winter/all season)" class="cb" type="checkbox" /><label for="checkbox22">Linksvoor soort band (zomer/winter/all season)</label> </li>
            <li><input value="Linksvoor Merk band" class="cb" type="checkbox" /><label for="checkbox32">Linksvoor Merk band</label> </li>
            <li><input value="Linksvoor maat band" class="cb" type="checkbox" /><label for="checkbox32">Linksvoor maat band</label> </li>
            <li><input value="Linksvoor profiel band" class="cb" type="checkbox" /><label for="checkbox22">Linksvoor profiel band</label> </li>
            <li><input value="Rechtsvoor soort band (zomer/winter/all season)" class="cb" type="checkbox" /><label for="checkbox32">Rechtsvoor soort band (zomer/winter/all season)</label> </li>
            <li><input value="Rechtsvoor Merk band" class="cb" type="checkbox" /><label for="checkbox32">Rechtsvoor Merk band</label> </li>
            <li><input value="Rechtsvoor maat band" class="cb" type="checkbox" /><label for="checkbox32">Rechtsvoor maat band</label> </li>
            <li><input value="Rechtsvoor profiel band" class="cb" type="checkbox" /><label for="checkbox22">Rechtsvoor profiel band</label> </li>
            <li><input value="Linksachter soort band (zomer/winter/all season)" class="cb" type="checkbox" /><label for="checkbox32">Linksachter soort band (zomer/winter/all season)</label> </li>
            <li><input value="Linksachter Merk band" class="cb" type="checkbox" /><label for="checkbox32">Linksachter Merk band</label> </li>
            <li><input value="Linksachter maat band" class="cb" type="checkbox" /><label for="checkbox22">Linksachter maat band</label> </li>
            <li><input value="Linksachter profiel band" class="cb" type="checkbox" /><label for="checkbox32">Linksachter profiel band</label> </li>
            <li><input value="Rechtsachter soort band (zomer/winter/all season)" class="cb" type="checkbox" /><label for="checkbox32">Rechtsachter soort band (zomer/winter/all season)</label> </li>
            <li><input value="Rechtsachter Merk band" class="cb" type="checkbox" /><label for="checkbox32">Rechtsachter Merk band</label> </li>
            <li><input value="Rechtsachter maat band" class="cb" type="checkbox" /><label for="checkbox22">Rechtsachter maat band</label> </li>
            <li><input value="Rechtsachter profiel band" class="cb" type="checkbox" /><label for="checkbox32">Rechtsachter profiel band</label> </li>
            <li><input value="Staat velgen/wieldoppen" class="cb" type="checkbox" /><label for="checkbox32">Staat velgen/wieldoppen</label> </li>
          </ul>
        </div>
        <div id="list7" class="dropdown-check-list" tabindex="100">
        <input type="text" placeholder="Opmerking:">
          <span class='button1'>Overige/Afwerking/extra services</span>
          <ul class="items">
            <li><input value="Onderhoudsinterval: resetten" class="cb" type="checkbox" /><label for="checkbox32">Onderhoudsinterval: resetten</label> </li>
            <li><input value="Chassinummer: controleren op leesbaarheid" class="cb" type="checkbox" /><label for="checkbox22">Chassinummer: controleren op leesbaarheid</label> </li>
            <li><input value="Overige/kleine reparaties/vloeistoffen" class="cb" type="checkbox" /><label for="checkbox32">Overige/kleine reparaties/vloeistoffen</label> </li>
            <li><input value="Aanvullende reparatie/onderhoudsadviezen" class="cb" type="checkbox" /><label for="checkbox32">Aanvullende reparatie/onderhoudsadviezen</label> </li>
            <li><input value="Opmerkingen" class="cb" type="checkbox" /><label for="checkbox22">Opmerkingen</label> </li>
          </ul>
        </div>
        <div id="list8" class="dropdown-check-list" tabindex="100">
        <input type="text" placeholder="Opmerking:">
          <span class='button1'>Eindcontrole</span>
          <ul class="items">
            <li><input value="Toekomstige reparatie/onderhoudsadvies" class="cb" type="checkbox" /><label for="checkbox32">Toekomstige reparatie/onderhoudsadvies</label> </li>
            <li><input value="Volgende onderhoudsbeurt bij: Datum en kilometerstand invullen" class="cb" type="checkbox" /><label for="checkbox22">Volgende onderhoudsbeurt bij: Datum en kilometerstand invullen</label> </li>
            <li><input value="Smeerkaartje/serviceboekje/digitaal serviceboekje ingevuld" class="cb" type="checkbox" /><label for="checkbox32">Smeerkaartje/serviceboekje/digitaal serviceboekje ingevuld</label> </li>
            <li><input value="Bodemplaat gemonteerd" class="cb" type="checkbox" /><label for="checkbox32">Bodemplaat gemonteerd</label> </li>
            <li><input value="APK uitgevoerd en afgemeld" class="cb" type="checkbox" /><label for="checkbox22">APK uitgevoerd en afgemeld</label> </li>
          </ul>
        </div>
      </div>
    </fieldset>
  </div>
  </div>
  
  <form action="/submit.php">
    <label for="myfile">Kies een bestand:</label>
    <input type="file" id="myfile" name="myfile"><br><br>
    <input type="submit" class="button">
  </form>

  <h4>Checklist:</h4>
  <ul id="checklist"></ul>

<script>
//dropdown

$('#list1 span').click(function(){
 $('#list1 ul').toggle();
});

$('#list2 span').click(function(){
 $('#list2 ul').toggle();
});

$('#list3 span').click(function(){
 $('#list3 ul').toggle();
});

$('#list4 span').click(function(){
 $('#list4 ul').toggle();
});

$('#list5 span').click(function(){
 $('#list5 ul').toggle();
});

$('#list6 span').click(function(){
 $('#list6 ul').toggle();
});

$('#list7 span').click(function(){
 $('#list7 ul').toggle();
});

$('#list8 span').click(function(){
 $('#list8 ul').toggle();
});

// Function to update the checklist
function updateChecklist() {
  $('#checklist').empty();
  $(".cb").each(function() {
    var checkboxId = $(this).attr("id");
    var isChecked = $(this).is(":checked");

    if (isChecked) {
      $('#checklist').append('<li><input type="checkbox" class="checkred"> <input type="checkbox" class="checkorange"> <input type="checkbox" class="checkgreen">' + $(this).val() + '</li>');
    }

    // Update the corresponding checkbox in the fieldset
    $("#" + checkboxId).prop("checked", isChecked);
  });

  // Save checkbox state in the localStorage
  saveCheckboxState();
}


// Function to save the checkbox state in localStorage
function saveCheckboxState() {
  var checkboxState = {};

  $(".cb").each(function() {
    var checkboxId = $(this).attr("id");
    var isChecked = $(this).is(":checked");

    checkboxState[checkboxId] = isChecked;
  });

  localStorage.setItem("checkboxState", JSON.stringify(checkboxState));
}

// Function to restore the checkbox state from localStorage
function restoreCheckboxState() {
  var checkboxState = localStorage.getItem("checkboxState");

  if (checkboxState) {
    checkboxState = JSON.parse(checkboxState);

    $(".cb").each(function() {
      var checkboxId = $(this).attr("id");

      if (checkboxState.hasOwnProperty(checkboxId)) {
        var isChecked = checkboxState[checkboxId];
        $("#" + checkboxId).prop("checked", isChecked);
      } else {
        $("#" + checkboxId).prop("checked", false);
      }
    });
  }
}

// Attach event listener to checkboxes
$(".cb").on("change", updateChecklist);

// Restore checkbox state on page load
restoreCheckboxState();
updateChecklist();

</script>

    <!-- Generate File Button -->
    <button id="generate-pdf" class="button">Generate PDF</button>

    <script>
      
      window.jsPDF = window.jspdf.jsPDF;

    document.addEventListener("DOMContentLoaded", function() {
        // Function to generate the PDF
        function generatePDF() {
            // Create a new jsPDF instance
            const doc = new jsPDF();

            // Get the checklist items
            const checklistItems = document.querySelectorAll('#checklist li');

            // Set initial y-coordinate position
            let yPos = 20;

            // Iterate over each checklist item
            checklistItems.forEach(item => {
                // Add the item text to the PDF
                doc.text(20, yPos, item.innerText);

                // Increment the y-coordinate position
                yPos += 10;
            });

            // Save the PDF
            doc.save('checklist.pdf');
        }

        // Attach click event listener to the button
        const generatePDFButton = document.getElementById('generate-pdf');
        generatePDFButton.addEventListener('click', generatePDF);
    });
    </script>

</div>
</body>
</html>
