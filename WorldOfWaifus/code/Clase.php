<?php

//namespace code;

class Clase 
{
  public function phpConClase()
  {
     $var = '<code><pre>     
             class NameClass {}
             </pre></code>';
     return $var;
  }
  
  public function grid()
  {
     $var='<h1>Grid</h1>
           <p>This example demonstrates a 50%/50% split on small, medium and large devices.
           On extra small devices, it will stack (100% width).</p>      
           <p>Resize the browser window to see the effect.</p>      
  
           <div class="row">
              <div class="col-sm-6" style="background-color:yellow;">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                        
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
              <div class="col-sm-6" style="background-color:pink;">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.    
              </div>
           </div>
           <!-- /.row -->';
  
  
     return $var;
  }
  
  public function home()
  {
     $var = '<h2>Dropdowns</h2>
             <p>The .dropdown-header class is used to add headers inside the dropdown menu:</p>
             <div class="dropdown">
               <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
               <span class="caret"></span></button>
               <ul class="dropdown-menu">
                 <li class="dropdown-header">Dropdown header 1</li>
                 <li><a href="#">HTML</a></li>
                 <li><a href="#">CSS</a></li>
                 <li><a href="#">JavaScript</a></li>
                 <li class="divider"></li>
                 <li class="dropdown-header">Dropdown header 2</li>
                 <li><a href="#">About Us</a></li>
               </ul>
             </div>';
    return $var;
  }
}


