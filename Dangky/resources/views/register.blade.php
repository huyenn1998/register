@extends ("main") 

@section('title')

Trang Đăng Ký
@endsection

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<div class="container">
	<div class="main">
	
<form action="http://nextfarmapi.hosco.com.vn/api/auth/signup" method="POST" id="form-register">
<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
{{ csrf_field() }}


	 <legend>Đăng Ký</legend>
	<div style="register_output"></div>


	<input type="text" name="tenant_code" id="tenant_code" placeholder="Tenant_code" class="form-control" /> 
	<input type="text" name="username" id="username" placeholder="Username" class="form-control" /> 
	<span id="availability"></span>
	<input type="password" name="password" id="password" placeholder="Password" class="form-control"/> 
    <input type="password" name="password_confirmation" id ="password_confirmation" placeholder="Confirm Password" class="form-control" /> 
	<input type="Email" name="email" id="email" placeholder="Email(*)" class="form-control" />  
	<input type="text" name="name" id="name" placeholder="Name(*)" class="form-control" /> 
	<input type="text" name="tel" id="tel" placeholder="Tel"  class="form-control" /> 
    <input type="text" name="address" id="address" placeholder="Address" class="form-control" /> 
    <input type="text" name="description" id="description" placeholder="Description" class="form-control" />
	<input type="text" name="avatar" id="avatar" placeholder="avatar" class="form-control" />  <br> 
	<button class="btn btn-lg btn-primary btn-block" id="button" name='button' >Đăng Ký</button>
   
  
</form>
</div>
</div>

<script type="text/javascript">
	$("#form-register").validate({
		rules:{
			tenant_code:{
				required:true,
				
			},
			username:{
				required:true,
				minlength:4
			},
			password:{
				required:true,
				minlength:6
			},
			password_confirmation:{
				required:true,
				equalTo:"#password"
			},
			email:{
				required:true,
				email:true,
			},
			
			name:{
				required:true,
			}

		},
		messages:{
			username:{


			required:"Vui lòng nhập Username",
			minlength:"Phải nhập 4 ký tự trở lên"
		},
		password:{
			required:"Vui lòng nhập mật khẩu",
			minlength:"Nhập 6 ký tự trở lên",
		},
		password_confirmation:{
			equalTo:"Mật khẩu xác nhận không đúng"
		},
		email:{
			required:"Vui lòng nhập Email",
			email:"Không đúng định dạng Email"
		},
		name:{
			required:"Vui lòng nhập số họ tên"
		},
		tenantcode:{
			required:"Vui lòng nhập mã khách hàng"
		}
	
	}
	})

</script>

<div id ="result"></div>



<script type="text/javascript">
   $(document).ready(function()
   { 
      
      var submit = $("button[type='submit']");

     
      submit.click(function()
      {
	
		var username = $('#username').val();
		var password = $('#password').val();
		var password_confirmation = $('#password_confirmation').val();
		var email = $('#email').val();
		var tel = $('#tel').val();
		var address = $('#address').val();
		var description = $('#description').val();
		var name = $('#name').val();
		var tenant_code = $('#tenant_code').val();
		var avatar = $('#avatar').val();

 
    
 
 
 

		$.ajax({
			url: 'http://localhost/Dangky/resources/views/register1.php',
			type:'POST',
			dataType: 'json',
			data: {
				username: username,
				password: password,
				email: email,
				tel: tel,
				address: address, 
				description: description,
				name: name,
				tenant_code: tenant_code,
				avatar: avatar,
			},
			success: function(result){
				var divElement = $('#divOutput');

				if(data.UsernameInUse)
				{
					
				}
			}
		});
	});
</script>


@endsection
