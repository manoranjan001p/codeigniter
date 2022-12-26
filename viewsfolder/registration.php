<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  href= "<?php echo base_url();?>register/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="d1">
      <div class="p1">  
     <p> Create Account</p>
     </div>
       <div class="form">
         <form action="registration_process" id="form1" method="post">
            <div class="i1">
            <label>Username</label><br>
            <input type="text" placeholder="tamil" id="username" name="username">
            <i class="fa fa-user" aria-hidden="true"></i><br>
            <small>Error Message</small>
            </div>
            <div class="i1">
            <label>Email</label><br>

            <input type="email" placeholder="ff@gmail.com" id="email" name="email">
            <i class="fa fa-envelope" aria-hidden="true"></i><br>
            <small>Error Message</small>   
            </div>
            <div class="i1">
            <label>Password</label><br>
            <input type="password" placeholder="Password" id="password" name="password">
            <i class="fa fa-key" aria-hidden="true"></i><br>
            <small>Error Message</small> 
            </div>
            <div class="i1">
            <label>Password Check</label><br>
            <input type="password" placeholder="Confirm Password" id="password check" name="password2">
            <i class="fa fa-key" aria-hidden="true"></i><br>
            <small>Error Message</small> 
            </div>
            <div class="i1 i11">
                <button class=b1 type="submit" value="submit" id="submit">submit</button>
            </div>
         </form>
        </div>
    </div>
<script>
    var a=document.getElementById("username")
    var b=document.getElementById("email")
    var c=document.getElementById("password")
    var d=document.getElementById("password check")
    var e=document.getElementById("form1")

    /* var c="@hello"
        if (c.includes("@"))
        {
            console.log("it is pr");
        }
        else{
            console.log("not");
        } */

    form1.addEventListener('submit',f=>{
        f.preventDefault();
        checkInput();
    });

    function checkInput(){
        const a1=a.value.trim();
        const b1=b.value.trim();
        const c1=c.value.trim();
        const d1=d.value.trim();

        if(a1=== ""){
            setError(a,"Username cannot be blank");

        }
        else{
            setSuccess(a);
        }
        if (b1===" "){
            setError(b,"Email cannot be Blank");
        }
        else if(!isEmail())
        {
            setError(b,"not a valid Email");
        }
        else{
            setSuccess(b);
        }

        if(c1=== " "){
            setError(c,"Username cannot be blank");

        }
        else if(c1 !== d1){
            setError(d,'Password Does not match')
        }
        else{
            setSuccess(c);
        }

    }
    function setError(input,message)
    {
        const formControl=input.parentElement;
        const small=formControl.querySelector('small');
        /formControl.classname='i1';
        small.innerText=message;

    }
    function isEmail(b)

    {
       var c=b1.lowercase() 
        if (c.includes("@"))
        {
            console.log("it is present");
            return(c);
        }
        else{
            console.log("it is not present");
        }
    }



</script>
</body>
</html>
