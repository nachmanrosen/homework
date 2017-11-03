
(function () {
    "use strict";

    var contactTable = get("contactTable"),
        
        
        function get(id) {
            return document.getElementById(id);
    }

    

var button=get("add");
button.addEventListener("click", function(){
    contactTable.deleteRow(1);
    var row = contactTable.insertRow();
    var firstNameCell = row.insertCell();
    var lastNameCell = row.insertCell();
    var emailCell = row.insertCell();
    var phoneCell = row.insertCell();

        firstNameCell.innerHTML =get("firstname").value;
        lastNameCell.innerHTML =get("lastname").value ;
        emailCell.innerHTML =get("email").value ;
        phoneCell.innerHTML =get("phone").value ;
    });
    get("theForm").addEventListener("submit", function (event) {
        event.preventDefault();
    });
    
}());