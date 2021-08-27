$(document).ready(function() {
    // Datatables
    $('#example').dataTable({
        sort: false,
        ajax: {
            type : 'GET',
            url : '/api/blogpost/ajax_getAllPosts',
            dataSrc: '',
            error: function() {
                alert("error retrieving list");
            }
        },
        columns: [
            {data: "id", visible: false },
            {data: "heading"},
            {data: "tags"},
            {data: "co_authors"},
            {data: "cover_img"},
            {data: "published",
                render: function(data,type,row,meta) {
                    let summary = row.summary;
                    let full_details = row.full_details;

                    if(row.published == "published") {
                        label_class = "success";
                        btn_name = "Unpublish";
                        btn_color = "warning";
                    }
                    else {
                        label_class = "warning";
                        btn_name = "Publish";
                        btn_color = "success";
                    }

                    button =
                        "<button class='btn btn-primary btn-xs editPostBtn' data-id='"+row.id+"' data-heading='"+row.heading+"' data-tags='"+row.tags+"' data-co_authors='"+row.co_authors+"' data-cover_img='"+row.cover_img+"' data-summary='"+summary+"' data-full_details='"+full_details+"'><i class=\"fa fa-pencil\"></i> Edit</button> " +
                        "<button class='btn btn-"+btn_color+" btn-xs editPostBtn' data-id='"+row.id+"' data-heading='"+row.heading+"'><i class=\"fa fa-check\"></i> "+btn_name+"</button> " +
                        "<button class='btn btn-danger btn-xs deletePostBtn' data-id='"+row.id+"' data-heading='"+row.heading+"'><i class=\"fa fa-times\"></i> Delete</button>"
                    ;

                    return '<button type="button" class="btn btn-'+label_class+' btn-rounded btn-xs">' + row.published + '</button>';
                }
                    //'<span class="btn btn-block btn-rounded btn-xs '+label_class+'" style="padding: 0px;font-size: 16px;">'+row.status+'</span>';}
            },
            {render: function(data,type,row,meta) {
                return button;
            }}
        ],
    });

});

$(document).on('click', '.editPostBtn', function () {
    // assigning values
    $('#postId').val($(this).data("id"));
    $('#blog_title').val($(this).data('heading'));
    $('#input_tags').val($(this).data('tags'));
    $('#co_authors').val($(this).data('co_authors'));
    $('textarea#summary').text($(this).data('summary'));
    $('div.note-editable').html($(this).data('full_details'));

    $('#editPostModal').modal('show');
});

$(document).on('click', '#postSaveChangesBtn', function () {
    var formData = {
        id : $('#postId').val(),
        heading : $('#blog_title').val(),
        tags : $('#input_tags').val(),
        co_authors : $('#co_authors').val(),
        //cover_img : $('[type="file"]')[0].files[0],
        summary : $('textarea#summary').val(),
        full_details : $('div.note-editable').html()
    };
    console.log(formData);

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

// Delete Record
$(document).on('click', '.deletePostBtn', function () {
    $('#deletename').text($(this).data('heading'));
    $('#deletePostId').val($(this).data('id'));
    $('#deletePostModal').modal('show');
});

$(document).on('click', '#deletePostbtn', function () {
    let formData = {
        id : $('#deletePostId').val()
    };

    $.ajax({
        type: "Post",
        url: "/api/blogpost/ajax_deletePost",
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
                toastr["success"]("BlogPost Deleted Successfully");

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