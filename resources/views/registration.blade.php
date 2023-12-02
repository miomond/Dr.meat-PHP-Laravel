<x-head></x-head>
<link rel="stylesheet" href="asset/css/userform.css?<?php echo time(); ?>">
</head>
<body>

<x-nav></x-nav>

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img

                    src="\asset\img\regs.jpg"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Eat Healthy Eat Fresh</h4>
                  </div>


                  <form


                  action="{{ route('register') }}" method="POST">


                    <p>Please register your info</p>
                    @csrf
                    <div class="form-outline mb-4">
                        <label for="name" class="form-label" for="form2Example22">name</label>
                        <input type="name" id="form2Example22" name="name" class="form-control"
                        value="{{ old('name') }}"

                        />

                        @if($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
					@endif
                      </div>



                    <div class="form-outline mb-4">
                        <label for="email" class="form-label" for="form2Example11">email</label>
                        <input type="email" id="form2Example11" class="form-control" name="email"

                        value="{{ old('email') }}"

                        placeholder=" email"/>
                        @if($errors->has('email'))

						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif

                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="form-label" for="form2Example22">Password</label>
                        <input type="password" name="password" id="form2Example22"

                        class="form-control" />
                        @if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
                    </div>

                    <div class="form-outline mb-4">
                        <label for="phone" class="form-label" for="form2Example22">phone</label>
                        <input name="phone" type="phone" id="form2Example22"
                                                value="{{ old('phone') }}"

                        class="form-control"  />
                        @if($errors->has('phone'))

						<span class="text-danger">{{ $errors->first('phone') }}</span>
					@endif
                      </div>
                      <div class="form-outline mb-4">
                        <label for="address" class="form-label" for="form2Example22">address</label>
                        <input name="address" type="address" id="form2Example22"
                                                value="{{ old('address') }}"

                        class="form-control"  />
                        @if($errors->has('address'))

						<span class="text-danger">{{ $errors->first('address') }}</span>
					@endif
                      </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"



                      type="submit">sign up</button>
                    </div>

                    <div class="d-flex align-items-center justify-  content-center pb-4">
                      <p class="mb-0 me-2">Do you have an account?</p><br>
                      <button  class="btn p-1 btn-outline-danger" ><a class="nav-link " href="login">Sign in</a> </button>
                    </div>

                  </form>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gr">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
