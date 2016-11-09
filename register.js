    function check(helpermsg)
    {
        var name = document.getElementById('req1');
        var username = document.getElementById('req2');
        var pwd = document.getElementById('comp1');
        var pwd2 = document.getElementById('comp2');
        var email = document.getElementById('email');
		
        if(name.value.length==0)
        {
            name.focus();
            alert(helpermsg+'name');
            return false;
        }
        if(email.value.length==0)
        {
            email.focus();
            alert(helpermsg+'email');
            return false;
        }
        if(username.value.length==0)
        {
            username.focus();
            alert(helpermsg+'username');
            return false;
        }
        if(pwd.value!=pwd2.value||pwd.value==null||pwd.value=='')
        {
            alert('Passwords do not match OR ARE INCORRECT');
            return false;
        }
        
    }