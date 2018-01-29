@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        @switch($msg)
			@case('danger')
			<div class="container-fluid">
				  <div class="row">
					   <ul class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offest-1 col-sm-10 col-xs-offset-1 col-xs-10 text-center" 
						   style=" background: -webkit-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(250,170,170,0.50));
								   background: -o-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(250,170,170,0.50));
								   background: -moz-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(250,170,170,0.50));
								   background: linear-gradient(0deg, rgba(250,250,250,0.20),rgba(250,170,170,0.50));
								   position:fixed;margin-top:47px;padding:15px;border-radius:10px;color:#432529;font-family:chinese2;font-size:14px;list-style-type:none;z-index:1">
						<li><span class="glyphicon glyphicon-exclamation-sign" style="color:"> {{ session()->get($msg) }}</span></li>
					   </ul>
				  </div>	  
			  </div>
			@break

			@case('warning')
			<div class="container-fluid">
				  <div class="row">
					   <ul class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offest-1 col-sm-10 col-xs-offset-1 col-xs-10 text-center" 
						   style=" background: -webkit-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(193,154,69,0.50));
								   background: -o-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(193,154,69,0.50));
								   background: -moz-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(193,154,69,0.50));
								   background: linear-gradient(0deg, rgba(250,250,250,0.20),rgba(193,154,69,0.50));
								   position:fixed;margin-top:47px;padding:15px;border-radius:10px;color:rgba(77,45,5,1.00);font-family:chinese2;font-size:14px;list-style-type:none;z-index:1">
						<li><span class="glyphicon glyphicon-minus-sign"> {{ session()->get($msg) }}</span></li>
					  </ul>
				  </div>	  
			  </div>		
			@break

			@case('success')
			<div class="container-fluid">
				  <div class="row">
					   <ul class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offest-1 col-sm-10 col-xs-offset-1 col-xs-10 text-center" 
						   style=" background: -webkit-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(60,165,203,0.5));
								   background: -o-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(60,165,203,0.5));
								   background: -moz-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(60,165,203,0.5));
								   background: linear-gradient(0deg, rgba(250,250,250,0.20),rgba(60,165,203,0.5));
								   position:fixed;margin-top:47px;padding:15px;border-radius:10px;color:rgba(11,43,57,1.00);font-family:chinese2;font-size:14px;list-style-type:none;z-index:1">
						<li><span class="glyphicon glyphicon-ok-sign"> {{ session()->get($msg) }}</span></li>
					  </ul>
				  </div>	  
			</div>
			@break
				
			@case('info')
			<div class="container-fluid">
				  <div class="row">
					   <ul class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offest-1 col-sm-10 col-xs-offset-1 col-xs-10 text-center" 
						   style=" background: -webkit-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(50,50,50,0.5));
								   background: -o-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(50,50,50,0.5));
								   background: -moz-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(50,50,50,0.5));
								   background: linear-gradient(0deg, rgba(250,250,250,0.20),rgba(50,50,50,0.5));
								   position:fixed;margin-top:47px;padding:15px;border-radius:10px;color:rgba(0,0,0,1.00);font-family:chinese2;font-size:14px;list-style-type:none;z-index:1">
						<li><span class="glyphicon glyphicon-envelope"> {{ session()->get($msg) }}</span></li>
					  </ul>
				  </div>	  
			</div>
			@break
         @endswitch
    @endif
@endforeach

