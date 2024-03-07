//Funtionality for the request dynamic table.

function addRow(application_id, name, email, purpose, appointment_datetime, paymentStatus, address) {
  let requestTableBody = document.getElementById("requestTableBody");

  let newRow = `
          <tr>
              <td>${application_id}</td>
              <td>
                  <div class="client">
                      <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                      <div class="client-info">
                          <h4>${name}</h4>
                          <small>${email}</small>
                      </div>
                  </div>
              </td>
              <td>${purpose}</td>
              <td>${appointment_datetime}</td>
              <td>
                  <select class="payment-status" data-record-id="${application_id}">
                      <option value="not paid" ${paymentStatus === "not paid" ? "selected" : ""}>not paid</option>
                      <option value="paid" ${paymentStatus === "paid" ? "selected" : ""}>paid</option>
                  </select>
              </td>
              <td>
                <div class="actions">
                <div class="icon-container print-link" 
                data-user-id="${application_id}" 
                data-name="${name}" 
                data-address="${address}"
                data-purpose="${purpose}"> 
             <i class="bi bi-printer"></i>
             <div class="tooltip">print</div>
           </div>
                  <div class="icon-container">
                    <i class="bi bi-trash3"></i>
                    <div class="tooltip">remove</div>
                  </div>
                </div>
              </td>
          </tr>
      `;

  requestTableBody.innerHTML += newRow;
}

function fetchUserData() {
  fetch("php/fetch_records.php")
    .then((response) => response.json())
    .then((users) => {
      users.forEach((user) => {
        addRow(user.application_id, user.name, user.email, user.purpose, user.appointment_datetime, user.payment_status, user.address);
      });

      // Event listener for status changes
      const statusDropdowns = document.querySelectorAll(".payment-status");
      statusDropdowns.forEach((dropdown) => {
        dropdown.addEventListener("change", (event) => {
          const recordId = event.target.dataset.recordId;
          const newStatus = event.target.value;
          updatePaymentStatus(recordId, newStatus);
        });
      });
    })
    .catch((error) => console.error("Error fetching data:", error));
}

// Function to update payment status
function updatePaymentStatus(recordId, newStatus) {
  $.ajax({
    url: "php/update_status.php",
    type: "POST",
    data: { record_id: recordId, status: newStatus },
    success: function (response) {
      // You might want to display a small success message here
      console.log(response);
    },
  });
}

$("#requestTableBody").on("click", ".bi-trash3", function () {
  const recordId = $(this).closest("tr").find("td:first-child").text();
  deleteItem(recordId);
});

// Delete Item Function
function deleteItem(recordId) {
  if (confirm("Are you sure you want to delete this user?")) {
    console.log("Preparing to delete record:", recordId); // Debugging check
    $.ajax({
      url: "php/delete_user.php",
      method: "POST",
      data: { application_id: recordId },
      success: function (response) {
        if (response === "success") {
          $(`tr td:first-child:contains("${recordId}")`).closest("tr").remove();
        } else {
          alert("An error occurred during deletion.");
        }
      },
      error: function (request, status, error) {
        alert("An error occurred during deletion. Status: " + status + " Error: " + error);
      },
    });
  }
}

$("#requestTableBody").on("click", ".print-link", function () {
  const userId = $(this).data("userId");
  const name = $(this).data("name");
  const address = $(this).data("address");
  const purpose = $(this).data("purpose");

  const url =
    "barangayClearance/barangay_clearance.php?" +
    "userId=" +
    userId +
    "&name=" +
    encodeURIComponent(name) +
    "&address=" +
    encodeURIComponent(address) +
    "&purpose=" +
    encodeURIComponent(purpose);

  window.location.href = url;
});
// Initial data load on page load
fetchUserData();
