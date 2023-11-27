<?php
$id=null;
$conn=mysqli_connect('localhost','root','','school');
$query="select * from autono order by id DESC limit 1";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$lastid=$row['id'];
if($lastid==" ")
{
    $id="ENT1";
//    $id=1;
}
else
{
    $id=  substr($lastid, 3);
    $id=  intval($id);
    $id="ENT".($id+1);
//    $id=($id+1);
}
?>
<?php
        $conn = mysqli_connect('localhost', 'root', '', 'school');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $id = $_POST["id"];
            $name = $_POST["name"];
            if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "INSERT INTO autono (id,name)VALUES ('$id','$name')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4" style="border: 2px solid;padding: 30px;">
                    <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
                        <div class="col-md-4">
                            <label>Id</label>
                            <?php if(!empty($id)) {?>
                            <input type="text" name="id" id="id" value="<?php echo $id;?>" readonly><?php } ?>
                        </div>
                        <div class="col-md-4">
                            <label>Name</label>
                            <input type="text" name="name" id="name" value="">
                        </div>
                        <br>
                        <div class="col-md-4">
                            <input type="submit" value="ADD">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>