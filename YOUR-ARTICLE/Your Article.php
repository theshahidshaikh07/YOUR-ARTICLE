<!DOCTYPE html>
<html>
  <head>
    <title>Your Article</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  
  <?php
    include 'mainmenubar.php';
    ?>
     <center><h1>" TOP 5 ARTICLES OF THE MONTH "</h1></center>
  </head>
  <body>
   
    <div class="card-container">
      <div class="arrow left"><i class="fas fa-chevron-left"></i></div>
      <div class="arrow right"><i class="fas fa-chevron-right"></i></div>


      <div class="card">
        <img src="ai.png">
        <h2>Artificial Intelligence</h2>
        <p>Artificial Intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think and learn like humans. It involves creating algorithms that can perform tasks such as speech recognition, decision-making, and visual perception, among others.<br><br><strong>By Shahid Shaikh</strong></p>
        <a href="ai.php">Read More</a>
      </div>
      <div class="card">
        <img src="ml.png">
        <h2>Machine Learning</h2>
        <p>Machine Learning is a subset of Artificial Intelligence that involves creating algorithms that can learn from and make predictions or decisions based on data. It involves using statistical models to analyze and identify patterns in data, and then using those patterns to make predictions or take actions.<br><br><strong>By Gaurav Tanpure</strong></p>
        <a href="ml.php">Read More</a>
      </div>
      <div class="card">
        <img src="bci.png">
        <h2>Brain Computer Interface</h2>
        <p>A Brain-Computer Interface (BCI) is a technology that allows direct communication between the brain and an external device, such as a computer. BCIs typically work by detecting brain activity through non-invasive or invasive methods, such as electroencephalography (EEG) or implanted electrodes, and translating that activity into commands that can be used to control the device.<br><br><strong>By Abhijeet Gaikwad</strong></p>
        <a href="bci.php">Read More</a>
      </div>
      <div class="card">
        <img src="bc.png">
        <h2>Blockchain Techknowlogy</h2>
        <p>Blockchain technology is a decentralized digital ledger that records transactions on a public network. It enables secure and transparent transfer of data without the need for a middleman, such as a bank or government.<br><br><strong>By Jayesh Dudhade</strong></p>
        <a href="bt.php">Read More</a>
      </div>
      <div class="card">
        <img src="dt.png">
        <h2>Digital Twin</h2>
        <p>A digital twin is a virtual representation of a physical object or system. It uses real-time data and analytics to simulate the behavior and performance of the object or system, allowing for improved understanding, monitoring, and optimization.<br><br><strong>By Karan Sathe</strong></p>
        <a href="dt.php">Read More</a>
      </div>
      </div>
      
    </div>
    <script type="text/javascript">
      
        const cardContainer = document.querySelector('.card-container');
        const scrollDistance = 1200; // Adjust this value to control the amount of scrolling per click

        document.querySelector('.fa-chevron-left').addEventListener('click', function() {
          cardContainer.scrollBy({ left: -scrollDistance, behavior: 'smooth' });
        });

        document.querySelector('.fa-chevron-right').addEventListener('click', function() {
          cardContainer.scrollBy({ left: scrollDistance, behavior: 'smooth' });
});


    </script>
  </body>


</html>
