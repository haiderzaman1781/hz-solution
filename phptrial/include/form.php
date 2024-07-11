<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <?php
        // include('include/connection.php');
        if(isset($_POST['submit'])){
            $hp1=mysqli_real_escape_string($conn, $_POST['hp1']);
            $p1=mysqli_real_escape_string($conn, $_POST['p1']);
            $hp2=mysqli_real_escape_string($conn, $_POST['hp2']);
            $p2=mysqli_real_escape_string($conn, $_POST['p2']);
            $img1=$_FILES['img1']['name'];
            $hp3=mysqli_real_escape_string($conn, $_POST['hp3']);
            $p3=mysqli_real_escape_string($conn, $_POST['p3']);
            // $img2=$_FILES['img2'] ['name'];
            $hp4=mysqli_real_escape_string($conn, $_POST['hp4']);
            $p4=mysqli_real_escape_string($conn, $_POST['p4']);
        }
        if(empty($hp1) || empty($p1) || empty($hp2) || empty($p2) || empty($hp3) || empty($p3) || empty($hp4) || empty($p4)){
            echo"Please fill the fields !";
        }
        else{
           
            $file1=array();
            foreach($img1 as $image){
                $exe=strtolower(pathinfo($image, PATHINFO_EXTENSION));
                $arr=array("jpg","avif","jpeg");
                if(in_array($exe , $arr)){
                    $file=rand(10000 , 1000000).".".$exe;
                    $file1[]=$file;
                    echo $msg="right";
                }
                else{
                    echo $msg="Not Write";
                }
            }
                if($msg == 'right'){
                    $filess=serialize($file1);
                     $sql="INSERT into `data`(`hp1`,`p1`,`hp2`,`p2`,`img1`,`hp3`,`p3`,`hp4`,`p4`)VALUES('$hp1','$p1' , '$hp2','$p2','$img1','$hp3','$p3','$hp4','$p4')";
                    $run=mysqli_query($conn , $sql);
                    
                    if($run){   
                        foreach($file1 as $pic=>$pics){
                            move_uploaded_file($_FILES['img1']['tmp_name'][$pic],"./imagestore".$pics);
                        }
                        echo $data="Data has been inserted";
                    }
                    else{
                        echo $data='Empty Field';
                    }
                }
            }
        ?>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form action="" method="POST">
                <input type="text" placeholder="heading paragraph" name="hp1" id="hp1">
                <input type="text" placeholder="para 1" name="p1" id="p1">
                <input type="text" placeholder="hp2" name="hp2" id="hp2">
                <input type="text" placeholder="para `2" name="p2" id="p2">

                <input type="file" placeholder="img1" name="img1[]" id="img1">
                
                <input type="text" placeholder="hp3" name="hp3" id="hp3">
                <input type="text" placeholder="para3" name="p3" id="p3">
                
                <!-- <input type="file" placeholder="image2" name="img2" id="img2"> -->
                
                <input type="text" placeholder="hp4" name="hp4" id="hp4">
                <input type="text" placeholder="para4" name="p4" id="p4">
                <button type="submit" name="submit" id="submit">submit</button>
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
