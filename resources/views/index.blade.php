<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{ $getSeoData[0]->meta_title }}</title>
<meta name="description" content="{{ $getSeoData[0]->meta_description }}">
<meta name="og:description" content="{{ $getSeoData[0]->meta_description }}">
<meta name="keywords" content="{{ $getSeoData[0]->meta_keyword }}">
<meta name="og:keywords" content="{{ $getSeoData[0]->meta_keyword }}">
<link rel="shortcut icon" href="{{ url('public/images/favicon/'.@$getFaviconData[0]->image) }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link rel="stylesheet" href="{{ url('public/frontend/css/animate.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/style.css') }}"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <img src="{{ url('public/images/logo/'.@$getLogoData[0]->image_two) }}" alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1">About</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Features</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="3">Team</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Testimonials</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="5">Faq</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="6">Contact</a> </li>
        <li class="nav-item"> <a class="nav-link" href="{{ $getUserData[0]->is_role == 1 ? url('admin/dashboard') : url('login') }}" >Login</a> </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 
<!-------Banner Start------->
<section class="banner" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="banner-text">
            <h2 class="white">{{ $getHomeData[0]->title }}</h2>
            <h6 class="white">{{ $getHomeData[0]->sub_title }}<a href="{{ $getHomeData[0]->home_url }}" target="_blank" rel="dofollow" class="weblink">{{ $getHomeData[0]->sub_title_two }}</a>.</h6>
            <p class="banner-text white">{{ $getHomeData[0]->description }}</p>
            <ul>
              <li><a href="{{ $getHomeData[0]->image_one_url }}" target="_blank"><img src="{{ url('public/images/'.$getHomeData[0]->image_one) }}" class="wow fadeInUp" data-wow-delay="0.4s"/></a></li>
              <li><a href="{{ $getHomeData[0]->image_two_url }}" target="_blank"><img src="{{ url('public/images/'.$getHomeData[0]->image_two) }}" class="wow fadeInUp" data-wow-delay="0.7s"/></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-12"> <img src="{{ url('public/images/'.$getHomeData[0]->image_three) }}" class="img-fluid wow fadeInUp"/> </div>
      </div>
    </div>
  </div>
  <span class="svg-wave"> <img class="svg-hero" style="width: 100%;" src="{{ url('public/frontend/images/applight-wave.svg') }}"> </span> 
</section>

<!-------Banner End-------> 

<!-------About Start------->

