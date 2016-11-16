flag = 0;
    function formvalid()
    {
        flag = 0;

        username = document.getElementById("username");
        lblusername = document.getElementById("lusername");
        password = document.getElementById("password");
        lblpassword = document.getElementById("lpassword");
       //username
        username.value = username.value.trim();
        if(username.value == "")
        {
            flag++;
            validerr(username,lblusername,"Please Enter Username");
        }

       else
        {
			 
            emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!emailfilter.test(username.value)){
                validerr(username,lblusername,"Please provide a valid email address");
                flag++;
            }
			else{
				 validok(username,lblusername);
			}
  
        }

       //password
        if(password.value == "")
        {
            flag++;
            validerr(password,lblpassword,"Please Enter Password");
        }
        else
        {
            validok(password,lblpassword);
        }
 
        //role
       
        if(flag!=0)
            return false;
        else
            return true;
    }

    function validerr(fld,lbl,msg)
    {
        lbl.style.color = "#FF0000";
        lbl.style.fontSize = "13px";
        lbl.innerHTML = msg;
        fld.focus();
    }
    
    function validok(fld,lbl)
    {
        lbl.innerHTML = "";
    }
    
