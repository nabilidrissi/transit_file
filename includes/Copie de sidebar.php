<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Transit JALAL - INTRANET</title>

		<meta name="description" content="3 styles with inline editable feature" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.css" />
		<link rel="stylesheet" href="../components/font-awesome/css/font-awesome.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../components/_mod/jquery-ui.custom/jquery-ui.custom.css" />
		<link rel="stylesheet" href="../components/jquery.gritter/css/jquery.gritter.css" />
		<link rel="stylesheet" href="../components/select2/dist/css/select2.css" />
		<link rel="stylesheet" href="../components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="../components/_mod/x-editable/bootstrap-editable.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../components/html5shiv/dist/html5shiv.min.js"></script>
		<script src="../components/respond/dest/respond.min.js"></script>
		<![endif]-->
	</head>
    <?php include("navbar.php"); ?>
	<body class="no-skin">

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			  <?php include("menu.php"); ?>


			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">More Pages</a>
							</li>
							<li class="active">User Profile</li>
					    	</ul><!-- /.breadcrumb -->

					    	<!-- #section:basics/content.searchbox -->
						                <div class="nav-search" id="nav-search">
							                <form class="form-search">
								                <span class="input-icon">
								            	<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								            	<i class="ace-icon fa fa-search nav-search-icon"></i>
							                	</span>
						                	</form>
                                        </div><!-- /.nav-search -->

					     <!-- /section:basics/content.breadcrumbs 
					                     <div class="page-content">
						                    <div class="page-header">
							                    <h1>
							                    	User Profile Page
							                    	<small>
								                	<i class="ace-icon fa fa-angle-double-right"></i>
								                	3 styles with inline editable feature
								                    </small>
							                    </h1>
                                             </div><!-- /.page-header -->
                                        </div>
                            </div><!-- /.page-header -->
                </div>
		    </div><!-- /.main-content -->
              <?php include("footer.php"); ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../components/jquery/dist/jquery.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
        <script src="../components/jquery.1x/dist/jquery.js"></script>
        <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../components/_mod/jquery.mobile.custom/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="../components/bootstrap/dist/js/bootstrap.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="../components/ExplorerCanvas/excanvas.js"></script>
		<![endif]-->
		<script src="../components/_mod/jquery-ui.custom/jquery-ui.custom.js"></script>
		<script src="../components/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="../components/jquery.gritter/js/jquery.gritter.js"></script>
		<script src="../components/bootbox.js/bootbox.js"></script>
		<script src="../components/_mod/easypiechart/jquery.easypiechart.js"></script>
		<script src="../components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
		<script src="../components/jquery.hotkeys/index.js"></script>
		<script src="../components/_mod/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
		<script src="../components/select2/dist/js/select2.js"></script>
		<script src="../components/fuelux/js/spinbox.js"></script>
		<script src="../components/_mod/x-editable/bootstrap-editable.js"></script>
		<script src="../components/_mod/x-editable/ace-editable.js"></script>
		<script src="../components/jquery.maskedinput/dist/jquery.maskedinput.js"></script>

		<!-- ace scripts -->
		<script src="../assets/js/src/elements.scroller.js"></script>
		<script src="../assets/js/src/elements.colorpicker.js"></script>
		<script src="../assets/js/src/elements.fileinput.js"></script>
		<script src="../assets/js/src/elements.typeahead.js"></script>
		<script src="../assets/js/src/elements.wysiwyg.js"></script>
		<script src="../assets/js/src/elements.spinner.js"></script>
		<script src="../assets/js/src/elements.treeview.js"></script>
		<script src="../assets/js/src/elements.wizard.js"></script>
		<script src="../assets/js/src/elements.aside.js"></script>
		<script src="../assets/js/src/ace.js"></script>
		<script src="../assets/js/src/ace.basics.js"></script>
		<script src="../assets/js/src/ace.scrolltop.js"></script>
		<script src="../assets/js/src/ace.ajax-content.js"></script>
		<script src="../assets/js/src/ace.touch-drag.js"></script>
		<script src="../assets/js/src/ace.sidebar.js"></script>
		<script src="../assets/js/src/ace.sidebar-scroll-1.js"></script>
		<script src="../assets/js/src/ace.submenu-hover.js"></script>
		<script src="../assets/js/src/ace.widget-box.js"></script>
		<script src="../assets/js/src/ace.settings.js"></script>
		<script src="../assets/js/src/ace.settings-rtl.js"></script>
		<script src="../assets/js/src/ace.settings-skin.js"></script>
		<script src="../assets/js/src/ace.widget-on-reload.js"></script>
		<script src="../assets/js/src/ace.searchbox-autocomplete.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
				
				//editables 
				
				//text editable
			    $('#username')
				.editable({
					type: 'text',
					name: 'username'		
			    });
			
			
				
				//select2 editable
				var countries = [];
			    $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
			        countries.push({id: k, text: v});
			    });
			
				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["NL"] = [];
				$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
					cities["NL"].push({id: v, text: v});
				});
				cities["TR"] = [];
				$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
					cities["TR"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});
				
				var currentValue = "NL";
			    $('#country').editable({
					type: 'select2',
					value : 'NL',
					//onblur:'ignore',
			        source: countries,
					select2: {
						'width': 140
					},		
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;
						
						var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
						
						//the destroy method is causing errors in x-editable v1.4.6+
						//it worked fine in v1.4.5
						/**			
						$('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
						*/
						
						//so we remove it altogether and create a new element
						var city = $('#city').removeAttr('id').get(0);
						$(city).clone().attr('id', 'city').text('Select City').editable({
							type: 'select2',
							value : null,
							//onblur:'ignore',
							source: new_source,
							select2: {
								'width': 140
							}
						}).insertAfter(city);//insert it after previous instance
						$(city).remove();//remove previous instance
						
					}
			    });
			
				$('#city').editable({
					type: 'select2',
					value : 'Amsterdam',
					//onblur:'ignore',
			        source: cities[currentValue],
					select2: {
						'width': 140
					}
			    });
			
			
				
				//custom date editable
				$('#signup').editable({
					type: 'adate',
					date: {
						//datepicker plugin options
						    format: 'yyyy/mm/dd',
						viewformat: 'yyyy/mm/dd',
						 weekStart: 1
						 
						//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
						//,format: 'yyyy-mm-dd',
						//viewformat: 'yyyy-mm-dd'
					}
				})
			
			    $('#age').editable({
			        type: 'spinner',
					name : 'age',
					spinner : {
						min : 16,
						max : 99,
						step: 1,
						on_sides: true
						//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
					}
				});
				
			
			    $('#login').editable({
			        type: 'slider',
					name : 'login',
					
					slider : {
						 min : 1,
						  max: 50,
						width: 100
						//,nativeUI: true//if true and browser support input[type=range], native browser control will be used
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});
			
				$('#about').editable({
					mode: 'inline',
			        type: 'wysiwyg',
					name : 'about',
			
					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exceptions, so let's catch'em
			
					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
					try {
						document.createElement('IMG').appendChild(document.createElement('B'));
					} catch(e) {
						Image.prototype.appendChild = function(el){}
					}
			
					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						//onblur: 'ignore',  //don't reset or hide editable onblur?!
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							maxSize: 110000,//~100Kb
			
							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							on_error : function(error_type) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(error_type == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(error_type == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 100Kb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//for a working upload example you can replace the contents of this function with 
							//examples/profile-avatar-update.js
			
							var deferred = new $.Deferred
			
							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}
			
			
							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}
								
								deferred.resolve({'status':'OK'});
			
								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});
								
							 } , parseInt(Math.random() * 800 + 800))
			
							return deferred.promise();
							
							// ***END OF UPDATE AVATAR HERE*** //
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
				
				/**
				//let's display edit mode by default?
				var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
				if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}