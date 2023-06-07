<!DOCTYPE html>
<html lang="en">
<head>
    
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
        <legend>Onderdelen</legend>
        <input id="checkbox12" value="Reparatie" class="cb" type="checkbox">
        <label for="checkbox12">Reparatie</label>
        <input id="checkbox22" value="Onderhoud" class="cb" type="checkbox">
        <label for="checkbox22">Onderhoud</label>
        <input id="checkbox32" value="Storing" class="cb" type="checkbox">
        <label for="checkbox32">Storing</label>
        <input id="checkbox32" value="APK" class="cb" type="checkbox">
        <label for="checkbox32">APK</label>
    </fieldset>
      
    <h4>Checklist:</h4>
    <ul id="checklist"></ul>

    <script>
    $('.cb').click(function() {
        $('ul').html("");
        $(".cb").each(function(){
            if($(this).is(":checked")){
                $('ul').append('<li><input type="checkbox" class="checkred"> <input type="checkbox" class="checkorange"> <input type="checkbox" class="checkgreen">'+$(this).val()+'</li>');
            }
        });
    });
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
