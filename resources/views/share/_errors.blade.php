@if (count($errors) > 0)
    <div class="container-fluid">
        <div class="row">
            <ul class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offest-1 col-sm-10 col-xs-offset-1 col-xs-10 text-center"
                style=" background: -webkit-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(250,170,170,0.50));
					   background: -o-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(250,170,170,0.50));
					   background: -moz-linear-gradient(0deg, rgba(250,250,250,0.20),rgba(250,170,170,0.50));
					   background: linear-gradient(0deg, rgba(250,250,250,0.20),rgba(250,170,170,0.50));
				       position:fixed;margin-top:47px;padding:15px;border-radius:10px;color:#432529;font-family:chinese2;font-size:14px;list-style-type:none;z-index:1">
                @foreach($errors->all() as $error)
                    <li><span class="glyphicon glyphicon-remove-sign">{{ $error }}</span></li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
