<?php

class __Mustache_3751a69d6dcd2c2947225c5fc9e6fac8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<li class="purple dropdown-modal">
';
        $buffer .= $indent . '	<a data-toggle="dropdown" class="dropdown-toggle" href="#">
';
        $buffer .= $indent . '		<i class="ace-icon fa fa-bell icon-animated-bell"></i>
';
        $buffer .= $indent . '		<span class="badge badge-important">';
        $value = $this->resolveValue($context->findDot('layout.navbar_notifications.count'), $context);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '</span>
';
        $buffer .= $indent . '	</a>
';
        $buffer .= $indent . '	<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
';
        $buffer .= $indent . '		<li class="dropdown-header">
';
        $buffer .= $indent . '			<i class="ace-icon fa fa-exclamation-triangle"></i> ';
        $value = $this->resolveValue($context->findDot('layout.navbar_notifications.count'), $context);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= ' Notifications
';
        $buffer .= $indent . '		</li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<li class="dropdown-content">
';
        $buffer .= $indent . '			<ul class="dropdown-menu dropdown-navbar navbar-pink">
';
        // 'layout.navbar_notifications.latest' section
        $value = $context->findDot('layout.navbar_notifications.latest');
        $buffer .= $this->section20d48c478b63b3c3cd438d1e3169178c($context, $indent, $value);
        $buffer .= $indent . '			</ul>
';
        $buffer .= $indent . '		</li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		<li class="dropdown-footer">
';
        $buffer .= $indent . '			<a href="#">
';
        $buffer .= $indent . '				See all notifications
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-arrow-right"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		</li>
';
        $buffer .= $indent . '	</ul>
';
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function sectionC313781bcdf08ba0623adcbeb01196b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<div class="clearfix">
							<span class="pull-left"><i class="btn btn-xs no-hover {{icon-class}} {{icon}}"></i> {{title}}</span>
							<span class="pull-right badge {{badge-class}}">{{badge}}</span>					
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
                
                $buffer .= $indent . '						<div class="clearfix">
';
                $buffer .= $indent . '							<span class="pull-left"><i class="btn btn-xs no-hover ';
                $value = $this->resolveValue($context->find('icon-class'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '"></i> ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</span>
';
                $buffer .= $indent . '							<span class="pull-right badge ';
                $value = $this->resolveValue($context->find('badge-class'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '">';
                $value = $this->resolveValue($context->find('badge'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</span>					
';
                $buffer .= $indent . '						</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20d48c478b63b3c3cd438d1e3169178c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<li>
					<a href="#">
						{{#badge}}
						<div class="clearfix">
							<span class="pull-left"><i class="btn btn-xs no-hover {{icon-class}} {{icon}}"></i> {{title}}</span>
							<span class="pull-right badge {{badge-class}}">{{badge}}</span>					
						</div>
						{{/badge}}
						{{^badge}}
							<i class="btn btn-xs {{icon-class}} {{icon}}"></i> {{title}}
						{{/badge}}
					</a>
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
                
                $buffer .= $indent . '				<li>
';
                $buffer .= $indent . '					<a href="#">
';
                // 'badge' section
                $value = $context->find('badge');
                $buffer .= $this->sectionC313781bcdf08ba0623adcbeb01196b1($context, $indent, $value);
                // 'badge' inverted section
                $value = $context->find('badge');
                if (empty($value)) {
                    
                    $buffer .= $indent . '							<i class="btn btn-xs ';
                    $value = $this->resolveValue($context->find('icon-class'), $context);
                    $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('icon'), $context);
                    $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                    $buffer .= '"></i> ';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                    $buffer .= '
';
                }
                $buffer .= $indent . '					</a>
';
                $buffer .= $indent . '				</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
