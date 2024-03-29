<?php

class __Mustache_1819e23e7b9ec214f3331f3a66afca20 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'page.responsive_style_2' section
        $value = $context->findDot('page.responsive_style_2');
        $buffer .= $this->sectionA8c466cd2e41a26b3b8cab7f0fae29f0($context, $indent, $value);
        $buffer .= $indent . '<!-- #section:basics/sidebar';
        // 'page.horizontal-menu' section
        $value = $context->findDot('page.horizontal-menu');
        $buffer .= $this->section29cad25ea54234fa3f57eb735b16c10b($context, $indent, $value);
        $buffer .= ' -->
';
        $buffer .= $indent . '<div id="sidebar" class="sidebar
';
        // 'page.horizontal-menu' section
        $value = $context->findDot('page.horizontal-menu');
        $buffer .= $this->section354f699f28029884180a31044b8407e2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'page.side_menu_collapsible' inverted section
        $value = $context->findDot('page.side_menu_collapsible');
        if (empty($value)) {
            
            // 'page.responsive_style_2' inverted section
            $value = $context->findDot('page.responsive_style_2');
            if (empty($value)) {
                
                $buffer .= $indent . '   responsive
';
            }
        }
        $buffer .= $indent . '
';
        // 'page.side_menu_collapsible' section
        $value = $context->findDot('page.side_menu_collapsible');
        $buffer .= $this->section7f594a477efd4164675bdf4471b93ed5($context, $indent, $value);
        $buffer .= '
';
        // 'page.responsive_style_2' section
        $value = $context->findDot('page.responsive_style_2');
        $buffer .= $this->sectionB1a9f05bdf14e3a75bb4b2f434e346f1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . 'ace-save-state">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . ' try{ace.settings.loadState(\'sidebar\')}catch(e){}
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('layout.sidebar.shortcuts')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<ul class="nav nav-list">
';
        $buffer .= $indent . '		';
        // 'layout.sidebar_items' section
        $value = $context->findDot('layout.sidebar_items');
        $buffer .= $this->sectionBcff75a9eeeab550a48ed2a473b25cb7($context, $indent, $value);
        $buffer .= $indent . '	</ul><!-- /.nav-list -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<!-- #section:basics/sidebar.layout.minimize -->
';
        // 'page.horizontal-menu' inverted section
        $value = $context->findDot('page.horizontal-menu');
        if (empty($value)) {
            
            $buffer .= $indent . '	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">		
';
            $buffer .= $indent . '		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
';
            $buffer .= $indent . '	</div>
';
        }
        $buffer .= $indent . '	';
        // 'page.responsive_style_2' section
        $value = $context->findDot('page.responsive_style_2');
        $buffer .= $this->sectionAfd7f196f74b880026e8abefccf952aa($context, $indent, $value);
        $buffer .= $indent . '	<!-- /section:basics/sidebar.layout.minimize -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- /section:basics/sidebar';
        // 'page.horizontal-menu' section
        $value = $context->findDot('page.horizontal-menu');
        $buffer .= $this->section29cad25ea54234fa3f57eb735b16c10b($context, $indent, $value);
        $buffer .= ' -->';

        return $buffer;
    }

    private function sectionA8c466cd2e41a26b3b8cab7f0fae29f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <a href="#" class="menu-toggler invisible" id="menu-toggler" data-target="#sidebar"></a>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <a href="#" class="menu-toggler invisible" id="menu-toggler" data-target="#sidebar"></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29cad25ea54234fa3f57eb735b16c10b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '.horizontal';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '.horizontal';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section354f699f28029884180a31044b8407e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' h-sidebar';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' h-sidebar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f594a477efd4164675bdf4471b93ed5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' navbar-collapse collapse';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' navbar-collapse collapse';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1a9f05bdf14e3a75bb4b2f434e346f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' responsive-min';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' responsive-min';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcff75a9eeeab550a48ed2a473b25cb7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{! the item array}}
			{{> layout.sidebar.item}} {{! the item partial template}}
		';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $buffer .= '
';
                $buffer .= $indent . '			';
                if ($partial = $this->mustache->loadPartial('layout.sidebar.item')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfd7f196f74b880026e8abefccf952aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!for expanding minimized menu in small devices}}
	<div class="sidebar-toggle sidebar-expand" id="sidebar-expand">
		<i class="ace-icon fa fa-angle-double-right" data-icon1="ace-icon fa fa-angle-double-right" data-icon2="ace-icon fa fa-angle-double-left"></i>
	</div>
	';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '	<div class="sidebar-toggle sidebar-expand" id="sidebar-expand">
';
                $buffer .= $indent . '		<i class="ace-icon fa fa-angle-double-right" data-icon1="ace-icon fa fa-angle-double-right" data-icon2="ace-icon fa fa-angle-double-left"></i>
';
                $buffer .= $indent . '	</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
