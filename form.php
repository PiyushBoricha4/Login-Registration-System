<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row container"> 
        <form action="insert.php" method="POST">
        <!-- <form> -->
        <center>
            <h1>Registration Form</h1>
        </center>
        <div class="mt-2 col-md-12">
            <label for="Firststudent" class="form-label"><b>First name:- <span class="star">*</span></b></label>
            <input onkeyup="fnvalidation()" name="Fname" type="text" class="form-control form-control-sm form" value="" id="Firststudent" placeholder="Enter First name">
            <label class="error-input">Required</label>
        </div>

        <div class="mt-2 col-md-12">
            <label for="Laststudent" class="form-label"><b>Last name:- <span class="star">*</span></b></label>
            <input onkeyup="lnvalidation()" type="text" name="Lname" class="form-control form-control-sm form" value="" id="Laststudent" placeholder="Enter Last name">
            <label class="error-input">Required</label>
        </div>
        <div class="mt-2 col-md-12">
            <label class="form-label"><b>Gender:- <span class="star">*</span></b></label><br>
            <div class="form-check form-check-inline">
           
            <input onchange="gendervalidation()" type="radio" class="form-check-input form" value="Male" id="Male" name="Gender">
                <label for="Male" class="form-check-label">
                    <b>Male</b>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input onchange="gendervalidation()" type="radio" class="form-check-input form" value="Female" id="Female" name="Gender">
                <label for="female" class="form-check-label">
                    <b>Female</b>
                </label>
            </div>
            <label class="error-input">Required</label>
        </div>
        
    <div class="row mt-2">
        <div class="col-sm-6">
            <label for="State" class="form-label"><b>State:- </b></label>    
                <select onchange="statevalidation()" class="form-select" name="State" value="" id="State" aria-label="Default select example">
                    <option value="0">Select Your City</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Maharashtra">Maharashtra</option>
                </select>
        </div>
        <div class="col-sm-6">
        <label for="City" class="form-label"><b>City:- </b></label>    
        <select onchange="cityvalidation()" class="form-select" name="City" value="" id="City" aria-label="Default select example">
            <option value="0">Select Your City</option>
            <option value="Surat">Surat</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Vadodra">Vadodra</option>
            <option value="Ahemdabad">Ahemdabad</option>
            <option value="Bhavnagar">Bhavnagar</option>
            <option value="Delhi">Delhi</option>
            <option value="Pune">Pune</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Gandhinagar">Gandhinagar</option>
        </select>
        </div>
        
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label class="error-input">City Required.</label>
        </div>
        <div class="col-sm-6">
            <label class="error-input">State Required.</label>
        </div>
    </div>

    <div class="mt-2 col-md-12">
        <label for="Email" class="form-label"><b>Email:- <span class="star">*</span></b></label>
        <input onkeyup="emailvalidation()" type="email" class="form-control form-control-sm form" name="Email" value="" id="Email" placeholder="Enter your Email">
        <label class="error-input">Email Required.</label>
    </div>

    <div class="mt-2 col-md-12">
        <label for="Phone" class="form-label"><b>Phone no:- <span class="star">*</span></b></label>
        <div class="row">
            <div class="col-md-2">
            <select class="form-select" id="City" name="codepno" aria-label="Default select example" required>
                <option>+1</option>
                <option>+52</option>
                <option>+61</option>
                <option selected>+91</option>
                <option>+81</option>
                <option>+92</option>
                <option>+64</option>
            </select>
        </div>
        <div class="col-md-10">
            <input onkeyup="phvalidation()" type="tel" class="form-control form" name="Phone" value="" id="Phone" placeholder="Enter Phone Number">
            <label class="error-input">Phone Number is Required.</label>
            <label class="error-input">Phone Number should be 10 digits.</label>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Password:- <span class="star">*</span></label>
            <input type="password" onkeyup="passvalidation()" name="password" value="" class="form-control" id="password" required>
            <label class="error-input">Correct password is required</label>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Confirm Password:- <span class="star">*</span></label>
            <input type="password" onkeyup="cpvalidation()" name="cpassword" value="" class="form-control" id="cpassword" required>
            <label class="error-input">Correct confirm password is required</label>
        </div>
    </div>
        <div class="submit mt-4">
        
            <button type="button" value="Submit" onclick="formvalidation()" class="btn btn-primary">Submit</button>
            <button type="Reset" value="Reset" class="btn btn-danger">Reset</button>
  
            <button type="submit" style="display: none;" name="submit" id="studentbtn"></button>
        </div>

    </form>
