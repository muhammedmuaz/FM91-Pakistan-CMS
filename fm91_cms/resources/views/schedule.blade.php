
<x-header/>

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->

                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="col-xl-12 col-md-12 m-b-30 schedule_box">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active show" id="Monday-tab" data-toggle="tab" href="#Monday" role="tab" aria-controls="Monday" aria-selected="tr">Monday</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="Tuesday-tab" data-toggle="tab" name="Hello" href="#Tuesday" role="tab" aria-controls="Tuesday" aria-selected="false">Tuesday</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Wednesday-tab" data-toggle="tab" href="#Wednesday" role="tab" aria-controls="Wednesday" aria-selected="false">Wednesday</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Thursday-tab" data-toggle="tab" href="#Thursday" role="tab" aria-controls="Thursday" aria-selected="false">Thursday</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Friday-tab" data-toggle="tab" href="#Friday" role="tab" aria-controls="Friday" aria-selected="false">Friday</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Saturday-tab" data-toggle="tab" href="#Saturday" role="tab" aria-controls="Saturday" aria-selected="false">Saturday</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="Sunday-tab" data-toggle="tab" href="#Sunday" role="tab" aria-controls="Sunday" aria-selected="false">Sunday
                                    </a>
                                </li>
                            </ul>

                                <!-- Monday Shows -->
                            <div class="tab-content" id="myTabContent">



                                <div class="tab-pane fade active show" id="Monday" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="cards-list row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                            <a href="schedule-add" class="btn read_bore_but" id="" >Add</a>
                                            </div>

                                            @foreach($day1 as $day)
                                                <div class=" col-lg-4 col-md-6 col-sm-12">
                                                    <div class="card 1">
                                                    <div class='card_image'> <img src="storage/images/{{$day->showPicture}}" /> </div>
                                                    <div class="card_title title-white">

                                                    <h4 style=" align-self: center; font-size: 18px;">Show Name: {{$day->showname}}</h4>
                                                    <h5 style=" align-self: center; font-size: 18px;">Rj Name: {{$day->authorname}}</h5>
                                                    <h6 style="align-self: center; font-size: 18px;">Show Time: {{$day->starttime}}</h6>
                                                    


                                                    </div>
                                                    <div class="card_hover_btns">
                                                    <a href="/EditSchedule/{{$day->id}}/{{1}}" class="btn card_hover_but" id="" >Edit</a>
                                                    <a href="/deleteSchedule/{{$day->id}}/{{1}}" class="btn card_hover_but" id="" >Delete</a>

                                                    </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                                
                                        <div class="col-lg-12">

                                            <a href="#"  class="btn read_bore_but" id="loadMore">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                


                                <!-- Tuesday Shows -->


                                <div class="tab-pane fade show" id="Tuesday" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="cards-list row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                            <a href="schedule-add" class="btn read_bore_but" id="" >Add</a>
                                            </div>

                                            @foreach($day2 as $day)
                                                <div class=" col-lg-4 col-md-6 col-sm-12">
                                                    <div class="card 1">
                                                    <div class='card_image'> <img src="storage/images/{{$day->showPicture}}" /> </div>
                                                    <div class="card_title title-white">

                                                    <h4 style=" align-self: center; font-size: 18px;">Show Name: {{$day->showname}}</h4>
                                                    <h5 style=" align-self: center; font-size: 18px;">Rj Name: {{$day->authorname}}</h5>
                                                    <h6 style="align-self: center; font-size: 18px;">Show Time: {{$day->starttime}}</h6>
                                                    


                                                    </div>
                                                    <div class="card_hover_btns">
                                                    <a href="/EditSchedule/{{$day->id}}/{{2}}" class="btn card_hover_but" id="" >Edit</a>
                                                    <a href="/deleteSchedule/{{$day->id}}/{{2}}" class="btn card_hover_but" id="" >Delete</a>

                                                    </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                                
                                        <div class="col-lg-12">

                                            <a href="#"  class="btn read_bore_but" id="loadMore">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                


                                <!-- Wednesday Shows -->

                                <div class="tab-pane fade show" id="Wednesday" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="cards-list row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                            <a href="schedule-add" class="btn read_bore_but" id="" >Add</a>
                                            </div>

                                            @foreach($day3 as $day)
                                                <div class=" col-lg-4 col-md-6 col-sm-12">
                                                    <div class="card 1">
                                                    <div class='card_image'> <img src="storage/images/{{$day->showPicture}}" /> </div>
                                                    <div class="card_title title-white">

                                                    <h4 style=" align-self: center; font-size: 18px;">Show Name: {{$day->showname}}</h4>
                                                    <h5 style=" align-self: center; font-size: 18px;">Rj Name: {{$day->authorname}}</h5>
                                                    <h6 style="align-self: center; font-size: 18px;">Show Time: {{$day->starttime}}</h6>
                                                    


                                                    </div>
                                                    <div class="card_hover_btns">
                                                    <a href="/EditSchedule/{{$day->id}}/{{3}}" class="btn card_hover_but" id="" >Edit</a>
                                                    <a href="/deleteSchedule/{{$day->id}}/{{3}}" class="btn card_hover_but" id="" >Delete</a>

                                                    </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                                
                                        <div class="col-lg-12">

                                            <a href="#"  class="btn read_bore_but" id="loadMore">Read More</a>
                                        </div>
                                    </div>
                                </div> 




                                <!-- Thursday Shows -->

                                <div class="tab-pane fade" id="Thursday" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="cards-list row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                            <a href="schedule-add" class="btn read_bore_but" id="" >Add</a>
                                            </div>

                                            @foreach($day4 as $day)
                                                <div class=" col-lg-4 col-md-6 col-sm-12">
                                                    <div class="card 1">
                                                    <div class='card_image'> <img src="storage/images/{{$day->showPicture}}" /> </div>
                                                    <div class="card_title title-white">

                                                    <h4 style=" align-self: center; font-size: 18px;">Show Name: {{$day->showname}}</h4>
                                                    <h5 style=" align-self: center; font-size: 18px;">Rj Name: {{$day->authorname}}</h5>
                                                    <h6 style="align-self: center; font-size: 18px;">Show Time: {{$day->starttime}}</h6>
                                                    


                                                    </div>
                                                    <div class="card_hover_btns">
                                                    <a href="/EditSchedule/{{$day->id}}/{{4}}" class="btn card_hover_but" id="" >Edit</a>
                                                    <a href="/deleteSchedule/{{$day->id}}/{{4}}" class="btn card_hover_but" id="" >Delete</a>

                                                    </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                                
                                        <div class="col-lg-12">

                                            <a href="#"  class="btn read_bore_but" id="loadMore">Read More</a>
                                        </div>
                                    </div>
                                </div> 




                                 <!-- Friday Shows -->

                                <div class="tab-pane fade" id="Friday" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="cards-list row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                            <a href="schedule-add" class="btn read_bore_but" id="" >Add</a>
                                            </div>

                                            @foreach($day5 as $day)
                                                <div class=" col-lg-4 col-md-6 col-sm-12">
                                                    <div class="card 1">
                                                    <div class='card_image'> <img src="storage/images/{{$day->showPicture}}" /> </div>
                                                    <div class="card_title title-white">

                                                    <h4 style=" align-self: center; font-size: 18px;">Show Name: {{$day->showname}}</h4>
                                                    <h5 style=" align-self: center; font-size: 18px;">Rj Name: {{$day->authorname}}</h5>
                                                    <h6 style="align-self: center; font-size: 18px;">Show Time: {{$day->starttime}}</h6>
                                                    


                                                    </div>
                                                    <div class="card_hover_btns">
                                                    <a href="/EditSchedule/{{$day->id}}/{{5}}" class="btn card_hover_but" id="" >Edit</a>
                                                    <a href="/deleteSchedule/{{$day->id}}/{{5}}" class="btn card_hover_but" id="" >Delete</a>

                                                    </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                                
                                        <div class="col-lg-12">

                                            <a href="#"  class="btn read_bore_but" id="loadMore">Read More</a>
                                        </div>
                                    </div>
                                </div> 

                                 <!-- Saturday Shows -->

                        <div class="tab-pane fade" id="Saturday" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="cards-list row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                            <a href="schedule-add" class="btn read_bore_but" id="" >Add</a>
                                            </div>

                                            @foreach($day6 as $day)
                                                <div class=" col-lg-4 col-md-6 col-sm-12">
                                                    <div class="card 1">
                                                    <div class='card_image'> <img src="storage/images/{{$day->showPicture}}" /> </div>
                                                    <div class="card_title title-white">

                                                    <h4 style=" align-self: center; font-size: 18px;">Show Name: {{$day->showname}}</h4>
                                                    <h5 style=" align-self: center; font-size: 18px;">Rj Name: {{$day->authorname}}</h5>
                                                    <h6 style="align-self: center; font-size: 18px;">Show Time: {{$day->starttime}}</h6>
                                                    


                                                    </div>
                                                    <div class="card_hover_btns">
                                                    <a href="/EditSchedule/{{$day->id}}/{{6}}" class="btn card_hover_but" id="" >Edit</a>
                                                    <a href="/deleteSchedule/{{$day->id}}/{{6}}" class="btn card_hover_but" id="" >Delete</a>

                                                    </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                                
                                        <div class="col-lg-12">

                                            <a href="#"  class="btn read_bore_but" id="loadMore">Read More</a>
                                        </div>
                                    </div>
                                </div> 

                                  <!-- Sunday Shows -->

                                    <div class="tab-pane fade" id="Sunday" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="cards-list row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                            <a href="schedule-add" class="btn read_bore_but" id="" >Add</a>
                                            </div>

                                            @foreach($day7 as $day)
                                                <div class=" col-lg-4 col-md-6 col-sm-12">
                                                    <div class="card 1">
                                                    <div class='card_image'> <img src="storage/images/{{$day->showPicture}}" /> </div>
                                                    <div class="card_title title-white">

                                                    <h4 style=" align-self: center; font-size: 18px;">Show Name: {{$day->showname}}</h4>
                                                    <h5 style=" align-self: center; font-size: 18px;">Rj Name: {{$day->authorname}}</h5>
                                                    <h6 style="align-self: center; font-size: 18px;">Show Time: {{$day->starttime}}</h6>
                                                    


                                                    </div>
                                                    <div class="card_hover_btns">
                                                    <a href="/EditSchedule/{{$day->id}}/{{7}}" class="btn card_hover_but" id="" >Edit</a>
                                                    <a href="/deleteSchedule/{{$day->id}}/{{7}}" class="btn card_hover_but" id="" >Delete</a>

                                                    </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                                
                                        <div class="col-lg-12">

                                            <a href="#"  class="btn read_bore_but" id="loadMore">Read More</a>
                                        </div>
                                    </div>
                                </div> 
    </div>
</div>
<!-- [ Main Content ] end -->
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Warning Section Ends -->


<!-- Footer -->
<x-footer/>
