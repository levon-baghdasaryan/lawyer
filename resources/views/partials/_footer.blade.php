<footer>
    <div class="footer_size">
        <div class="footer_1">
            <p>Freelancers</p>
            <ul>
                <li>We Heart Freelancers</li>
                <li>Our Creative Disciplines</li>
                <li>The Freelancer Awards</li>
                <li>Average Day Rates</li>
            </ul>
        </div>
        <div class="footer_2">
            <p>Clients</p>
            <ul>
                <li>We Heart Clients</li>
                <li>SMEs & Agencies</li>
                <li>Enterprise</li>
                <li>
                    <a href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
        <div class="footer_3">
            <p>About</p>
            <ul>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('terms')}}">Terms</a></li>
                <li><a href="{{route('privacy')}}">Privacy</a></li>
                <li><a href="{{route('affiliate')}}">Affiliate</a></li>
            </ul>
        </div>
        <div class="footer_4">
            <p>Follow Us</p>
            <div class="footer_soc">
                <img src="{{asset('assets/images/general/facebook.png')}}" alt="Facebook">
                <img src="{{asset('assets/images/general/twitter.png')}}" alt="Twitter">
                <img src="{{asset('assets/images/general/instagram.png')}}" alt="Instagram">
            </div>
        </div>
    </div>

</footer>
<section class="lawyers_bottom">
    <p>Copyright &copy; {{date("Y") }}</p>
</section>
