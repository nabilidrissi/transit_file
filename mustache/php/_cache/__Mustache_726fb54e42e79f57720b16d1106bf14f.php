<?php

class __Mustache_726fb54e42e79f57720b16d1106bf14f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'site.remote_fontawesome' section
        $value = $context->findDot('site.remote_fontawesome');
        $buffer .= $this->section6dd6f962ef5d8b80e354f4c970c2fb52($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'site.remote_fontawesome' inverted section
        $value = $context->findDot('site.remote_fontawesome');
        if (empty($value)) {
            
            $buffer .= $indent . '<link rel="stylesheet" href="';
            $value = $this->resolveValue($context->findDot('path.components'), $context);
            $buffer .= $value;
            $buffer .= '/font-awesome/css/font-awesome';
            $value = $this->resolveValue($context->findDot('path.minified'), $context);
            $buffer .= $value;
            $buffer .= '.css" />
';
        }

        return $buffer;
    }

    private function section6dd6f962ef5d8b80e354f4c970c2fb52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<link rel="stylesheet" href="{{{site.protocol}}}//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome{{{path.minified}}}.css" />
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
                
                $buffer .= $indent . '<link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context);
                $buffer .= $value;
                $buffer .= '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome';
                $value = $this->resolveValue($context->findDot('path.minified'), $context);
                $buffer .= $value;
                $buffer .= '.css" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
