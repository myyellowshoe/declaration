$("#email-signup").on('keyup click', function (e) {

    document.getElementById("content").className = "adding-email";
    //Enter Key
    if (e.keyCode == 13) {
        console.log('send email');
        console.log(e.target.value);
        var user_e = e.target.value;

        $.post( "send.php", { user_e: e.target.value} );
        document.getElementById("content").className = "email-submitted";
    }
});

$("#submit-email").on('click', function (e) {
  var user_e = document.getElementById("email-signup").value;
  $.post( "send.php", { user_e: user_e } );
  document.getElementById("content").className = "email-submitted";
});
