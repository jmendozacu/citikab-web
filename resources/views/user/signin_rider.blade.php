<link rel="shortcut icon" href="{{ $favicon }}">
<!-- <div class="flash-container">
    @if(Session::has('message'))
      <div class="alert text-center participant-alert " style="    background: #1fbad6 !important;color: #fff !important;" role="alert">
        <a href="#" class="alert-close text-white" data-dismiss="alert">&times;</a>
      {!! Session::get('message') !!}
      </div>
    @endif
</div> -->
@extends('templatesign')


@section('main')
<div id="app-wrapper" class="sigin-riders" ng-controller="user">
   <header class="funnel">

      <div class="bit bit--logo text--center">
      <a href="{{ url('/') }}">
         <img class="white_logo" src="{{$logo_url }}" style="width: 109px;height:50px;background-size: contain;">
      </a>
      </div>

   </header>
   <div class="stage-wrapper narrow portable-one-whole forward" id="app-body" data-reactid="10">
      <div class="soft-tiny clearfix" data-reactid="11">
         <div data-reactid="12">
            <form class="push--top-small forward" method="POST" data-reactid="13">
               <input type="hidden" name="user_type" value="Rider" id="user_type">

               <div data-reactid="15" class="email_phone-sec">
               <h4 data-reactid="14">{{trans('messages.header.signin')}}</h4>

                  <div style="-moz-box-sizing:border-box;font-family:ff-clan-web-pro, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-weight:500;font-size:12px;line-height:24px;text-align:none;color:#939393;box-sizing:border-box;margin-bottom:0;margin-top:0;" data-reactid="16"></div>
                  <div style="width:100%;" data-reactid="17">
                     <!-- react-empty: 18 -->
                     <div style="font-family:ff-clan-web-pro, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-weight:500;font-size:14px;line-height:24px;text-align:none;color:#3e3e3e;box-sizing:border-box;margin-bottom:24px;" data-reactid="19">
                        <div class="_style_CZTQ8" data-reactid="20">
                           <input class="text-input input-group-addon" id="email_phone" placeholder="{{trans('messages.user.email_mobile')}}" autocorrect="off" autocapitalize="off" name="textInputValue" data-reactid="21" type="text" value=""ng-init="invalid_email= '{{trans('messages.user.email_mobile')}}';" >
                        </div>
                        <span class="text-danger email-error"></span>
                     </div>
                  </div>
               </div>
               <h3 class="email_or_phone password-sec hide text-center" style="margin-top: 0px;margin-bottom: 20px;"></h3>
               <div data-reactid="15" class="password-sec hide">
                  <div style="-moz-box-sizing:border-box;font-family:ff-clan-web-pro, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-weight:500;font-size:12px;line-height:24px;text-align:none;color:#939393;box-sizing:border-box;margin-bottom:0;margin-top:0;" data-reactid="16"></div>
                  <div style="width:100%;" data-reactid="17">
                     <div style="font-family:ff-clan-web-pro, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-weight:500;font-size:14px;line-height:24px;text-align:none;color:#3e3e3e;box-sizing:border-box;margin-bottom:24px;" data-reactid="19">
                        <div class="_style_CZTQ8" data-reactid="20">
                           <input class="text-input input-group-addon password_btn" id="password" placeholder="{{trans('messages.user.paswrd')}}" autocorrect="off" autocapitalize="off" name="password" data-reactid="21" type="password" value="">
                        </div>
                        <span class="text-danger email-error"></span>
                     </div>
                  </div>
               </div>
               <button class="btn btn--arrow btn--full blue-signin-btn singin_rider email_phone-sec-1" data-reactid="22" data-type='email'><span class="push-small--right" data-reactid="23">{{trans('messages.user.next')}}</span><i class="fa fa-long-arrow-right icon icon_right-arrow-thin"></i></button>

            </form>
         </div>
         <div class="small push-small--bottom push-small--top" id="sign-up-link-only" data-reactid="26">
            <p class=" display--inline email_phone-sec" data-reactid="27">{{trans('messages.user.no_account')}}<a href="{{ url('signup_rider')}}">{{trans('messages.home.siginup')}}</a></p>
            <p class="pull-right forgot password-sec hide">
               <a href="{{ url('forgot_password_rider')}}" class="forgot-password">{{trans('messages.user.forgot_paswrd')}}</a>
            </p>
         </div>
         <div data-reactid="28" class="email_phone-sec">
            <h5 class="push-small--top or-text" data-reactid="29">{{trans('messages.home.or')}}</h5>
            <div style="-moz-box-sizing:border-box;font-family:ff-clan-web-pro, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-weight:500;font-size:12px;line-height:24px;text-align:none;color:#939393;box-sizing:border-box;margin-bottom:0;margin-top:0;" data-reactid="30"></div>
               <a href="{{ url('facebook_login') }}" class="btn btn--arrow push-small--bottom violet-btn" style="background-color: rgb(59, 89, 152); border-color: rgb(59, 89, 152); margin-bottom: 15px;" data-reactid="31"><span class="push-small--right" data-reactid="32">{{trans('messages.user.continue_with')}}</span><!-- <i class="fa fa-long-arrow-right icon icon_right-arrow-thin"></i> --></a>
               <a href="javascript:;"  id="google_login" class="col-md-offset-1 google_login g-signin2 btn btn--arrow push-small--bottom white-btn">
               <span >{{ trans('messages.user.continue_with_google')}}</span>
               <!-- <i class="fa fa-long-arrow-right icon icon_right-arrow-thin"></i> -->
             </a>
         </div>
      </div>
   </div>
</div>


</main>
<style>
   .logo-link
   {
      display: none;
   }
   .funnel
   {
      height: 0px !important;
   }


</style>
@stop