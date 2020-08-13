
<html lang="en">
 
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Laura L Frazier contact page">
      <meta name="keywords" content="full stack, web developer, full stack web developer, CSM, Scrum Master">  
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="stylesheet" type="text/css" href="./dist/css/main.css">      
      <title>Laura L Frazier Contact</title>
  </head>
  <body>
      <header>
          <span class="logo">Laura L Frazier</span>  
          <a id="toggleMenu">Menu<a>
          <nav>
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="resume.html">Resume</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
      </header>
      <main>
       
        <p style="color:blue">This is another paragraph.</p>
      <p>Full stack web and hybrid mobile applications developer specializing in full stack JavaScript application
          and architectures. Experienced in all stages of the development life cycle, well versed in numerous
          programming languages. Certified Scrum Master (CSM)</p>
      <!--<form action="https://formspree.io/lander0703@gmail.com" method="POST">  -->
        <form action="contact.php" method="POST">
  <!--    <input type="hidden" name="_next" value="//lander0703.github.io/thanks.html">  -->
      <div>
          <label for="name">Name</label>
          <input id="name" type="text" name="name">
      </div>
      <div>
          <label for="email">Email</label>
        <!--   <input id="email" type="text" name="_replyto">  -->
        <input id="email" type="text" name="email">
      </div>
      <div>
          <label for="message">Message</label>
          <textarea id="message" name="message"></textarea>
      </div>
      <div>
          Upload Your file:
          <input type="file" name="upload accept="image/png, image/jpeg">            
      </div>
      <div>
       <!--   <input type="hidden" name="_subject" value="New submission!">  -->
       <input type="hidden" name="subject" value="New submission!">
      </div>
      <div>
          <input type="submit" value="Send">
      </div>
      </form>
  </main>
      <script>
          var toggleMenu = document.getElementById('toggleMenu');
          var nav = document.querySelector('nav');
          toggleMenu.addEventListener(
            'click',
            function(){
              if(nav.style.display=='block'){
                nav.style.display='none';
              }else{
                nav.style.display='block';
              }
            }
          );
      </script>

  </body>
</html>
