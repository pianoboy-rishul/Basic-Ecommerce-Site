<!DOCTYPE html>
<html>
<head>
<title>KeyZoo: About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="piano.png">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url("pianobg.jpg");
  background-repeat: no-repeat;
  background-size:1450px 900px;
  background-attachment: fixed;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  background-color: white;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  color: white;
  background-image: url("bg.png");
  background-repeat: no-repeat;
  background-size: cover;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1 style="font-family: 'Tahoma';font-size:80px; color:aliceblue;"><u>ABOUT US</u></h1>
  <p><h2>All Musical Key Instruments, Available Here.</h2></p>
  <p><h2>KeyZoo delivers items at affordable prices, with numerous offers and discounts.</h2></p><br><br><br>
</div>

<h1 style="text-align:center; color: white; font-family: 'Times New Roman';"><b>OUR FEATURED PRODUCTS</b></h1>
<div class="row">
  <div class="column">
    <div class="card">
      &nbsp;<img src="synth.jpg" style="width:405px">
      <div class="container">
        <h2>SYNTHESIZERS</h2>
        <p class="title">Product Category: Pianos and Synthesizers</p>
        <p style="text-align:justify;">A synthesizer is an electronic musical instrument that generates audio signals. Synthesizers typically create sounds by generating waveforms, through methods including subtractive synthesis, additive synthesis and frequency modulation synthesis.</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="keytar.jpg" style="width:100%; height:150%;"><br><br>
      <div class="container">
        <h2>KEYTARS</h2>
        <p class="title">Product Category: Keytars and Accordions</p>
        <p style="text-align:justify;">A keytar is a musical instrument. It is shaped and held like a guitar, but has keys like a keyboard. Keytars are lightweight keyboards that have a strap that is put around the neck and shoulders. The instrument has a keyboard for playing musical notes and sounds.</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      &ensp;&nbsp;<img src="melodica.png" style="width:392px">
      <div class="container"><br><br>
        <h2>MELODICAS</h2>
        <p class="title">Product Category: Harmoniums and Melodicas</p>
        <p style="text-align:justify;">The melodica is an uncommon musical instrument in which the user blows air through a reeded keyboard. With its distinctive sound, the melodica has been used both for novelty purposes and as an instrument favored by certain performers.</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>