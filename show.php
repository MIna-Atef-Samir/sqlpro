<?php 

include 'header.php';
include 'conn.php';
$q = "SELECT * FROM workers";
$result = $conn->query($q);

?>



<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Date</th>
                
            </tr>
        </thead>
 

  </tbody>
</table>
</div>



<?php include 'footer.php';





