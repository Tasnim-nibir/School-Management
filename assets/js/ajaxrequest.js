$(document).ready(function(){
    //ajax call form already exists email verification
    $("#stuemail").on("keypress blur", function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var stuemail = $("#stuemail").val();
        $.ajax({
            url: 'Student/addstudent.php',
            method:'POST',
            data:{
                checkemail: "checkmail",
                stuemail:stuemail,
            },
            success:function(data){
                //console.log(data);  
                if(data != 0){
                    $("#statusmsg2").html('<small style="color:red;">This Email id is already used !</small>'
                    );
                    $("#signup").attr("disabled", true);
                }   else if (data == 0 && reg.test(stuemail)){
                        $("#statusmsg2").html('<small style="color:green;">There you go !</small>'
                        );
                        $("#signup").attr("disabled", false);
                    } else if (!reg.test(stuemail)) {
                        $("#statusmsg2").html('<small style="color:red;">Please Enter Valid Email e.g. example@mail.com</small>'
                        );
                        $("#signup").attr("disabled", false);   
                    }
                    if(stuemail == ""){
                        $("#statusmsg2").html('<small style="color:red;">Please enter email !</small>'
                        );
                    }
            },
        });
    });
});
function addstu(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
 var stuname = $("#stuname").val();
 var stuemail = $("#stuemail").val();
 var stupass = $("#stupass").val();

//checking form field on form submission
if(stuname.trim() == "") {
    $("#statusmsg1").html('<small style="color:red;">Please Enter Name !</small>'
    );
    $("#stuname").focus();
    return false;
} else if(stuemail.trim() == "") {
    $("#statusmsg2").html('<small style="color:red;">Please Enter Email !</small>'
    );
    $("#stuemail").focus();
    return false;
} else if (stuemail.trim() != "" && !reg.test(stuemail)){
    $("#statusmsg2").html('<small style="color:red;">Please Enter Valid Email e.g. example@mail.com</small>'
    );
    $("#stuemail").focus();
    return false;
}
else if(stupass.trim() == "") {
    $("#statusmsg3").html('<small style="color:red;">Please Enter Password !</small>'
    );
    $("#stupass").focus();
    return false;
} else {
    $.ajax({
        url: "Student/addstudent.php",
        method: "POST",
        dataType: "json",
        data: {
            stusignup: "stusignup",
            stuname : stuname,
            stuemail : stuemail,
            stupass : stupass,
        },
        success: function (data) {   
            console.log(data);
            if(data == "OK"){
                $('#successmsg').html("<span class='alert alert-success'>Registration Successful !</span>");
                clearsturegfield(); 
            } else if(data == "Failed"){
                $('#successmsg').html("<span class='alert alert-danger'>Unable to Register</span>");
            } 
        },
    });
}
}
// Empty All Flieds
function clearsturegfield(){
    $("#sturegform").trigger("reset");
    $("#statusmsg1").html(" ");
    $("#statusmsg2").html(" ");
    $("#statusmsg3").html(" ");
}
//ajax call for student login verification
function checkstulogin() {
    var stuLogemail = $("#stulogemail").val();
    var stuLogpass = $("#stulogpass").val();
    $.ajax({
        url: "Student/addstudent.php",
        method: "POST",
        data:{
            checkLogemail: "checklogmail",
            stuLogemail:stuLogemail,
            stuLogpass:stuLogpass,
        },
        success:function(data){
           if(data == 0){
               $("#statuslogmsg").html('<small class="alert alert-danger">Invalid Email Id or Password !</small>'
               );
           } else if(data == 1){
            $("#statuslogmsg").html(
                '<div class="spinner-border text-success" role="status"></div>'
            );
            setTimeout(()=>{
                window.location.href = "index.php";
            }, 1000);
           }
        },
    });
}
