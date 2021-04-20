<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
          html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

      
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Home</b></a>
    <div class="w3-right w3-hide-small">
      
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <a href="#books11" class="w3-bar-item w3-button">Grad 11 </a>
                    <a href="#books12" class="w3-bar-item w3-button">Grad 12 </a>
                    <a href="#about" class="w3-bar-item w3-button">Fiction</a>
                    @auth
                        <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image"  src="{{url('images/l5.jpg')}}" alt="Architecture" width="1500" height="900">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Covid-19</b></span> <span class="w3-hide-small w3-text-light-grey">stay at home</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Book Section -->
  <div class="w3-container w3-padding-32" id="books11">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Grad 11 Books</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Tecnical Drawing</div>
         <img src="{{url('images/l1.jpg')}}" alt="House" style="width:100%">
      </div>
    </div>
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Biology</div>
        <img src="{{url('images/l2.jpg')}}"  alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">English</div>
        <img src="{{url('images/11English.png')}}"  alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Chamistry</div>
        <img src="{{url('images/11Chemistry.png')}}"  alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Mathematics</div>
        <img src="{{url('images/17596515.jpg')}}"  alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Phisics</div>
        <img src="{{url('images/11Physics.png')}}"  alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Amharic</div>
        <img src="{{url('images/17596515.jpg')}}"  alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Civic</div>
        <img src="{{url('images/17596515.jpg')}}"  alt="House" style="width:99%">
      </div>
    </div>
  </div>
  <!-- Grad 12 Book Section -->
  <div class="w3-container w3-padding-32" id="books12">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Grad 12 Books</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Amaharic</div>
        <img src="{{url('images/l1.jpg')}}" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Biology</div>
        
        <img src="{{url('images/l2.jpg')}}"  alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Civic</div>
        <img src="{{url('images/l3.jpg')}}"  alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Tecnical Drowing</div>
        <img src="{{url('images/l4.jpg')}}"  alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Phisics</div>
        <img src="{{url('images/12Physics.png')}}"  alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"> Matihematics</div>
        <img src="{{url('images/12Maths.png')}}"  alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Chamistry</div>
        <img src="{{url('images/12Chemistry.png')}}"  alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">English</div>
        <img src="{{url('images/12English.png')}}"  alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <!-- Fection Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Online Free Fection</h3>
    <p>Historical fiction as a contemporary Western literary genre has its foundations in the early-19th-century 
    works of Sir Walter Scott and his contemporaries in other national literatures such as the 
    Frenchman Honoré de Balzac, the American James Fenimore Cooper, and later the Russian Leo Tolstoy. 
    However, the melding of "historical" and "fiction" in individual works of literature has a long 
    tradition in most cultures; both western traditions (as early as Ancient Greek and Roman literature) 
    as well as Eastern, 
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="{{url('images/17596515.jpg')}}"   alt="John" style="width:100%">
      <h3>እቴሜቴ ሎሚ ሽታ</h3>
      <p class="w3-opacity">ደራሲ አዳም ረታ</p>
      <p>የአጫጭር ታሪኮችና የኖቬላዎች መድብል ሲሆን ጸሐፊው ወደረሳነውና ወደምናስታውሰው፣ 
      ወደአከበርነውና ወደናቅነው፣ ወደሸሸነውና ወደምንቀርበው፣ ወደፈራነውና ወደደፈርነው ዓለም ይወስደናል::</p>
     <p><a href="https://upload.wikimedia.org/wikipedia/commons/4/40/GeneralBiology.pdf" ><button href="#ifram" class="w3-button w3-light-grey w3-block">Want to Read</button></a></p>
    

    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="{{url('images/17596515.jpg')}}"  alt="Jane" style="width:100%">
      <h3>ቆንጆዎቹ </h3>
      <p class="w3-opacity">ደራሲ ሠርቅ ዳንኤል</p>
      <p>ደራሲ ሠርቅ ዳንኤል አንባቢን ጭምር በምናቡ ዘመኑን እየሳለ ያልኖረበትን ዘመን ጣእም እንዲያጣጥም 
       ያስቻለበት ድንቅ የፍቅር መጽሐፍ ነው። በኢትዮጵያ
       ዘመናዊ የአማርኛ የልቦለድ ስነጽሑፍ ታሪክ በብዙ ጸሐፍት ቁንጮ ስፍራን የያዘም ነው።</p>
       <p><a href="https://www.dclibrary.org/sites/default/files/Educator%20Books%20from%20Birth%20Form%20-%20English_0.pdf" ><button href="#ifram" class="w3-button w3-light-grey w3-block">Want to Read</button></a></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="{{url('images/17596515.jpg')}}"  alt="Mike" style="width:100%">
      <h3>ፍቅር እስከ መቃብር</h3>
      <p class="w3-opacity">ደራሲ ሀዲስ ዓለማየሁ</p>
      <p>ደራሲ ሐዲስ አለማየሁ የኖሩበትን የፊውዳሉን ዘመን ባህል፣ አስተሳሰብ እንዲሁም የአኗኗር ዘይቤ
       በዘመኑ ያልተፈጠረን አንባቢን ጭምር በምናቡ ዘመኑን እየሳለ ያልኖረበትን ዘመን ጣእም እንዲያጣጥም 
       ያስቻለበት ድንቅ የፍቅር መጽሐፍ ነው። </p>
       <p><a href="https://upload.wikimedia.org/wikipedia/commons/4/40/GeneralBiology.pdf" ><button href="#ifram" class="w3-button w3-light-grey w3-block">Want to Read</button></a></p>
    
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="{{url('images/17596515.jpg')}}"  alt="Dan" style="width:100%">
      <h3>ከአድማስ ባሻገር </h3>
      <p class="w3-opacity"> ደራሲ በዓሉ ግርማ</p>
      <p>ደራሲ በዓሉ ግርማ በኢሊባቡር ክፍለ ሀገር ሱጴ በምትባል ሥፍራ በ1928 ዓ.ም.
       ተወለዱ። ዕድሜያቸው ለትምሕርት
       ሲደርስ የአንደኛ ደረጃ ትምሕርታቸውን በልዕልት ዘነበወርቅ 
      ትምሕርት ቤት ፤ ሁለተኛ ደረጃ ትምሕርታቸውን ደግሞ በጄኔራል ዊንጌት
       ትምሕርት ቤት አጠናቀዋል። </p>
       <p><a href="https://www.dclibrary.org/sites/default/files/Educator%20Books%20from%20Birth%20Form%20-%20English_0.pdf" ><button href="#ifram" class="w3-button w3-light-grey w3-block">Want to Read</button></a></p>
    
    </div>
  </div>


<!-- End page content -->
</div>


<iframe id="ifram" name="iframe_a" height="300px" width="100%" ></iframe>


<!-- Footer -->

<footer class="w3-center w3-black w3-padding-16">
 <p>Some copyright info or perhaps some author
  info for an &lt;article&gt;?</p>
</footer>

</body>
</html>
