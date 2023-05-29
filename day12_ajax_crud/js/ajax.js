$(document).ready(function(){

    // Employee Add
    $("#add_emp").click(function(){

       var name = $("#emp_name").val();
       var email = $("#emp_email").val();
       var phone= $("#emp_phone").val();
       var status= $("#emp_status").val();
       

       //Ajax part
       $.ajax({

                 url: "classes/Process.php",
                type: "POST",
                data: {
                        emp_name: name,
                        emp_email: email,
                        emp_phone: phone,
                        emp_status: status,
                        action: "insert"
                      },

             success: function(resp){

                // $(".msg").html(resp)
                           $(".msg").html(`<div class="alert alert-success" role="alert">
                           ${resp}
                           </div>`);
                           $(".msg").fadeOut(2000);

                           $("#emp_name").val("");
                           $("#emp_email").val("");
                           $("#emp_phone").val("");
                           $("#emp_status").val("");
                          }
       });

    });



})