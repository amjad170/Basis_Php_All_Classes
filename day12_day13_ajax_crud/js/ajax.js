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
                           show(); //this is use not for reload
                          }
                          
       });

    });

    //show Employee
    show()
    function show(){
      $.ajax({
         url: "classes/Process.php",
         type: "POST",
         data:{
            action: "show"
         },
         success:function(resp){
           $('.tbody').html(resp);
            
         }
      });
    }

    //Active to inactive
    $(document).on("click","#activeBtn",function(){
      var id = $(this).val();
      
      $.ajax({
         url: "classes/Process.php",
         type: "POST",
         data:{
            id: id,
            action: "activeToinactive"
         },
         success:function(resp){
            show()//this is use not for reload
            
         }
      });
    });

     //Inactive to active
     $(document).on("click","#inactiveBtn",function(){
      var id = $(this).val();
      
      $.ajax({
         url: "classes/Process.php",
         type: "POST",
         data:{
            id: id,
            action: "inactiveToactive"
         },
         success:function(resp){
            show()//this is use not for reload
            
         }
      });
    });

    
    //Delete Employee
    $(document).on("click","#deleteBtn",function(){
      var id = $(this).val();
      $("#yesDelete").val(id);
      
    })


    //Delete Employee
    $(document).on("click","#yesDelete",function(){
      var id = $(this).val();
      
      $.ajax({
         url: "classes/Process.php",
         type: "POST",
         data:{
            id: id,
            action: "destroy"
         },
         success:function(resp){
           show();
           $("#deleteModal").modal("hide");
         }
      });
    })







})