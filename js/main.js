$("#email-signup").on('keyup', function (e) {
    //Enter Key
    if (e.keyCode == 13) {
        console.log('send email');
        console.log(e.target.value);
    }
});
