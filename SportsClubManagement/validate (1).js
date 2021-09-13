$(document).ready(function() {
  $('#myForm').submit(function(e) {
    e.preventDefault();
    var fName = $('#fname').val();
    var lName = $('#lname').val();
    var email = $('#email').val();
    var pswd = $('#pswd').val();
    var mobno =$('#mobno').val();
    var chk=$('.chk').val();
    var rd=$('.rd').val();

    $(".error").remove();

    if (fName == "") {
      $('#fname').after('<span class="error">This field is required</span>');
      window.alert("please enter name");
    }
     if (lName == "") {
      $('#lname').after('<span class="error">This field is required</span>');
      window.alert("please enter name");
    }
    if (email == "") {
      $('#email').after('<span class="error">This field is required</span>');
      window.alert("please enter email");
    }
    if (email.length < 1) {
      $('#email').after('<span class="error">This field is required</span>');
    } else {
      var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('#email').after('<span class="error">Enter a valid email</span>');
      }
    }
     if (telephone == "") {
      $('#mobno').after('<span class="error">This field is required</span>');
      window.alert("Enter mobile no");
    }
     if($(".chk:checked").length==0){
      alert("please select one option");                 
    }
    if(pswd == ""){
      $('#pswd').after('<span class="error">This field is required</span>');
      window.alert("enter password");
    }
    if (pswd.length < 8) {
      $('#ps').after('<span class="error">Password must be at least 8 characters long</span>');
    }
    if($(".rd:checked").length==0){
      alert("please select one option"); 
                      
    }
});
 });