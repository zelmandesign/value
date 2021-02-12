/**
 * External Dependencies
 */
import 'jquery';
import 'bootstrap';
import 'owl.carousel';

$(document).ready(() => {
  // console.log('Hello world');
  // Owl Carousel 
  $('#hero-slider').owlCarousel({
    items:1,
  });

  $('#posts-slider').owlCarousel({
    items:1,
    loop:false,
    center:false,
    margin:10,
    responsive : {
      // breakpoint from 480 up
      760 : {
        items:4,
        center:true,
      },
  }
  });


});

// Silnia (n)
// n! = n * (n - 1) * (n - 2) * ...*1
// 1! = 1
// 2! = 2 * 1 = 2
// 3! = 3 * 2 * 1 = 6
// 4! = 4 * 3 * 2 * 1 = 24
// 5! = 5 * 4 * 3 * 2 * 1 = 120

function silnia(n) {
  if ((n == 0)) {
    console.log('zla wartosc liczbowa')
  } 
  else if ((n == 1)) {
    console.log('silnia z n=1 to 1')
  }
  else {
    var i = n;
    let silnia = 1;
    for (i; i>1; i--)
    {
      silnia=silnia*i;
    }
    console.log('silnia z n='+n+ ' to : ' + silnia)
  }
}

silnia(7)
