
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




