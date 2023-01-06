
                <form method="POST" action="{{route('master.test.store')}}" enctype="multipart/form-data">
 @csrf 
<div class="row"><div class="col-lg-6">{{createText("name","name","Name")}}
</div> <br> <div class="col-md-12"><?php createButton("btn-primary","","Submit"); ?>
</div> </form>