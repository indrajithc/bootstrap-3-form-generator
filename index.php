<!DOCTYPE html>
<html>
<head>
	<title>form generator </title>


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome-animation.min.css" rel="stylesheet">


    <style type="text/css">
    .main_form_here{
    	min-height: 100px;
    	background-color: #E4EDE7;
    	padding: 10px;
    }
    .draggable {
    	background-color: white;
    }
   
   .tab-pane  {
   	padding: 15px;
   }
.component {
    cursor: all-scroll;
    padding: 10px;
} 

         .sortForm {
         	margin: 5px 0px 5px 0px;
         }

         .options-show {
         	padding: 20px;
         	margin: 10px;
         }
 
    </style>



    <script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>

<div class="container">

	
	<div class="panel">
    	<div class="panel-heading">
	        <h3 class="title-hero">
	            Elements
	        </h3>

	        <div>
	        	<input type="checkbox" id="pull-right-bloc" checked="checked" name=""><span style="padding-left: 5px;">prevent Right Click option</span> 
	        </div>
	    </div>
    	<div class="panel-body">


    	<div class="row">
    		<div class="options-show hidden " id="for-text-f">
    			<form>  
			        	<div class=" col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox" id="x45required">
		                    <label class="col-sm-7 control-label">required</label>
		                </div> 
						<div class=" col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">type</label>
		                    <div class="col-sm-7">
		                    <select class="form-control" id="x45type" name="x45type" placeholder="Enter">
		                    	<option value="text">text</option>
		                    	<option value="number">number</option> 

		                    </select> 
		                    </div>
		                </div> 

		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">placeholder</label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x45placeholder" name="x45placeholder" placeholder="Enter">
		                    </div>
		                </div> 
		                


			        	<div class="col-md-12 form-group">

		                    <div class="col-sm-offset-3 col-sm-7">
		                        <input type="button" class="btn btn-default" value="update" id="x45" data="">
		                        <input type="button" class="btn btn-danger dremove" value="remove"   data="">
		                    </div>
		                </div> 

    			</form>
    		</div>

    		<div class="options-show hidden " id="for-label-f">
    			<form>  
			        	<div class=" col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">value</label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x43value" name="x43value" placeholder="Enter">
		                    </div>
		                </div> 

		                

			        	<div class="col-md-12 form-group">

		                    <div class="col-sm-offset-3 col-sm-7">
		                        <input type="button" class="btn btn-default" value="update" id="x43" data=""> 
		                    </div>
		                </div> 


    			</form>
    		</div>
    		<div class="options-show hidden " id="for-number-f">
    				<form>  
			        	<div class=" col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox" id="x48required">
		                    <label class="col-sm-7 control-label">required</label>
		                </div> 
						<div class=" col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">type</label>
		                    <div class="col-sm-7">
		                    <select class="form-control" id="x48type" name="x48type" placeholder="Enter">
		                    	<option value="text">text</option>
		                    	<option value="number">number</option> 
		                    	<option value="date">date</option> 

		                    </select> 
		                    </div>
		                </div> 

		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">placeholder</label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x48placeholder" name="x48placeholder" placeholder="Enter">
		                    </div>
		                </div> 
		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">min</label>
		                    <div class="col-sm-7">
		                        <input type="number" required class="form-control" id="x48min" name="x48min" placeholder="Enter">
		                    </div>
		                </div> 
		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">max</label>
		                    <div class="col-sm-7">
		                        <input type="number" required class="form-control" id="x48max" name="x48max" placeholder="Enter">
		                    </div>
		                </div> 
		                


			        	<div class="col-md-12 form-group">

		                    <div class="col-sm-offset-3 col-sm-7">
		                        <input type="button" class="btn btn-default" value="update" id="x48" data="">
		                        <input type="button" class="btn btn-danger dremove" value="remove"   data="">
		                    </div>
		                </div> 

    			</form>
    		</div>


    		<div class="options-show hidden " id="for-textarea-f">
    			<form>  
			        	<div class=" col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox" id="x40required">
		                    <label class="col-sm-7 control-label">required</label>
		                </div> 

		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">placeholder</label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x40placeholder" name="x40placeholder" placeholder="Enter">
		                    </div>
		                </div> 
		                


			        	<div class="col-md-12 form-group">

		                    <div class="col-sm-offset-3 col-sm-7">
		                        <input type="button" class="btn btn-default" value="update" id="x40" data="">
		                        <input type="button" class="btn btn-danger dremove" value="remove"   data="">
		                    </div>
		                </div> 

    			</form>
    		</div>

    		<div class="options-show hidden " id="for-label-f">
    			<form>  
			        	<div class=" col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">value</label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x43value" name="x43value" placeholder="Enter">
		                    </div>
		                </div> 

		                

			        	<div class="col-md-12 form-group">

		                    <div class="col-sm-offset-3 col-sm-7">
		                        <input type="button" class="btn btn-default" value="update" id="x43" data=""> 
		                    </div>
		                </div> 


    			</form>
    		</div>

    		<div class="options-show hidden " id="for-date-f">
    				<form>  
			        	<div class=" col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox" id="x47required">
		                    <label class="col-sm-7 control-label">required</label>
		                </div> 

		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">placeholder</label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x47placeholder" name="x47placeholder" placeholder="Enter">
		                    </div>
		                </div> 
		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">format </label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x47format" name="x47format" placeholder="Enter" value='mm-dd-yyyy'>
		                    </div>
		                    </div>
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">min day </label>
		                    <div class="col-sm-7">
		                        <input type="number" required class="form-control" id="x47fdat" name="x47fdat" placeholder="eg 5 for today+five days back">
		                    </div>
		                </div> 
		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">max day</label>
		                    <div class="col-sm-7">
		                        <input type="number" required class="form-control" id="x47eday" name="x47eday" placeholder=" eg 1  for today+one day ">
		                    </div>
		                </div> 
		                


			        	<div class="col-md-12 form-group">

		                    <div class="col-sm-offset-3 col-sm-7">
		                        <input type="button" class="btn btn-default" value="update" id="x47" data="">
		                        <input type="button" class="btn btn-danger dremove" value="remove"   data="">
		                    </div>
		                </div> 

    			</form>
    		</div>


    		<div class="options-show  hidden " id="for-buttont-f">
    				<form> 
    								 

    				                
    					        	<div class="col-md-4 form-group">
    					        		<input class=" col-sm-1" type="checkbox">
    				                    <label class="col-sm-4 control-label">value</label>
    				                    <div class="col-sm-7">
    				                        <input type="text" required class="form-control" id="x41value" name="x42value" placeholder="Enter">
    				                    </div>
    				                </div> 
    				                
    					        	<div class="col-md-4 form-group">
    					        		<input class=" col-sm-1" type="checkbox">
    				                    <label class="col-sm-3 control-label">value</label>
    				                    <div class="col-sm-9">
    				                        
    				                                <input type='radio' id='x41radio_1' name='x41size' value='btn-sm' />small
											        <input type='radio' id='x41radio_2' name='x41size' value='btn-lg' /> larger
											        <input type='radio' id='x41radio_3' name='x41size' checked="checked" value='btn-' /> default
    				                    </div>
    				                </div> 
    				                

    					        	<div class="col-md-4 form-group">
    					        		<input class=" col-sm-1" type="checkbox">
    				                    <label class="col-sm-2 control-label">color</label>
    				                    <div class="col-sm-10">
    				                        
    				                                <input type='radio' id='x41radioc_1' name='x41color' checked="checked" value='btn-default' /><span class="btn-default">default</span>
    				                                <input type='radio' id='x41radioc_2' name='x41color' value='btn-primary' /><span class="btn-primary">primary</span>
    				                                <input type='radio' id='x41radioc_3' name='x41color' value='btn-info' /><span class="btn-info">info</span>
    				                                <input type='radio' id='x41radioc_4' name='x41color' value='btn-success' /><span class="btn-success">success</span>
    				                                <input type='radio' id='x41radioc_5' name='x41color' value='btn-warning' /><span class="btn-warning">warning</span>
    				                                <input type='radio' id='x41radioc_6' name='x41color' value='btn-danger' /><span class="btn-danger">danger</span>

    				                    </div>
    				                </div> 
    				                



    					        	<div class="col-md-12 form-group">

    				                    <div class="col-sm-offset-3 col-sm-7">	                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x47format" name="x47format" placeholder="Enter" value="mm-dd-yyyy">
		                    </d
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">min day </label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x47fdat" name="x47fdat" placeholder="eg -5d  for today+five days back">
		                    </div>
		                </div> 
		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">max day</label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x47eday" name="x47eday" placeholder=" eg 1d  for today+one day ">
		                    </div>
		                </div> 
		                
    				                        <input type="button" class="btn btn-default" value="update" id="x41" data="">
    				                        <input type="button" class="btn btn-danger dremove" value="remove"   data="">
    				                    </div>
    				                </div> 

    			</form>
    		</div>


    		<div class="options-show  hidden " id="for-button-f">
    			<form> 
    								<div class=" col-md-4 form-group">
    					        		<input class=" col-sm-1" type="checkbox">
    				                    <label class="col-sm-4 control-label">type</label>
    				                    <div class="col-sm-7">
    				                    <select class="form-control" id="x42type" name="x42type" placeholder="Enter">
    				                    	<option value="button">button</option>
    				                    	<option value="submit">submit</option>

    				                    </select> 
    				                    </div>
    				                </div> 

    				                
    					        	<div class="col-md-4 form-group">
    					        		<input class=" col-sm-1" type="checkbox">
    				                    <label class="col-sm-4 control-label">value</label>
    				                    <div class="col-sm-7">
    				                        <input type="text" required class="form-control" id="x42value" name="x42value" placeholder="Enter">
    				                    </div>
    				                </div> 
    				                
    					        	<div class="col-md-4 form-group">
    					        		<input class=" col-sm-1" type="checkbox">
    				                    <label class="col-sm-3 control-label">value</label>
    				                    <div class="col-sm-9">
    				                        
    				                                <input type='radio' id='x42radio_1' name='x42size' value='btn-sm' />small
											        <input type='radio' id='x42radio_2' name='x42size' value='btn-lg' /> larger
											        <input type='radio' id='x42radio_3' name='x42size' checked="checked" value='btn-' /> default
    				                    </div>
    				                </div> 
    				                

    					        	<div class="col-md-4 form-group">
    					        		<input class=" col-sm-1" type="checkbox">
    				                    <label class="col-sm-2 control-label">color</label>
    				                    <div class="col-sm-10">
    				                        
    				                                <input type='radio' id='x42radioc_1' name='x42color' checked="checked" value='btn-default' /><span class="btn-default">default</span>
    				                                <input type='radio' id='x42radioc_2' name='x42color' value='btn-primary' /><span class="btn-primary">primary</span>
    				                                <input type='radio' id='x42radioc_3' name='x42color' value='btn-info' /><span class="btn-info">info</span>
    				                                <input type='radio' id='x42radioc_4' name='x42color' value='btn-success' /><span class="btn-success">success</span>
    				                                <input type='radio' id='x42radioc_5' name='x42color' value='btn-warning' /><span class="btn-warning">warning</span>
    				                                <input type='radio' id='x42radioc_6' name='x42color' value='btn-danger' /><span class="btn-danger">danger</span>

    				                    </div>
    				                </div> 
    				                



    					        	<div class="col-md-12 form-group">

    				                    <div class="col-sm-offset-3 col-sm-7">
    				                        <input type="button" class="btn btn-default" value="update" id="x42" data="">
    				                        <input type="button" class="btn btn-danger dremove" value="remove"   data="">
    				                    </div>
    				                </div> 

    			</form>
    		</div>


    		<div class="options-show  hidden " id="for-select-f">
    			   			<form>  
			        	<div class=" col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox" id="x49required">
		                    <label class="col-sm-7 control-label">required</label>
		                </div> 

		                
			        	<div class="col-md-4 form-group">
			        		<input class=" col-sm-1" type="checkbox">
		                    <label class="col-sm-4 control-label">placeholder</label>
		                    <div class="col-sm-7">
		                        <input type="text" required class="form-control" id="x49placeholder" name="x49placeholder" placeholder="Enter">
		                    </div>
		                </div> 
		                


			        	<div class="col-md-12 form-group">

		                    <div class="col-sm-offset-3 col-sm-7">
		                        <input type="button" class="btn btn-default" value="update" id="x49" data="">
		                        <input type="button" class="btn btn-danger dremove" value="remove"   data="">
		                    </div>
		                </div> 

    			</form>
    		</div>


    	</div>



    	<div class="row">
    		<div class=" col-md-6">


    		<!-- Nav tabs -->
    		<ul class="nav nav-tabs" role="tablist">
    		  <li class="active"><a href="#a0" role="tab" data-toggle="tab">input</a></li>
    		  <li><a href="#a1" role="tab" data-toggle="tab">button</a></li>
    		  <li><a href="#a2" role="tab" data-toggle="tab">Checkboxes</a></li>
    		  <li><a href="#a3" role="tab" data-toggle="tab">select</a></li>
    		</ul>

    		<!-- Tab panes -->
    		<div class="tab-content">
    		  <div class="tab-pane active" id="a0">
    		  	        <form class="form-horizontal bordered-row" data-parsley-validate>
    		  	        	<div class="row connectedSortable-from-style connectedFrom"  > 

	         		<div class="col-md-12 component draggable ">
	 		        	<div class="form-group">
	 	                    <label class="col-sm-3 control-label">text</label>
	 	                    <div class="col-sm-8">
	 	                        <input type="text" required class="form-control" id="textinput" name="textinput" placeholder="Enter text">
	 	                    </div>
	 	                </div>
	         		</div>  


	        		<div class="col-md-12 component draggable ">
	        		
	 		        	<div class="form-group">
	 	                    <label class="col-sm-3 control-label">number</label>
	 	                    <div class="col-sm-8">
	 	                        <input type="number" required class="form-control" id="numberinput" name="numberinput" placeholder="Enter number">
	 	                    </div>
	 	                </div>
	        		</div> 			         		

	        		<div class="col-md-12 component draggable ">
	        		
	 		        	<div class="form-group">
	 	                    <label class="col-sm-3 control-label">number</label>
	 	                    <div class="col-sm-8">
	 	                        <input type="text" data-parsley-type="number" required class="form-control" id="pnumberinput" name="pnumberinput" placeholder="Enter number">
	 	                    </div>
	 	                </div>
	        		</div> 			         		

	        		<div class="col-md-12 component draggable ">
	        		
	 		        	<div class="form-group">
	 	                    <label class="col-sm-3 control-label">integer</label>
	 	                    <div class="col-sm-8">
	 	                        <input type="number" data-parsley-type="integer" required class="form-control" id="integerinput" name="integerinput" placeholder="Enter integer">
	 	                    </div>
	 	                </div> 
	 	                </div>		

	        		<div class="col-md-12 component draggable ">
	        		
	 		        	<div class="form-group">
	 	                    <label class="col-sm-3 control-label">digits</label>
	 	                    <div class="col-sm-8">
	 	                        <input type="number" data-parsley-type="digits" required class="form-control" id="digitsinput" name="digitsinput" placeholder="Enter digits">
	 	                    </div>
	 	                </div>
	        		</div> 			         		


	        		        		<div class="col-md-12 component draggable ">
	        				        	<div class="form-group">
	        			                    <label class="col-sm-3 control-label">alphanumeric string</label>
	        			                    <div class="col-sm-8">
	        			                        <input type="text" data-parsley-type="alphanum" required class="form-control" id="alphanuminput" name="alphanuminput" placeholder="Enter alphanumeric string">
	        			                    </div>
	        			                </div>
	        		        		</div>  


	        		        		<div class="col-md-12 component draggable ">
	        				        	<div class="form-group">
	        			                    <label class="col-sm-3 control-label">url</label>
	        			                    <div class="col-sm-8">
	        			                        <input type="url" data-parsley-type="url" required class="form-control" id="urlinput" name="urlinput" placeholder="Enter url">
	        			                    </div>
	        			                </div>
	        		        		</div>  



        		        		<div class="col-md-12 component draggable ">
        				        	<div class="form-group    has-feedback  ">
        				        		<label class="col-sm-3  control-label " for="url">date:</label>
        				        		<div class="col-sm-8">
        				        			<input type="text"  data-type="date"  class="form-control" id="dateinput" placeholder="Enter date" name="dateinput"   data-date-format="dd-mm-yyyy">  
        				        		</div>
        				        	</div>
        		        		</div>  




						

	        		<div class="col-md-12 component draggable ">
	        		
	 		        	<div class="form-group">
	 	                    <label class="col-sm-3 control-label">password</label>
	 	                    <div class="col-sm-8"Text>
	 	                        <input type="password" required class="form-control" id="passwordinput" name="passwordinput"  placeholder="Enter password">
	 	                    </div>
	 	                </div>
	        		</div> 			         		


	        		<div class="col-md-12 component draggable ">
	        		
	 		        	<div class="form-group">
	 	                    <label class="col-sm-3 control-label">re-password</label>
	 	                    <div class="col-sm-8">
	 	                        <input type="password" data-parsley-equalto="#passwordinput" required class="form-control" id="rpasswordinput" name="rpasswordinput"  placeholder="re-enter password">
	 	                    </div>
	 	                </div>
	        		</div> 			         		



	        		<div class="col-md-12 component draggable ">
	        		
	 		        	<div class="form-group">
	 	                    <label class="col-sm-3 control-label">Search</label>
	 	                    <div class="col-sm-8">
	 	                        <input type="search"  id="searchinput" name="searchinput"  required class="form-control"  placeholder="Enter text">
	 	                    </div>
	 	                </div>

	        		</div> 			         		



	        		<div class="col-md-12 component draggable ">
	        		<div class="form-group">
	        		  <label class="col-md-3 control-label" for="prependedtext">Prepended Text</label>
	        		  <div class="col-md-8">
	        		    <div class="input-group">
	        		      <span class="input-group-addon">prepend</span>
	        		      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="placeholder" type="text">
	        		    </div> 
	        		  </div>
	        		</div>

	        		</div> 			         		



	        		<div class="col-md-12 component draggable ">
	        		<div class="form-group">
	        		  <label class="col-md-3 control-label" for="appendedtext">Appended Text</label>
	        		  <div class="col-md-8">
	        		    <div class="input-group">
	        		      <input id="appendedtext" name="appendedtext" class="form-control" placeholder="placeholder" type="text">
	        		      <span class="input-group-addon">append</span>
	        		    </div> 
	        		  </div>
	        		</div>
	        		</div> 			         		



	        		<div class="col-md-12 component draggable ">
	        		<div class="form-group">
	        		  <label class="col-md-3 control-label" for="prependedcheckbox">Prepended Checkbox</label>
	        		  <div class="col-md-8">
	        		    <div class="input-group">
	        		      <span class="input-group-addon">     
	        		          <input type="checkbox">     
	        		      </span>
	        		      <input id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="placeholder">
	        		    </div> 
	        		  </div>
	        		</div>
	        		</div> 			         		



	        		<div class="col-md-12 component draggable ">
	        		<div class="form-group">
	        		  <label class="col-md-3 control-label" for="appendedcheckbox">Appended Checkbox</label>
	        		  <div class="col-md-8">
	        		    <div class="input-group">
	        		      <input id="appendedcheckbox" name="appendedcheckbox" class="form-control" type="text" placeholder="placeholder">
	        			        <span class="input-group-addon">     
	        		          <input type="checkbox">     
	        		      </span>
	        		    </div> 
	        		  </div>
	        		</div>
	        		</div> 			         		



	        		<div class="col-md-12 component draggable ">
	        		<div class="form-group">
	        		  <label class="col-md-3 control-label" for="buttondropdown">Button Drop Down</label>
	        		  <div class="col-md-8">
	        		    <div class="input-group">
	        		      <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="placeholder" type="text">
	        		      <div class="input-group-btn">
	        		        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	        		          Action
	        		          <span class="caret"></span>
	        		        </button>
	        		        <ul class="dropdown-menu pull-right">
	        		          <li><a href="#">Option one</a></li>
	        		          <li><a href="#">Option two</a></li>
	        		          <li><a href="#">Option three</a></li>
	        		        </ul>
	        		      </div>
	        		    </div>
	        		  </div>
	        		</div>
	        		</div> 			         		




	        		<div class="col-md-12 component draggable ">
	        		<div class="form-group">
	        		  <label class="col-md-3 control-label" for="textarea">Text Area</label>
	        		  <div class="col-md-8">                     
	        		    <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
	        		  </div>
	        		</div>
	        		</div> 			         		



    		<div class="col-md-12 component draggable ">
	        	<div class="form-group">
                    <label class="col-sm-3 control-label">file</label>
                    <div class="col-sm-8">
                        <input type="file" required class="form-control" id="fileinput" name="fileinput" placeholder="select file">
                    </div>
                </div>
    		</div>  


	        		<div class="col-md-12 component draggable ">
	        		
	        		</div> 			         		




    		                  </div>

    		  	        </form>


    		  </div>

    		  <div class="tab-pane" id="a1">
    		   <form class="form-horizontal bordered-row" data-parsley-validate>
	  	        	<div class="row connectedSortable-from-style connectedFrom"  > 
 


			  	        	<div class="col-md-12 component draggable ">
			  	        	
				  	        	<div class="content-box text-center">
				  	        	    <button class="btn btn-primary">Validate form</button>
				  	        	</div>
			  	        	</div> 

			  	        	<div class="col-md-12 component draggable ">
			  	        	
				  	        	<div class="content-box text-center">
				  	        	    <button class="btn btn-success">Validate form</button>
				  	        	</div>
			  	        	</div> 

			  	        	<div class="col-md-12 component draggable ">
			  	        	
				  	        	<div class="content-box text-center">
				  	        	    <button class="btn btn-warning">Validate form</button>
				  	        	</div>
			  	        	</div> 

			  	        	<div class="col-md-12 component draggable ">
			  	        	
				  	        	<div class="content-box text-center">
				  	        	    <button class="btn btn-danger">Validate form</button>
				  	        	</div>
			  	        	</div> 

			  	        	<div class="col-md-12 component draggable ">
			  	        	
				  	        	<div class="content-box text-center">
				  	        	    <button class="btn btn-info">Validate form</button>
				  	        	</div>
			  	        	</div> 
			  	        	<div class="col-md-12 component draggable ">
			  	        	
				  	        	<div class="content-box text-center">
				  	        	    <button class="btn btn-default">Validate form</button>
				  	        	</div>
			  	        	</div> 

	  	        	       		<div class="col-md-12 component draggable ">
	  	        	       		
	  	        			        	<div class="form-group">	  	        			        	
	  	        		                    <div class="col-md-offset-3 col-sm-8">
	  	        		                        <input type="submit"  id="submit" name="submit" class="form-control btn btn-default btn-lg"  value="submit">
	  	        		                    </div>
	  	        		                </div>

	  	        	       		</div> 			         		




	  	        	       		<div class="col-md-12 component draggable ">
	  	        	       		
	  	        			        	<div class="form-group">	  	        			        	
	  	        		                    <div class="col-md-offset-3 col-sm-3">
	  	        		                        <input type="submit"  id="submit" name="submit" class="form-control  btn btn-default"  value="submit">
	  	        		                    </div>
	  	        		                </div>

	  	        	       		</div> 			         		

	  	        	       		<div class="col-md-12 component draggable ">
	  	        	       		
	  	        			        	<div class="form-group">
	  	        		                    <label class="col-sm-3 control-label">Search</label>
	  	        		                    <div class="col-sm-8">
	  	        		                        <input type="search"  id="searchinput" name="searchinput"    class="form-control"  placeholder="Enter text">
	  	        		                    </div>
	  	        		                </div>

	  	        	       		</div> 			         		


	  	        	       		<div class="col-md-12 component draggable  text-right">
	  	        	       		<div class="btn-group text-right" role="group" aria-label="...">
	  	        	       		  <button type="button" class="btn btn-default">Left</button>
	  	        	       		  <button type="button" class="btn btn-default">Middle</button>
	  	        	       		  <button type="button" class="btn btn-default">Right</button>
	  	        	       		</div>

	  	        	       		</div>

	  	        	       		<div class="col-md-12 component draggable  ">
	  	        	       		<div class="col-md-offset-3 col-md-6 btn-group" role="group" aria-label="...">
	  	        	       		  <button type="button" class="btn btn-default">Left</button>
	  	        	       		  <button type="button" class="btn btn-default">Middle</button>
	  	        	       		  <button type="button" class="btn btn-default">Right</button>
	  	        	       		</div>

	  	        	       		</div> 			         		

	  	        	       		<div class="col-md-12 component draggable ">
	  	        	       		
	  	        	       		<div class="btn-group text-left" role="group" aria-label="...">
	  	        	       		  <button type="button" class="btn btn-default">Left</button>
	  	        	       		  <button type="button" class="btn btn-default">Middle</button>
	  	        	       		  <button type="button" class="btn btn-default">Right</button>
	  	        	       		</div>


	  	        	       		</div> 	 		

	  	        	       		<div class="col-md-12 component draggable ">
	  	        	       		
	  	        	       		<div class="btn-group text-center" role="group" aria-label="...">
	  	        	       		  <button type="button" class="btn btn-default">Left</button> 
	  	        	       		  <button type="button" class="btn btn-default">Right</button>
	  	        	       		</div>


	  	        	       		</div> 			         		

	  	        	       		<div class="col-md-12 component draggable ">
	  	        	       		

	  	        	       		</div> 			         		

	  	        	       		<div class="col-md-12 component draggable ">
	  	        	       		

	  	        	       		</div> 			         		




	  	        	</div>

    		  	</form>
 



    		  </div>


    		  <div class="tab-pane" id="a2"> 

    		   <form class="form-horizontal bordered-row" data-parsley-validate>
	  	        	<div class="row connectedSortable-from-style connectedFrom"  > 
 
 <div class="col-md-12 component draggable ">
 <div class="form-group">
   <label class="col-md-3 control-label" for="radios">Multiple Radios</label>
   <div class="col-md-8">
   <div class="radio">
     <label for="radios-0">
       <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
       Option one
     </label>
 	</div>
   <div class="radio">
     <label for="radios-1">
       <input type="radio" name="radios" id="radios-1" value="2">
       Option two
     </label>
 	</div>
   </div>
 </div> 
 </div>

 <div class="col-md-12 component draggable "><!-- Multiple Radios (inline) -->
 <div class="form-group">
   <label class="col-md-3 control-label" for="radios">Inline Radios</label>
   <div class="col-md-8"> 
     <label class="radio-inline" for="radios-0">
       <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
       1
     </label> 
     <label class="radio-inline" for="radios-1">
       <input type="radio" name="radios" id="radios-1" value="2">
       2
     </label> 
     <label class="radio-inline" for="radios-2">
       <input type="radio" name="radios" id="radios-2" value="3">
       3
     </label> 
     <label class="radio-inline" for="radios-3">
       <input type="radio" name="radios" id="radios-3" value="4">
       4
     </label>
   </div>
 </div>
 </div>


 <div class="col-md-12 component draggable "><!-- Multiple Checkboxes -->
 <div class="form-group">
   <label class="col-md-3 control-label" for="checkboxes">Multiple Checkboxes</label>
   <div class="col-md-8">
   <div class="checkbox">
     <label for="checkboxes-0">
       <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
       Option one
     </label>
 	</div>
   <div class="checkbox">
     <label for="checkboxes-1">
       <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
       Option two
     </label>
 	</div>
   </div>
 </div>
 </div>


 <div class="col-md-12 component draggable "><!-- Multiple Checkboxes (inline) -->
 <div class="form-group">
   <label class="col-md-3 control-label" for="checkboxes">Inline Checkboxes</label>
   <div class="col-md-8">
     <label class="checkbox-inline" for="checkboxes-0">
       <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
       1
     </label>
     <label class="checkbox-inline" for="checkboxes-1">
       <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
       2
     </label>
     <label class="checkbox-inline" for="checkboxes-2">
       <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
       3
     </label>
     <label class="checkbox-inline" for="checkboxes-3">
       <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
       4
     </label>
   </div>
 </div>
 </div> 


	  	        	</div>
	  	        </form>


    		  </div>

    		  <div class="tab-pane" id="a3">

	      		   <form class="form-horizontal bordered-row" data-parsley-validate>
	  	  	        	<div class="row connectedSortable-from-style connectedFrom"  > 
	  


  	        	        		<div class="col-md-12 component draggable ">
  	        			        	<div class="form-group">
  	        		                    <label class="col-sm-3 control-label">select</label>
  	        		                    <div class="col-sm-8">
  	        		                        <select  required class="form-control" id="optioninput" name="optioninput" placeholder="Enter option">
  	        		                        	<option>item1</option>
  	        		                        	<option>item1</option>
  	        		                        	<option>item1</option>
  	        		                        	<option>item1</option>
  	        		                        </select>
  	        		                    </div>
  	        		                </div>
  	        	        		</div>  


	  	  	        	</div>
	  	  	        </form>



    		  </div>
    		</div>








    				       

    		</div>


    		<div class=" col-md-6">
    				        <form class="form-horizontal bordered-row" data-parsley-validate>
    				        	<div class="row droppable  main_form_here"  >
    				        		



    			                </div> 
    				        </form>

    				        <div class="text-center" style="padding: 20px;">
    				        	<button class="btn btn-success btn-sm" id="final-show"> generate code</button>
    				        </div>

    		</div>
    	</div>
	         


	    </div>
    	<div class="panel-footer">

	        <h5 class="title-hero">
	            Final
	        </h5>

	        <div class="row">
	        	<textarea class="col-md-12" id="previ_colde" disabled="disabled"></textarea>

	        </div>
	        <div class="row">
	        	<button id="copy_me_toc" class="btn btn-info">copy ^</button>
	        	
	        </div>

	    </div>
	</div>


