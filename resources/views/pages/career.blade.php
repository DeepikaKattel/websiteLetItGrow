@extends('layouts.common')
@section('content')

    <div class="imgContainer col-lg-12 col-md-12 col-sm-12 pt-5 pb-5">
        <div class="breadCrumbCenter column">
            <p class="commontxt">CAREER</p>
            <p  class="commontxtsmall">Steer your career in the right direction</p>
            <button class="breadCrumbBtn radius">
                <a href="/"><i class="fas fa-home"></i>  Home</a>
            </button>
            <button class="breadCrumbBtn radius">
                <a href=""><i class="fas fa-user"></i>  Career</a>
            </button>
        </div>
    </div>

    <div class='space1'></div>

    <section class="inner-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="jobDetailsContainer">
                        <div class="commonTitle" style="text-align: start"><h2>Build your career with us.</h2></div>
                        <p class="joinTeamtxt">Join our amazing team.</p>
                        {{-- <p class="openingTxt text-right"><i class="fas fa-arrow-down"></i> Current Job Openings Details.</p> --}}


                        <div class="jobDescriptionBox mt-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            <div class="row mx-auto vertical-align-center">
                                <h5>Sales Representative</h5>
                                <a data-toggle="collapse" href="#details" aria-expanded="false" aria-controls="details">
                                    <i  class="fas fa-eye"></i>
                                </a>

                                <div class="collapse" id="details">
                                    <div class="card card-body">
                                        <p class="jobTitle"><i class="fas fa-user-friends mr-2"></i>Department</p>
                                        <p class="jobTitleName">Sales</p>
                                        <p class="jobTitle"><i class="fas fa-business-time mr-2"></i>Designation</p>
                                        <p class="jobTitleName mr-10">Sales Representative</p>
                                        <p class="jobTitle"><i class="fas fa-book mr-2"></i>Description</p>
                                        <p class="desTopic mr-10">Responsibilities</p>
                                        <ul class="lists">
                                            <li>Identify potential clients and sell products/services with smart sales presentations. </li>
                                            <li>Achieve targeted sales and outcomes within a defined time frame. </li>
                                            <li>Establish and maintain positive client and business relationships.</li>
                                            <li>Work and coordinate with team members for the maximization of sales.</li>
                                            <li>Analyze the markets’ potential, track sales, and status reports. </li>
                                            <li>Report management with documentation and relevant updates on customer needs, problems, interests, competitive activities, and potential for new products and services.</li>
                                            <li>Monitor competition and keep track of best practices and promotional trends. </li>
                                            <li>Improve continuously through feedback. Requirements: • Bachelor/ Ongoing degree in business, marketing, economics or related field. </li>
                                        </ul>
                                        <p class="desTopic mr-10">Requirements</p>
                                        <ul class="lists">
                                            <li>Bachelor/ Ongoing degree in business, marketing, economics or related field.</li>
                                            <li>Highly motivated and target driven personality.</li>
                                            <li>Excellent interpersonal skills, including the ability to quickly build rapport with both customers and suppliers. Leadership skills preferred.</li>
                                            <li>ime management and organizational skills.</li>
                                            <li>Knowledge of Proposal writing is a plus</li>
                                        </ul>
                                        <p class="jobTitle"><i class="fas fa-user-tie mr-2"></i>Number of Vacancies</p>
                                        <p class="jobTitleName mr-10">2</p>

                                        <button type="button" class="btnCareerSubmit text-center" onclick="openForm()">Apply for this position</button>
                                    </div>
                                </div>
                            </div>
                        </div>

{{--                        <div class="jobDescriptionBox mt-4 wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">--}}
{{--                            <div class="row mx-auto vertical-align-center">--}}
{{--                                <h5>Flutter Developer</h5>--}}
{{--                                <a data-toggle="collapse" href="#details1" aria-expanded="false" aria-controls="details1">--}}
{{--                                    <i  class="fas fa-eye"></i>--}}
{{--                                </a>--}}

{{--                                <div class="collapse" id="details1">--}}
{{--                                    <div class="card card-body">--}}
{{--                                        <p class="jobTitle"><i class="fas fa-user-friends mr-2"></i>Department</p>--}}
{{--                                        <p class="jobTitleName">Sales</p>--}}
{{--                                        <p class="jobTitle"><i class="fas fa-business-time mr-2"></i>Designation</p>--}}
{{--                                        <p class="jobTitleName mr-10">Sales Representative</p>--}}
{{--                                        <p class="jobTitle"><i class="fas fa-book mr-2"></i>Description</p>--}}
{{--                                        <p class="desTopic mr-10">Responsibilities</p>--}}
{{--                                        <ul>--}}
{{--                                            <li>Identify potential clients and sell products/services with smart sales presentations. </li>--}}
{{--                                            <li>Achieve targeted sales and outcomes within a defined time frame. </li>--}}
{{--                                            <li>Establish and maintain positive client and business relationships.</li>--}}
{{--                                            <li>Work and coordinate with team members for the maximization of sales.</li>--}}
{{--                                            <li>Analyze the markets’ potential, track sales, and status reports. </li>--}}
{{--                                            <li>Report management with documentation and relevant updates on customer needs, problems, interests, competitive activities, and potential for new products and services.</li>--}}
{{--                                            <li>Monitor competition and keep track of best practices and promotional trends. </li>--}}
{{--                                            <li>Improve continuously through feedback. Requirements: • Bachelor/ Ongoing degree in business, marketing, economics or related field. </li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="desTopic mr-10">Requirements</p>--}}
{{--                                        <ul>--}}
{{--                                            <li>Bachelor/ Ongoing degree in business, marketing, economics or related field.</li>--}}
{{--                                            <li>Highly motivated and target driven personality.</li>--}}
{{--                                            <li>Excellent interpersonal skills, including the ability to quickly build rapport with both customers and suppliers. Leadership skills preferred.</li>--}}
{{--                                            <li>ime management and organizational skills.</li>--}}
{{--                                            <li>Knowledge of Proposal writing is a plus</li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="jobTitle"><i class="fas fa-user-tie mr-2"></i>Number of Vacancies</p>--}}
{{--                                        <p class="jobTitleName mr-10">2</p>--}}

{{--                                        <button type="button" class="btnCareerSubmit text-center" onclick="openForm()">Apply for this position</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="page foldtl wow slideInRight" data-wow-duration="2s" data-wow-delay="0.1s">
                        <h4>Job Openings</h4>
                        <ul>
                            <li>Sales Representative</li>
                            <li>Flutter Developer</li>
                            <li>React Developer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class='space1'></div>
    <div class='space1'></div>

    <div class="form-popup" id="careerForm">
        <form action="#" class="form-container">
            <h5>Fill Up the Form</h5>
            <label class="careerFormLabel"><b>Name</b></label>
            <input type="text" placeholder="Enter Your Name" name="name" required>

            <label class="careerFormLabel" for="name"><b>Email</b></label>
            <input type="text" placeholder="Enter Your Email" name="email" required>

            <label class="careerFormLabel" for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Your Address" name="address" required>

            <label class="careerFormLabel" for="number"><b>Phone Number</b></label>
            <input type="text" placeholder="Enter Your Phone Number" name="number" required>

            <label class="careerFormLabel" for="cv"><b>Upload CV</b></label>
            <input type="file" name="cv" id="cv" required>
            <br><br>

            <button type="submit" class="finalSubmit">Submit</button>
            <button type="button" class="btnCareerSubmit cancel" onclick="closeForm()">Close</button>
        </form>
    </div>

@endsection
