flag = 0;
    function formvalid()
    {
       
        flag = 0;
        name1 = document.getElementById("name1");
        lblname1 = document.getElementById("lblname1");
        username = document.getElementById("username");
        lblusername = document.getElementById("lblusername");
        password = document.getElementById("password");
        lblpassword = document.getElementById("lblpassword");
        passconf = document.getElementById("passconf");
        lblpassconf = document.getElementById("lblpassconf");
        role = document.getElementById("role");
        lblrole = document.getElementById("lblrole");
        branch = document.getElementById("branch");
        lblbranch = document.getElementById("lblbranch");

        //passconf
        if(passconf.value == "")
        {
            flag++;
            validerr(passconf,lblpassconf,"Please Re-enter Password");
        }
        else
        {
            if(password.value != passconf.value)
            {
                flag++;
                validerr(passconf,lblpassconf,"Password Mismatch");
            }
            else
            validok(passconf,lblpassconf);
        }
        //password
        if(password.value == "")
        {
            flag++;
            validerr(password,lblpassword,"Please Enter Password");
        }
        else
        {
            if(password.value.length < 8)
            {
                flag++;
                validerr(password,lblpassword,"Password must be 8 characters");
            }
            else
            validok(password,lblpassword);
        }
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
            if(lblusername.innerHTML=="Username already exist.")
            {
                flag++;
                username.focus();
            }
        }
        //role
        if(role.value == "0")
        {
            flag++;
            validerr(role,lblrole,"Please Select Role");
        }
        else
        {
            validok(role,lblrole);
        }
        //mail content
        mail_content = CKEDITOR.instances['mail_content'];
        lblmail_content = document.getElementById("lblmail_content");
        if(mail_content.getData() == "")
            {
                lblmail_content.innerHTML = "Please Enter mail content";
                flag++;
            }
        else
            lblmail_content.innerHTML = "";
        
        //branch
        if(branch.value == "")
        {
            flag++;
            validerr(branch,lblbranch,"Please Select Branch");
        }
        else
        {
            validok(branch,lblbranch);
        }
        //name1
        name1.value = name1.value.trim();
        if(name1.value == "")
        {
            flag++;
            validerr(name1,lblname1,"Please Enter Name");
        }
        else
        {
            validok(name1,lblname1);
        }
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
    
