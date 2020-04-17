<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>product page </title>

    <link rel="stylesheet" href="PRP1.css">
</head>

<body>
    <?php
  require("./includes/config.php");
  require("./models/api.php");
  $all_books = $book -> get_all();
  $all_authors = $book -> get_authors();
    header("AddToCart.php");
    ?>  

    <div class="product">
        <?php
        $conn = new mysqli("localhost", "root", "", "nvlst", 8889);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM books WHERE ID='3';";
        if ($result = mysqli_query($conn, $sql))
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    
                    echo
                    "<div class=\" info\" >
                        
                        <p> Name:  " . $row['Title'] . "</p> 
                        <p> Catogary : " . $row['Genre'] . " </p>
                        <p>   Size: " . $row['Language'] . "</p>
                        <p>  Price: " . $row['Price'] . " $ </p>
                        <a type='submit' href='AddToCart.php?id=" . $row['ID'] . "'>Add to cart</a>
                    </div>";
                }
        
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
    </div>
</body>

</html>