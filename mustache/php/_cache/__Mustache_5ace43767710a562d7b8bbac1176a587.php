<?php

class __Mustache_5ace43767710a562d7b8bbac1176a587 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'page.user_menu_collapsible' section
        $value = $context->findDot('page.user_menu_collapsible');
        $buffer .= $this->sectionD26379a2dcb6650f756f6b3665a0cb03($context, $indent, $value);
        // 'page.or_use_an_icon_instead' section
        $value = $context->findDot('page.or_use_an_icon_instead');
        $buffer .= $this->sectionA2bb3bff47b6b520854a7d47708242c1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'page.side_menu_collapsible' section
        $value = $context->findDot('page.side_menu_collapsible');
        $buffer .= $this->section8c70ddd52b147aac3378d7a35d75de10($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'page.user_menu_collapsible' inverted section
        $value = $context->findDot('page.user_menu_collapsible');
        if (empty($value)) {
            
            // 'page.top_menu' section
            $value = $context->findDot('page.top_menu');
            $buffer .= $this->section42272b3b5de415bdde66919a067f997d($context, $indent, $value);
        }

        return $buffer;
    }

    private function section95c91aa128669ca4023d583ca1eb8cc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ',.navbar-menu';
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
                
                $buffer .= ',.navbar-menu';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD26379a2dcb6650f756f6b3665a0cb03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse"
 data-target=".navbar-buttons{{#page.top_menu}},.navbar-menu{{/page.top_menu}}">
	<span class="sr-only">Toggle user menu</span>
	<img src="{{path.assets}}/avatars/user.jpg" alt="Jason\'s Photo" />
</button>
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
                
                $buffer .= $indent . '<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse"
';
                $buffer .= $indent . ' data-target=".navbar-buttons';
                // 'page.top_menu' section
                $value = $context->findDot('page.top_menu');
                $buffer .= $this->section95c91aa128669ca4023d583ca1eb8cc0($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '	<span class="sr-only">Toggle user menu</span>
';
                $buffer .= $indent . '	<img src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '/avatars/user.jpg" alt="Jason\'s Photo" />
';
                $buffer .= $indent . '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2bb3bff47b6b520854a7d47708242c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="anytarget">
	<span class="sr-only">Toggle user menu</span>
	<i class="ace-icon fa fa-user fa-2x white"></i>
</button>
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
                
                $buffer .= $indent . '<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="anytarget">
';
                $buffer .= $indent . '	<span class="sr-only">Toggle user menu</span>
';
                $buffer .= $indent . '	<i class="ace-icon fa fa-user fa-2x white"></i>
';
                $buffer .= $indent . '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c70ddd52b147aac3378d7a35d75de10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
	<span class="sr-only">Toggle sidebar</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
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
                
                $buffer .= $indent . '<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
';
                $buffer .= $indent . '	<span class="sr-only">Toggle sidebar</span>
';
                $buffer .= $indent . '	<span class="icon-bar"></span>
';
                $buffer .= $indent . '	<span class="icon-bar"></span>
';
                $buffer .= $indent . '	<span class="icon-bar"></span>
';
                $buffer .= $indent . '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42272b3b5de415bdde66919a067f997d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-menu">
	<span class="sr-only">Toggle top menu</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
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
                
                $buffer .= $indent . '<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-menu">
';
                $buffer .= $indent . '	<span class="sr-only">Toggle top menu</span>
';
                $buffer .= $indent . '	<span class="icon-bar"></span>
';
                $buffer .= $indent . '	<span class="icon-bar"></span>
';
                $buffer .= $indent . '	<span class="icon-bar"></span>
';
                $buffer .= $indent . '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
