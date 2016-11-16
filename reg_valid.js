flag = 0;
    function formvalid()
    { 
   
        flag = 0;
        name1 = document.getElementById("name1");
        lblname1 = document.getElementById("lname1");
		gender1=document.getElementById("gender1");
		gender2=document.getElementById("gender2");
		lgender=document.getElementById("lgender");
		dob=document.getElementById("dob");
		ldob=document.getElementById("ldob");
		designation=document.getElementById("designation");
		ldesig=document.getElementById("ldesig");
		education=document.getElementById("education");
		ledu=document.getElementById("ledu");
		experience=document.getElementById("experience");
		lexp=document.getElementById("lexp");
		area=document.getElementById("area");
		larea=document.getElementById("larea");
		training=document.getElementById("training");
		ltrain=document.getElementById("ltrain");
		papers=document.getElementById("papers");
		lpaper=document.getElementById("lpaper");
		mobile=document.getElementById("mobile");
		lmobile=document.getElementById("lmobile");
		email=document.getElementById("email");
		lmail=document.getElementById("lmail");
                      
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
  
              			   //gender
      //  gender.value = gender.value.trim();
        if (gender1.checked==false && gender2.checked==false) { 
		flag++;
		 validerr1(lgender,"Please select valid choice");
		
}
        else
        {
            validok(gender1,lgender);
        }
       
	//dob
	
	 dob.value = dob.value.trim();
        if(dob.value == "")
        {
            flag++;
            validerr(dob,ldob,"Please select valid choice");
        }
        else
        {
            validok(dob,ldob);
        }
		
	//designation
	 designation.value = designation.value.trim();
        if(designation.value == "")
        {
            flag++;
            validerr(designation,ldesig,"Please enter a value");
        }
        else
        {
            validok(designation,ldesig);
        }
        
	
	//education
	 education.value = education.value.trim();
        if(education.value == "")
        {
            flag++;
            validerr(education,ledu,"Please enter a value");
        }
        else
        {
            validok(education,ledu);
        }
        
	//experience
	experience.value = experience.value.trim();
        if(experience.value == "")
        {
            flag++;
            validerr(experience,lexp,"Please enter a value");
        }
        else
        {
            validok(experience,lexp);
        }
        //area of training/*
	 area.value = area.value.trim();
        if(area.value == "")
        {
            flag++;
            validerr(area,larea,"Please enter a value");
        }
        else
        {
            validok(area,larea);
        }
        	//papers published
	 training.value = training.value.trim();
        if(training.value == "")
        {
            flag++;
            validerr(training,ltrain,"Please select valid choice");
        }
        else
        {
            validok(training,ltrain);
        }
        	//training
	papers.value = papers.value.trim();
        if(papers.value == "")
        {
            flag++;
            validerr(papers,lpaper,"Please enter a value");
        }
        else
        {
            validok(training,ltrain);
        }
        	//mobile
	mobile.value = mobile.value.trim();
        if(mobile.value == "")
        {
            flag++;
            validerr(mobile,lmobile,"Please enter your mobile no");
        }
        else
        {
            validok(mobile,lmobile);
        }
          //email
                   emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!emailfilter.test(email.value)){
                validerr(email,lmail,"Please provide a valid email address");
                flag++;
            }
                           
	//photo

        	
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
	               function validerr1(lbl,msg)
    {
        lbl.style.color = "#FF0000";
        lbl.style.fontSize = "13px";
        lbl.innerHTML = msg;
       // fld.focus();
    }

    
    function validok(fld,lbl)
    {
        lbl.innerHTML = "";
    }
    