<section class="about section-padding prelative" data-scroll-index='1'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>{{ $getAboutData[0]->headline_title }}</h3>
          <span class="line"></span>
          <p>{{ $getAboutData[0]->headline_description }}</p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <i class="fa fa-life-ring" aria-hidden="true"></i>
                <h5>{{ $getAboutData[0]->first_card_title }}</h5>
                <p>{{ $getAboutData[0]->first_card_description }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <i class="fa fa-mobile" aria-hidden="true"></i>
                <h5>{{ $getAboutData[0]->secound_card_title }}</h5>
                <p>{{ $getAboutData[0]->secound_card_description }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box wow fadeInUp" data-wow-delay="0.6s"> <i class="fa fa-bolt" aria-hidden="true"></i>
                <h5>{{ $getAboutData[0]->third_card_title }}</h5>
                <p>{{ $getAboutData[0]->third_card_description }}</p>
              </div>
            </div>
          </div>
          <a href="#" class="about-btn">Learn More</a> </div>
      </div>
    </div>
  </div>
</section>
<!-------About End-------> 

<!-------Video Start------->
<section class="video-section prelative text-center white">
  <div class="section-padding video-overlay">
    <div class="container">
      <h3>{{ $getWatchData[0]->headline_title }}</h3>
      <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
      <div class="video-popup">
        <div class="video-src">
          <div class="iframe-src">
            <iframe src="https://www.youtube.com/embed/{{ $getWatchData[0]->watch_url }}?rel=0&amp;showinfo=0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Video End-------> 

<!-------Features Start------->
<section class="feature section-padding" data-scroll-index='2'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>{{ $getFeaturesData[0]->headline_title }}</h3>
          <span class="line"></span>
          <p>{{ $getFeaturesData[0]->headline_description }}</p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="media-body text-right media-right-margin">
                  <h5>{{ $getFeaturesData[0]->leftcardfirst_title }}</h5>
                  <p>{{ $getFeaturesData[0]->leftcardfirst_description }}</p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-bolt" aria-hidden="true"></span> </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="media-body text-right media-right-margin">
                  <h5>{{ $getFeaturesData[0]->leftcardsecound_title }}</h5>
                  <p>{{ $getFeaturesData[0]->leftcardsecound_description }}</p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-battery-full" aria-hidden="true"></span> </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                <div class="media-body text-right media-right-margin">
                  <h5>{{ $getFeaturesData[0]->leftcardthird_title }}</h5>
                  <p>{{ $getFeaturesData[0]->leftcardthird_description }}</p>
                </div>
                <div class="media-right icon-border"> <span class="fa fa-wifi" aria-hidden="true"></span> </div>
              </div>
            </div>
            <div class="col-md-4 d-none d-md-block d-lg-block">
              <div class="feature-mobile"> <img src="{{ url('public/images/'.$getFeaturesData[0]->middle_image) }}" class="img-fluid wow fadeInUp"/> </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-check-double" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>{{ $getFeaturesData[0]->rightcardfirst_title }}</h5>
                  <p>{{ $getFeaturesData[0]->rightcardfirst_description }}</p>
                </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-dollar-sign" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>{{ $getFeaturesData[0]->rightcardsecound_title }}</h5>
                  <p>{{ $getFeaturesData[0]->rightcardsecound_description }}</p>
                </div>
              </div>
              <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                <div class="media-left icon-border media-right-margin"> <span class="fa fa-hdd" aria-hidden="true"></span> </div>
                <div class="media-body text-left">
                  <h5>{{ $getFeaturesData[0]->rightcardthird_title }}</h5>
                  <p>{{ $getFeaturesData[0]->rightcardthird_description }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Features End-------> 

<!-------Team Start------->
<section class="team section-padding" data-scroll-index='3'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>{{ $getOurTeamData[0]->headline_title }}</h3>
          <span class="line"></span>
          <p>{{ $getOurTeamData[0]->headline_description }}</p>
        </div>
        <div class="section-content text-center">
          <div class="row">
            @foreach($getTeamMemberData as $value)
              <div class="col-md-4">
              <div class="team-detail wow bounce" data-wow-delay="0.2s"> <img src="{{ url('public/images/team/'.$value->image) }}" class="img-fluid"/>
                <h4>{{ $value->name }}</h4>
                <p>{{ $value->position }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-------Team End-------> 

<!-------Testimonial Start------->
<section class="testimonial section-padding" data-scroll-index='4'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3>{{ $getTestimonialsSectionData[0]->headline_title }}</h3>
          <span class="line"></span>
          <p class="white">{{ $getTestimonialsSectionData[0]->headline_description }}</p>
        </div>
    
      <div class="section-content">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-sm-12">
            <div class="slider">
              @foreach($getTestimonialsMessageData as $value)
                <div class="slider-item">
                <div class="test-img"><img src="{{ url('public/images/testimonial/'.$value->image) }}" alt="Placeholder" width="157" height="157"></div>
                <div class="test-text"><span class="title"><span>{{$value->name}}</span> {{$value->position}}</span> {{$value->description}}</div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<!-------Testimonial End-------> 

<!-------FAQ Start------->
<section class="faq section-padding prelative" data-scroll-index='5'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>{{ $getFaqSectionData[0]->headline_title }}</h3>
          <span class="line"></span>
          <p>{{ $getFaqSectionData[0]->headline_description }}</p>
        </div>
        <div class="section-content">
          <div class="row">
            @foreach($getFaqBodyData as $value)
              <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
                <h4>{{ $value->question }}</h4>
                <p>{{ $value->answer }}</p>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------FAQ End-------> 

<!-------Contact Start------->
<section class="contact section-padding" data-scroll-index='6'>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center">
          <h3>{{ $getContactSectionData[0]->headline_title }}</h3>
          <span class="line"></span>
          <p>{{ $getContactSectionData[0]->headline_description }}</p>
        </div>
        <div class="section-content">
          @include('_message')
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">

              <form id="contact_form" action="{{ url('frontend/contact/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col">
                    <input type="text" id="name" class="form-input w-100" name="name" placeholder="Full Name" required>
                  </div>
                  <div class="col">
                    <input type="email" id="email" class="form-input w-100" name="email" placeholder="Email" required>
                  </div>
                </div>
                <input type="text" id="subject" class="form-input w-100" name="subject" placeholder="Subject">
                <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                <button class="btn-grad w-100 text-uppercase" type="submit">submit</button>
              </form>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
              <div class="contact-info white">
                <div class="contact-item media"> <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">{{ $getContactAddressData[0]->address_title }}</p>
                    <p class="text-uppercase">{{ $getContactAddressData[0]->address_details }}</p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-mobile media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">{{ $getContactAddressData[0]->phone_title }}</p>
                    <p class="text-uppercase"><a class="text-white" href="tel:+15173977100">{{ $getContactAddressData[0]->phone_details }}</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-envelope media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">{{ $getContactAddressData[0]->email_title }}</p>
                    <p class="text-uppercase"><a class="text-white" href="mailto:abcdefg@gmail.com">{{ $getContactAddressData[0]->email_details }}</a> </p>
                  </div>
                </div>
                <div class="contact-item media"> <i class="fa fa-clock media-left media-right-margin"></i>
                  <div class="media-body">
                    <p class="text-uppercase">{{ $getContactAddressData[0]->working_title }}</p>
                    <p class="text-uppercase">{{ $getContactAddressData[0]->working_details }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------Contact End-------> 

<!-------Download End------->
<section class="download section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sectioner-header text-center white">
          <h3>{{ $getDownloadSectionData[0]->headline_title }}</h3>
          <span class="line"></span>
          <p class="white">{{ $getDownloadSectionData[0]->headline_description }}</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="section-content text-center d-block d-md-flex flex-md-wrap justify-content-center">
          @foreach($getDownloadData as $value)
          <ul>
            <li><a href="{{ $value->image_url }}" target="_blank"><img src="{{ url('public/images/download/'.$value->image) }}" class="wow fadeInUp" data-wow-delay="0.4s"/></a></li>
          </ul>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<!-------Download End------->

<footer class="footer-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p> {{$getFooterData[0]->footer_copyright}} <a href="{{ $getFooterData[0]->footer_url }}" target="_blank" rel="dofollow"> {{ $getFooterData[0]->footer_by }} </a></p>
      </div>
    </div>
  </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 
<!-- scrollIt js --> 
<script src="{{ url('public/frontend/js/scrollIt.min.js') }}"></script> 
<script src="{{ url('public/frontend/js/wow.min.js') }}"></script> 
<script>
	wow = new WOW();
	wow.init();
$(document).ready(function(e) {

	$('#video-icon').on('click',function(e){
	e.preventDefault();
	$('.video-popup').css('display','flex');
	$('.iframe-src').slideDown();
	});
	$('.video-popup').on('click',function(e){
	var $target = e.target.nodeName;
	var video_src = $(this).find('iframe').attr('src');
	if($target != 'IFRAME'){
	$('.video-popup').fadeOut();
	$('.iframe-src').slideUp();
	$('.video-popup iframe').attr('src'," ");
	$('.video-popup iframe').attr('src',video_src);
	}
	});

	$('.slider').bxSlider({
	pager: false
	});
});
    
$(window).on("scroll",function () {

	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
  $('.navbar-logo img').attr('src','{{ url('public/images/logo/'.$getLogoData[0]->image_one) }}');
	navbar.addClass("nav-scroll");

}else{
    $('.navbar-logo img').attr('src','{{ url('public/images/logo/'.$getLogoData[0]->image_two) }}');
	navbar.removeClass("nav-scroll");
}

});
$(window).on("load",function (){
	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','{{ url('public/images/logo/'.$getLogoData[0]->image_one) }}');
	navbar.addClass("nav-scroll");
	}else{
	$('.navbar-logo img').attr('src','{{ url('public/images/logo/'.$getLogoData[0]->image_two) }}');
	navbar.removeClass("nav-scroll");
	}

	$.scrollIt({
	
	easing: 'swing',      // the easing function for animation
	scrollTime: 900,       // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: null,    // function(pageIndex) that is called when page is changed
	topOffset: -63
	});
});

</script>
</body>
</html>
