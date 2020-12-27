//ajax call for admin login verification
function checkadminlogin() {
    var adLogemail = $("#ademail").val();
    var adLogpass = $("#adpass").val();
    $.ajax({
        url: "Admin/admin.php",
        method: "POST",
        data:{
            checkLogemail: "checklogmail",
            adLogemail:adLogemail,
            adLogpass:adLogpass,
        },
        success:function(data){
           if(data == 0){
               $("#statusadminlogmsg").html('<small class="alert alert-danger">Invalid Email Id or Password !</small>'
               );
           } else if(data == 1){
            $("#statusadminlogmsg").html(
                '<small class="alert alert-success">Success Loading...</small>'
            );
            setTimeout(()=>{
                window.location.href = "Admin/admindashboard.php";
            }, 1000);
           }
        },
    });
}
