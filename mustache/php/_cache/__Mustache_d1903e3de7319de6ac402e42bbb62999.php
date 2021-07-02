<?php

class __Mustache_d1903e3de7319de6ac402e42bbb62999 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'site.remote_bootstrap_js' section
        $value = $context->findDot('site.remote_bootstrap_js');
        $buffer .= $this->section08e93ea53e03cce381995262ec7260c2($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'site.remote_bootstrap_js' inverted section
        $value = $context->findDot('site.remote_bootstrap_js');
        if (empty($value)) {
            
            $buffer .= $indent . '<script src="';
            $value = $this->resolveValue($context->findDot('path.components'), $context);
            $buffer .= $value;
            $buffer .= '/bootstrap/dist/js/bootstrap';
            $value = $this->resolveValue($context->findDot('path.minified'), $context);
            $buffer .= $value;
            $buffer .= '.js"></script>
';
        }

        return $buffer;
    }

    private function section08e93ea53e03cce381995262ec7260c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script src="{{{site.protocol}}}//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap{{{path.minified}}}.js"></script>
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
                
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context);
                $buffer .= $value;
                $buffer .= '//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap';
                $value = $this->resolveValue($context->findDot('path.minified'), $context);
                $buffer .= $value;
                $buffer .= '.js"></script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
