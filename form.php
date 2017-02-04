<?php

require '.\lib\data-functions.php';


if ($_POST){
   // var_dump($_POST);



   //// put validation here before inserting data into array and insert data command after array!!!

 



    $data= array(
        'name'=> $_POST ['name'],
        'gender'=> $_POST ['gender'],
        'currentstudent' => (isset($_POST['currentstudent'])),   
        'contact'=> $_POST ['contact'],
        'phonenumber'=>$_POST['phonenumber'],
        'email'=>$_POST['email'],
        'bio'=>$_POST['bio']


        
    );





    insert_data($data);

}



//   $index = get_index();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel='stylesheet'href='form.css'>
</head>
<body>



    <div class="pagewrapper">
        <div class="formwrapper">
          
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          
                        <h3>Full Name</h3>                       
                        <input type="text" name="name" value="" id="fullname"" maxlength="50" style="width:120px;" placeholder="Name" />
                        <br />

                        <hr>


                        
                        <h3>Gender</h3>
                        <input type="radio" name="gender" value="male" id="gender-male"> Male<br>
                        <input type="radio" name="gender" value="female" id="gender-female"> Female<br>
                

                        <hr>

                          
                        <h3>Current Student?</h3>
                        <input type="checkbox" name="currentstudent" id="studentstatus">
                        
             

                        <hr>

                    
                        <h3>Contact Preference</h3>
                        <input type="radio" name="contact" value="phone" id="prefphone"> Phone <br>
                        <input type="radio" name="contact" value="email" id="prefemail"> Email<br>
                   

                        <hr>

                        <h3>Phone:</h3>                       
                        <input type="text" name="phonenumber" value="" id="phone" maxlength="100" style="width:120px;" placeholder="123456789" />
                        <br />

                        <h3>Email:</h3>
                        <input type="text" name="email" value="" id="email" maxlength="100" style="width:120px;" placeholder="@" />
                

                        <hr>
                    
                        <h3>Bio</h3>
                        <textarea name="bio" id="bioid">type here</textarea>
                  

                        <hr>

                        <h3>Please Submit Here</h3>
                        <input type="submit" value="Submit" id="submithere"> 

            
            </form>
   
        </div>




    </div>

  <?php
            
            

?>
</body>
</html>