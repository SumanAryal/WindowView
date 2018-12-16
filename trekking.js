
document.getElementById("Departure").onchange = function () {
    var input = document.getElementById("Return");
    input.setAttribute("min", this.value);
};
Departure.min = new Date().toISOString().split("T")[0];


function validate(_this)
        {
           if($(_this).attr('id') == "yes")
            {
                $('#required_later').attr('required');
            }
            else
             {
                 $('#required_later').removeAttr('required');
                
             }
        }



       // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closebtn")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


$("#contact-form").submit(function(e){
    var name = document.getElementById("Name")
    var lastname = document.getElementById("Lastname")
    var email = document.getElementById("Email")
    var contact = document.getElementById("Contact")
    var subject = document.getElementById("Subject")
    var message = document.getElementById("Paragraph")
    if(!name.value || !email.value || !subject.value || !message.value){
        alertify.error("Please Check your entries")
    } 
    else {
        $.ajax({
            url: "https://formspree.io/windowviewtravel@gmail.com", 
            method: "POST",
            data: $(this).serialize(),
            dataType: "json"
        });
        e.preventDefault()
        $(this).get(0).reset()
        alertify.success("Message Sent")
    }
})
