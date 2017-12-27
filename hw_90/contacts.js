/*global $*/
(function () {
    "use strict";
     
    var contactTable = $("#contactTable tbody"),
        contacts = [];




function addContactsJ() {                                //using Ajax to send json to js. don't neeed parse.
    $.get('contacts.json',function(data){
   data.forEach(function(element){
    addContact(element);
   });
   }).fail(function (xhr, statusCode, statusText) {
            alert("error: " + statusText);

        });

        $.get('localhost/restaurant/hw_90/contacts.php', function(data){ 
            var loadeddata=JSON.parse(data)
                                              //using Ajax to send php data to js. in php write: echo json_encode($rows) then use JSON.parse
            loadeddata.forEach(addContact);
}
    
}
 

    function addContact(contact) {
        contacts.push(contact);

        if (contacts.length === 1) {
            contactTable.empty();
        }

        contactTable.append(
            '<tr>' +
            '<td>' + contact.firstName + '</td>' +
            '<td>' + contact.lastName + '</td>' +
            '<td>' + contact.email + '</td>' +
            '<td>' + contact.phone + '</td>' +
            '</tr>'

        );
    }

 $('#load').click(function() {
  addContactsJ();
 });

    var firstNameInput = $("#first");
    var lastNameInput = $("#last");
    var emailInput = $("#email");
    var phoneInput = $("#phone");
    var addContactForm = $("#addContactForm");

    function hideAddContactForm() {
        addContactForm.slideUp();
        addContactForm[0].reset();
    }

    addContactForm.on("submit", function (event) {
        var newContact = {
            firstName: firstNameInput.val(),
            lastName: lastNameInput.val(),
            email: emailInput.val(),
            phone: phoneInput.val()
        };
        addContact(newContact);
        hideAddContactForm();
        event.preventDefault();
    });

    $("#cancel").click(hideAddContactForm);

    $("#add").click(function () {
        addContactForm.slideDown();
    });
}());