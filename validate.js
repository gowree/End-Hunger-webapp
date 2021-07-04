function validate()
{ var fname=document.form.fname.value;
    var lname=document.form.lname.value;
    var hd=document.form.hd.value;
    var pn=document.form.pn.value;
    var email=document.form.email.value;
    

if (fname=="" || lname=="" || hd=="" ||pn=="" ||email=="")
    {alert("Some fields are empty, Fill every Fields ");
return false;}
   
   else alert("SUBMISSION SUCCESS");
  
}
