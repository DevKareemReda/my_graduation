<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4 ></h4>
                            <div class="add-product">
                                <a href="?action=add"  style="background:#152036; font-size:20px; ">اضافة ماركة</a>
                            </div>
                            <br><br>
                            <table >
                            <tr  style="background:#152036" >
                            <th>id</th>
                            <th>الاسم</th>
                            <th>الصور</th>
                            <th> التعديل و الحذف</th>
                            
                            
                         


                          
           
          </tr>
         
     <?php  
                         
                     include 'Function/Connect.php';
                     $Select = "SELECT * FROM brands " ;
                     $query = $conn->query( $Select);
                     
                         foreach($query as $post)  
                         {  
                         ?>  
                         <tr style="color:#fff;"> 
                         <td><?= $post['id']  ?></td>
                         <td>  <a  style="color:#fff" href="NewCar.php?id=<?= $post['id']  ?>"><?= $post['name']  ?>   </a></td>
                         <td>  <a   href="NewCar.php?id=<?= $post['id']  ?>">         <img style="width:50px;height:50px;border-radius: 50%;" src="../image/logo/<?= $post['image'] ?>" alt=""></a></td>

                         <td> 
 
  <a class="btn btn-info" title="تعديل" href="?action=edit &id=<?=$post['id']   ?>" style="background:;"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size;"  ></i></a>

<!-- Button trigger modal -->
<button type="button" class="pd-setting-ed" data-toggle="modal" data-target="#e<?=$post['id']?>"  title="حذف"  style="background:red;" >
<i class="fa fa-trash-o" aria-hidden="true"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="e<?= $post['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" style="background:black ; color:#fff">
هل انت متاكد من حذف هذا الماركه <?=$post['name']?>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal" style="background:blue">Close</button>
<a class="btn btn-danger" href="Function/NewCars/DeletBrands.php?id=<?= $post['id']  ?>">Delete</a>
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

