<?php

class __Mustache_a335b6901bb55eee5fa9d9f1c98f0f98 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- #section:pages/dashboard.tasks -->
';
        $buffer .= $indent . '<ul id="tasks" class="item-list">
';
        // 'page.tasks' section
        $value = $context->findDot('page.tasks');
        $buffer .= $this->section988efc1ae5a16324182b454a37b2a2d5($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '<!-- /section:pages/dashboard.tasks -->';

        return $buffer;
    }

    private function sectionC12ee67d7bf513cf3028f092e8753952(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="{{progress}}">
			<span class="percent">{{progress}}</span>%
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
                
                $buffer .= $indent . '		<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '">
';
                $buffer .= $indent . '			<span class="percent">';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</span>%
';
                $buffer .= $indent . '		</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017fc53b1d30a20c4b37dde9d8bb8857(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<!-- #section:custom/extra.action-buttons -->
		<div class="pull-right action-buttons">
			<a href="#" class="blue"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="red"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="green"><i class="ace-icon fa fa-flag bigger-130"></i></a>
		</div>
		<!-- /section:custom/extra.action-buttons -->
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
                
                $buffer .= $indent . '		<!-- #section:custom/extra.action-buttons -->
';
                $buffer .= $indent . '		<div class="pull-right action-buttons">
';
                $buffer .= $indent . '			<a href="#" class="blue"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
';
                $buffer .= $indent . '			<span class="vbar"></span>
';
                $buffer .= $indent . '			<a href="#" class="red"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
';
                $buffer .= $indent . '			<span class="vbar"></span>
';
                $buffer .= $indent . '			<a href="#" class="green"><i class="ace-icon fa fa-flag bigger-130"></i></a>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<!-- /section:custom/extra.action-buttons -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9957ea8cc3b9183c2584200ec9cd3c53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<!-- #section:elements.dropdown.hover -->
		<div class="pull-right pos-rel dropdown-hover">
			<button class="btn btn-minier bigger btn-primary"><i class="ace-icon fa fa-cog icon-only bigger-120"></i></button>
			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
				<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done"><span class="green"><i class="ace-icon fa fa-check bigger-110"></i></span></a></li>
				<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-110"></i></span></a></li>
			</ul>
		</div>
		<!-- /section:elements.dropdown.hover -->
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
                
                $buffer .= $indent . '		<!-- #section:elements.dropdown.hover -->
';
                $buffer .= $indent . '		<div class="pull-right pos-rel dropdown-hover">
';
                $buffer .= $indent . '			<button class="btn btn-minier bigger btn-primary"><i class="ace-icon fa fa-cog icon-only bigger-120"></i></button>
';
                $buffer .= $indent . '			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
';
                $buffer .= $indent . '				<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done"><span class="green"><i class="ace-icon fa fa-check bigger-110"></i></span></a></li>
';
                $buffer .= $indent . '				<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-110"></i></span></a></li>
';
                $buffer .= $indent . '			</ul>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<!-- /section:elements.dropdown.hover -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section988efc1ae5a16324182b454a37b2a2d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<li class="item-{{color}} clearfix">
		<label class="inline"><input type="checkbox" class="ace" /><span class="lbl"> {{title}}</span></label>
		{{#progress}}
		<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="{{progress}}">
			<span class="percent">{{progress}}</span>%
		</div>
		{{/progress}}
		{{#toolbar}}
		<!-- #section:custom/extra.action-buttons -->
		<div class="pull-right action-buttons">
			<a href="#" class="blue"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="red"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="green"><i class="ace-icon fa fa-flag bigger-130"></i></a>
		</div>
		<!-- /section:custom/extra.action-buttons -->
		{{/toolbar}}
		{{#menu}}
		<!-- #section:elements.dropdown.hover -->
		<div class="pull-right pos-rel dropdown-hover">
			<button class="btn btn-minier bigger btn-primary"><i class="ace-icon fa fa-cog icon-only bigger-120"></i></button>
			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
				<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done"><span class="green"><i class="ace-icon fa fa-check bigger-110"></i></span></a></li>
				<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-110"></i></span></a></li>
			</ul>
		</div>
		<!-- /section:elements.dropdown.hover -->
		{{/menu}}
	</li>
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
                
                $buffer .= $indent . '	<li class="item-';
                $value = $this->resolveValue($context->find('color'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' clearfix">
';
                $buffer .= $indent . '		<label class="inline"><input type="checkbox" class="ace" /><span class="lbl"> ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</span></label>
';
                // 'progress' section
                $value = $context->find('progress');
                $buffer .= $this->sectionC12ee67d7bf513cf3028f092e8753952($context, $indent, $value);
                // 'toolbar' section
                $value = $context->find('toolbar');
                $buffer .= $this->section017fc53b1d30a20c4b37dde9d8bb8857($context, $indent, $value);
                // 'menu' section
                $value = $context->find('menu');
                $buffer .= $this->section9957ea8cc3b9183c2584200ec9cd3c53($context, $indent, $value);
                $buffer .= $indent . '	</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
