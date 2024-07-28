<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4 ></h4>
                            <div class="add-product">
                                <a href="?action=add"  style="background:#152036; font-size:20px; ">اضافة عميل</a>
                            </div>
                            <br><br>
                            <table>
                            <tr  style="background:#152036" >

                            <th>id</th>
                            <th>الصور</th>
                            <th>الاسم الاول</th>
                            <th>الاسم الثاني</th>
                            <th>الايميل</th>
                            <th>الموبيل</th>
                            <th>العنوان</th>
                            <th>الصفه</th>
                            <th>التعديل او الحذف</th>
                            
                         
                            
                        
                            
                           
                         
                            

           
          </tr>

     <?php  
                         
                     include 'Function/Connect.php';
                     $Select = "SELECT * FROM user " ;
                     $query = $conn->query( $Select);
                         foreach($query as $post)  
                         {  
                         ?>  

                         <tr> 
                         <td><?= $post['id']  ?></td>
                         <td><img src="images/<?= $post['img'] ?>" alt="" width="100px" height="100px" style="border-radius: 50%;"></td>
                         <td><?= $post['firstName'] ?></td>
                         <td><?= $post['lastName'] ?></td>
                         <td><?= $post['email'] ?></td>
                         <td><?= $post['phone'] ?></td>
                         <td><?= $post['address'] ?></td>
                         <td><?= $post['gender'] ?></td> 

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
هل انت متاكد من حذف هذا العميل <?=$post['firstName']?><?= $post['lastName'] ?>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal" style="background:blue">Close</button>
<a class="btn btn-danger" href="Function/User/DeletUser.php?id=<?= $post['id']  ?>">Delete</a>
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

