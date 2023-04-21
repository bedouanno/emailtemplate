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

    $('#submitBtnSE').click(function() {
        // Get the data from the form

        event.preventDefault()
        if( !$('input#extension_name').val() ) {
            $.sweetModal({
                content: 'Empty Field!',
                icon: $.sweetModal.ICON_WARNING
            });
        }else{
        var formData = {
            extension_name: $('#extension_name').val()
        }


        // Perform the AJAX POST request
        $.ajax({
            url: '<?php echo base_url(); ?>ajaxse', // The URL to your controller's method
            type: 'post',
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Handle the response from the server
                if (response.status == 'success') {
                   $.sweetModal({
                        content: 'Created subject extension successfully!',
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
                    content: "Subject extension name is already exist!",
                    icon: $.sweetModal.ICON_WARNING
                });
            }
        });
    }
    });



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


        if(jQuery.type(idtemp2) != "undefined"){

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

        // console.log(idtemp2);

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
        



        }




 


 




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
                // console.error(xhr.responseText);
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


   $('#search_btn').click(function() {

        var keywrd = $('input#input_keyword').val();

        // $('#search_result').html($('input#input_keyword').val());

// alert("<?php //echo site_url('search/keyword'); ?>/"+keywrd);

        $.ajax({
            url: '<?php echo site_url('search/keyword'); ?>/'+keywrd, // URL to the controller method
            type: "GET",
            dataType: "json",
            success: function(response) {
            
            var listHtml = '<div class="row">';
                for (var i = 0; i < response.length; i++) {
                    let item = response[i];
                //    var itemb = (`${item.template_body}`).text();

            var strippedText = String(item.template_body);
            let unStripped = `<div>${strippedText}</div>`;
            let stripText= unStripped.replaceAll(/<\/?[^>]+(>|$)/gi, "");

            // console.log();

                    listHtml += `<div class="col-lg-6 mb-4"><div class="card"><div class="card-header"><strong>${item.template_name}</strong> <button onclick="copyToClipboard('#demo${item.id}')" class="btn btn-sm btn-primary float-right ml-2">Copy</button>
                    
                    <button onclick="popup_emailheader('#pop${item.id}')" class="btn btn-sm btn-primary float-right">Email Header</button> 
                    </div>
                    
                                <div class="card-body csstemplate2" id="pop${item.id}" style="display:none">
            <ul class="list-group" style="list-style: none">
            <li>Email Subject:	<strong>Account Name <span class="text-danger">(add email extension)</span></strong></li>
            <li>To:	<i>client's email address</i></li>
            <li>Cc:	</li>
            <li>Agent to Queue:	refer <a onclick="open_pop('#popp')"  href="javascript:;" class="badge badge-sm badge-danger" id="opennote">Open Note</a></li>
            </ul>
            </div>
                    
                    
                    <div class="card-body csstemplate">${item.template_body}<textarea class="d-none" id="demo${item.id}">${stripText}</textarea></div></div></div>`;
                    }
                listHtml += '</div>';



        // Append the generated list HTML to a container element
        $('#search_result').html(listHtml);


        },
        error: function(xhr, status, error) {
            // console.error(xhr.responseText);
        }

    });



});


});


    </script>