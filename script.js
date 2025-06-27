$(document).ready(function() {
  $('.count').each(function() {
      var endVal = $(this).data('count');
      
      var countUp = new CountUp(this, endVal);
      if (!countUp.error) {
          countUp.start();
      } else {
          console.error(countUp.error);
      }
  });
});
$(document).ready(function() {
  console.log('jQuery is loaded');
  console.log('CountUp.js is loaded', CountUp);

  $('.count').each(function() {
      var endVal = $(this).data('count');
      console.log('End value:', endVal);
      
      var countUp = new CountUp(this, endVal);
      if (!countUp.error) {
          countUp.start();
      } else {
          console.error(countUp.error);
      }
  });
});

// basculement du menu mobile
document.getElementById('menuToggle').addEventListener('click', function() {
  var menu = document.querySelector('.menu');
  menu.classList.toggle('show');
});

