
<style>
.table-bordered>tbody>tr>td{
  border: 1px solid #000;
}
.table-bordered>tbody>tr>th{
    border: 1px solid #000;
}

</style>

<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap" style="width:139%;">
                    <h4></h4>
                    <div class="add-product">
                        <a href="?action=add" style="background:#152036; font-size:20px; ">اضافة سياره</a>
                        <!-- <a href="?action=add?id= "  style="background:blue; font-size:20px; ">اضافة سياره</a> -->

                    </div>
                    <br><br>
                    <table class="table table-bordered #152036">

                        <tr style="background:#152036;">


                            <th>id</th>
                            <th>العنوان</th>
                            <th>الماركه</th>
                            <th>الموديل</th>
                            <th>السنه</th>
                            <th>الفئه</th>
                            <th>المتور</th>
                            <th>المكان</th>
                            <th>كيلومتر</th>
                            <th>النقل </th>
                            <th>الوقود</th>
                            <th>السعر</th>
                            <th>ملاحظه</th>
                            <th>الموبيل</th>
                            <th>الصور</th>
                            <th>التعديل والحذف</th>
                            
                        </tr>

                        <?php

                        require 'Function/Connect.php';
                       
                        $Select = "SELECT * FROM usedcars ";
                        $query = $conn->query($Select);

                        foreach ($query as $car) {
                            $imag = explode(',', $car['image']);
                        ?>
                            <tr>

                                <td style="background:#152036;"> <?= $car['id'] ?> </td>
                                <td> <?= $car['title'] ?> </td>
                                <td> <?= $car['brand'] ?> </td>
                                <td> <?= $car['model'] ?> </td>
                                <td> <?= $car['year'] ?> </td>
                                <td> <?= $car['class'] ?></td>
                                <td> <?= $car['motor'] ?> </td>
                                <td> <?= $car['city'] ?> </td>
                                <td> <?= $car['km'] ?> </td>
                                <td> <?= $car['transmission'] ?> </td>
                                <td> <?= $car['fuel'] ?> </td>
                                <td> <?= $car['price'] ?> </td>
                                <td> <?= $car['notes'] ?> </td>
                                <td> <?= $car['phone'] ?> </td>
                                
                                <td>
                                    <!-- <td style="width:200px"> -->
                                    <!-- <div style="width:150px">  </div> -->

                                    <img style="width:50px;height:50px;border-radius: 50%;" src="..\image\logo\brands\usedCars/<?= $imag[0] ?>.jpg" alt="">



                                </td>



                                <td style="width: 100px;">

                                    <a class="btn btn-info" title="تعديل" href="?action=edit &id=<?= $car['id']   ?>" style="background:;"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size;"></i></a>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="pd-setting-ed" data-toggle="modal" data-target="#e<?= $car['id'] ?>" title="حذف" style="background:red;">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="e<?= $car['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="background:black ; color:#fff">
                                                    هل انت متاكد من حذف هذا العربيه <?= $car['title'] ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background:blue">Close</button>
                                                    <a class="btn btn-danger" href="Function/UsedCars/DeletUsedCars.php?id=<?= $car['id']  ?>">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- &id= $user['id']   -->
                                </td>





























                            </tr>

                        <?php
                        }
                        ?>



                    </table>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>