<?php

class __Mustache_c29eea397984f3de8c687dac6ca516dc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="infobox infobox-';
        $value = $this->resolveValue($context->find('color'), $context);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= ' ';
        // 'small' section
        $value = $context->find('small');
        $buffer .= $this->section4801bf06ab018ac97204cb2ac16bd5fa($context, $indent, $value);
        $buffer .= ' ';
        // 'dark' section
        $value = $context->find('dark');
        $buffer .= $this->section39e2d88bd0f1ce823c167e2b41e1e46b($context, $indent, $value);
        $buffer .= '">
';
        // 'icon' section
        $value = $context->find('icon');
        $buffer .= $this->section2d40ee5a017e8c76b830bfecb2ff2a1b($context, $indent, $value);
        // 'progress' section
        $value = $context->find('progress');
        $buffer .= $this->sectionF391b0b533f7a440f526bc7999c2004f($context, $indent, $value);
        // 'chart' section
        $value = $context->find('chart');
        $buffer .= $this->sectionE24a28904e11760e801cc4c885d7ae0b($context, $indent, $value);
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="infobox-data">
';
        // 'number' section
        $value = $context->find('number');
        $buffer .= $this->section575f8cde3bbc5c36e0d131e7740da228($context, $indent, $value);
        // 'text' section
        $value = $context->find('text');
        $buffer .= $this->section0f71bfb13d1005dd1089744d265ada7b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '		';
        // 'content' section
        $value = $context->find('content');
        $buffer .= $this->section868fb031e156a79c1431560ab853fd44($context, $indent, $value);
        $buffer .= $indent . '	</div>
';
        // 'stat-success' section
        $value = $context->find('stat-success');
        $buffer .= $this->sectionEa798180462ed1010981774a57f25f10($context, $indent, $value);
        // 'stat-important' section
        $value = $context->find('stat-important');
        $buffer .= $this->sectionD222973882cc4305f30c056ec993c73e($context, $indent, $value);
        // 'badge-success' section
        $value = $context->find('badge-success');
        $buffer .= $this->section2e5e0776541ccf9526a19d178588516a($context, $indent, $value);
        // 'badge-important' section
        $value = $context->find('badge-important');
        $buffer .= $this->section1b16fb63fa7a85d4b0eb3c55f073a665($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section4801bf06ab018ac97204cb2ac16bd5fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'infobox-small';
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
                
                $buffer .= 'infobox-small';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39e2d88bd0f1ce823c167e2b41e1e46b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'infobox-dark';
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
                
                $buffer .= 'infobox-dark';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d40ee5a017e8c76b830bfecb2ff2a1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="infobox-icon">
		<i class="ace-icon {{icon}}"></i>
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
                
                $buffer .= $indent . '	 <div class="infobox-icon">
';
                $buffer .= $indent . '		<i class="ace-icon ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '"></i>
';
                $buffer .= $indent . '	 </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section653a1b77ffe301ac2d353c6a29da89ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '39';
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
                
                $buffer .= '39';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF391b0b533f7a440f526bc7999c2004f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="infobox-progress">
		<!-- #section:pages/dashboard.infobox.easypiechart -->
		<div class="easy-pie-chart percentage" data-percent="{{progress}}" data-size="{{^small}}46{{/small}}{{#small}}39{{/small}}">
			<span class="percent">{{progress}}</span>%
		</div>
		<!-- /section:pages/dashboard.infobox.easypiechart -->
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
                
                $buffer .= $indent . '	 <div class="infobox-progress">
';
                $buffer .= $indent . '		<!-- #section:pages/dashboard.infobox.easypiechart -->
';
                $buffer .= $indent . '		<div class="easy-pie-chart percentage" data-percent="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '" data-size="';
                // 'small' inverted section
                $value = $context->find('small');
                if (empty($value)) {
                    
                    $buffer .= '46';
                }
                // 'small' section
                $value = $context->find('small');
                $buffer .= $this->section653a1b77ffe301ac2d353c6a29da89ef($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '			<span class="percent">';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</span>%
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		<!-- /section:pages/dashboard.infobox.easypiechart -->
';
                $buffer .= $indent . '	 </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE24a28904e11760e801cc4c885d7ae0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <!-- #section:pages/dashboard.infobox.sparkline -->
	 <div class="infobox-chart">
		<span class="sparkline" data-values="{{chart}}"></span>
	 </div>
	 <!-- /section:pages/dashboard.infobox.sparkline -->
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
                
                $buffer .= $indent . '	 <!-- #section:pages/dashboard.infobox.sparkline -->
';
                $buffer .= $indent . '	 <div class="infobox-chart">
';
                $buffer .= $indent . '		<span class="sparkline" data-values="';
                $value = $this->resolveValue($context->find('chart'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '"></span>
';
                $buffer .= $indent . '	 </div>
';
                $buffer .= $indent . '	 <!-- /section:pages/dashboard.infobox.sparkline -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section575f8cde3bbc5c36e0d131e7740da228(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<span class="infobox-data-number">{{number}}</span>
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
                
                $buffer .= $indent . '		<span class="infobox-data-number">';
                $value = $this->resolveValue($context->find('number'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f71bfb13d1005dd1089744d265ada7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<span class="infobox-text">{{text}}</span>
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
                
                $buffer .= $indent . '		<span class="infobox-text">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section868fb031e156a79c1431560ab853fd44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! sometimes we have two content texts like in smaller infoboxes, so use a loop }}
		<div class="infobox-content">{{{.}}}</div>
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
                $buffer .= $indent . '		<div class="infobox-content">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa798180462ed1010981774a57f25f10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <!-- #section:pages/dashboard.infobox.stat -->
	 <div class="stat stat-success">{{stat-success}}</div>
	 <!-- /section:pages/dashboard.infobox.stat -->
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
                
                $buffer .= $indent . '	 <!-- #section:pages/dashboard.infobox.stat -->
';
                $buffer .= $indent . '	 <div class="stat stat-success">';
                $value = $this->resolveValue($context->find('stat-success'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $buffer .= $indent . '	 <!-- /section:pages/dashboard.infobox.stat -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD222973882cc4305f30c056ec993c73e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="stat stat-important">{{stat-important}}</div>
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
                
                $buffer .= $indent . '	 <div class="stat stat-important">';
                $value = $this->resolveValue($context->find('stat-important'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e5e0776541ccf9526a19d178588516a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="badge badge-success">{{badge-success}} <i class="ace-icon fa fa-arrow-up"></i></div>
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
                
                $buffer .= $indent . '	 <div class="badge badge-success">';
                $value = $this->resolveValue($context->find('badge-success'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' <i class="ace-icon fa fa-arrow-up"></i></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b16fb63fa7a85d4b0eb3c55f073a665(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="badge badge-danger">{{badge-important}} <i class="ace-icon fa fa-arrow-down"></i></div>
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
                
                $buffer .= $indent . '	 <div class="badge badge-danger">';
                $value = $this->resolveValue($context->find('badge-important'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' <i class="ace-icon fa fa-arrow-down"></i></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
