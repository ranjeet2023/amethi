<section data-bs-version="5.1" class="footer1 cid-tlVYCquxLU" once="footers" id="footer01-8">
<div class="container">
    <div class="row mbr-white">
        <div class="col-12 col-md-3">
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7 fs-4">
                <strong style="font-family:'Times New Roman', Times, serif;">AmethiTech</strong>
            </h5>
            <div class="social-row display-7">
                  <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="https://www.instagram.com/amethitech/" target="_blank">
                            <span class="mbr-iconfont "><i class="fa-brands fa-instagram fa-fade"></i></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://twitter.com/Ranjeet37502101" target="_blank">
                            <span class="mbr-iconfont "><i class="fa-brands fa-twitter fa-fade"></i></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.facebook.com/amethitech" target="_blank">
                            <span class="mbr-iconfont "><i class="fa-brands fa-facebook-f fa-fade"></i></span>
                        </a>
                    </div>
                      <div class="soc-item">
                        <a href="https://www.youtube.com/@amethitech2023" target="_blank">
                            <span class="mbr-iconfont"><i class="fa-brands fa-instagram fa-fade"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mt-2">
            <h2 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7 fs-4">
                <strong style="font-family:'Times New Roman', Times, serif;">Courses</strong>
            </h2>
            <ul class="list mbr-fonts-style display-4 fs-4" style="font-family:'Times New Roman', Times, serif;">
                <a href="{{url('frontend')}}"><li class="mbr-text item-wrap mt-2">Frontend Developer</li></a>
                <a href="{{url('backend')}}"><li class="mbr-text item-wrap mt-2">Backend Developer</li></a>
                <a href="{{url('fullstack')}}"><li class="mbr-text item-wrap mt-2">Fullstack Web Developer</li></a>
                <a href="{{url('laravel')}}"><li class="mbr-text item-wrap mt-2">Laravel Developer</li></a>
            </ul>
        </div>
        <div class="col-12 col-md-3">
            <h2 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7 fs-4">
                <strong style="font-family:'Times New Roman', Times, serif;">Our Services</strong>
            </h2>
            <ul class="list mbr-fonts-style display-4 fs-4" style="font-family:'Times New Roman', Times, serif;">
                    <a href="{{url('new-website')}}"><li class="mbr-text item-wrap mt-2">
                    New Website Creation</li></a>
                <a href="{{url('e-commerce')}}"><li class="mbr-text item-wrap mt-2">
                    E-commerce Solution</li></a>
                <a href="{{url('school')}}"><li class="mbr-text item-wrap mt-2">
                    School Website Development</li></a>
                <a href=""><li class="mbr-text item-wrap mt-2">
                    Website Maintenance and Support</li></a>
            </ul>
        </div>
      <div class="col-12 col-md-3">
        <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7 fs-4">
            <strong style="font-family:'Times New Roman', Times, serif;">Contact</strong>
        </h5>
        <div class="contact-info">
            <div class="contact-item d-flex align-items-center" >
                    <i class="fa-regular fa-envelope fa-fade text-white"></i></i>
                <div class="contact-details ms-3">
                    <p class="mb-0 fs-4" style="font-family:'Times New Roman', Times, serif;">
                        <a href="mailto:ranjeet@amethitech.com">ranjeet@amethitech.com</a>
                        </p>
                </div>
            </div>
            <div class="contact-item d-flex align-items-center mt-2" >
                    <i class="fa-solid fa-phone-volume fa-fade"></i>
                <div class="contact-details ms-3">
                    <p class="mb-0 fs-4" style="font-family:'Times New Roman', Times, serif;">
                        <a href="tel:+7217645059">+91-7217645059</a>
                    </p>
                    <p class="mb-0 fs-4" style="font-family:'Times New Roman', Times, serif;">
                        <a href="tel:+7217645059">+91-7217645059</a>
                    </p>
                </div>
            </div>
            <div class="contact-item d-flex align-items-center mt-2" >
                    <i class="fa-regular fa-building fa-fade"></i>
                <div class="contact-details ms-3">
                    <p class="mb-0 fs-4" style="font-family:'Times New Roman', Times, serif;">Amethi, UP, India</p>
                </div>
            </div>
        </div>
     </div>
    </div>
    <div class="row mbr-white">
        <div class="col-12 mt-4">
            <p class="mbr-text mb-0 mbr-fonts-style copyright align-center display-4 fs-4" style="font-family:'Times New Roman', Times, serif;">
                © Copyright {{ date('Y') }} AmethiTech- All Rights Reserved
            </p>
        </div>
    </div>
</div>
<style>
.btn-whatsapp-pulse {
	background: #25d366;
	color: white;
	position: fixed;
	bottom: 20px;
	right: 20px;
	font-size: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	width: 0;
	height: 0;
	padding: 35px;
	text-decoration: none;
	border-radius: 50%;
	animation-name: pulse;
	animation-duration: 1.5s;
	animation-timing-function: ease-out;
	animation-iteration-count: infinite;
}

@keyframes pulse {
	0% {
		box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
	}
	80% {
		box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
	}
}

.btn-whatsapp-pulse-border {
	bottom: 120px;
	right: 20px;
	animation-play-state: paused;
}

.btn-whatsapp-pulse-border::before {
	content: "";
	position: absolute;
	border-radius: 50%;
	padding: 25px;
	border: 5px solid #25d366;
	opacity: 0.75;
	animation-name: pulse-border;
	animation-duration: 1.5s;
	animation-timing-function: ease-out;
	animation-iteration-count: infinite;
}

@keyframes pulse-border {
	0% {
		padding: 25px;
		opacity: 0.75;
	}
	75% {
		padding: 50px;
		opacity: 0;
	}
	100% {
		opacity: 0;
	}
}


</style>
<a target="_blank" href="https://api.whatsapp.com/send?phone=7755897867" class="btn-whatsapp-pulse"><i class="fa fa-whatsapp"></i></a>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/navbar-dropdown.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
