     <script type="text/javascript">
	 
	         // Use AJAX to fetch data from the controller
        // $.ajax({
        //     url: "<?php echo site_url('tags-json'); ?>", // URL to the controller method
        // type: "GET",
        // dataType: "json",
        // success: function(response) {

        //     var listHtml = '<ul class="list-group">';

        //         // var listHtml = '<ul>';
        //         for (var i = 0; i < response.length; i++) {
        //             let item = response[i];


        //             listHtml += '<li class="list-group-item d-flex justify-content-between align-items-center"><a class="text-gray-900" href="javascript:;"><i class="fa fa-tags text-success mr-2"></i>' + item.tag_name + '</a><span class="badge badge-primary badge-pill float-right">14</span></li>';
        //         }
        //         listHtml += '</ul>';

        // // Append the generated list HTML to a container element
        // $('#list-container').html(listHtml);
        // },
        // error: function(xhr, status, error) {
        //     console.error(xhr.responseText);
        // }
        // });
        // // Use AJAX to fetch data from the controller


        


$(document).ready(function() {



    $('#submitBtns').click(function() {
        // Get the data from the form

        event.preventDefault()
        if( !$('input#category_name').val() ) {
            $.sweetModal({
                content: 'Empty Field!',
                icon: $.sweetModal.ICON_WARNING
            });
        }else{
        var formData = {
            category_name: $('#category_name').val()
        }


        // Perform the AJAX POST request
        $.ajax({
            url: '<?php echo base_url(); ?>/ajax', // The URL to your controller's method
            type: 'post',
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Handle the response from the server
                if (response.status == 'success') {
                   $.sweetModal({
                        content: 'Created category successfully!',
                        icon: $.sweetModal.ICON_SUCCESS
                    });

                } else {
              
                    $.sweetModal({
                    content: response.message,
                    icon: $.sweetModal.ICON_WARNING
                });
                }
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the request
                // console.error(xhr.responseText);
                    $.sweetModal({
                    content: "Category name is already exist!",
                    icon: $.sweetModal.ICON_WARNING
                });
            }
        });
    }
    });

  $('select#template_name').focus(function() {
        $.ajax({
        url: "<?php echo site_url('get-category'); ?>", // URL to the controller method
        type: "GET",
        dataType: "json",
        success: function(response) {

            var listHtml = '';

                // var listHtml = '<ul>';
                for (var i = 0; i < response.length; i++) {
                    let item = response[i];


                    listHtml += '<option value="'+item.id+'">'+item.category_name+'</option>';
                }
                listHtml += '';

        // Append the generated list HTML to a container element
        $('select#template_name').html(listHtml);
        },
        error: function(xhr, status, error) {
            // console.error(xhr.responseText);
        }
        });
 
   });


        var idtemp2 = $('#idtemp').val();


        $.ajax({
        url: '<?php echo site_url('tags-json'); ?>/'+idtemp2, // URL to the controller method
        type: "GET",
        dataType: "json",
        success: function(response) {



            var listHtml = '';

                // var listHtml = '<ul>';
                for (var i = 0; i < response.length; i++) {
                    let item = response[i];


                    listHtml += '<option value="'+item.id+'">'+item.tag_name+'</option>';
                }
                listHtml += '';

        // Append the generated list HTML to a container element
        $('#list-tags').html(listHtml);

// alert(response);

        },
        error: function(xhr, status, error) {
            // console.error(xhr.responseText);
        }
        });



        $.ajax({
        url: '<?php echo site_url('get-tags-template'); ?>/'+idtemp2, // URL to the controller method
        type: "GET",
        dataType: "json",
        success: function(response) {



            var listHtml = '<div class="d-flex">';

                // var listHtml = '<ul>';
                for (var i = 0; i < response.length; i++) {
                    let item = response[i];


                    listHtml += '<span class="badge badge-sm badge-primary mr-2"><i class="fa fa-tags text-success mr-2"></i>'+item.tag_name+'<a href="<?php echo site_url('delete-tag/'); ?>'+idtemp2+'/'+item.id+'" class="ml-1 text-danger">x</a></span>';
                }
                listHtml += '</div>';

        // Append the generated list HTML to a container element
        $('#list-tags-template').html(listHtml);

     

    

        },
        error: function(xhr, status, error) {
            // console.error(xhr.responseText);
        }
        });
        



 




    $('#submitBtnsTags').click(function() {
        // Get the data from the form

        event.preventDefault()


        var selectedValues = $('#list-tags').val();

        var idtemp = $('#idtemp').val();

        // Perform the AJAX POST request
        $.ajax({
            url: '<?php echo base_url(); ?>ajax-tags/'+idtemp, // The URL to your controller's method
            type: 'post',
            data: {selectedValues: selectedValues},
            dataType: 'json',
            success: function(response) {
                    $('#list-tags').load('#list-tags');

                // Handle the response from the server
                if (response.status == 'success') {
                   $.sweetModal({
                        content: 'Created category successfully!',
                        icon: $.sweetModal.ICON_SUCCESS
                    });


                } else {
              
                    $.sweetModal({
                    content: response.message,
                    icon: $.sweetModal.ICON_WARNING
                });
                }
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the request
                console.error(xhr.responseText);
            }
        });
    
    });



        $('#submitBtnsAddTags').click(function() {
        // Get the data from the form




        event.preventDefault()
        if( !$('input#tag_name').val() ) {
            $.sweetModal({
                content: 'Empty Field!',
                icon: $.sweetModal.ICON_WARNING
            });
        }else{
        var formData = {
            tag_name: $('#tag_name').val()
        }


        // Perform the AJAX POST request
        $.ajax({
            url: '<?php echo base_url(); ?>/create_tag', // The URL to your controller's method
            type: 'post',
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Handle the response from the server
                    $('#list-tags').load('#list-tags');
                    

                if (response.status == 'success') {
                   $.sweetModal({
                        content: 'Created Tag successfully!',
                        icon: $.sweetModal.ICON_SUCCESS
                    });


                } else {
              
                    $.sweetModal({
                    content: response.message,
                    icon: $.sweetModal.ICON_WARNING
                });
                }
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the request
                // console.error(xhr.responseText);
                    $.sweetModal({
                    content: "Tag name is already exist!",
                    icon: $.sweetModal.ICON_WARNIN


                });

                // console.error(xhr.responseText);

            }
        });
    }
    });


        



});



    </script>