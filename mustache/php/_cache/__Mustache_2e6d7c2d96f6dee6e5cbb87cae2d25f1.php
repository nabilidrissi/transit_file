<?php

class __Mustache_2e6d7c2d96f6dee6e5cbb87cae2d25f1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- #section:basics/content.breadcrumbs -->
';
        $buffer .= $indent . '<div class="breadcrumbs ace-save-state" id="breadcrumbs">
';
        $buffer .= $indent . '	<ul class="breadcrumb">
';
        $buffer .= $indent . '		<li><i class="ace-icon fa fa-home home-icon"></i> <a href="#">Home</a></li>
';
        // 'breadcrumbs.links' section
        $value = $context->findDot('breadcrumbs.links');
        $buffer .= $this->section5ef56b8fffc883df949914891cf280eb($context, $indent, $value);
        $buffer .= $indent . '		<li class="active">';
        $value = $this->resolveValue($context->findDot('breadcrumbs.title'), $context);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '</li>
';
        $buffer .= $indent . '	</ul><!-- /.breadcrumb -->
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('layout.searchbox')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- /section:basics/content.breadcrumbs -->';

        return $buffer;
    }

    private function section5ef56b8fffc883df949914891cf280eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<li><a href="{{link}}">{{title}}</a></li>
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
                
                $buffer .= $indent . '		<li><a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
