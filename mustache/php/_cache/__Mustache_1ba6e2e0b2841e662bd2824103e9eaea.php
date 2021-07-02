<?php

class __Mustache_1ba6e2e0b2841e662bd2824103e9eaea extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- basic scripts -->
';
        if ($partial = $this->mustache->loadPartial('layout._template.jquery')) {
            $buffer .= $partial->renderInternal($context);
        }
        if ($partial = $this->mustache->loadPartial('layout._template.bootstrap')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- page specific plugin scripts -->
';
        // 'page.ie_scripts' section
        $value = $context->findDot('page.ie_scripts');
        $buffer .= $this->sectionC09410694ae385a48ce9010ccf0415a4($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'page.scripts' section
        $value = $context->findDot('page.scripts');
        $buffer .= $this->section4c0374019a4307129ee508aeff503539($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- ace scripts -->
';
        // 'site.development' inverted section
        $value = $context->findDot('site.development');
        if (empty($value)) {
            
            $buffer .= $indent . ' <script src="';
            $value = $this->resolveValue($context->findDot('path.assets'), $context);
            $buffer .= $value;
            $buffer .= '/js/ace-elements';
            $value = $this->resolveValue($context->findDot('path.minified'), $context);
            $buffer .= $value;
            $buffer .= '.js"></script>
';
            $buffer .= $indent . ' <script src="';
            $value = $this->resolveValue($context->findDot('path.assets'), $context);
            $buffer .= $value;
            $buffer .= '/js/ace';
            $value = $this->resolveValue($context->findDot('path.minified'), $context);
            $buffer .= $value;
            $buffer .= '.js"></script>
';
        }
        $buffer .= $indent . '
';
        // 'site.development' section
        $value = $context->findDot('site.development');
        $buffer .= $this->section7196d05eb8bbb3f3afdfa130d1040d09($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- inline scripts related to this page -->
';
        // 'page.inline_scripts' section
        $value = $context->findDot('page.inline_scripts');
        $buffer .= $this->section688cc0bcda9fcd7bdb36d33318284a12($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'site.onpage_help' section
        $value = $context->findDot('site.onpage_help');
        $buffer .= $this->section5827aa290e1263b1d93929a9fe22a61e($context, $indent, $value);

        return $buffer;
    }

    private function sectionC09410694ae385a48ce9010ccf0415a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!--[if lte IE {{version}}]>
  <script src="{{{path.base}}}/{{{file_name}}}"></script>
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
                
                $buffer .= $indent . '<!--[if lte IE ';
                $value = $this->resolveValue($context->find('version'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ']>
';
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context);
                $buffer .= $value;
                $buffer .= '/';
                $value = $this->resolveValue($context->find('file_name'), $context);
                $buffer .= $value;
                $buffer .= '"></script>
';
                $buffer .= $indent . '<![endif]-->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c0374019a4307129ee508aeff503539(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script src="{{{path.base}}}/{{{.}}}"></script>
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
                $value = $this->resolveValue($context->findDot('path.base'), $context);
                $buffer .= $value;
                $buffer .= '/';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '"></script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8176ce839d84f9a69ed7ba049a63b05d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <script src="{{{path.assets}}}/js/src/{{{.}}}"></script>
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
                
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context);
                $buffer .= $value;
                $buffer .= '/js/src/';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '"></script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7196d05eb8bbb3f3afdfa130d1040d09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! in development mode use separate script files }}
 {{#site.ace_scripts}}
  <script src="{{{path.assets}}}/js/src/{{{.}}}"></script>
 {{/site.ace_scripts}}
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
                
                // 'site.ace_scripts' section
                $value = $context->findDot('site.ace_scripts');
                $buffer .= $this->section8176ce839d84f9a69ed7ba049a63b05d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section688cc0bcda9fcd7bdb36d33318284a12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script type="text/javascript">
{{{page.inline_scripts}}}
</script>
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
                
                $buffer .= $indent . '<script type="text/javascript">
';
                $value = $this->resolveValue($context->findDot('page.inline_scripts'), $context);
                $buffer .= $indent . $value;
                $buffer .= '
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5827aa290e1263b1d93929a9fe22a61e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! enable on page help }}
  <!-- the following scripts are used in demo only for onpage help and you don\'t need them -->
  <link rel="stylesheet" href="{{{path.assets}}}/css/ace.onpage-help.css" />
  <link rel="stylesheet" href="{{{path.base}}}/docs/assets/js/themes/sunburst.css" />

  <script type="text/javascript">ace.vars[\'base\'] = \'{{{path.base}}}\';</script>
  <script src="{{{path.assets}}}/js/src/elements.onpage-help.js"></script>
  <script src="{{{path.assets}}}/js/src/ace.onpage-help.js"></script>
  <script src="{{{path.base}}}/docs/assets/js/rainbow.js"></script>
  <script src="{{{path.base}}}/docs/assets/js/language/generic.js"></script>
  <script src="{{{path.base}}}/docs/assets/js/language/html.js"></script>
  <script src="{{{path.base}}}/docs/assets/js/language/css.js"></script>  
  <script src="{{{path.base}}}/docs/assets/js/language/javascript.js"></script>
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
                
                $buffer .= $indent . '  <!-- the following scripts are used in demo only for onpage help and you don\'t need them -->
';
                $buffer .= $indent . '  <link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context);
                $buffer .= $value;
                $buffer .= '/css/ace.onpage-help.css" />
';
                $buffer .= $indent . '  <link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('path.base'), $context);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/themes/sunburst.css" />
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  <script type="text/javascript">ace.vars[\'base\'] = \'';
                $value = $this->resolveValue($context->findDot('path.base'), $context);
                $buffer .= $value;
                $buffer .= '\';</script>
';
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context);
                $buffer .= $value;
                $buffer .= '/js/src/elements.onpage-help.js"></script>
';
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context);
                $buffer .= $value;
                $buffer .= '/js/src/ace.onpage-help.js"></script>
';
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/rainbow.js"></script>
';
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/language/generic.js"></script>
';
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/language/html.js"></script>
';
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/language/css.js"></script>  
';
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/language/javascript.js"></script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
