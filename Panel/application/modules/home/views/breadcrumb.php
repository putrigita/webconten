<?php

if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''){
	
    echo'';
}else{
	echo'<section class="content-header">
			<h1 onclick="javascript:history.go(-1)" style="cursor:pointer">
            	<i class="fa fa-chevron-circle-left"></i> Back
    		</h1>
    	</section>';
}

?>