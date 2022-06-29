<!DOCTYPE html>
<html>
<head>
<title>KeyZoo: Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="piano.png">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  background-image: url("pianocon.jpg");
  height: 615px;
  background-repeat:no-repeat ;
  background-size: 550px;
  background-attachment: fixed;
}

/* Add styles to the form container */
.container {
  position:absolute;
  right: 0;
  margin: 20px;
  max-width: 900px;
  background-color: white;
  padding-right: 110px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 5px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #ccc;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
  border-radius: 50px;
  position: relative;
  text-align: center;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.btn:hover {
  opacity: 1;
}
textarea {
  width: 100%;
  border: none;
  box-sizing: border-box;
  background-color:#ddd;
  opacity: 0.5;
  margin: 5px 0 5px 0;
  padding: 15px;
}
.arrow {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}
.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}
</style>
</head>
<body>
<div class="bg-img">
  <form action="/action_page.php" class="container">
    <h1 style="text-align:center ;"><b><u>CONTACT US</u></b></h1>
    <h4 style="text-align:center ;">We'll get back to you ASAP!</h4>

    <input type="text" style="text-align:center ;border-bottom: 4px solid #ccc;background-color: white;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;opacity: 0.5;" placeholder="Your name" name="name" required>
    <input type="password" style="text-align:center ;border-bottom: 4px solid #ccc;background-color: white;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;opacity: 0.5;" placeholder="Your email address" name="email" required>
    <textarea id="subject" name="subject" placeholder="Your Message" style="height:100px;text-align:center ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"></textarea>
    <br><br><br><br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<button type="submit" class="btn">Send Message</button><br><br><br><br><br><br><br>
    <p style="text-align:center ;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size:small;"><b>KeyZoo:</b>&ensp;Courtesy of Rishul Ghosh</p>
  </form>
</div>
</body>
</html>
