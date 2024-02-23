//Funtionality for the request dynamic table.

function addRow(id, clientName, email, date) {
  let dashboardTable = document.getElementById("dashboardTable");

  let newRow = `
            <tr>
                <td>${id}</td>
                <td>
                    <div class="client">
                        <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                        <div class="client-info">
                            <h4>${clientName}</h4>
                        </div>
                    </div>
                </td>
                <td>${email}</td>
                <td>${date}</td>
            </tr>
        `;

  dashboardTable.innerHTML += newRow;
}

function fetchUserData() {
  fetch("php/dashboard_fetch_records.php")
    .then((response) => response.json())
    .then((users) => {
      users.forEach((user) => {
        addRow(user.id, user.username, user.email);
      });
    })
    .catch((error) => console.error("Error fetching data:", error));
}
