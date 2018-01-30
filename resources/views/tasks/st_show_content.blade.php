@foreach($tasks as $task)
    <div class="hm-btn row" >
        <div >
            <div class="hm-btn-sign col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <div class="hm-btn-sign-ptn" style="font-size:35px;color:white;vertical-align:center;">
                    <span class="glyphicon glyphicon-paperclip"></span>
                </div>
            </div>

            <div class="hm-btn-body col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                <div class="row">
                    <div class="hm-btn-hover1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <span  style="font-size:18px;display:block">{{$task->title}}</span>
                        <span  style="font-size:10px;display:block">截止时间：{{$task->deadline}}</span>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <a class="hm-btn-hover2" style="position:relative;top:10px;" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$task->id}}">
                            <span class="glyphicon glyphicon-list"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="collapse{{$task->id}}" class="panel-collapse collapse">
        <div class="panel-body">
            {{$task->content}}
        </div>
    </div>
@endforeach