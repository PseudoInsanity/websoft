/**
 * A function to wrap it all in.
 */
function getData() {
    'use strict';

    fetch('data/schools_malmo.json')
        .then((response) => {
            return response.json();
        })
        .then((myJson) => {
            console.log(myJson);
        })
    console.log("All ready.");
}

function updateTable(){
    var jsonData = getData()
    console.log(jsonData)
    var tableHTML = "<tr>";
    for (var headers in jsonData[0]) {
      tableHTML += "<th>" + headers + "</th>";
    }
    tableHTML += "</tr>";
  
    for (var eachItem in jsonData) {
      tableHTML += "<tr>";
      var dataObj = jsonData[eachItem];
      for (var eachValue in dataObj){
        tableHTML += "<td>" + dataObj[eachValue] + "</td>";
      }
      tableHTML += "</tr>";
    }
  
    document.getElementById('school-table').innerHTML = tableHTML;
  }
