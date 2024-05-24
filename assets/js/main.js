

(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Initiate  glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });




  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });

})()

 /**
   * toggle price chnage
   */

function check() {
  var checkBox = document.getElementById("checbox");
  var text1 = document.getElementsByClassName("text1");
  var text2 = document.getElementsByClassName("text2");

  for (var i = 0; i < text1.length; i++) {
    if (checkBox.checked == true) {
      text1[i].style.display = "block";
      text2[i].style.display = "none";
    } else if (checkBox.checked == false) {
      text1[i].style.display = "none";
      text2[i].style.display = "block";
    }
  }
}
check();





// const items = document.querySelectorAll('.left-column li');
// const images = document.querySelectorAll('.image-container div');
// const emptyListItem = document.querySelector('.left-column li.empty');
// const aboutFeatureSection = document.querySelector('.about_feature');

// let startY = 0;
// let allImagesScrolled = false;

// // Function to handle the intersection observer
// function handleIntersection(entries) {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       allImagesScrolled = false; // Reset flag when section is in view
//       observeScrollEvents(true);
//     } else {
//       observeScrollEvents(false);
//     }
//   });
// }

// // Create an intersection observer
// const observer = new IntersectionObserver(handleIntersection);

// // Observe the about_feature section
// observer.observe(aboutFeatureSection);

// // Function to observe or unobserve scroll events based on the provided flag
// function observeScrollEvents(observe) {
//   if (observe) {
//     document.querySelector('.about_feature').addEventListener('touchstart', touchStartHandler);
//     document.querySelector('.about_feature').addEventListener('touchend', touchEndHandler);
//     document.querySelector('.about_feature').addEventListener('touchmove', touchMoveHandler);
//     document.querySelector('.about_feature').addEventListener('wheel', wheelHandler);
//     document.querySelector('.about_feature').addEventListener('scroll', scrollHandler);
//   } else {
//     document.querySelector('.about_feature').removeEventListener('touchstart', touchStartHandler);
//     document.querySelector('.about_feature').removeEventListener('touchend', touchEndHandler);
//     document.querySelector('.about_feature').removeEventListener('touchmove', touchMoveHandler);
//     document.querySelector('.about_feature').removeEventListener('wheel', wheelHandler);
//     document.querySelector('.about_feature').removeEventListener('scroll', scrollHandler);
//   }
// }

// // Function to handle touch start event
// function touchStartHandler(e) {
//   startY = e.touches[0].clientY;
//   // Prevent default touch behavior to stop body scrolling
//   e.preventDefault();
// }

// // Function to handle touch end event
// function touchEndHandler(e) {
//   const deltaY = e.changedTouches[0].clientY - startY;
//   if (!allImagesScrolled) {
//     if (deltaY > 50) {
//       scrollDown();
//     } else if (deltaY < -50) {
//       scrollUp();
//     }
//     e.preventDefault(); // Prevent default behavior only when images haven't scrolled completely
//   }
// }

// // Function to handle touch move event
// function touchMoveHandler(e) {
//   if (!allImagesScrolled) {
//     e.preventDefault(); // Prevent default touchmove behavior only when images haven't scrolled completely
//   }
// }

// // Function to handle wheel event
// function wheelHandler(e) {
//   if (!allImagesScrolled) {
//     e.preventDefault(); // Prevent default wheel behavior only when images haven't scrolled completely
//     if (e.deltaY > 0) {
//       scrollDown();
//     } else {
//       scrollUp();
//     }
//   }
// }

// // Function to handle scroll event
// function scrollHandler(e) {
//   if (!allImagesScrolled && e.target.scrollTop === 0) {
//     // Disable body scrolling when at the top of the section
//     document.body.style.overflowY = 'hidden';
//   } else {
//     // Enable body scrolling when not at the top of the section
//     document.body.style.overflowY = 'auto';
//   }
// }

// // Function to scroll down
// function scrollDown() {
//   const activeIndex = getActiveIndex();
//   const previousIndex = (activeIndex === 0) ? items.length - 1 : activeIndex - 1;
//   let newIndex = (activeIndex === items.length - 1) ? 0 : activeIndex + 1;
//   // Skip the empty list item
//   if (items[newIndex] === emptyListItem) {
//     newIndex = 0;
//   }
//   activateItem(newIndex);
//   moveEmptyListItem(newIndex);
//   moveImages(previousIndex, activeIndex, newIndex);
// }

// // Function to scroll up
// function scrollUp() {
//   const activeIndex = getActiveIndex();
//   const nextIndex = (activeIndex === items.length - 1) ? 0 : activeIndex + 1;
//   let newIndex = (activeIndex === 0) ? items.length - 1 : activeIndex - 1;
//   // Skip the empty list item
//   if (items[newIndex] === emptyListItem) {
//     newIndex = items.length - 2;
//   }
//   activateItem(newIndex);
//   moveEmptyListItem(newIndex);
//   moveImages(activeIndex, nextIndex, newIndex);
// }

// // Function to get active image index
// function getActiveIndex() {
//   return Array.from(images).findIndex(image => image.classList.contains('active'));
// }

// // Function to activate item
// function activateItem(index) {
//   items.forEach(item => item !== emptyListItem && item.classList.remove('active'));
//   items[index] !== emptyListItem && items[index].classList.add('active');
//   images.forEach(image => image.classList.remove('active'));
//   images[index] && images[index].classList.add('active');
// }

// // Function to move empty list item
// function moveEmptyListItem(activeIndex) {
//   const emptyListItemTop = items[activeIndex] && items[activeIndex].offsetTop + 'px';
//   emptyListItem.style.top = emptyListItemTop;
// }

// // Function to move images
// function moveImages(previousIndex, activeIndex, nextIndex) {
//   if (
//     images[previousIndex] &&
//     images[activeIndex] &&
//     images[nextIndex]
//   ) {
//     images[previousIndex].classList.remove('previous');
//     images[activeIndex].classList.remove('active');
//     images[nextIndex].classList.remove('next');

//     images[previousIndex].classList.add('next');
//     images[activeIndex].classList.add('previous');
//     images[nextIndex].classList.add('active');

//     // Check if all images have been scrolled
//     if (nextIndex === 0) {
//       allImagesScrolled = true;
//     }
//   }
// }



const tabs = document.querySelectorAll('.tabs li');
const tabContents = document.querySelectorAll('.tab');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tabContents.forEach(tc => tc.classList.remove('active'));
        tab.classList.add('active');
        tabContents[index].classList.add('active');
    });
});







