<?php

class __Mustache_8edc3596839b64bf31a7f3790072a832 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'site.remote_jquery' section
        $value = $context->findDot('site.remote_jquery');
        $buffer .= $this->sectionE1f73ea0250b31f0cfced539b0afac5d($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'site.remote_jquery' inverted section
        $value = $context->findDot('site.remote_jquery');
        if (empty($value)) {
            
            $buffer .= $indent . '<!--[if !IE]> -->
';
            $buffer .= $indent . '<script src="';
            $value = $this->resolveValue($context->findDot('path.components'), $context);
            $buffer .= $value;
            $buffer .= '/jquery/dist/jquery';
            $value = $this->resolveValue($context->findDot('path.minified'), $context);
            $buffer .= $value;
            $buffer .= '.js"></script>
';
            $buffer .= $indent . '<!-- <![endif]-->
';
            $buffer .= $indent . '<!--[if IE]>
';
            $buffer .= $indent . '<script src="';
            $value = $this->resolveValue($context->findDot('path.components'), $context);
            $buffer .= $value;
            $buffer .= '/jquery.1x/dist/jquery';
            $value = $this->resolveValue($context->findDot('path.minified'), $context);
            $buffer .= $value;
            $buffer .= '.js"></script>
';
            $buffer .= $indent . '<![endif]-->
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '	if(\'ontouchstart\' in document.documentElement) document.write("<script src=\'';
        $value = $this->resolveValue($context->findDot('path.components'), $context);
        $buffer .= $value;
        $buffer .= '/_mod/jquery.mobile.custom/jquery.mobile.custom';
        $value = $this->resolveValue($context->findDot('path.minified'), $context);
        $buffer .= $value;
        $buffer .= '.js\'>"+"<"+"/script>");
';
        $buffer .= $indent . '</script>
';

        return $buffer;
    }

    private function sectionE1f73ea0250b31f0cfced539b0afac5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!--[if !IE]> -->
<script src="{{{site.protocol}}}//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery{{{path.minified}}}.js"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="{{{site.protocol}}}//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery{{{path.minified}}}.js"></script>
<![endif]-->
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
                
                $buffer .= $indent . '<!--[if !IE]> -->
';
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context);
                $buffer .= $value;
                $buffer .= '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery';
                $value = $this->resolveValue($context->findDot('path.minified'), $context);
                $buffer .= $value;
                $buffer .= '.js"></script>
';
                $buffer .= $indent . '<!-- <![endif]-->
';
                $buffer .= $indent . '<!--[if IE]>
';
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context);
                $buffer .= $value;
                $buffer .= '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery';
                $value = $this->resolveValue($context->findDot('path.minified'), $context);
                $buffer .= $value;
                $buffer .= '.js"></script>
';
                $buffer .= $indent . '<![endif]-->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
