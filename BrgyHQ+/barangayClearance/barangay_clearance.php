<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barangay Clearance</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h3>Republic of the Philippines</h3>
      <h4>Province of Cebu</h4>
      <h4>City/Municipality of Matalam</h4>
      <h4>BARANGAY Kimolong</h4>

      <h3>OFFICE OF THE PUNONG BARANGAY</h3>

      <hr />

      <h2>BARANGAY CLEARANCE</h2>

      <p>
        This is to certify that <strong><span id="residentName" contenteditable="true">John Doe</span></strong>, 
        of legal age, <span id="civilStatus" contenteditable="true">Single</span>, Filipino, and a
        resident of Kimolong, Kitaotao, Bukidnon, is a person of good moral character.
      </p>

      <p>This clearance is being issued upon the request of the above-named person for the purpose of 
         <span id="clearancePurpose" contenteditable="true">Employment</span>.
      </p>

      <p>Issued this <span id="day"></span> day of <span id="month"></span>, <span id="year"></span> 
         at Kimolong, Kitaotao, Bukidnon, Philippines.
      </p>
      <br />
      <br />
      <div class="signature-area">
        <p>Noel P. Doerena</p>
        <p>Punong Barangay</p>
      </div>
      <button id="printButton">Print Clearance</button>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search); 
        const userId = urlParams.get('userId');
        const name = urlParams.get('name');
        const address = urlParams.get('address');
        const purpose = urlParams.get('purpose');
        // Add more fields you need as urlParams.get(...) if they're passed

        // Security: Placeholder to sanitize input
        function sanitize(input) { 
            // Implement a real sanitization library function here
            return input; 
        }

        $('#residentName').text(sanitize(name));
        $('#residentAddress').text(sanitize(address));
        $('#clearancePurpose').text(sanitize(purpose)); 
        // Add more .text() assignments to fill other template parts

        function updateClearanceDate() {
    const today = new Date(); // Get the current date
    const day = today.getDate();  

    const monthNames = ["January", "February", "March", "April", "May", "June",
       "July", "August", "September", "October", "November", "December"
    ];
    const month = monthNames[today.getMonth()];  

    const year = today.getFullYear(); 

    // Find and Update Elements 
    document.querySelector("#day").textContent = day;
    document.querySelector("#month").textContent = month;
    document.querySelector("#year").textContent = year;
}

// Call the function when the page loads 
window.addEventListener('load', updateClearanceDate); 



function printClearance() {
  document.getElementById('printButton').style.display = 'none';
    window.print(); 

    setTimeout(function() {
        document.getElementById('printButton').style.display = 'block'; 
    }, 100); // Delay in milliseconds (adjust as needed)
}

// Link Button to Function 
document.getElementById('printButton').addEventListener('click', printClearance);
    </script>
  </body>
</html>
