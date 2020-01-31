/**
 * A function to wrap it all in.
 */


function getData() {
  "use strict";

  $("footer").css("position", "relative");

  fetch('data/schools_malmo.json')
    .then((response) => {
      return response.json();
    }).then((myJson) => {
      updateTable(myJson.Skolenheter);
    });


}

function updateTable(tableData) {
  var keys = [];
  var table = document.getElementById('school-table');
  var tableContent = '';
  tableContent += ("<tr>");
  
  for (key in tableData[0]) {
    tableContent += ('<th>' + key + '</th>');
  }

  tableContent += ("</tr>");

  for (var i = 0; i < tableData.length; i++) {

    tableContent += ("<tr>");

    for (key in tableData[i]) {
      tableContent += ('</tr>' + tableData[i][key] + '</td>');
    } 

    tableContent += ("</tr>");

  }
  table.innerHTML = tableContent;
  console.log(tableContent);
}

document.addEventListener("DOMContentLoaded", getData, false);
