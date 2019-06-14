$( document ).ready(function() {

  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:3
          }
      }
  })

  // $('.lawyers_items').on("click", function () {
  //   $('.lawyers_4_right_box').css("display", "none");
  //    $('.lawyers_items').css("opacity", "0.3");
  //   $(this).css("opacity", "1");
  //
  //   var a = "#" + $(this).attr("data-id");
  //    $(a).css("display","block");
  //     });
  //
  //
  //     $('.lawyers_items1').on("click", function () {
  //       $('.lawyers_4_right_box1').css("display", "none");
  //        $('.lawyers_items1').css("opacity", "0.3");
  //       $(this).css("opacity", "1");
  //
  //       var a = "#" + $(this).attr("data-id");
  //        $(a).css("display","flex");
  //
  //         });

        // $('.lawyers_items').mouseover( function () {
        //   $('.lawyers_4_right_box').css("display", "none");
        //   var a = "#" + $(this).attr("data-id");
        //    $(a).css("display","block");
        //     });


    //Image upload
    $(function () {
        $("#file-input").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });
    });

    function imageIsLoaded(e) {
        $('#upload_file .dash_img_add').attr('src', e.target.result);
    };




    $(function(){
        $(".Message_now").click(function () {
            $('#qnimate').addClass('popup-box-on');
        });

        $("#removeClass").click(function () {
            $('#qnimate').removeClass('popup-box-on');
        });
    })


    $('#review-form').on('submit', function (e) {

        e.preventDefault();
        let lawyerId = $('#lawyer-id').val();
        let form = $(this);

        $.ajax({
            method: "POST",
            data: form.serializeArray(),
            url:  '/reviews/lawyers/' + lawyerId,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                let stars = '';
                for (let i = 0; i < data.grade; i++) {
                   stars += '<img src="/assets/images/general/star.png" alt="Star">';
                }
                var d = new Date();

                let str = `                                
                    <div class="profile_3_box">
                        <div class="profile_3_box_top">
                            <div class="profile_3_box_top_stars">
                                ${stars}
                            </div>
                            <p>at ${d.getHours() + ':' +  d.getMinutes()}</p>
                        </div>
                        <p class="profile_3_box_text">${data.body}</p>
                    </div>
                `;

                $('#reviews-wrapper').append(str);

                let reviewsQuant = $('#reviews-quantity');
                let num = reviewsQuant.html();
                reviewsQuant.html(++num);
                form[0].reset();
            }
        });
    });

    $('#pagination li').on('click', function () {

        // console.log(e);
        // return false;
        let pageNumber = $(this).data('page');
        let lawyerId = $(this).data('lawyerid');
        // console.log(lawyerId);
        // console.log(pageNumber);
       // console.log($(this).data('page'));
       //  /lawyers/reviews/page/{number}
        $.ajax({
           method: "GET",
           url:  "/lawyers/reviews/" + lawyerId +"/page/" + pageNumber,
            success: function (data) {
                let months = ['January','February','March','April','May','June','July','August','September','October',
                    'November','December'];

                let reviews = data.map(review => {
                    let images = '';
                    var d = new Date(review.created_at);
                   for (let i = 0; i < review.grade; i++) {
                        images +=  '<img src="/assets/images/general/star.png" alt="Star">';
                   }

                   return `
                        <div class="profile_3_box">
                            <div class="profile_3_box_top">
                                <div class="profile_3_box_top_stars">        
                                    ${images}
                                </div>
                                <p>on ${months[d.getMonth()] + ', ' + d.getFullYear()}</p>
                            </div>
                            <p class="profile_3_box_text">${review.body}</p>
                        </div>
                   `;
               });
               // let review = `
               //        <div class="profile_3_box">
               //          <div class="profile_3_box_top">
               //          <div class="profile_3_box_top_stars">
               //
               //  <img src="/assets/images/general/star.png" alt="Star">
               //
               //          </div>
               //          <p>ddkdk</p>
               //      </div>
               //      <p class="profile_3_box_text">djdjdjd</p>
               //      </div>
               //
               // `;


                // @foreach($reviews as $review)
                // <div class="profile_3_box">
                //         <div class="profile_3_box_top">
                //         <div class="profile_3_box_top_stars">
                //
                //         @for ($i = 0; $i < $review->grade; $i++)
                // <img src="{{asset('assets/images/general/star.png')}}" alt="Star">
                //         @endfor
                //
                //         </div>
                //         <p>on {{\Carbon\Carbon::parse($review->created_at)->format('F, Y')}}</p>
                //     </div>
                //     <p class="profile_3_box_text">{{$review->body}}</p>
                //     </div>
                // @endforeach

                $('#review-wrapper').empty();
                $('#review-wrapper').append(reviews);
            }
        });
    });

    $("#add-publication").on('click', function () {
        let publication = `
             <div class="publication-block">
                <div>
                    <input type="text" name="title[]" placeholder="Title">
                </div>

                <input type="file" name="publication[]" accept="application/pdf">
            </div>       
        `;
        $(".publication-block-wrapper").append(publication);
    });
});