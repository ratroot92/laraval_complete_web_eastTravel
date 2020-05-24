<script>
    $(document).ready(function() {
    $(".pop-up").fadeTo(2000, 500).slideUp(500, function(){
        $(".pop-up").slideUp(500);
    })});
</script>
<style>
    .pop-up{
        position: absolute;
        z-index: 10000;
        top:80px;
        right: 5px;
    }
    .alert-success{
        background-color: lightgreen;
        color:white;

    }

    .alert-danger-red{
        background-color: #ed0000;
        color:white;

    }

</style>
@if(Session::has('success'))
<div class="alert alert-success col-sm-12 col-lg-3 pop-up">
    <h4>{{Session::get('success')}}</h4>
</div>
@endif
@if(Session::has('danger'))
    <div class="alert alert-danger-red col-sm-12 col-lg-3 pop-up">
        <h4>{{Session::get('danger')}}</h4>
    </div>
@endif

{{-- 
@if(Session::get('success'))
<div class="alert alert-success col-sm-12 col-lg-3 pop-up">
    <h4>{{Session::get('success')}}</h4>
</div>
@endif



@if(Session::get('error'))
    <div class="alert alert-danger-red col-sm-12 col-lg-3 pop-up">
        <h4>{{Session::get('error')}}</h4>
    </div>
@endif


@if ($errors->any())
<div class="alert alert-danger">
    <div class="alert alert-danger-red col-sm-12 col-lg-3 pop-up">
        <h4>{{Session::get('danger')}}</h4>
    </div>
</div>
@endif --}}