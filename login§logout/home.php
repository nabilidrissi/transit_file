<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Transit JALAL</title>

		<meta name="description" content="Transit JALAL" />
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
        <link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
		
		<link rel="stylesheet" href="../assets/css/ace-skins.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.css" />
        <link rel="stylesheet" href="../assets/css/ace-ie.css" />


		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<script src="../components/html5shiv/dist/html5shiv.min.js"></script>
		<script src="../components/respond/dest/respond.min.js"></script>

	</head>
    <?php include("../includes/navbar.php"); ?>
	<body class="no-skin">

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

					</div>
                   
	

              <?php include("../includes/footer.php"); ?>

			
			  <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
              </a>


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
<script src="../components/datatables/media/js/jquery.dataTables.js"></script>
<script src="../components/_mod/datatables/jquery.dataTables.bootstrap.js"></script>
<script src="../components/datatables.net-buttons/js/dataTables.buttons.js"></script>
<script src="../components/datatables.net-buttons/js/buttons.flash.js"></script>
<script src="../components/datatables.net-buttons/js/buttons.html5.js"></script>
<script src="../components/datatables.net-buttons/js/buttons.print.js"></script>
<script src="../components/datatables.net-buttons/js/buttons.colVis.js"></script>
<script src="../components/datatables.net-select/js/dataTables.select.js"></script>

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
    //initiate dataTables plugin
    var myTable = 
    $('#dynamic-table')
    //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
    .DataTable( {
        bAutoWidth: false,
        "aoColumns": [
          { "bSortable": false },
          null, null,null, null, null,
          { "bSortable": false }
        ],
        "aaSorting": [],
        
        
        //"bProcessing": true,
        //"bServerSide": true,
        //"sAjaxSource": "http://127.0.0.1/table.php"	,

        //,
        //"sScrollY": "200px",
        //"bPaginate": false,

        //"sScrollX": "100%",
        //"sScrollXInner": "120%",
        //"bScrollCollapse": true,
        //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
        //you may want to wrap the table inside a "div.dataTables_borderWrap" element

        //"iDisplayLength": 50


        select: {
            style: 'multi'
        }
    } );

    
    
    $.fn.dataTable.Buttons.swfPath = "../components/datatables.net-buttons-swf/index.swf"; //in Ace demo ../components will be replaced by correct assets path
    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
    
    new $.fn.dataTable.Buttons( myTable, {
        buttons: [
          {
            "extend": "colvis",
            "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Afficher / masquer les colonnes</span>",
            "className": "btn btn-white btn-primary btn-bold",
            columns: ':not(:first):not(:last)'
          },
          {
            "extend": "copy",
            "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copier dans le presse-papier</span>",
            "className": "btn btn-white btn-primary btn-bold"
          },
          {
            "extend": "csv",
            "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Exporter au format CSV</span>",
            "className": "btn btn-white btn-primary btn-bold"
          },
          {
            "extend": "excel",
            "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Exporter vers Excel</span>",
            "className": "btn btn-white btn-primary btn-bold"
          },
          {
            "extend": "pdf",
            "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Exporter vers PDF</span>",
            "className": "btn btn-white btn-primary btn-bold"
          },
          {
            "extend": "print",
            "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Impression</span>",
            "className": "btn btn-white btn-primary btn-bold",
            autoPrint: false,
            message: 'Cette impression a été réalisée à l aide du bouton Imprimer pour DataTables'
          }		  
        ]
    } );
    myTable.buttons().container().appendTo( $('.tableTools-container') );
    
    //style the message box
    var defaultCopyAction = myTable.button(1).action();
    myTable.button(1).action(function (e, dt, button, config) {
        defaultCopyAction(e, dt, button, config);
        $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
    });
    
    
    var defaultColvisAction = myTable.button(0).action();
    myTable.button(0).action(function (e, dt, button, config) {
        
        defaultColvisAction(e, dt, button, config);
        
        
        if($('.dt-button-collection > .dropdown-menu').length == 0) {
            $('.dt-button-collection')
            .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
            .find('a').attr('href', '#').wrap("<li />")
        }
        $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
    });

    ////

    setTimeout(function() {
        $($('.tableTools-container')).find('a.dt-button').each(function() {
            var div = $(this).find(' > div').first();
            if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
            else $(this).tooltip({container: 'body', title: $(this).text()});
        });
    }, 500);
    
    
    
    
    
    myTable.on( 'select', function ( e, dt, type, index ) {
        if ( type === 'row' ) {
            $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
        }
    } );
    myTable.on( 'deselect', function ( e, dt, type, index ) {
        if ( type === 'row' ) {
            $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
        }
    } );




    /////////////////////////////////
    //table checkboxes
    $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
    
    //select/deselect all rows according to table header checkbox
    $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
        var th_checked = this.checked;//checkbox inside "TH" table header
        
        $('#dynamic-table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) myTable.row(row).select();
            else  myTable.row(row).deselect();
        });
    });
    
    //select/deselect a row when the checkbox is checked/unchecked
    $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
        var row = $(this).closest('tr').get(0);
        if(this.checked) myTable.row(row).deselect();
        else myTable.row(row).select();
    });



    $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
        e.stopImmediatePropagation();
        e.stopPropagation();
        e.preventDefault();
    });
    
    
    
    //And for the first simple table, which doesn't have TableTools or dataTables
    //select/deselect all rows according to table header checkbox
    var active_class = 'active';
    $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
        var th_checked = this.checked;//checkbox inside "TH" table header
        
        $(this).closest('table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
            else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
        });
    });
    
    //select/deselect a row when the checkbox is checked/unchecked
    $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
        var $row = $(this).closest('tr');
        if($row.is('.detail-row ')) return;
        if(this.checked) $row.addClass(active_class);
        else $row.removeClass(active_class);
    });

    

    /********************************/
    //add tooltip for small view action buttons in dropdown menu
    $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
    
    //tooltip placement on right or left
    function tooltip_placement(context, source) {
        var $source = $(source);
        var $parent = $source.closest('table')
        var off1 = $parent.offset();
        var w1 = $parent.width();

        var off2 = $source.offset();
        //var w2 = $source.width();

        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
        return 'left';
    }
    
    
    
    
    /***************/
    $('.show-details-btn').on('click', function(e) {
        e.preventDefault();
        $(this).closest('tr').next().toggleClass('open');
        $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
    });
    /***************/
    
    
    
    
    
    /**
    //add horizontal scrollbars to a simple table
    $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
      {
        horizontal: true,
        styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
        size: 2000,
        mouseWheelLock: true
      }
    ).css('padding-top', '12px');
    */


})
</script>

<!-- the following scripts are used in demo only for onpage help and you don't need them -->
<link rel="stylesheet" href="../assets/css/ace.onpage-help.css" />
<link rel="stylesheet" href="../docs/assets/js/themes/sunburst.css" />

<script type="text/javascript"> ace.vars['base'] = '.'; </script>
<script src="../assets/js/src/elements.onpage-help.js"></script>
<script src="../assets/js/src/ace.onpage-help.js"></script>
<script src="../docs/assets/js/rainbow.js"></script>
<script src="../docs/assets/js/language/generic.js"></script>
<script src="../docs/assets/js/language/html.js"></script>
<script src="../docs/assets/js/language/css.js"></script>
<script src="../docs/assets/js/language/javascript.js"></script>
</body>
</html>
