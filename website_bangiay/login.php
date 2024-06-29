<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
?>

<?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $insertCustomers = $cs->insert_customers($_POST);
        
    }
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        
        $login_Customers = $cs->login_customers($_POST);
        
    }
?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel"> 
        	<h3>Bạn đã có tài khoản ?</h3>
        	<p>Đăng nhập bằng biểu mẫu bên dưới.</p>
        	<?php
			if(isset($login_Customers)){
    			echo $login_Customers;
    		}
        	?>
        	<form action="" method="post">
                	<input  type="text" name="email" class="field" placeholder="Nhập Email....">
                    <input  type="password" name="password" class="field"  placeholder="Nhập Mặt Khẩu...." >
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Đăng Nhập"></div></div>
             </form>
          </div>
         <?php

         ?> 
    	<div class="register_account">
    		<h3>Đăng Ký Tài Khoản Mới</h3>
    		<?php
    		if(isset($insertCustomers)){
    			echo $insertCustomers;
    		}
    		?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Nhập Tên..." >
							</div>
							
							<div>
							   <input type="text" name="city"  placeholder="Nhập Thành phố..."  >
							</div>
							<div>
							<input type="text" name="address"  placeholder="Nhập Địa Chỉ Nhà..."  >
						</div>
		    			 </td>
		    			<td>
		           <div>
		          <input type="text" name="phone"  placeholder="Nhập SĐT..." >
		          </div>
				  <div>
								<input type="text" name="email"  placeholder="Nhập Email..."  >
							</div>
				  <div>
					<input type="text" name="password"  placeholder="Nhập Mật Khẩu..." >
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Tạo Tài Khoản"></div></div>

		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
	
 ?>
