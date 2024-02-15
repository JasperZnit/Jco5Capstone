function addRow(id, clientName, email, purpose, date, paymentStatus) {
  let requestTableBody = document.getElementById("requestTableBody");

  let newRow = `
          <tr>
              <td>${id}</td>
              <td>
                  <div class="client">
                      <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                      <div class="client-info">
                          <h4>${clientName}</h4>
                          <small>${email}</small>
                      </div>
                  </div>
              </td>
              <td>${purpose}</td>
              <td>${date}</td>
              <td>
                  <select class="payment-status" data-record-id="${id}">
                      <option value="Not Paid" ${paymentStatus === "Not Paid" ? "selected" : ""}>Not Paid</option>
                      <option value="Paid" ${paymentStatus === "Paid" ? "selected" : ""}>Paid</option>
                  </select>
              </td>
              <td>
                <div class="actions">
                  <div class="icon-container">
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
        addRow(user.id, user.client_name, user.email, user.purpose, user.date, user.payment_status);
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
    url: "./php/update_status.php",
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
      url: "delete_user.php",
      method: "POST",
      data: { id: recordId },
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

// Initial data load on page load
fetchUserData();
