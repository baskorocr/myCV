@extends('layouts.app')

@section('title')
  About Me
 @stop

@section('content')


    <div id="fh5co " class="animate-box p">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <ul class="info">
                        <li><span class="first-block">Full Name:</span><span class="second-block">Mahesa Putra Baskoro Cahyo Ramadhan</span></li>
                        <li><span class="first-block">Phone:</span><span class="second-block">+62 896 5482 5055</span></li>
                        <li><span class="first-block">Email:</span><span class="second-block">baskorocr@gmail.com</span></li>
                        <li><span class="first-block">Website:</span><span class="second-block">www.yoursite.com</span></li>
                        <li><span class="first-block">Address:</span><span class="second-block">Sleman Yogyakarta, Indonesia</span></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h2>Hello There!</h2>
                    <p>
                        My name is Mahesa Putra Baskoro Cahyo Ramadhan, I was born in Bantul December 23, 2000. I study at one of the most popular private IT campuses in Jogja, namely Amikom University Yogyakarta and now I have taken 6th semester in Informatics class 05.</p>
                    <p>I am a Junior Programmer, apart from being a Junior Programmer, I also master several penetration testing techniques in web security. I am also interested in politics, because that too has a desire to be an observer of politics and public policy.  </p>
                   
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-started" class="fh5co-bg-dark">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Hire Me!</h2>
                    <p>With the confidence and ability and work ethic that I have, I believe I can make a meaningful contribution in carrying out my responsibilities.</p>
                    <p><a href="{{route('contacts')}}" class="btn btn-default btn-lg">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>





@endsection