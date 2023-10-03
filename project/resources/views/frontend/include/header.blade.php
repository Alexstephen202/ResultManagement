<div class="hero_area">
   
   <header class="header_section">
     <div class="container-fluid">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
         <a class="navbar-brand" href="index.html">
           <span>
             Techtalk
           </span>
         </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class=""> </span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav  ">
             <li class="nav-item active">
               <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="{{ route('about') }}"> About</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="{{ route('service') }}">Services</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
             </li>
           </ul>
           <div class="quote_btn-container">
             <a href="{{ route('login') }}" class="quote_btn">
               Login
             </a>
           </div>
         </div>
       </nav>
     </div>
   </header>