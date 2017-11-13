<!-- Put in document <head> -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/js/Chart.js-2.5.0/dist/Chart.bundle.js"></script>



<!-- Chart.js Donut Chart and Advanced Custom Fields -->

  <div class="one-donut">
    <canvas id="single-donut" width="150" height="150" style="width: 150px; height: 150px;"></canvas>
  </div>



<!-- Feed in single donut metric. Custom field must be a number field. -->
  <script>
    var theRemainder = 100-<?php the_field('donut_metric_number');?>;
    var data = {
    datasets: [
        {
            data: [<?php the_field('donut_metric_number');?>, theRemainder],
            backgroundColor: [
                "#fff", // Fill Color
                "#414042" // Remainder Color
            ]
        }]
    };
    var ctx = document.getElementById("single-donut").getContext('2d');
    new Chart(ctx,{
          type:"doughnut",
          data: data,
          options: {
              responsive: true,
              tooltips : {
                  enabled: false
              },
              animation:{
                  animateRotate:true
              },
              rotation : -2,
              cutoutPercentage: 65,
              elements: {
                  arc: {
                      borderWidth: 0
                  }
              }
          }
      });
  </script>
