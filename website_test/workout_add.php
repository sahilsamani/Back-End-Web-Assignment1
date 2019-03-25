<?php 
// this code will only execute after the submit button is clicked
if (isset($_POST['submit'])) {
	
    // include the config file that we created before
    require "config.php"; 
    
    // this is called a try/catch statement 
	try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Get the contents of the form and store it in an array
        $new_work = array( 
            "shoulders" => $_POST['shoulders'], 
            "chest" => $_POST['chest'],
            "back" => $_POST['back'],
            "biceps" => $_POST['biceps'], 
            "triceps" => $_POST['triceps'],
            "abs" => $_POST['abs'], 
        );
        
        // THIRD: Turn the array into a SQL statement
        $sql = "INSERT INTO works (shoulders, chest, back, biceps, triceps, abs) VALUES (:shoulders, :chest, :back, :biceps, :triceps, :abs)";        
        
        // FOURTH: Now write the SQL to the database
        $statement = $connection->prepare($sql);
        $statement->execute($new_work);
	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	}	
}
?>


<?php include "common/nav.php"; ?>


<section class="container_image2">
    
    
</section>    

<section id="Add-Page-Welcome">
        <div class="containeradd">
        <div class="Welcome-Text_workout_add">
            
                <center><h1> Customize your workouts! </h1></center>
            
                <center><p>To achieve the best version of yourself</p></center>
            
            
        </div>
        
        
        
        </div>
        
    </section>
    
    
    
   
    
     <!-------------Main Content-------------------->
    
   
    <section id="main-content-add">
        
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 style="padding: 20px;">Full Body Workouts</h3>
            </div>
        </div>
    </div>
        
    <div class="container">   
        <div class="row">
            <div class="col">
                <div class="model-pic1">
                    <img src="images/bodybuilder-shouldermodel.JPG" width="130" height="70">
                </div>
        
                <h4>Shoulders</h4>

                 <form method="post">
                      <label for="Shoulder"></label>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">

                </form> 
            </div>
            
            <div class="col">
                <div class="model-pic2x">
                    <img src="images/bodybuilder-chest-model.JPG" width="130" height="70">
                </div>
                <div class="chestx">
                    <h4>Chest</h4>
                    
                    <form method="post">
                      <label for="Shoulder"></label>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">

                </form> 
                </div>
            </div>
            
            <div class="col">
                

                <div class="model-pic3x">
                <img src="images/bodybuilder-backmodel.jpg"width="100" height="70">

                </div>
                
                <div class="backx">
                    <h4>Back</h4>
                    
                    <form method="post">
                      <label for="Shoulder"></label>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">

                    </form> 

                </div>
            </div>
            
            
        
        </div>
        
        <div class="row">
            <div class="col">
                <div class="model-pic1">
                    <img src="images/bodybuilder-shouldermodel.JPG" width="130" height="70">
                </div>
        
                <h4>Shoulders</h4>

                 <form method="post">
                      <label for="Shoulder"></label>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">

                </form> 
            </div>
            
            <div class="col">
                <div class="model-pic2x">
                    <img src="images/bodybuilder-chest-model.JPG" width="130" height="70">
                </div>
                <div class="chestx">
                    <h4>Chest</h4>
                    
                    <form method="post">
                      <label for="Shoulder"></label>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <br>
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">
                      <input type="text" name="Shoulder" id="Shoulder">

                </form> 
                </div>
            </div>
            
            <div class="col">
                

                <div class="model-pic3x">
                <img src="images/bodybuilder-absmodel.jpg"width="100" height="70">

                </div>
                
                <div class="absx">
                    <h4>Abs</h4>
                    
                    <form method="post">
                      <label for="Abs"></label>
                      <input type="text" name="Abs" id="Abs">
                      <br>
                      <input type="text" name="Abs" id="Abs">
                      <br>
                      <input type="text" name="Abs" id="Abs">
                      <input type="text" name="Abs" id="Abs">
                      <input type="text" name="Abs" id="Abs">

                    </form> 

                </div>
            </div>
            
            
        
        </div>
        
        
        
        </div> 
        
        
                
    
        
          
        
</body>
    
    
    
</html>    
    
