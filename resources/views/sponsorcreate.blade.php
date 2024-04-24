@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="">
           
        </section>
        <!-- common banner -->

        <!-- contact us -->
        <section class="contact-us" style="background-color: #f8f8f8;">
        @if($errors->any())
                    <div class="alert alert-danger" style="margin-top:50px;padding:30px;">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left:50px;margin-right:50px;padding:30px;">
                    <strong>Error: </strong> {{ Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                            
                @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left:50px;margin-right:50px;padding:30px;">
                    <strong>Success: </strong> {{ Session::get('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
        
            <div class="pattern-layer" style="background-image: url('frontendassets/assets/images/shape/shape-02.png')"></div>
            <form enctype="multipart/form-data" method="post" action="{{ url('sponsorcreate') }}">@csrf
            <div class="container">
                <div class="row">
 
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Become a Sponsor</h5>
                        </div>
                    </div>
                  
                    <div class="col-xl-6"> 
                            <h5><label>Full Name</label></h5>               
                            <input type="text" name="sponsors_name" class="contuct-us-input" placeholder="Your Name" required>                  
                    </div>
                    <div class="col-xl-6">  
                            <h5><label>Email</label></h5>               
                            <input type="email" name="sponsors_email" class="contuct-us-input" placeholder="Your Email" required>                     
                    </div>
                    <div class="col-md-12">
                            <h5><label>Profession</label></h5>
                            <input type="text" name="sponsors_profession" class="contuct-us-input" placeholder="Profession" required>                       
                    </div>
                    <div class="col-md-12"> 
                            <h5><label>Type</label></h5> 
                            <select name="sponsors_type" class="contuct-us-input" required 
                            style="background-color:#fff;">
                              <option value="Select Sponsor Type"></option>
                              <option value="Outreach">Outreach</option>
                              <option value="Surgery Treatment">Surgery Treatment</option>
                              <option value="Medical Supplies">Medical Supplies</option>
                            </select> 
                    </div>
                    <div class="col-md-12"> 
                            <h5><label>Period</label></h5> 
                            <select name="sponsors_period" class="contuct-us-input" required>
                              <option value="Select Sponsor Period"></option>
                              <option value="Monthly">Monthly</option>
                              <option value="Yearly">Yearly</option>
                              <option value="One Off">One Off</option>
                              <option value="Every Time">Every Time</option>
                            </select> 
                    </div>
                    <div class="col-md-12">
                            <h5><label>Amount</label></h5>
                            <input type="text" name="sponsors_amount" class="contuct-us-input" placeholder="Amount" required>                       
                    </div>
                    <div class="col-md-12">
                            <h5><label>Password</label></h5>
                            <input type="password" name="sponsors_password" class="contuct-us-input" placeholder="Password" required>                       
                    </div>
                    <div class="col-md-12">
                            <h5><label>Confirm Password</label></h5>
                            <input type="password" name="sponsors_cpassword" class="contuct-us-input" placeholder="Enter Password Again" required>                       
                    </div>
                    
                    <div class="col-xl-12">
                        <div class="contact-us-btn">                   
                            <button type="submit" class="btn-1">Submit <span></span></button> 
                        </div>
                    </div>
                  
                </div>
            </div>
            </form>
        </section>



    @endsection