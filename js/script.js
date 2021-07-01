
$('.post-wrapper').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: $('.prev'),
  nextArrow: $('.next'),
  

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 760,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 511,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

ClassicEditor.create(document.querySelector('#body'), {
  toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
  heading: {
    options: [{
        model: 'paragraph',
        title: 'Paragraph',
        class: 'ck-heading_paragraph'
      },
      {
        model: 'heading1',
        view: 'h1',
        title: 'Heading 1',
        class: 'ck-heading_heading1'
      },
      {
        model: 'heading2',
        view: 'h2',
        title: 'Heading 2',
        class: 'ck-heading_heading2'
      }
    ]
  }
})
.catch(error => {
  console.log(error);
}); 

// Adding word limit in paragraphs
var p = $('#dash p');
var ks = $('#dash').height();
while ($(p).outerHeight() > ks) {
  $(p).text(function(index, text){
    return Text.replace(/\w*\s(\S)*$/, '...');
  });
}