</div>

<script>
    function formvalidation() 
    {
        fnvalidation();
        lnvalidation();
        gendervalidation();
        cityvalidation();
        statevalidation();
        emailvalidation();
        phvalidation();
        passvalidation();
        cpvalidation();
        
        if(fnvalidation() && lnvalidation() && gendervalidation() && cityvalidation() && statevalidation() && emailvalidation() && phvalidation() && passvalidation() && cpvalidation())
        {
            document.getElementById("studentbtn").click();
        }    
    }





    function fnvalidation()
    {
        let fname = document.getElementById("Firststudent").value;
        let ferror = document.getElementsByClassName("error-input");
        console.log(ferror );

        if(fname == '')
        {
            ferror[0].style = "display:block";
            return false;
        }
        else
        {
            ferror[0].style = "display:none";
            return true;
        }
    }

    function lnvalidation()
    {
        let lname = document.getElementById("Laststudent").value;
        let ferror = document.getElementsByClassName("error-input");

        if(lname == '')
        {
            ferror[1].style = "display:block";
            return false;
        }
        else
        {
            ferror[1].style = "display:none";
            return true;
        }
    }

    function gendervalidation()
    {
        let male = document.getElementById("Male");
        let female = document.getElementById("Female");
        let ferror = document.getElementsByClassName("error-input");

        if(male.checked || female.checked)
        {
            ferror[2].style = "display:none";
            return true;
        }
        else
        {
            ferror[2].style = "display:block";
            return false;
        }
    }

    function cityvalidation()
    {
        let city = document.getElementById("City").value;
        let ferror = document.getElementsByClassName("error-input");

        if(city == 0)
        {
            ferror[3].style = "display:block";
            return false;
        }
        else
        {
            ferror[3].style = "display:none";
            return true;
        }
    }

    function statevalidation()
    {
        let state = document.getElementById("State").value;
        let ferror = document.getElementsByClassName("error-input");

        if(state == 0)
        {
            ferror[4].style = "display:block";
            return false;
        }
        else
        {
            ferror[4].style = "display:none";
            return true;
        }
    }

    function emailvalidation()
    {
        let email = document.getElementById("Email").value;
        let ferror = document.getElementsByClassName("error-input");

        if(email == '')
        {
            ferror[5].style = "display:block";
            return false;
        }
        else
        {
            ferror[5].style = "display:none";
            return true;
        }
    }

    function phvalidation()
    {
        let phone = document.getElementById("Phone").value;
        let ferror = document.getElementsByClassName("error-input");

        if(phone == '')
        {
            ferror[6].style = "display:block";
            return false;
        }
        else
        {
            ferror[6].style = "display:none";
            return true;
        }
    }

    function passvalidation() 
    {
        let password = document.getElementById("password").value;
        let ferror = document.getElementsByClassName("error-input");
        let cpassword = document.getElementById("cpassword").value;

        if(password == '')
        {
            ferror[8].style = "display:block";
            return false;
        }
        else
        {
            ferror[8].style = "display:none";
            // if(cpassword == password)
            // {
            //     ferror[8].style = "display:none";
            //     return true;
            // }
            // else
            // {
            //     ferror[8].innerHTML = "Pass and C pass not match";
            //     ferror[8].style = "display:block";
            //     return false;
            // }
            return true;
        }
    }

    function cpvalidation() 
    {
        let cpassword = document.getElementById("cpassword").value;
        let ferror = document.getElementsByClassName("error-input");
      
        
        if(cpassword == '')
        {
            ferror[9].style = "display:block";
            return false;
        }
        else
        {
            ferror[9].style = "display:none";

            // if(cpassword == password)
            // {
            //     ferror[8].style = "display:none";
            //     return true;
            // }
            // else
            // {
            //     ferror[8].innerHTML = "Password and confirm password not match";
            //     ferror[8].style = "display:block";
            //     return false;
            // }
            return true;
        }
    }
</script>

</body>
</html>