@extends('inc.template')
@section('content')
@include('inc.navbar')

<header id="hero" class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6">
                <div class="hero-content">
                    <div class="hero-title__group">
                        <div class="hero-title">
                            <h2 class="zuri">Developer Student Club<br> Jomo Kenyatta University.</h2>
                        </div>
                        <div class="Hero--Subtitle">
                            <p class="lead">Developer Student Clubs is a
                                <first-letter>G</first-letter>
                                <third-letter>o</third-letter>
                                <second-letter>o</second-letter>
                                <first-letter>g</first-letter>
                                <forth-letter>l</forth-letter>
                                <third-letter>e</third-letter>
                                Developers program for university students to learn
                                <second-letter> mobile</second-letter>
                                and
                                <first-letter>web development skills</first-letter>
                                ,
                                <third-letter>design thinking skills</third-letter>
                                and
                                <forth-letter>leadership skills.</forth-letter>
                            </p>
                        </div>
                    </div>
                    <a class="hero-button" href="{{asset('register')}}" rel="noopener"><i class="fab fa-meetup"></i> &nbsp; Become a member</a>
                    <div class="sponsor">
                        <table>
                            <tr>
                                <td colspan="3">Event partners</td>
                            </tr>
                            <tr>
                                <td style="padding-right: 15px"><img alt="" height="20" src="https://cdn.svgporn.com/logos/google.svg" />
                                </td>
                                <td style="padding-right: 15px"><img alt="" height="20" src="https://cdn.svgporn.com/logos/microsoft.svg" />
                                </td>
                                <td style="padding-right: 15px"><img alt="" height="20" src="https://cdn.svgporn.com/logos/algolia.svg">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-5 ml-pic">
                <div class="hero-figure wow fadeInLeft">
                    <img data-src="{{asset('img/diversity-dsc.png')}}" class="img-fluid w-100" alt="Illustration of diversity in a developer community">
                </div>
            </div>
        </div>
    </div>
</header>


