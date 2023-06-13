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
<fieldset class="fieldset">
    <legend>Toevoegen</legend>
    <div class="lists">
      <div id="list1" class="dropdown-check-list" tabindex="100">
        <span class='button1'>APK</span>
        <ul class="items">
          <li><input value="Reparatie" class="cb" type="checkbox" /><label for="checkbox32">Reparatie</label> </li>
          <li><input value="Onderhoud" class="cb" type="checkbox" /><label for="checkbox22">Onderhoud</label> </li>
          <li><input value="Storing" class="cb" type="checkbox" /><label for="checkbox32">Storing</label> </li>
        </ul>
      </div>
      <div id="list2" class="dropdown-check-list" tabindex="100">
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
        <span class='button1'>In en om de auto</span>
        <ul class="items">
          <li><input value="Remmencontrole rollentestbank" class="cb" type="checkbox" /><label for="checkbox32">Remmencontrole rollentestbank</label> </li>
          <li><input value="EOBD, 4gas, Roetmeting of Deeltjestest" class="cb" type="checkbox" /><label for="checkbox22">EOBD, 4gas, Roetmeting of Deeltjestest</label> </li>
          <li><input value="Uitlezen op foutcodes (bij brandend lampje)" class="cb" type="checkbox" /><label for="checkbox32">Uitlezen op foutcodes (bij brandend lampje)</label> </li>
          <li><input value="Tijdklok goed instellen" class="cb" type="checkbox" /><label for="checkbox32">Tijdklok goed instellen</label> </li>
          <li><input value="AdBleu controleren (eventueel bijvullen)" class="cb" type="checkbox" /><label for="checkbox22">AdBleu controleren (eventueel bijvullen)</label> </li>
          <li><input value="Verwarming, ventilatie, airconditioning: controleer werking" class="cb" type="checkbox" /><label for="checkbox32">Verwarming, ventilatie, airconditioning: controleer werking</label> </li>
          <li><input value="Temperatuurmeting airco: uitstroom en omgeving noteren" class="cb" type="checkbox" /><label for="checkbox32">Temperatuurmeting airco: uitstroom en omgeving noteren</label> </li>
          <li><input value=" Voorruit: ontwaseming controleren" class="cb" type="checkbox" /><label for="checkbox32"> Voorruit: ontwaseming controleren</label> </li>
          <li><input value="Voorruit en spiegels: controleer op schade (barst/ster), staat en werking" class="cb" type="checkbox" /><label for="checkbox22">Voorruit en spiegels: controleer op schade (barst/ster), staat en werking </label> </li>
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
    </div>
  </fieldset>

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
    <button id="generate-pdf">Generate PDF</button>

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
</body>
</html>
