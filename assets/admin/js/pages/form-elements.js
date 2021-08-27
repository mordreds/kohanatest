$(document).ready(function() {
    $('.summernote').summernote({
	  height: 350
	});

    $('form#blogPostForm').submit(function(e){
    	e.preventDefault();
    	//console.log($('div.note-editable').html());
    	var formData = {
    		id : null,
			heading : $('#blog_title').val(),
			tags : $('#input_tags').val(),
			co_authors : $('#co_authors').val(),
			cover_img : $('[type="file"]')[0].files[0],
			summary : $('textarea#summary').val(),
			full_details : $('div.note-editable').html()
		};

		$.ajax({
			type: "Post",
			url: "/api/blogpost/ajax_savePost",
			data: JSON.stringify(formData),
			contentType: "application/json; charset=utf-8",
			success: function (res) {
				response = JSON.parse(res);
				// if successful, show success modal.
				if(response) {
					// showing notification
					toastr.options = {
						"closeButton": true,
						"debug": false,
						"newestOnTop": false,
						"progressBar": true,
						"positionClass": "toast-top-center",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "600",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					}
					toastr["success"]("BlogPost Saved Successfully");

					setTimeout("location.reload(true)", 5000);
				}

				else
					alert("Saving Data Failed")
			},
			error: function () {
				errormsg = "An Error Occured. Contact Admin ASAP";
				alert(errormsg);
			}
		});
	});
    
    /*$('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
    
    $('#cp1').colorpicker({
        format: 'hex'
    });
    $('#cp2').colorpicker();
    
    $('#timepicker1').timepicker();*/
});