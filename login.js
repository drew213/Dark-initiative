document.getElementById('password-eye').addEventListener('click',function(){
    var passwordArea = document.getElementById('password-area');
    var passswordAreaType = passwordArea.getAttribute('type');

    if (passswordAreaType === 'password'){
        passwordArea.setAttribute('type', 'text');

    }
    else{
        passwordArea.setAttribute('type','password')
    }
})