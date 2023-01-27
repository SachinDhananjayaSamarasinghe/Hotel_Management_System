<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: staffinfo.php");
    }
     
    if ( !empty($_POST)) {
       
         
        // keep track post values
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $post = $_POST['post'];
        $currentstatus = $_POST['currentstatus'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone'];
         
        // validate input
        $valid = true;
    
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE staff_details  set First_Name = ?, Last_Name = ?, Post = ?,  Current_Status = ?, Address = ?, Telephone =? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($firstname,$lastname,$post,$currentstatus,$address,$telephone,$id));
            Database::disconnect();
            header("Location: staffinfo.php");
        }
    } 
?>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body{
    font-family: Arial,Helvetica,sans-serif;
    background-color:white;
    background-size: medium;
    background-position: absolute ;
    }
    *{box-sizing: border-box;}

    a{

    background-color: dodgerblue;
    color: white;
    padding: 10px 228px;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 20px;
    opacity: 0.9;

    }

.input-container{
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon{
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field{
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus{
    border: 2px solid dodgerblue;
}

.btn{
    background-color: dodgerblue;
    color: white;
    padding: 9px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 20px;
    opacity: 0.9;
}

.btn:hover{
    opacity:1;
}

h2{
    text-align: center;
    color: black;
}
</style>
</head>
 
<body>
    <div class="container">
     
                <div>
                    <div>
                        <h2>Update a Member</h2>
                    </div>
             
                    <form style="max-width: 500px;margin: auto;" action="updatestaff.php?id=<?php echo $id?>" method="post">
                      
                        
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" name="firstname" type="text"  placeholder=" FirstName" required>
                        </div>

                        <br>
                        
                    
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" name="lastname" type="text"  placeholder=" LastName" required>
                        </div>

                      <br>
                        
                        <div class="input-container">
                            <i class="fa fa-briefcase icon"></i>
                            <input class="input-field"  name="post" type="text" placeholder="Post" required>
                      </div>

                      <br>

                       <div class="input-container">
                            <i class="fa fa-table icon"></i>
                            <input class="input-field"  name="currentstatus" type="text" placeholder="Current Status" required>
                      </div>

                      <br>

                       <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input class="input-field"  name="address" type="text" placeholder="Address" required>
                      </div>

                      <br>
                        
                        <div class="input-container"">
                            <i class="fa fa-phone icon"></i>
                            <input class="input-field" name="telephone" type="text"  placeholder="Telephone" required>
                      </div>

                      <br>
                      
                      <div>
                          <button type="submit" class="btn ">Update <br></button>
                        </div>
                       
                    </form>
                    
                </div>
                 
    </div> <!-- /container -->
    <br>
   <br>
  
                     <div style="padding: 0px 357px; width: 500px;">
                            <a style="text-decoration: none;" href="staffinfo.php">Back</a>
                        </div>
  </body>
</html>