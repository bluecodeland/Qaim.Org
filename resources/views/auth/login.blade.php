@extends('layouts.app')
@section('content')
<div id="container" class="container h-100 hideme">
    <div id="monster"></div>
    <div class="row h-100 justify-content-center align-items-center">
     <div class=" d-none d-sm-block col-lg-10  justify-content-center ">
          <div class="row "> 
            <div class="col-lg-5 p-0 p3-0 round-right shadow-lg loginbg w hideme ">
                <div class="col-12 p-5 text-right">
                    <h2 class="w" style="color:red;">سلام</h2>
                    <h3>لطفا وارد شوید.</h3>
                </div>
                    <div class="col-12">

                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="">
                                    @csrf
                                    <div class="col-12 shadow-lg pt-5 pb-5 mb-2 round border">

                                            <label for="email" class="float-right">{{ __('آدرس ایمیل') }}</label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <label for="password" class="float-right">{{ __('رمز عبور') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                <div class="col-12 text-right mt-0">
                                    <a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('فراموشی رمز عبور') }}</a>
                                </div>
                                    <div class="clear"></div>
                                    <div class="col-12 text-center mb-5 ">
                                            <button type="submit" class="btn btn-lg largbtn shadow-lg">
                                                    {{ __('ورود') }}
                                                </button>
                

                                    </div>
                                    
                                        
                                </form>
                    </div>
            
            
                
            </div>
            <div class="col-lg-7 logindiv round-left shadow-lg justify-content-center align-items-center  pt-5 pb-5 loginbg">
                <div class="col-12 h-100 justify-content-center align-items-center" >
                {{-- <img src="/uploads/login-bg.jpg" alt="" srcset="" class="img-fluid"> --}}
                </div>
            </div>
            </div>

</div> 
     </div>
    </div>
</div>     
     
     
     
     
     
     
     
     
     
@endsection
     
     
     
     
     
     
     
     
     
        {{--     </div>               
</div>

<hr>

<div class="col d-none d-sm-block">
    <span class="vcard">
        de-none d-sm-block
    </span>
</div>
<div class="col d-none d-xl-block">
    <div class="d-none d-md-block">
                …
    </div>
    <div class="d-none d-sm-block">
                …
    </div>
</div> --}}
{{-- <div class="col-md-8 col-sm-12">
        <div class="card">
                <div class="card-header text-right p3-5">{{ __('ورود به صفحه کاربری') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    

                                    <label class="form-check-label" for="remember">
                                        {{ __('مرا به خاطر داشته باش') }}
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn  p3-3">
                                    {{ __('ورود') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('فراموشی رمز عبور') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>

<div class="col-md-4 p3-5 rounded text-right align-items-center ">
    <p class="font-weight-bold">لطفا از طریق فرم ورود نام کاربری و رمز عبور خود را وارد کرده سپس گزینه ورود را کلیک کنید. در صورت فراموشی رمز عبور می توانید بر روی گزینه فراموشی کلیک کنید تا رمز عبور جدید برای شما از طریق ایمیل ارسال شود.</p>
</div>
</div> --}}