<section id="overview" class="section-spacer">
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-12">
                <div class="feature-card wow fadeInUp">
                    <div class="feature-card__body">
                        <i class="fas fa-rocket ghost-blue"></i>
                        <h4 class="feature-title">Concept of DSC</h4>
                        <p>The DSC program is a grassroots channel through which Google provides development
                            skills,
                            mobile and web development skills for students, towards employability.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="feature-card wow fadeInUp">
                    <div class="feature-card__body">
                        <i class="fas fa-lightbulb ghost-green"></i>
                        <h4 class="feature-title">Why DSC?</h4>
                        <p>For students to learn development skills, solve problems through technology
                            and inspire them to be world class developers and changemakers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="feature-card m-0 wow fadeInUp">
                    <div class="feature-card__body">
                        <i class="fas fa-users ghost-red"></i>
                        <h4 class="feature-title">Target audience</h4>
                        <p>DSC activities are targeted at University students and any others
                            including faculty members who want to learn development skills &amp; work to solve
                            real-life
                            problems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="opportunities" class="section-spacer section-opp">
    <div class="container">
        <header class="section-header text-center">
            <h2 class="section-title-custom wow fadeInUp">Opportunities DSCs provide students with</h2>
        </header>
        <div class="row">
            <div class="col-sm-6">
                <div class="">
                    <div class="card-body wow fadeInUp">
                        <ul>
                            <li>Grow their knowledge on developer technologies and more through peer to peer
                                workshops
                                and
                                events.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="">
                    <div class="card-body wow fadeInUp">
                        <ul>
                            <li>Gain relevant industry experience by solving problems for local organizations with
                                technology based solutions.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="">
                    <div class="card-body wow fadeInUp">
                        <ul>
                            <li>Showcase their prototypes and solutions to their local community and industry
                                leaders.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="">
                    <div class="card-body wow fadeInUp">
                        <ul>
                            <li>Getting inspiration to become world-class developers and changemakers from
                                sharing others' success stories.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="technologies" class="section-spacer">
    <div class="container">
        <header class="section-header text-center">
            <h2 class="section-title wow fadeInUp">Technologies we're excited about</h2>
            <p class="section-subtitle">Opportunities to learn & access deep technical content.</p>
            <br>
        </header>
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="feature-list-image">
                    <img data-src="img/android.png" class="img-fluid" alt="Official android logo" width="300" height="50%">
                </div>
            </div>
            <div class="col-sm-5 ml-auto wow fadeInUp">
                <div class="feature-list-wrapper">
                    <div class="content-header">
                        <h2 class="content-title">Android Development</h2>
                        <p>Every year Google developers release exciting new updates to the world's most popular
                            operating system.
                            We always have sessions to keep you updated and mastering the latest trends in modern
                            Android development.</p>
                    </div>
                    <a href="https://codelabs.developers.google.com/?cat=Android" class="hero-button" target="_blank" rel="noreferrer">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-spacer">
    <div class="container">
        <div class="row flex-column-reverse flex-sm-row align-items-cengit ter">
            <div class="col-sm-5 mr-auto wow fadeInUp">
                <div class="feature-list-wrapper">
                    <div class="content-header">
                        <h2 class="content-title">Web Development</h2>
                        <p>Learn the core foundations of a delightful web experience both for the user and
                            developer.
                            Stay up to tabs
                            with emerging and trending technologies. Get access to a guided, tutorial and hands-on
                            coding experience.
                        </p>
                    </div>
                    <a href="https://codelabs.developers.google.com/?cat=Web" class="hero-button" target="_blank" rel="noreferrer">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="feature-list-image">
                    <img data-src="img/web.png" alt="Developer building a progressive web app" class="img-fluid" height="60%" width="90%">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="hip" class="section-spacer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="feature-list-image">
                    <img data-src="img/cloud.png" class="img-fluid" alt="Illustration of data uploading to the cloud" width="90%">
                </div>
            </div>
            <div class="col-sm-5 ml-auto wow fadeInUp">
                <div class="feature-list-wrapper">
                    <div class="content-header">
                        <h2 class="content-title">Cloud Computing</h2>
                        <p>For passionate developers who want to stay relevant in a cloud first world where
                            businesses
                            demand for agility and
                            innovation and prompt rise of cloud-native applications to
                            bridges gaps between data, insight, and action.</p>
                    </div>
                    <a href="https://codelabs.developers.google.com/?cat=Cloud" class="hero-button" target="_blank" rel="noreferrer">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-spacer">
    <div class="container">
        <div class="row flex-column-reverse flex-sm-row align-items-cengit ter">
            <div class="col-sm-5 mr-auto wow fadeInUp">
                <div class="feature-list-wrapper">
                    <div class="content-header">
                        <h2 class="content-title">Machine Intelligence</h2>
                        <p>Learn how to drive user engagement and retention with intelligent apps that are able to
                            effectively serve users what they need without the fuss by providing these systems with
                            the
                            ability to
                            automatically learn and improve from experience without being explicitly programmed.
                        </p>
                    </div>
                    <a href="https://codelabs.developers.google.com/?cat=TensorFlow" class="hero-button" target="_blank" rel="noreferrer">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="feature-list-image">
                    <img data-src="img/mi.png" class="img-fluid" alt="Robotic illustration of how many different things it can do" height="60%" width="90%">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="workshops" class="section-spacer workshops-section">
    <div class="container">
        <header class="section-header text-center">
            <h2 class="section-title wow fadeInUp">Events & Workshops</h2>
            <p class="section-subtitle wow fadeInUp">Come learn, share and connect with us in person.</p>
        </header>

        <div class="workshops-type-switch">
            <ul class="nav nav-pills justify-content-center js-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#upcoming">Upcoming Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#past">Past Events</a>
                </li>
            </ul>
        </div>
        <section id="workshops" class="section-spacer workshops-section">

            <div class="tab-content">
                <div class="tab-pane active" id="upcoming" role="tabpanel" aria-labelledby="upcoming">
                    <div class="row">

                        @foreach ($events as $event)

                        <div class="col-md-4 col-12">
                            <div class="card event-card wow fadeInUp">
                                <img alt="Event poster" class="card-img-top" src="/storage/photo/{{$event->photo}}">
                                <div class="card-body">
                                    <p class="tagging intermediate float-right">{{$event->skill}}</p>
                                    <h5 class="card-title">{{$event->title}}</h5>

                                    <table>
                                        <tr>
                                            <td width="15%" class="text-blue"><i class="far fa-calendar-alt"></i></td>
                                            {{$event->date}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-red"><i class="fas fa-map-marker-alt"></i></td>
                                            <td>{{$event->location}}, Main Campus</td>

                                        </tr>
                                        <tr>
                                            <td class="text-green"><i class="far fa-clock"></i></td>
                                            <td>{{$event->time}}</td>
                                        </tr>
                                    </table>
                                    {!!Form::open(['action' => ['AttendanceController@store', 'id' => $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::submit('Attend', ['class' => 'button float-right'])}}
                                    {!!Form::close()!!}

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
</section>
</div>
</section>
<section class="section-spacer african2 vanish">
    <div class="container">

    </div>
</section>
<section id="team" class="section-spacer team-section">
    <div class="container">
        <header class="text-center section-header">
            <h2 class="section-title wow fadeInUp">Meet The Team</h2>
            <p class="section-subtitle">Passionate students and faculty staff driving the success of the program.</p>
        </header>
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane active" id="upcoming" role="tabpanel" aria-labelledby="upcoming">
                    <div class="row teams">
                        <div class="col-md-4 col-12">
                            <div class="card event-card">
                                <div class="card hovercard">

                                    <div class="avatar">
                                        <img id="bcol" src="img/grishon.jpg" alt="lead avatar">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <h5>Velda Velda</h5>
                                            <p>Lead / CS Student</p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <ul class="social-list__inline mt-10">
                                            <li>
                                                <a href="https://github.com/anniemburu" target="_blank" rel="noopener">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/" target="_blank" rel="noopener">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" target="_blank" rel="noopener">
                                                    <i class="fas fa-link"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="card event-card">
                                <div class="card hovercard">
                                    <div class="avatar">
                                        <img id="ycol" src="img/grishon.jpg" alt="lead avatar">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <h5>Teresa Abuya</h5>
                                            <p>Faculty Advisor</p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <ul class="social-list__inline mt-10">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="card event-card">
                                <div class="card hovercard">
                                    <div class="avatar">
                                        <img id="rcol" src="img/grishon.jpg" alt="lead avatar">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <h5>Grishon Ng'ang'a</h5>
                                            <p>Student / Full Stack Developer</p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <ul class="social-list__inline mt-10">
                                            <li>
                                                <a href="https://github.com/GrishonNganga" target="_blank" rel="noopener">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/in/grishon-nganga-8426b5149/" target="_blank" rel="noopener">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener">
                                                    <i class="fas fa-link"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row ">
                            <div class="col-md-4 col-12">
                                <div class="card event-card">
                                    <div class="card hovercard">
                                        <div class="avatar">
                                            <img id="bcol" src="images/assets/team/joshua.jpeg" alt="lead avatar">
                                        </div>
                                        <div class="info">
                                            <div class="title">
                                                <h5>Warukira Theuri</h5>
                                            <p>IoT Dev / GDG Co-lead</p>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <ul class="social-list__inline mt-10">
                                                    <li>
                                                    <a href="https://github.com/ProfileName" target="_blank" rel="noopener">
                                                        <i class="fab fa-github"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/in/ProfileName" target="_blank"
                                                        rel="noopener">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://google.com/ProfileName" target="_blank" rel="noopener">
                                                        <i class="fas fa-link"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="card event-card">
                                    <div class="card hovercard">
                                        <div class="avatar">
                                            <img id="ycol" src="images/assets/team/trice.jpeg" alt="lead avatar">
                                        </div>
                                        <div class="info">
                                            <div class="title">
                                                <h5>Beatrice Masila</h5>
                                                <p>GDG Lead / Software Dev</p>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <ul class="social-list__inline mt-10">
                                                <li>
                                                    <a href="https://github.com/ProfileName" target="_blank" rel="noopener">
                                                        <i class="fab fa-github"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/in/ProfileName" target="_blank"
                                                        rel="noopener">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://google.com/ProfileName" target="_blank" rel="noopener">
                                                        <i class="fas fa-link"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-15">
                                <div class="card event-card">
                                    <div class="card hovercard">
                                        <div class="avatar">
                                            <img id="rcol" src="images/assets/team/teresa.jpeg" alt="lead avatar">
                                        </div>
                                        <div class="info">
                                            <div class="title">
                                                <h5>Teresa Abuya</h5>
                                                <p>DSC Faculty Adviser</p>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <ul class="social-list__inline mt-10">
                                                    <li>
                                                    <a href="https://github.com/ProfileName" target="_blank" rel="noopener">
                                                        <i class="fab fa-github"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/in/ProfileName" target="_blank"
                                                        rel="noopener">
                                                        <i class="fab fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://google.com/ProfileName" target="_blank" rel="noopener">
                                                        <i class="fas fa-link"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-spacer african vanish">
    <div class="container">

    </div>
</section>
<section id="faqs" class="section-spacer section-faq">
    <div class="container">
        <header class="section-header text-center">
            <h2 class="section-title wow fadeInUp">Frequently Asked Questions</h2>
        </header>
        <div class="row">
            <div class="col-sm-6 wow fadeInUp">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Who can become a member?</h5>
                        <p>The club is open to any student, ranging from novice developers who are just starting,
                            to advanced developers who want to further their skills.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 wow fadeInUp">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">How frequently do events and workshops occur?</h5>
                        <p>We often have hands-on session every Thursay at SG25 from 1800hrs to 2030hrs. We also
                            hold
                            workshops and showcases & we would recommend you to join our community on <a href="https://www.meetup.com/GDG-DSC-JKUAT/">Meetup</a>
                            to get updates.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 wow fadeInUp">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">What should I carry when attending a workshop?</h5>
                        <p>We recommend you carry with you a notebook, pen and a laptop because more often than not
                            we
                            get our hands dirty with code. Most importantly, bring along a healthy dose of
                            curiosity
                            and enthusiasm.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 wow fadeInUp">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Who should I reach out to if I have any questions?</h5>
                        <p>If you have any questions or comments, please don't hesitate to contact us by clicking
                            the
                            button below. We would be happy to stay engaged via email or in person even after the
                            events.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-40 text-center">
            <a href="mailto:thedscku@gmail.com" class="hero-button wow fadeInUp">Send us an email</a>
        </div>

    </div>
</section>
@include('inc.footer')
@endsection