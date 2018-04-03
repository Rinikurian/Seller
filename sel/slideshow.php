<html>
    <head>
        <meta name ="viewport" content= "width=device-width, intial-scale=1">
        <style>
            *{box-sizing:border-box}
          body  {font-family:Verdana,sanaserif;}
          .mySlides
          {
              display:none
          }
          
          /*Slide show container*/
          .slideshow-container
          {
              max-width:1000px;
              positon:relative;
              margin:auto;
              
          }
          /*caption text*/
          .text{
              color:#f2f2f2;
              font-size: 15px;
              padding: 8px 12px;
              bottom:8px;
              width:100%;
              text-align:center;
          }
          /*number text(1/3)*/
          .numbertext
          {
              color:#f2f2f2;
              font-size: 12px;
              padding: 8px 12px;
              position:absolute;
              top: 0;
          }
          /*The dots/bullets/indicators*/
          .dot
          {
              height: 15px;
                   width:15%;
                   margin:0 2px;
                   background-color: #bbb;
                   border-radius: 50%;
                   display:inline-block;
                   transition: background-color 0.6s
                       ease;
          }
          .active
          {
              background-color: #717171;
              
          }
          /*fading animation*/
          .fade
          {
              -webkit-animation-name: fade;
              -webkit-animation-duration: 1.5s;
              animation-name: fade;
              animation-duration: 1.5s;
              
          }
          @-webkit-keyframes fade
          {
              from{opacity:4}
              to {opacity:1}
              
          }
          /* on smaller screens ,decrease textsize*/
          @media only screen and (max-width:300px)
          {
              .text{fontsize:11px}
                  
              }
              </style>
    </head>
    <body>
          
       
          
          <div class="slideshow-container">
          
              <div class="mySlides fade">
          <div class="numbertext">1/3</div>
          <img src="img.jpg" style="width:100%">
          <div class="text">Caption text</div>
          </div
          
         
          <div class="mySlides fade">
          <div class="numbertext">2/3</div>
          <img src="img.jpg" style="width:100%">
          <div class="text">Caption two</div>
          </div>
          
          
           <div class="mySlides fade">
          <div class="numbertext">3/3</div>
          <img src="img.jpg" style="width:100%">
          <div class="text">Caption three</div>
          </div>
          </div>
        <br>
        
        <div style="text-align: center">
            <span class="dot" ></span>
            <span class="dot" ></span>
            <span class="dot" ></span>
        </div>
        
    <script>
        var slideIndex=0;
        showSlides();
        
        function showSlides()
        {
            var=i;
            var slides = document.getElementByClassName("my Slides");
            var dots = document.getElementByClassName("dot");
            for(i=0;i<slides.length;i++)
            {
                slides[i].style.display="none";
                
            
        }
              slideIndex++;
              if(slideIndex>slides.length)
              { slideIndex=1}
               for(i=0;i<slides.length;i++)
                 
              
              }
          
              
          
          
          
              
              
                      
          
              
 
          
                
            
    </head>
</html>

