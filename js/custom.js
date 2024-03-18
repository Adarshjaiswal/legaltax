
// slider
		$('#blogCarousel').carousel({
				interval: 5000
		});
// slider

/// some script
$(function () {
	  'use strict'
    $(".nav-item").on("click", function(){
         $(this).toggleClass("dropdown");
    });
	$("[data-trigger]").on("click", function(){
        var trigger_id =  $(this).attr('data-trigger');
        $(trigger_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
         
    });

    // close if press ESC button 
    $(document).on('keydown', function(event) {
        if(event.keyCode === 27) {
           $(".navbar-collapse").removeClass("show");
           $("body").removeClass("overlay-active");
        }
    });

    // close button 
    $(".btn-close").click(function(e){
        $(".navbar-collapse").removeClass("show");
        $("body").removeClass("offcanvas-active");
    }); 


})



// image preview//
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#cimgprv').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
// image preview//



// submit button//

function getDataFromTheEditor() {
    return theEditor.getData();
}






//submit Form//
    // process the form
    $('#eform').submit(function(e) {
      e.preventDefault();
      var formData = {
            'name'              : $('#ename').val(),
            'email'             : $('#eemail').val(),
            'phone'             : $('#ephone').val(),            
            'message'           : $('#emessage').val()
        };
                $.ajax({
                type : 'POST',
                url : 'process-mail.php',
                data : formData,
                dataType : 'json',
                }).done(function(data) {console.log(data);});
    });
    // process the form
//submit form//



// process the form
    $('#requestform').submit(function(e) {
      e.preventDefault();
      var formData = {
            'name'              : $('#ename').val(),
            'email'             : $('#eemail').val(),
            'phone'             : $('#ephone').val(),            
            'state'           : $('#estate').val()
        };
                $.ajax({
                type : 'POST',
                url : 'process-my-request.php',
                data : formData,
                dataType : 'json',
                }).done(function(data) {console.log(data);});
    });
    // process the form
    
    $(document).ready(function() {
	$('body').bind('cut copy', function(e) {
		e.preventDefault();
	  });
  });

    