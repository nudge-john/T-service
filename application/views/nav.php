<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">      
  	<div class="container">
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
    	  	<a class="navbar-brand" href="/">T-service</a>
    	</div>
    	
    	<div id="navbar" class="navbar-collapse collapse">          
      		<ul class="nav navbar-nav navbar-right">
        		<li><a href="#">About Us <span class="sr-only">(current)</span></a></li>    			
    			 <li><a href="#">How it Works</a></li>
    			<?php if($this->session->userdata('state')){ ?>		
				<li id="login" ><a class="pointer" id="logout">LOG OUT</a></li>
				<?php }else{ ?>
				<li id="login" ><a href="/login">LOG IN</a></li>
				<?php } ?>
      		</ul>
    	</div> <!-- nav-collapse -->
  	</div> <!-- container end.-->
</nav>
<!-- Fixed navbar end. -->