</div>













 






    <script src="js/jquery.form.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script> 
    <script src="js/autosize.min.js"></script> 


    <script type="text/javascript">
    	
    $global_data = null;
    $global_script = null;
    $(document).ready( function() {



    	$( ".droppable>.draggable, .droppable" ).sortable({
    	     connectWith: ".droppable", 
                 activate: function( event, ui ) { 
                 	$('.droppable>.draggable').addClass('sortForm');
                 },
                 deactivate: function( event, ui ) { 
                 	$('.droppable>.draggable').removeClass('sortForm'); 
                 }
    	   }).disableSelection();



    	$('.draggable').draggable({
    	    revert: "invalid",
    	    stack: ".draggable",
    	    helper: 'clone'
    	});
    	$('.droppable').droppable({
    	    accept: ".connectedFrom>.draggable",
                 activate: function( event, ui ) { 
                 	$('.droppable>.draggable').addClass('sortForm');
                 },
                 deactivate: function( event, ui ) { 
                 	$('.droppable>.draggable').removeClass('sortForm'); 
                 },
    	    drop: function (event, ui) {
    	        var droppable = $(this);
    	        var draggable = ui.draggable ;
    	        // Move draggable into droppable
    	        draggable.clone().appendTo(droppable);
    	        //draggable.css({top: '5px', left: '5px'});
    	    }
    	});


    	function unchec() {

    			$checkbox = $('.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val(""); 
    		    $global_data = null;
    	}





    	$(document).on('mousedown', 'input[type=submit], input[type=button]', function(e) { if( e.button == 2 ) { 
    		if($(this).closest('form').find('.droppable').length == 0) return;
    			$('.options-show').removeClass('hidden');
    			$('.options-show').addClass('hidden');
    			$('#for-button-f').removeClass('hidden');


				unchec() ;

 
				  
				    $type = $(this).attr('type');
				if (typeof $type !== "undefined") {
					$this_ = $('#x42type');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);
				    $($this_).val($type +"");
				}

				    $type = $(this).attr('value');
				if (typeof $type !== "undefined") {
					$this_ = $('#x42value');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);
				    $($this_).val($type +"");
				}


				$classes = $(this).attr('class');

				$classSplit = $classes.split(" ");
				console.log($classSplit);

					$('#x42radio_3').prop('checked', true);
				if($classSplit.includes('btn-sm')){
					$this_ = $('#x42radio_1');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-lg')) {
					$this_ = $('#x42radio_2');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}



				if($classSplit.includes('btn-default')) {
					$this_ = $('#x42radioc_1');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-primary')) {
					$this_ = $('#x42radioc_2');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-info')) {
					$this_ = $('#x42radioc_3');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-success')) {
					$this_ = $('#x42radioc_4');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-warning')) {
					$this_ = $('#x42radioc_5');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-danger')) {
					$this_ = $('#x42radioc_6');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
 
				




				    $global_data = $(this);



    		}});


    	$(document).on('mousedown', 'button', function(e) { if( e.button == 2 ) { 
    		if($(this).closest('form').find('.droppable').length == 0) return;
    			$('.options-show').removeClass('hidden');
    			$('.options-show').addClass('hidden');
    			$('#for-buttont-f').removeClass('hidden');


unchec() ;

     $type = $(this).text();
				if (typeof $type !== "undefined") {
					$this_ = $('#x41value');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);
				    $($this_).val($type +"");
				}


				$classes = $(this).attr('class');

				$classSplit = $classes.split(" ");
				console.log($classSplit);

					$('#x41radio_3').prop('checked', true);
				if($classSplit.includes('btn-sm')){
					$this_ = $('#x41radio_1');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-lg')) {
					$this_ = $('#x41radio_2');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}



				if($classSplit.includes('btn-default')) {
					$this_ = $('#x41radioc_1');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-primary')) {
					$this_ = $('#x41radioc_2');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-info')) {
					$this_ = $('#x41radioc_3');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-success')) {
					$this_ = $('#x41radioc_4');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-warning')) {
					$this_ = $('#x41radioc_5');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
				if($classSplit.includes('btn-danger')) {
					$this_ = $('#x41radioc_6');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);

					$($this_).prop('checked', true);
				}
 
				


				    $global_data = $(this);



    		}}); 

    	$(document).on('mousedown', 'label.control-label', function(e) { if( e.button == 2 ) { 
    		if($(this).closest('form').find('.droppable').length == 0) return;
    			$('.options-show').removeClass('hidden');
    			$('.options-show').addClass('hidden');
    			$('#for-label-f').removeClass('hidden');


					unchec() ;
 
				    $type = $(this).text();
				if (typeof $type !== "undefined") {
					$this_ = $('#x43value');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);
				    $($this_).val($type +"");
				}




				    $global_data = $(this);
    		}});

    	$(document).on('mousedown', 'input[type=text], input[type=password]', function(e) { if( e.button == 2 ) { 
    		if($(this).closest('form').find('.droppable').length == 0) return;
    			$('.options-show').removeClass('hidden');
    			$('.options-show').addClass('hidden');

					unchec() ;
    			if($(this).attr('data-type') == "date"){
    				$('#for-date-f').removeClass('hidden');

					fucntionForDate($(this));

    			} else if($(this).attr('data-parsley-type') == "digits" || $(this).attr('data-parsley-type') == "number" || $(this).attr('data-parsley-type') == "integer" ){
    				$('#for-number-f').removeClass('hidden');

					fucntionForNumber($(this));

    			} else  {    				
    				$('#for-text-f').removeClass('hidden');
    			 

				    $type = $(this).attr('type');
				if (typeof $type !== "undefined") {
					$this_ = $('#x45type');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);
				    $($this_).val($type +"");
				}

				    $type = $(this).attr('placeholder');
				if (typeof $type !== "undefined") {
					$this_ = $('#x45placeholder');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);
				    $($this_).val($type +"");
				}
 
				    $type = $(this).attr('required');
				if (typeof $type !== "undefined") {
					$checkbox = $('#x45required');
				    $($checkbox).prop('checked', true);
				}
 

				}
 
				    $global_data = $(this);


    		}});


    	$(document).on('mousedown', 'textarea', function(e) { if( e.button == 2 ) { 
    		if($(this).closest('form').find('.droppable').length == 0) return;
    			$('.options-show').removeClass('hidden');
    			$('.options-show').addClass('hidden');
    			$('#for-textarea-f').removeClass('hidden');

					unchec() ;


   $type = $(this).attr('placeholder');
				if (typeof $type !== "undefined" ) {
					$this_ = $('#x40placeholder');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);// Create a dummy input to copy the string array inside it
  var dummy = document.createElement("input");
  // Add it to the document
  document.body.appendChild(dummy);
  // Set its ID
  dummy.setAttribute("id", "dummy_id");
  // Output the array into it  
  document.getElementById("dummy_id").value=checkbx;  
  // Select it
  dummy.select();
  // Copy its contents
  document.execCommand("copy");
  // Remove it as its not needed anymore
  document.body.removeChild(dummy);
				    $($this_).val($type +"");
				}
 
				    $type = $(this).attr('required');
				if (typeof $type !== "undefined") {
					$checkbox = $('#x40required');
				    $($checkbox).prop('checked', true);
				}
 
 
 
				    $global_data = $(this);


    		}});


    	$(document).on('mousedown', 'input[type=date]', function(e) { if( e.button == 2 ) { 
    		if($(this).closest('form').find('.droppable').length == 0) return;
    			$('.options-show').removeClass('hidden');
    			$('.options-show').addClass('hidden');
    			$('#for-date-f').removeClass('hidden');

					unchec() ;

					fucntionForDate($(this));

				    $global_data = $(this);


    		}});

    	$(document).on('mousedown', 'input[type=number]', function(e) { if( e.button == 2 ) { 
    		if($(this).closest('form').find('.droppable').length == 0) return;
    			$('.options-show').removeClass('hidden');
    			$('.options-show').addClass('hidden');
    			$('#for-number-f').removeClass('hidden');

 					unchec() ;

					fucntionForNumber($(this));

				    $global_data = $(this);



 


    		}});


    	$(document).on('mousedown', 'select', function(e) { if( e.button == 2 ) { 
    		if($(this).closest('form').find('.droppable').length == 0) return;
    			$('.options-show').removeClass('hidden');
    			$('.options-show').addClass('hidden');
    			$('#for-select-f').removeClass('hidden');
 
					unchec() ;


   $type = $(this).attr('placeholder');
				if (typeof $type !== "undefined" ) {
					$this_ = $('#x49placeholder');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);
				    $($this_).val($type +"");
				}
 
				    $type = $(this).attr('required');
				if (typeof $type !== "undefined") {
					$checkbox = $('#x49required');
				    $($checkbox).prop('checked', true);
				}
 
 
 
				    $global_data = $(this);



    		}});






    	$('#x49').click( function() {

 


    			$this_ = $global_data; 

    			if($("#x49placeholder").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('placeholder', $('#x49placeholder').val());


    			if(document.getElementById('x49required').checked) {
    			    $($this_).attr('required','');
    			} else  {    				
    			    $($this_).removeAttr('required' );
    			}



    			$checkbox = $('d.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val("")
    			$('.options-show.hidden').removeClass('hidden');
    			$('.options-show').addClass('hidden');
				$global_data = null;

    	});



    	$('#x48').click( function() {

 


    			$this_ = $global_data; 
    			if($("#x48type").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('type', $('#x48type option:selected' ).text());
    			if($("#x48placeholder").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('placeholder', $('#x48placeholder').val());

    			if($("#x48min").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('min', $('#x48min').val());
    			if($("#x48max").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('max', $('#x48max').val());


    			if(document.getElementById('x48required').checked) {
    			    $($this_).attr('required','');
    			} else  {    				
    			    $($this_).removeAttr('required' );
    			}



    			$checkbox = $('.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val("")
    			$('.options-show.hidden').removeClass('hidden');
    			$('.options-show').addClass('hidden');
				$global_data = null;

    	});


    	$('#x47').click( function() {

 


    			$this_ = $global_data; 

    			if($("#x47placeholder").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('placeholder', $('#x47placeholder').val());


    			if(document.getElementById('x47required').checked) {
    			    $($this_).attr('required','');
    			} else  {    				
    			    $($this_).removeAttr('required' );
    			}



 $global_script =  $global_script +"  	$('#dateinput').datepicker({";
    	

    			if($("#x47format").closest('.form-group').children('input[type=checkbox]').is(':checked'))
 $global_script =  $global_script + "format: '" + $('#x47format').val() + "', ";

    			if($("#x47fdat").closest('.form-group').children('input[type=checkbox]').is(':checked'))
 $global_script =  $global_script + "startDate: '-" + $('#x47fdat').val() + "d', ";

    			if($("#x47eday").closest('.form-group').children('input[type=checkbox]').is(':checked'))
 $global_script =  $global_script + "endDate: '" + $('#x47eday').val() + "d' ";

 $global_script =  $global_script +"  }); ";

		   console.log($global_script );             



    			$checkbox = $('.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val("")
    			$('.options-show.hidden').removeClass('hidden');
    			$('.options-show').addClass('hidden');
				$global_data = null;

    	});



    	$('#x40').click( function() {

 


    			$this_ = $global_data; 

    			if($("#x40placeholder").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('placeholder', $('#x40placeholder').val());


    			if(document.getElementById('x40required').checked) {
    			    $($this_).attr('required','');
    			} else  {    				
    			    $($this_).removeAttr('required' );
    			}



    			$checkbox = $('d.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val("")
    			$('.options-show.hidden').removeClass('hidden');
    			$('.options-show').addClass('hidden');
				$global_data = null;

    	});



   	$('#x41').click( function() {

 


    			$this_ = $global_data; 
    			if($("#x41type").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('type', $('#x41type option:selected' ).text());
    			if($("#x41value").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).text( $('#x41value').val());

    		$class = "btn ";

    		if($("#x41radio_2").closest('.form-group').children('input[type=checkbox]').is(':checked') || $("#x41radio_1").closest('.form-group').children('input[type=checkbox]').is(':checked')){
    			$class = $class + " " + $("input:radio[name ='x41size']:checked").val();
    		}

 				
    		if($("input:radio[name ='x41color']").closest('.form-group').children('input[type=checkbox]').is(':checked')  ){
    			$class = $classd + " " + $("input:radio[name ='x41color']:checked").val();
    		}

 				
    			$($this_).attr('class', $class);



    			$checkbox = $('.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val("")
    			$('.options-show.hidden').removeClass('hidden');
    			$('.options-show').addClass('hidden');
				$global_data = null;

    	});

   	$('#x42').click( function() {

 


    			$this_ = $global_data; 
    			if($("#x42type").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('type', $('#x42type option:selected' ).text());
    			if($("#x42value").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('value', $('#x42value').val());

    		$class = "btn ";

    		if($("#x42radio_2").closest('.form-group').children('input[type=checkbox]').is(':checked') || $("#x42radio_1").closest('.form-group').children('input[type=checkbox]').is(':checked')){
    			$class = $class + " " + $("input:radio[name ='x42size']:checked").val();
    		}

 				
    		if($("input:radio[name ='x42color']").closest('.form-group').children('input[type=checkbox]').is(':checked')  ){
    			$class = $class + " " + $("input:radio[name ='x42color']:checked").val();
    		}

 				
    			$($this_).attr('class', $class);

    			$checkbox = $('.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val("")
    			$('.options-show.hidden').removeClass('hidden');
    			$('.options-show').addClass('hidden');
				$global_data = null;

    	});

    	$('#x43').click( function() {


    			$this_ = $global_data; 
    			if($("#x43value").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    				if($('#x43value').val() !=  null)
    					$($this_).text( $('#x43value').val()); 
 



    			$checkbox = $('.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val("")
    			$('.options-show.hidden').removeClass('hidden');
    			$('.options-show').addClass('hidden');
				$global_data = null;

    	});


    	$('#x45').click( function() {

 


    			$this_ = $global_data; 
    			if($("#x45type").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('type', $('#x45type option:selected' ).text());
    			if($("#x45placeholder").closest('.form-group').children('input[type=checkbox]').is(':checked'))
    			$($this_).attr('placeholder', $('#x45placeholder').val());


    			if(document.getElementById('x45required').checked) {
    			    $($this_).attr('required','');
    			} else  {    				
    			    $($this_).removeAttr('required' );
    			}



    			$checkbox = $('.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val("")
    			$('.options-show.hidden').removeClass('hidden');
    			$('.options-show').addClass('hidden');
				$global_data = null;

    	});

    	$('.dremove').click( function() {

    			$thiz_ = $($global_data).closest('form').find('.droppable');


    			$('.options-show.hidden').removeClass('hidden');
    			$('.options-show').addClass('hidden');


    			if($thiz_.length == 0)
    				return;
    			else 
    				$($global_data).closest('.form-group').parent('div').remove();


    			$checkbox = $('.form-group').children('input[type=checkbox]');
    		    $($checkbox).prop('checked', false);
    			$checkbox = $('.form-group').find('input[type=text],input[type=password],input[type=number]');
    		    $($checkbox).val("")

				$global_data = null;

    	});




    	function fucntionForDate($this) {


   $type = $($this).attr('placeholder');
				if (typeof $type !== "undefined" ) {
					$this_ = $('#x47placeholder');
					$checkbox = $($this_).closest('.form-group'); 
					$checkbox = $($checkbox).children('input[type=checkbox]');
				    $($checkbox).prop('checked', true);
				    $($this_).val($type +"");
				}
 
				    $type = $($this).attr('required');
				if (typeof $type !== "undefined") {
					$checkbox = $('#x47required');
				    $($checkbox).prop('checked', true);
				}
 
 				$('#x47format').val('dd-mm-yyyy');
 

    	}





    	function fucntionForNumber($this) {
    					 console.log($this);

    		    $type = $($this).attr('type');
    		if (typeof $type !== "undefined") {
    			$this_ = $('#x48type');
    			$checkbox = $($this_).closest('.form-group'); 
    			$checkbox = $($checkbox).children('input[type=checkbox]');
    		    $($checkbox).prop('checked', true);
    		    $($this_).val($type +"");
    		}

    		    $type = $($this).attr('placeholder');
    		if (typeof $type !== "undefined") {
    			$this_ = $('#x48placeholder');
    			$checkbox = $($this_).closest('.form-group'); 
    			$checkbox = $($checkbox).children('input[type=checkbox]');
    		    $($checkbox).prop('checked', true);
    		    $($this_).val($type +"");
    		}
    		
    		    $type = $($this).attr('required');
    		if (typeof $type !== "undefined") {
    			$checkbox = $('#x48required');
    		    $($checkbox).prop('checked', true);
    		}
    		



    		$type = $($this).attr('min');
    		if (typeof $type !== "undefined") {
    			$this_ = $('#x48min');
    			$checkbox = $($this_).closest('.form-group'); 
    			$checkbox = $($checkbox).children('input[type=checkbox]');
    		    $($checkbox).prop('checked', true);
    		    $($this_).val($type +"");
    		}

    		$type = $($this).attr('max');
    		if (typeof $type !== "undefined") {
    			$this_ = $('#x48max');
    			$checkbox = $($this_).closest('.form-group'); 
    			$checkbox = $($checkbox).children('input[type=checkbox]');
    		    $($checkbox).prop('checked', true);
    		    $($this_).val($type +"");
    		}	

    	}



    	$('#final-show').click( function() {

    		$('#previ_colde').val($('.main_form_here').html());
    		 
    		autosize(document.getElementById("previ_colde"));

 
    	});

    	$('#copy_me_toc').click(function () {

    			$texo = $('#previ_colde').val();
    		  var dummy = document.createElement("input"); 
    		  document.body.appendChild(dummy); 
    		  dummy.setAttribute("id", "dummy_id"); 
    		  document.getElementById("dummy_id").value=$texo;   
    		  dummy.select(); 
    		  document.execCommand("copy"); 
    		  document.body.removeChild(dummy);
    	});


 


    	$(this).bind("contextmenu", function(e) {
    	               if(document.getElementById('pull-right-bloc').checked) {
    	                  return false;
    	               } 

    	           });





    	$('#dateinput').datepicker({
    	    format: 'dd-mm-yyyy',
    	    endDate: '1d',
    	    startDate: '-10d'
    	}); 

 
    });





    </script>
</body>
</html>