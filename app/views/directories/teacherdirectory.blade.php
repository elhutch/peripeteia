 @extends('layout')


 @section('content')
     <div class="row">
       <div class="large-12 columns">
         <h1>Welcome to Foundation</h1>

         <div class="row search">
           <div class=" small-12 columns">
             <div class="row collapse">
               <!-- Search field -->
               <div class="small-12 large-12  columns ">
                 <div class=" keyword">
                   <a href="#" data-dropdown="drop3">
                     Keyword
                     <div class="arrow-down"></div>
                   </a>
                   <ul id="drop3" class="f-dropdown content" data-dropdown-content style="position: absolute;  left: -99999px;">
                     <li><a href="#"> Keyword</a></li>
                     <li><a href="#"> Keyword</a></li>
                     <li><a href="#">Keyword</a></li>
                   </ul>
                 </div>
                 <i class="fi-magnifying-glass"></i>
                 <input type="text" class="search-field" placeholder="your search ">
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
