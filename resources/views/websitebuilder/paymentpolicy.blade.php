@extends('layouts.admin')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@section('content')
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="active-bre"><a href="{{asset('websitebuilder/terms')}}"> Terms and Consitions</a></li>
            <li class="active-bre"><a href="{{asset('websitebuilder/cancellations')}}"> Cancellations Policy</a></li>
            <li class="active-bre"><a href="{{asset('websitebuilder/contactus')}}"> Contact Us</a></li>
            <li class="active-bre"><a href="{{asset('websitebuilder/cookies')}}"> Cookie Policy</a></li>
            <li class="active-bre"><a href="{{asset('websitebuilder/paymentpolicy')}}"> Payment Policy</a></li>
            <li class="active-bre"><a href="{{asset('websitebuilder/faq')}}"> FAQs</a></li>
            <li class="active-bre"><a href="{{asset('websitebuilder/aboutus')}}"> About Us</a></li>
            <li class="page-back"><a href="{{asset('/websitebuilder')}}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4> Payment Policy</h4>

            </div>
            <div class="bor">
                <form method="post" action="{{asset('websitebuilder/updatePayment')}}">
                    {{csrf_field()}}

                    <div class="row">
                        <br>
                        <label for="textarea1" style="color:red;font-weight:bold;font-size:14px;">UPDATE PAYMENT POLICY </label>
                        <div class="input-field col s12">
                            <textarea id="content" class="ckeditor" name="content" required="required">{{$content->payment}}</textarea>
                        </div>
                    </div>




                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="waves-effect waves-light btn-large">UPDATE PAYMENT POLICY <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>













            </div>
        </div>
    </div>
</div>

@endsection