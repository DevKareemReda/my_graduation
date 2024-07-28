<?php
session_start();

if (!isset($_SESSION['login_id'])) {
header("location: login.php");

exit();
}
 ?>

<!-- Start      Saedbar -->

<?php

include "Incloud/Sedbar.php";


?>


<!-- End     Saedbar -->



    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        
<!-- Start   Header -->

<?php

include "Incloud/Header.php";


?>





<!-- End  Header -->




<?php

if (!isset($_GET['action'])) {
    include "Desing/RentCars/RentCarsTable.php";
}elseif($_GET['action'] == 'add'){
    include "Desing/RentCars/AddRentCarsForm.php";
} elseif ($_GET['action'] = 'edit') {
  include "Desing/RentCars/EditRentCarsForm.php";
   
}
  

?>







                            























        <!--  Start Footer  -->
        
<?php

include "Incloud/Footer.php"


?>

   <!-- End Footer  -->

