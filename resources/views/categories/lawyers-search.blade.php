@extends('main')

@section('title', 'Reach Legal - Lawyers by Category')

@section('content')

    <section class="find_2">
        <div class="find_2_size">
            <div class="find_2_left">
{{--                <h3>Find {{ $category->name }} lawyers</h3>--}}
                <p class="find_2_left_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec quis mi eget erat dignissim temporLorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Donec quis mi eget erat dignissim tempor</p>
                <div class="find_2_left_inputs">
{{--                    <form action="{{route('lawyers.search')}}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <input type="text" name="search" placeholder="Enter State, City or Postcode" value="{{old('search')}}" class="w-100">--}}
{{--                        @error('search')--}}
{{--                            <span class="input-error">--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                            </span>--}}
{{--                        @enderror--}}
{{--                        <button type="submit">Search</button>--}}
{{--                    </form>--}}
                </div>
                <div class="find_2_left_select">
                    <p>We found <span id="lawyers-number">{{$lawyers->count()}}</span> professional lawyers</p>
{{--                    <form  method="POST" id="rating-form">--}}
{{--                        @csrf--}}
{{--                        <select id="rating-options">--}}
{{--                            <option value="null">Rating</option>--}}
{{--                            <option value="5">5 star</option>--}}
{{--                            <option value="4">4 star</option>--}}
{{--                            <option value="3">3 star</option>--}}
{{--                        </select>--}}
{{--                    </form>--}}
                </div>
                <div class="find_2_left_block" id="style-2">

                    @foreach($lawyers as $lawyer)
                        <div class="find_2_left_box" data-rating="{{ceil($lawyer->rating)}}">
                        <div class="find_2_left_box_left">
                            <div class="find_2_left_box_left_img">
                                <img src="{{asset('assets/images/profile/' . $lawyer->image)}}" alt="Person">
                            </div>
                            <div class="find_2_left_box_left_names">
                                <p>{{ $lawyer->full_name }}</p>
                                <p>{{ $lawyer->company }}</p>
                                <div class="find_2_left_box_left_names_flex">
                                    <div class="find_2_left_box_left_names_flex_box">
                                        <img src="{{asset('assets/images/general/find_2_1.png')}}" alt="Law">
                                        <p>{{ $lawyer->name }}</p>
                                    </div>
{{--                                    <div class="find_2_left_box_left_names_flex_box">--}}
{{--                                        <img src="{{asset('assets/images/general/find_2_2.png')}}" alt="">--}}
{{--                                        <p>   Immigration</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="find_2_left_box_left_names_flex_box">--}}
{{--                                        <img src="{{asset('assets/images/general/find_2_3.png')}}" alt="">--}}
{{--                                        <p> Criminal</p>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="find_2_left_box_right">

                            <div class="find_2_left_box_right_stars">
                                @include('partials/rating-stars', ['rating' => $lawyer->rating])
                            </div>

                            <div class="find_2_left_box_right_btn">
                                <a href="{{route('lawyers.show', $lawyer->user_id)}}">
                                    <button type="button" name="button">View profile </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="find_2_left_box">--}}
{{--                        <div class="find_2_left_box_left">--}}
{{--                            <div class="find_2_left_box_left_img">--}}
{{--                                <img src="{{asset('assets/images/general/find_2_face.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="find_2_left_box_left_names">--}}
{{--                                <p>Lawyer Name</p>--}}
{{--                                <p>Lawyer Firm Name</p>--}}
{{--                                <div class="find_2_left_box_left_names_flex">--}}
{{--                                    <div class="find_2_left_box_left_names_flex_box">--}}
{{--                                        <img src="{{asset('assets/images/general/find_2_1.png')}}" alt="">--}}
{{--                                        <p> Civil</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="find_2_left_box_left_names_flex_box">--}}
{{--                                        <img src="{{asset('assets/images/general/find_2_2.png')}}" alt="">--}}
{{--                                        <p>   Immigration</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="find_2_left_box_left_names_flex_box">--}}
{{--                                        <img src="{{asset('assets/images/general/find_2_3.png')}}" alt="">--}}
{{--                                        <p> Criminal</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="find_2_left_box_right">--}}
{{--                            <div class="find_2_left_box_right_stars">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="find_2_left_box_right_btn">--}}
{{--                                <button type="button" name="button">View profile </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="find_2_left_box">--}}
{{--                        <div class="find_2_left_box_left">--}}
{{--                            <div class="find_2_left_box_left_img">--}}
{{--                                <img src="{{asset('assets/images/general/find_2_face.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="find_2_left_box_left_names">--}}
{{--                                <p>Lawyer Name</p>--}}
{{--                                <p>Lawyer Firm Name</p>--}}
{{--                                <div class="find_2_left_box_left_names_flex">--}}
{{--                                    <div class="find_2_left_box_left_names_flex_box">--}}
{{--                                        <img src="{{asset('assets/images/general/find_2_1.png')}}" alt="">--}}
{{--                                        <p> Civil</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="find_2_left_box_left_names_flex_box">--}}
{{--                                        <img src="{{asset('assets/images/general/find_2_2.png')}}" alt="">--}}
{{--                                        <p>   Immigration</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="find_2_left_box_left_names_flex_box">--}}
{{--                                        <img src="{{asset('assets/images/general/find_2_3.png')}}" alt="">--}}
{{--                                        <p> Criminal</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="find_2_left_box_right">--}}
{{--                            <div class="find_2_left_box_right_stars">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                                <img src="{{asset('assets/images/general/find_star.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="find_2_left_box_right_btn">--}}
{{--                                <button type="button" name="button">View profile </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="find_2_right">
{{--                <img src="{{asset('assets/images/general/find_2_map.png')}}" alt="Map">--}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3156706536!2d-74.26055748786443!3d40.69714774429399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2s!4v1560156911050!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
        </div>
    </section>

    <section class="lawyers_7">
        <div class="opacity_bg">
            <div class="lawyers_7_size">
                <h3>Join the community </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                    aliquet metus non lectus porttitor, ac hendrerit odio lacinia. Cras quis
                    libero vel tortor porta suscipit ut in urna. Vestibulum ante ipsum primis
                    in faucibus orci luctus et</p>
                <div class="">
                    <input type="text" name="" value="" placeholder="Enter your email">
                    <button type="button" name="button">Join</button>
                </div>
            </div>
        </div>
    </section>
@endsection