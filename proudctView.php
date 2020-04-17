<?php


    if(!empty($_COOKIE['recent'])) 
        {    

            $recentViewArray = array($_COOKIE['recent']);
            array_push($recentViewArray,$_GET['id']);
            $recentView= implode(',' , $recentViewArray);
            setcookie('recent', $recentView , time() + (86400*30), "/");
            }
     else 
        {
            $recentViewArray = array();
            array_push($recentViewArray,$_GET['id']);
            $recentView= implode(',' , $recentViewArray);
            setcookie('recent', $recentView , time() + (86400*30), "/");
            }
        

?>

<html>
    <head>
   <title>The Novelist></title>     
   <style>

       
       


   </style>
      <link rel="stylesheet" href="./public/styles/similar.css" type="text/css">
      <link rel="stylesheet" href="./public/styles/proudctView.css" type="text/css">
      <link rel="stylesheet" href="./public/styles/nav.css" type="text/css">
      <link rel="stylesheet" href="./public/styles/cart.css" type="text/css">
   	  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">          <link rel="shortcut icon" href="./public/images/favicon.png" type="image/x-icon">
    </head>
    <body>
        
    
        <div class="container">
        <?php 
        	require("./includes/nav.php");
            require("./includes/config.php");
            // require("./models/api.php");
            $all_books = $book -> get_all();
            $all_authors = $book -> get_authors();
            ?>
           



        <div class="BookD">
            <div class="BookDit">Book Details</div>
         
            <?php
        $conn = new mysqli("localhost", "root", "", "nvlst", 8889);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM books WHERE ID= {$_GET['id']};";
        if ($result = mysqli_query($conn, $sql))
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)){
                    $genre=$row["Genre"];
                    $not=$row["ID"];
            ?>
         <div class="grp">
             <div class="rate">
                 <?php
                 $i=0;
                 while($i<$row["rating"]) {
                     
                 ?>
                 <a href=""><img class="star" src="./public/images/icons8-star.svg"></a>
                
                 <?php
                $i=$i+1;
                } ?>
          
        </div>
             <div class="BookName"><?php echo $row["Title"]; ?></div>
             <div class="price"><?php echo $row["Price"]; ?> SAR</div>


            <div class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra duis dignissim semper nunc morbi amet, nisi. Sed consectetur massa tristique aliquam risus accumsan. Netus non semper vulputate ultricies nullam augue dapibus. Nulla bibendum dictum aenean eget orci, nec amet, odio.</div>

         </div>

         <div class="buttons">
         <button class="AddCart">Add to wishlist</button>
         <a type="submit" <?php echo "href='addToCart.php?id=".$row['ID']."' "?> class="RentButton">ADD TO CART</a>
         </div>
             <div class="pic">
                <img  src="./public/images/covers/<?php echo $row["ISBN"]; ?>.jpg " style="width: 230px; height: 348px;">

                    
             </div>
             
              <div class="grpD">
              <div class="det">
                  
              <div class="details">
                  <p class="text"> DETAILS</p>

             <HR class="line">
             </div>
                <div class="pages">
                    <a class="texation">NO. OF PAGES</a>
                    <a class="text2"><?php echo $row["Pages"] ?> Pages</a>
                </div>
                <div class="lang">
                   <a class="texation"> LANGUAGE</a>
                   <a class="text2"><?php echo $row["Language"]; ?></a>

                </div>
                <div class="provider">
                   <a class="texation">PROVIDER</a>
                   <a class="text2"><?php echo $row["Provider"]; ?></a>

                </div>
                <div class="release">
                    <a class="texation"> RELEASE DATE</a>
                    <a class="text2"><?php echo $row["Release_Date"]; ?></a>

                </div>

                
             





             </div>
             

             <div class="author">
                 <div class="auth">
             <p class="text">AUTHOR</p>
             <HR class="line">
             </div>

                <div class="writer">
                    <a href="#"><img  src="./public/images/Rec.png"></a>
                    
                        <ul>
                   <li><a class="texation">Brooklyn, New York</a></li>
                    <li><a class="text2"><?php echo $row["Author_Name"]; ?></a></li>
                </ul>
                
                </div>
                <div class="info">
                <a class="texation">Aliqua irure minim ad consequat consectetur qui et nostrud. Id in nulla voluptate dolor sunt nulla officia.</a>
            </div>

               <div class="social"> 
                <a href="#"><img  src="./public/images/facebook.png"></a>
                <a href="#"><img  src="./public/images/twitter.png"></a>
                   
            </div>

             </div>
             </div>




             </div>
              <?php  }
            }
            ?>
             
             <div class="similar">
                 <div class="title">Similar Books</div>


              <ul>
                  <?php
                  
                  
                    $simResult = $conn -> query("SELECT * FROM `Books` WHERE `ID` !='$not' AND`Genre`='$genre'") or die($conn -> error);

 				    while($simRow = $simResult -> fetch_assoc())  { ?>
                <li> <?php echo "<a href=proudctView.php?id=" . $simRow['ID'] . ">"?><img src="./public/images/covers/<?php echo $simRow["ISBN"]; ?>.jpg" width="50px"><div class="uls"><h3 class="similarFont"><?php echo $simRow['Author_Name']?></h3><span><?php echo $simRow['Title']?></span></div><img src="./public/images/icons8-forward 1.svg"></a></li> 
                 <?php
                }
?>
			   </ul>

			 


                 </div>
     
                </div>



    </body>
</html>