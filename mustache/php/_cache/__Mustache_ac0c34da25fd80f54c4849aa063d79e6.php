<?php

class __Mustache_ac0c34da25fd80f54c4849aa063d79e6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'site.remote_fonts' section
        $value = $context->findDot('site.remote_fonts');
        $buffer .= $this->section5b797e973850c868d3d714b664e014e3($context, $indent, $value);
        // 'site.remote_fonts' inverted section
        $value = $context->findDot('site.remote_fonts');
        if (empty($value)) {
            
            $buffer .= $indent . ' <link rel="stylesheet" href="';
            $value = $this->resolveValue($context->findDot('path.assets'), $context);
            $buffer .= $value;
            $buffer .= '/css/ace-fonts.css" />
';
        }

        return $buffer;
    }

    private function section5b797e973850c868d3d714b664e014e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
 <link rel="stylesheet" href="{{{site.protocol}}}//fonts.googleapis.com/css?family=Open+Sans:400,300" />
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
                
                $buffer .= $indent . ' <link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context);
                $buffer .= $value;
                $buffer .= '//fonts.googleapis.com/css?family=Open+Sans:400,300" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
