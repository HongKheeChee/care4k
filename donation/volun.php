
<?php
$qry = $conn->query("SELECT * FROM vacancy ");
	while($row=$qry->fetch_assoc()){
		$pos[$row['id']] = $row['position'];
	}
	$pid = 'all';
	if(isset($_GET['pid']) && $_GET['pid'] >= 0){
		$pid = $_GET['pid'];
	}
	$position_id = 'all';
	if(isset($_GET['position_id']) && $_GET['position_id'] >= 0){
		$position_id = $_GET['position_id'];
	}
?>
<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">

			<!-- Table Panel -->
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-lg-12">
								<span><large><b>Application List</b></large></span>
								<button class="btn btn-sm btn-block btn-primary btn-sm col-md-2 float-right" type="button" id="new_application"><i class="fa fa-plus"></i> New Applicant</button>
							</div>
						</div>
						
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-md-2 offset-md-2 text-right">Position :</div>
									<div class="col-md-5">
										<select name="" class="custom-select browser-default select2" id="position_filter">
											<option value="all"  <?php echo isset($position_id) && $position_id == "all" ? "selected" : '' ?>>All</option>
											<?php foreach($pos as $k => $v): ?>
												<option value="<?php echo $k ?>" <?php echo isset($position_id) && $position_id == $k ? "selected" : '' ?>><?php echo $v ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<hr><br>
						<table class="table table-bordered table-hover">
							<colgroup>
								<col width="10%">
								<col width="30%">
								<col width="20%">
								<col width="30%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Applicant Information</th>
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$stats = $conn->query("SELECT * FROM recruitment_status order by id asc");
								$stat_arr[0] = "New";
								while ($row = $stats->fetch_assoc()) {
									$stat_arr[$row['id']] = $row['status_label'];
								}
								$awhere = '';
								if(isset($_GET['pid']) && $_GET['pid'] >= 0){
									$awhere = " where a.process_id = '".$_GET['pid']."' ";
								}
								if(isset($_GET['position_id']) && $_GET['position_id'] > 0){
									if(empty($awhere))
									$awhere = " where a.position_id = '".$_GET['position_id']."' ";
									else
									$awhere .= " and a.position_id = '".$_GET['position_id']."' ";

								}
								$application = $conn->query("SELECT a.*,v.position 
                                                            FROM application a 
                                                            inner join vacancy v on v.id = a.position_id 
                                                            where a.firstname = 'hong' 
                                                            $awhere order by a.id asc");
                                                            
								while($row=$application->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p>Name : <b><?php echo ucwords($row['lastname'].', '.$row['firstname'].' '.$row['middlename']) ?></b></p>
										<p>Applied for : <b><?php echo $row['position'] ?></b></p>
									</td>
									<td class="text-center">
										<?php echo $stat_arr[$row['process_id']] ?>
									</td>
									
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 form-group">
								<button class="btn-block btn-sm btn filter_status" type="button" data-id="all">All</button>
							</div>
						</div>
						<?php foreach ($stat_arr as $key => $value): ?>
						<div class="row">
							<div class="col-md-12 form-group">
								<button class="btn-block btn-sm btn filter_status" type="button" data-id="<?php echo $key ?>" ><?php echo $value ?></button>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$('.filter_status').each(function(){
		if($(this).attr('data-id') == '<?php echo $pid ?>')
			$(this).addClass('btn-primary')
		else
			$(this).addClass('btn-info')

	})
	$('table').dataTable()
	$("#new_application").click(function(){
		uni_modal("New Application","manage_application.php","mid-large")
	})
	$(".edit_application").click(function(){
		uni_modal("Edit Application","manage_application.php?id="+$(this).attr('data-id'),"mid-large")
	})
        
	$(".view_application").click(function(){
		uni_modal("","view_application.php?id="+$(this).attr('data-id'),"mid-large")
	})

	$('.delete_application').click(function(){
		_conf("Are you sure to delete this Applicant?","delete_application",[$(this).attr('data-id')])
	})
	function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	$('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('.filter_status').click(function(){
	location.href = "index.php?page=applications&pid="+$(this).attr('data-id')+'&position_id=<?php echo $position_id ?>'
})
$('#position_filter').change(function(){
	location.href = "index.php?page=applications&position_id="+$(this).val()+'&pid=<?php echo $pid ?>'
})
	function delete_application($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_application',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-end mb-2">
                <button class="btn btn-outline-dark btn-flat btn-sm" type="button" id="empty_cart">Empty Cart</button>
            </div>
        </div>
        <div class="card rounded-0">
            <div class="card-body">
                <h3><b>test</b></h3>
                <hr class="border-dark">
                <?php 
                    $qry = $conn->query("SELECT c.*,p.title,i.price,p.id as pid from `cart` c inner join `inventory` i on i.id=c.inventory_id inner join products p on p.id = i.product_id where c.client_id = ".$_settings->userdata('id'));
                    while($row= $qry->fetch_assoc()):
                        $upload_path = base_app.'/uploads/product_'.$row['pid'];
                        $img = "";
                        foreach($row as $k=> $v){
                            $row[$k] = trim(stripslashes($v));
                        }
                        if(is_dir($upload_path)){
                            $fileO = scandir($upload_path);
                            if(isset($fileO[2]))
                                $img = "uploads/product_".$row['pid']."/".$fileO[2];
                            // var_dump($fileO);
                        }
                ?>
                    <div class="d-flex w-100 justify-content-between  mb-2 py-2 border-bottom cart-item">
                        <div class="d-flex align-items-center col-8">
                            <span class="mr-2"><a href="javascript:void(0)" class="btn btn-sm btn-outline-danger rem_item" data-id="<?php echo $row['id'] ?>"><i class="fa fa-trash"></i></a></span>
                            <img src="<?php echo validate_image($img) ?>" loading="lazy" class="cart-prod-img mr-2 mr-sm-2" alt="">
                            <div>
                                <p class="mb-1 mb-sm-1"><?php echo $row['title'] ?></p>
                                
                                <p class="mb-1 mb-sm-1"><small><b>Price:</b> <span class="price"><?php echo number_format($row['price']) ?></span></small></p>
                                <div>
                                <div class="input-group" style="width:130px !important">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-sm btn-outline-secondary min-qty" type="button" id="button-addon1"><i class="fa fa-minus"></i></button>
                                    </div>
                                    <input type="number" class="form-control form-control-sm qty text-center cart-qty" placeholder="" aria-label="Example text with button addon" value="<?php echo $row['quantity'] ?>" aria-describedby="button-addon1" data-id="<?php echo $row['id'] ?>" readonly>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-outline-secondary plus-qty" type="button" id="button-addon1"><i class="fa fa-plus"></i></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-right align-items-center d-flex justify-content-end">
                            <h4><b class="total-amount"><?php echo number_format($row['price'] * $row['quantity']) ?></b></h4>
                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="d-flex w-100 justify-content-between mb-2 py-2 border-bottom">
                    <div class="col-8 d-flex justify-content-end"><h4>Grand Total:Rm</h4></div>
                    <div class="col d-flex justify-content-end"><h4 id="grand-total">-</h4></div>
                </div>
            </div>
        </div>
        <div class="d-flex w-100 justify-content-end">
            <a href="./?p=checkout" class="btn btn-sm btn-flat btn-dark">Checkout</a>
        </div>
    </div>
    <br></br>
    <br></br><!-- comment -->
    <br></br>
    <br></br>
    <br></br><!-- comment -->
    <br></br>
    <br></br>
    <br></br><!-- comment -->
    <br></br>
    <br></br>
    <br></br><!-- comment -->
    <br></br>
</section>
<script>
    function calc_total(){
        var total  = 0

        $('.total-amount').each(function(){
            amount = $(this).text()
            amount = amount.replace(/\,/g,'')
            amount = parseFloat(amount)
            total += amount
        })
        $('#grand-total').text(parseFloat(total).toLocaleString('en-US'))
    }
    function qty_change($type,_this){
        var qty = _this.closest('.cart-item').find('.cart-qty').val()
        var price = _this.closest('.cart-item').find('.price').text()
            price = price.replace(/,/g,'')
            console.log(price)
        var cart_id = _this.closest('.cart-item').find('.cart-qty').attr('data-id')
        var new_total = 0
        start_loader();
        if($type == 'minus'){
            qty = parseInt(qty) - 1
        }else{
            qty = parseInt(qty) + 1
        }
        price = parseFloat(price)
        // console.log(qty,price)
        new_total = parseFloat(qty * price).toLocaleString('en-US')
        _this.closest('.cart-item').find('.cart-qty').val(qty)
        _this.closest('.cart-item').find('.total-amount').text(new_total)
        calc_total()

        $.ajax({
            url:'classes/Master.php?f=update_cart_qty',
            method:'POST',
            data:{id:cart_id, quantity: qty},
            dataType:'json',
            error:err=>{
                console.log(err)
                alert_toast("an error occured", 'error');
                end_loader()
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                    end_loader()
                }else{
                    alert_toast("an error occured", 'error');
                    end_loader()
                }
            }

        })
    }
    function rem_item(id){
        $('.modal').modal('hide')
        var _this = $('.rem_item[data-id="'+id+'"]')
        var id = _this.attr('data-id')
        var item = _this.closest('.cart-item')
        start_loader();
        $.ajax({
            url:'classes/Master.php?f=delete_cart',
            method:'POST',
            data:{id:id},
            dataType:'json',
            error:err=>{
                console.log(err)
                alert_toast("an error occured", 'error');
                end_loader()
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                    item.hide('slow',function(){ item.remove() })
                    calc_total()
                    end_loader()
                }else{
                    alert_toast("an error occured", 'error');
                    end_loader()
                }
            }

        })
    }
    function empty_cart(){
        start_loader();
        $.ajax({
            url:'classes/Master.php?f=empty_cart',
            method:'POST',
            data:{},
            dataType:'json',
            error:err=>{
                console.log(err)
                alert_toast("an error occured", 'error');
                end_loader()
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                   location.reload()
                }else{
                    alert_toast("an error occured", 'error');
                    end_loader()
                }
            }

        })
    }
    $(function(){
        calc_total()
        $('.min-qty').click(function(){
            qty_change('minus',$(this))
        })
        $('.plus-qty').click(function(){
            qty_change('plus',$(this))
        })
        $('#empty_cart').click(function(){
            // empty_cart()
            _conf("Are you sure to empty your cart list?",'empty_cart',[])
        })
        $('.rem_item').click(function(){
            _conf("Are you sure to remove the item in cart list?",'rem_item',[$(this).attr('data-id')])
        })
    })
</script>