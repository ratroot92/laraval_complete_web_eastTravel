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
            <li class="active-bre"><a href="{{asset('websitebuilder/paymentpolicy')}}"> Cookie Policy</a></li>
            <li class="active-bre"><a href="{{asset('websitebuilder/faq')}}"> FAQs</a></li>
            <li class="active-bre"><a href="{{asset('websitebuilder/aboutus')}}"> About Us</a></li>

            <li class="page-back"><a href="{{asset('/websitebuilder')}}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>CONTACT US</h4>

            </div>
            <div class="bor">
                <form method="post" action="{{asset('websitebuilder/updateContactus1')}}">
                    {{csrf_field()}}

                    <div class="row">
                        <br>
                        <label for="textarea1" style="color:red;font-weight:bold;font-size:14px;">UPDATE CONTACT US DECRIPTION</label>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="ckeditor" name="textarea1" required="required" placeholder=''>{{$content->contact1}}</textarea>
                        </div>
                    </div>




                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="waves-effect waves-light btn-large">UPDATE CONTACT US DECRIPTION<i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>








                <form method="post" action="{{asset('websitebuilder/updateContactus2')}}">
                    {{csrf_field()}}

                    <div class="row">
                        <br>
                        <label for="textarea2" style="color:red;font-weight:bold;font-size:14px;">UPDATE CONTACT US ADDRESS</label>
                        <div class="input-field col s12">
                            <textarea id="textarea2" class="ckeditor" name="textarea2" required="required">{{$content->contact2}}</textarea>
                        </div>
                    </div>




                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="waves-effect waves-light btn-large">UPDATE CONTACT US ADDRESS <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>















                <form method="post" action="{{asset('websitebuilder/updateContactus3')}}">
                    {{csrf_field()}}

                    <div class="row">
                        <br>
                        <label for="textarea3" style="color:red;font-weight:bold;font-size:14px;">UPDATE CONTACT US CONTACT INFO</label>
                        <div class="input-field col s12">
                            <textarea id="textarea3" class="ckeditor" name="textarea3" required="required">{{$content->contact3}}</textarea>
                        </div>
                    </div>




                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="waves-effect waves-light btn-large">UPDATE CONTACT US <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>















                <form method="post" action="{{asset('websitebuilder/updateContactus4')}}">
                    {{csrf_field()}}

                    <div class="row">
                        <br>
                        <label for="textarea4" style="color:red;font-weight:bold;font-size:14px;">UPDATE CONTACT US WEBSITE INFO </label>
                        <div class="input-field col s12">
                            <textarea id="textarea4" class="ckeditor" name="textarea4" required="required">{{$content->contact4}}</textarea>
                        </div>
                    </div>




                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="waves-effect waves-light btn-large">UPDATE CONTACT US WEBSITE INFO<i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>













            </div>
        </div>
    </div>
</div>

@endsection