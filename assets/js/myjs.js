//Scroll reveal animations

new WOW().init();

//Scroll activated background change
$(function () {
  $(document).scroll(function () {
    var $nav = $(".nav");
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
  });
});

//Toggle MENU

var t1 = new TimelineMax({ paused: true });
t1.to(".menu", 0.5, {
  left: "0%",
  ease: Power2.easeInOut
});

t1.reverse();
$(document).on("click", ".menu-open", function () {
  t1.reversed(!t1.reversed());
});
$(document).on("click", ".menu-close", function () {
  t1.reversed(!t1.reversed());
});

// SHOW ITEMS ACCORDING TO CATEGORY SELECTION

function showCategory(selection) {
  var bestSeller = document.getElementById("bestSeller");
  var latestCollection = document.getElementById("latestCollection");
  var allProducts = document.getElementById("allProducts");
  var checkbox1 = document.getElementById("option1");
  var checkbox2 = document.getElementById("option2");
  if (checkbox1.checked && checkbox2.checked) {
    bestSeller.style.display = "block";
    latestCollection.style.display = "block";
  } else if (checkbox1.checked) {
    bestSeller.style.display = "block";
    latestCollection.style.display = "none";
  } else if (checkbox2.checked) {
    bestSeller.style.display = "none";
    latestCollection.style.display = "block";
  } else {
    bestSeller.style.display = "none";
    latestCollection.style.display = "none";
  }
}

function showSuggestion() {
  var checkbox1 = document.getElementById("option1");
  var checkbox2 = document.getElementById("option2");
  var minPrice = document.getElementById('price-min').value;
  var maxPrice = document.getElementById('price-max').value;
  var str = document.getElementById('search-text').value;

  // APPEND INFORMATION TO QUERY STRING
  if (checkbox1.checked) {
    str += "&table_name=bestSeller";
  } else if (checkbox2.checked) {
    str += "&table_name=latestCollection";
  } else {
    str += "&table_name=bestSeller";
  }

  str += "&price-min=" + minPrice + "&price-max=" + maxPrice;

  var output = document.getElementById('output');
  if (str.length == 0) {
    output.innerHTML = '';
  } else {
    // AJAX REQ
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        output.innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "./search.php?q=" + str, true);
    xmlhttp.send();
  }
}



