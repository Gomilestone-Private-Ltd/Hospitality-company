<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-12 text-center p-0">
            <div class="our-product setting-box" style="border-right: none">
                <h2 class="product-heading setting-heading">Account settings
                </h2>
                @if (Session::has('success'))
                    <p class="text-success">{{Session::get('success')}}</p>
                @endif
                @if (Session::has('error'))
                    <p class="text-danger">{{Session::get('error')}}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="account-main">
        <h1 class="Personal-text">Personal details</h1>
        
        <div class="row">
            <div class="col-md-5">
                <div class="form-box">
                    <form action="{{route('customer.update.profile',[Auth::user()->slug ??''])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" id="before-otp">
                            <label class="name-color" for="usr">Full Name*</label>
                            <input type="text" name="fullname" class="form-control login-input" id="usr" value="{{Auth::user()->name ??''}}" required>
                            @if ($errors->has('fullname'))
                                <p class="text-danger">{{ $errors->first('fullname') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="name-color" for="pwd">Mobile*</label>
                            <input type="number" name="mobile"  class="form-control login-input" value="{{Auth::user()->contact ??''}}" id="pwd">
                            @if ($errors->has('mobile'))
                                <p class="text-danger">{{ $errors->first('mobile') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="name-color" for="pwd">Email - Id </label>
                            <input type="email" name="email" value="{{Auth::user()->email ??''}}" class="form-control login-input" id="">
                            @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="submit-button">
                            <div class="line"></div>
                            <button class="otp-button update" type="submit">Update</button>
                        </div>
                        </div>
                            
                    </form>

            </div>
        </div>
    </div>
</div>