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



    $('#update_se').click(function() {
        // Get the data from the form
            event.stopImmediatePropagation();



        var formData = {
            template_subject_ext: $('#list_se').val()
        }


        // Perform the AJAX POST request
        $.ajax({
            url: '<?php echo base_url(); ?>ajaxcontroller/update_se_name/'+$('#tempid').val(), // The URL to your controller's method
            type: 'post',
            data: formData,
            dataType: 'json',
            success: function(response) {
            // $('span#se_name').load('span#se_name');

            // console.log(response.status);

                // Handle the response from the server
                if (response.status == 'success') {

                        var urll = window.location.href+' span#se_name';
                        $("span#se_name").load(urll,  function(){
                        
                        $('#form_update').hide();
                        $('#form_update').removeClass('d-inline-block');
                        $('#update_se').hide();

                        
                        });

                   $.sweetModal({
                        content: 'Updated subject extension successfully!',
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
                console.error();
                    $.sweetModal({
                    content: xhr.responseText,
                    icon: $.sweetModal.ICON_WARNING
                });
            }
        });
    
    });



// 
///////////////////////////////////////////////////////////
    $('#submitBtnSE').click(function() {
        // Get the data from the form
            event.stopImmediatePropagation();


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

            console.log(response.status);

                // Handle the response from the server
                if (response.status == 'success') {
                   $.sweetModal({
                        content: 'Created subject extension successfully!',
                        icon: $.sweetModal.ICON_SUCCESS
                        
                    });
            $('#list_subject_ext').load(window.location.href+' #list_subject_ext');
            // alert(window.location.href+' #list_se');
                        $('#form_update').hide();
                        $('#form_update').removeClass('d-inline-block');
                } else {
              
                    $.sweetModal({
                    content: response.message,
                    icon: $.sweetModal.ICON_WARNING
                });



                }
            },
            error: function(xhr, status, error) {
                // Handle any errors that occur during the request
                console.log(status);
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
            event.stopImmediatePropagation();

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

        $.ajax({
        url: "<?php echo site_url('ajaxcontroller/get_ajax_subject_ext'); ?>", // URL to the controller method
        type: "GET",
        dataType: "json",
        success: function(response) {


            var listHtml = '';

                var listHtml = '<ul class="list-group">';
                for (var i = 0; i < response.length; i++) {
                    let item = response[i];


                    listHtml += '<li class="list-group-item">'+item.extension_name+'</li>';
                }
                listHtml += '</ul>';

        // Append the generated list HTML to a container element
        $('#list_subject_ext').html(listHtml);
        },
        error: function(xhr, status, error) {
            // console.error(xhr.responseText);
        }
        });


 $('#update_btn').click(function() {

         var subj_val = Number($('span#subj_val').text());

  if(jQuery.type(subj_val) != "undefined"){
        $.ajax({
        url: "<?php echo site_url('ajaxcontroller/get_ajax_subject_ext'); ?>", // URL to the controller method
        type: "GET",
        dataType: "json",
        success: function(response) {

                // console.log(subj_val);
            // var listHtml = '';

                var listHtml = '';
                for (var i = 0; i < response.length; i++) {
                    let item = response[i];





                    listHtml += '<option value="'+item.id+'">'+item.extension_name+'</option>';


                }
                listHtml += '';

        // Append the generated list HTML to a container element
        $('#list_se').html(listHtml);
        $('#list_se option[value="'+subj_val+'"]').prop("selected",true);
        $('#list_se option[value="'+subj_val+'"]').prop("disabled",true);

            $('#update_se').hide();
            $( "#list_se" ).on( "change", function() {
                 $('#update_se').show();
            if ( $('#list_se option[value="'+subj_val+'"]').iprops("disabled", true)){
                $('#update_se').hide();
             
        }else{
                 $('#update_se').show();
        
        }
           });
    
        // if($('#list_se option[value="'+subj_val+'"]').prop("selected",true)){
        //         $( "#list_se" ).on( "change", function() {
        //     $('#update_se').show();

        //     });
        // }
        
     

        },
        error: function(xhr, status, error) {
            // console.error(xhr.responseText);
        }
        });

        }

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
            let itemExt = item.id;

      

                    listHtml += `<div class="col-lg-6 mb-4"><div class="card"><div class="card-header"><strong>${item.template_name}</strong> <button onclick="copyToClipboard('#demo${item.id}')" class="btn btn-sm btn-primary float-right ml-2">Copy</button>
                    
                    <button onclick="popup_emailheader('#pop${item.id}')" class="btn btn-sm btn-primary float-right">Email Header</button> 
                    </div>
                    
                                <div class="card-body csstemplate2" id="pop${item.id}" style="display:none">
            <ul class="list-group" style="list-style: none">
            <li>Email Subject:	<strong>Account Name <span class="text-danger">(${item.extension_name})</span></strong></li>
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
            console.error(xhr.responseText);
        }

    });



});



   $('input#input_keyword').keypress(function(event){
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if(keycode == '13'){

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
            let itemExt = item.id;

      

                    listHtml += `<div class="col-lg-6 mb-4"><div class="card"><div class="card-header"><strong>${item.template_name}</strong> <button onclick="copyToClipboard('#demo${item.id}')" class="btn btn-sm btn-primary float-right ml-2">Copy</button>
                    
                    <button onclick="popup_emailheader('#pop${item.id}')" class="btn btn-sm btn-primary float-right">Email Header</button> 
                    </div>
                    
                                <div class="card-body csstemplate2" id="pop${item.id}" style="display:none">
            <ul class="list-group" style="list-style: none">
            <li>Email Subject:	<strong>Account Name <span class="text-danger">(${item.extension_name})</span></strong></li>
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
            console.error(xhr.responseText);
        }

    });

  }

});


});


    </script>