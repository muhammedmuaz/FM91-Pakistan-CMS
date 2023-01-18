<x-header/>  
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    
                    <!-- [ breadcrumb ] end -->
                    
                    <!-- [ Main Content ] start -->
                    @if($errors->any())
                    <div class='alert alert-danger' role='alert'>
                    @foreach ($errors->all() as $err)
                    <li>{{$err}}</li>
                    @endforeach
                    </div>
                @endif 
                    <div class="row">
                        <div class="col-lg-12 ">
                            <h2 class="main_heading">Add Schedule</h2>
                            <div class="main-body">
                                <div class="page-wrapper">
                    <div class="form-group">
                    
                    @if(empty($day))
                            <form id="" class="my_forms row" action="/AddSchedule" method="POST" enctype="multipart/form-data">
                            @else
                            <form id="" class="my_forms row" action="/UpdateSchedule/{{$day->id}}/{{1}}" method="POST" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                        <h5>Week Day</h5> 
                                        <select class="form-control" name="Week_Day" required>
                                        @if(empty($day))
                                        <option value='1' selected style="color: black;">Monday</option>
                                        <option value='2' style="color: black;">Tuesday</option>
                                        <option value='3' style="color: black;">Wednesday</option>
                                        <option value='4' style="color: black;">Thursday</option>
                                        <option value='5' style="color: black;">Friday</option>
                                        <option value='6' style="color: black;">Saturday</option>
                                        <option value='7' style="color: black;">Sunday</option>
                                        @else
                                        @if($week == '1')
                                        <option value='1' selected style="color: black;">Monday</option>
                                        @else 
                                        <option value='1'  style="color: black;">Monday</option>
                                        @endif

                                        @if($week == '2')
                                        <option value='2' selected style="color: black;">Tuesday</option>
                                        @else
                                        <option value='2' style="color: black;">Tuesday</option>
                                        @endif

                                        @if($week == '3')
                                        <option value='3' selected style="color: black;">Wednesday</option>
                                        @else 
                                        <option value='3' style="color: black;">Wednesday</option>
                                        @endif

                                        @if($week == '4')
                                        <option value='4' selected style="color: black;">Thursday</option>
                                        @else 
                                        <option value='4' style="color: black;">Thursday</option>
                                        @endif

                                        @if($week == '5')
                                        <option value='5' selected style="color: black;">Friday</option>
                                        @else
                                        <option value='5' style="color: black;">Friday</option>
                                        @endif

                                        @if($week == '6')
                                        <option value='6' selected style="color: black;">Saturday</option>
                                        @else
                                        <option value='6' style="color: black;">Saturday</option>
                                        @endif

                                        @if($week == '7')
                                        <option value='7' selected style="color: black;">Sunday</option>
                                        @else
                                        <option value='7' style="color: black;">Sunday</option>
                                        @endif
                                        @endif
                                        </select>
                                    </div>   

                                    <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                        <h5>Show Name</h5>
                                        @if(empty($day))
                                        <input type="Name" class="form-control" name="showname" placeholder="Show Name" required>
                                        @else
                                        <input type="Name" class="form-control" name="showname" placeholder="Show Name" value="{{$day->showname}}" required>
                                         @endif
                                        
                                    </div>
                                    <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                        <h5>RJ Name</h5>
                                        @if(empty($day))
                                        <input type="Name" class="form-control" name="authorname" placeholder="RJ Name" required>
                                        @else
                                        <input type="Name" class="form-control" name="authorname" placeholder="RJ Name" value="{{$day->authorname}}" required>
                                         @endif
                                        
                                    </div>
                                    <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                        <h5>Details</h5>
                                        @if(empty($day))
                                        <textarea class="form-control" id="" name="details" cols="30" rows="10" placeholder="Details" required></textarea>
                                        @else
                                        <textarea class="form-control" id="" name="details" cols="30" rows="10" placeholder="Details" required>{{$day->details}}</textarea>
                                         @endif
                                    </div>
                                    <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                        <h5>Show Picture</h5>
                                        @if(empty($day))
                                        <input class="form-control" type="file" id="formFile" name="showpic" required>
                                        @else
                                        <input class="form-control" type="file" id="formFile" name="showpic" value="" required>
                                         @endif
                                      </div>

                                  
                                    <div class="input-group mb-3 col-lg-6 col-md-12 col-sm-12">
                                        <h5> Start Time</h5>
                                        @if(empty($day))
                                        <input type="time"  class="form-control" name="starttime" value="1:00"required />
                                        @else
                                        <input type="time"  class="form-control" name="starttime" value="{{$day->starttime}}"required />
                                         @endif
                                    </div>
                                    <div class="input-group mb-3 col-lg-6 col-md-12 col-sm-12">
                                        <h5>Close Time </h5>
                                        @if(empty($day))
                                        <input type="time"  class="form-control" name="endtime" required />
                                        @else
                                        <input type="time"  class="form-control" name="endtime" value="{{$day->closetime}}"required />
                                         @endif
                                        
                                    </div>
                                    <div class="input-group mt-3 mb-3 col-lg-12 col-md-12 col-sm-12">
                                                            
                                    <button class="btn btn-primary  golbal_but" name="submit">Submit</button>
                                    </div>
                                    </form>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Footer -->
<x-footer/>
