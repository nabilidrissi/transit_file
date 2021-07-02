<?php

class __Mustache_1c3262bd0e0ba9567f28ac781b58a869 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<li class="';
        // 'class' section
        $value = $context->find('class');
        $buffer .= $this->section515b6d001b504db447c7048c12e3d161($context, $indent, $value);
        $buffer .= ' ';
        // 'page.horizontal-menu' section
        $value = $context->findDot('page.horizontal-menu');
        $buffer .= $this->section23fa4c2f7149a182c150c484c77a3dde($context, $indent, $value);
        $buffer .= '">';
        $buffer .= '
';
        $buffer .= $indent . '  <a href="';
        // 'link' section
        $value = $context->find('link');
        $buffer .= $this->section3d8a44e46ea0b712150bdb510600bbbc($context, $indent, $value);
        // 'link' inverted section
        $value = $context->find('link');
        if (empty($value)) {
            
            $buffer .= '#';
        }
        $buffer .= '"';
        // 'submenu?' section
        $value = $context->find('submenu?');
        $buffer .= $this->section2fd0628d963daf86d2fde973edd59498($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '	';
        // 'icon' section
        $value = $context->find('icon');
        $buffer .= $this->section7e04459a4e82d2a56bf9f0b27ce7d702($context, $indent, $value);
        $buffer .= '
';
        // 'level-1' section
        $value = $context->find('level-1');
        $buffer .= $this->sectionF77d62d19479cac9a33abc3d6a5a894c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '	 ';
        // 'level-2' section
        $value = $context->find('level-2');
        $buffer .= $this->sectionCc5cca2d8403a77a12c18b56944a291b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '	  ';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '
';
        // 'badge' section
        $value = $context->find('badge');
        $buffer .= $this->sectionE5c34f7dccbbf40dc6bfca7e0daf6c69($context, $indent, $value);
        // 'label' section
        $value = $context->find('label');
        $buffer .= $this->sectionCc6243104285b86c81caa7c3ec6c16b4($context, $indent, $value);
        // 'level-1' section
        $value = $context->find('level-1');
        $buffer .= $this->section8cc52b974b979e859f669c8830629e44($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '	';
        // 'submenu?' section
        $value = $context->find('submenu?');
        $buffer .= $this->sectionBe761f2ef8d0ecbc27aac746d5ab37e1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '  </a>
';
        $buffer .= $indent . '  <b class="arrow"></b>
';
        $buffer .= $indent . '  ';
        // 'submenu?' section
        $value = $context->find('submenu?');
        $buffer .= $this->sectionA5ec569619aa654b6b7059ed24bc6666($context, $indent, $value);
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section515b6d001b504db447c7048c12e3d161(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{class}}';
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
                
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23fa4c2f7149a182c150c484c77a3dde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'hover';
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
                
                $buffer .= 'hover';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4e79cc86c3196e5bf3c56812364fd5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{link}}';
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
                
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d8a44e46ea0b712150bdb510600bbbc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#createLinkFunction}}{{link}}{{/createLinkFunction}}';
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
                
                // 'createLinkFunction' section
                $value = $context->find('createLinkFunction');
                $buffer .= $this->sectionF4e79cc86c3196e5bf3c56812364fd5d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fd0628d963daf86d2fde973edd59498(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' class="dropdown-toggle"';
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
                
                $buffer .= ' class="dropdown-toggle"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e04459a4e82d2a56bf9f0b27ce7d702(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<i class="menu-icon {{icon}}"></i>';
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
                
                $buffer .= '<i class="menu-icon ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '"></i>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF77d62d19479cac9a33abc3d6a5a894c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <span class="menu-text">
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
                
                $buffer .= $indent . '	 <span class="menu-text">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc5cca2d8403a77a12c18b56944a291b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! if this item is level-2 and no icon assigned to it, use this icon}}
		{{^icon}}<i class="menu-icon fa fa-caret-right"></i>{{/icon}}
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
                $buffer .= $indent . '		';
                // 'icon' inverted section
                $value = $context->find('icon');
                if (empty($value)) {
                    
                    $buffer .= '<i class="menu-icon fa fa-caret-right"></i>';
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfb33b09a80b4b4bfb257c3df2325e2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' title="{{{tooltip}}}"';
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
                
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('tooltip'), $context);
                $buffer .= $value;
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5c34f7dccbbf40dc6bfca7e0daf6c69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<!-- #section:basics/sidebar.layout.badge -->
			<span class="badge {{badge-class}} {{tooltip-class}}"{{#tooltip}} title="{{{tooltip}}}"{{/tooltip}}>{{{badge}}}</span>
			<!-- /section:basics/sidebar.layout.badge -->
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
                
                $buffer .= $indent . '			<!-- #section:basics/sidebar.layout.badge -->
';
                $buffer .= $indent . '			<span class="badge ';
                $value = $this->resolveValue($context->find('badge-class'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('tooltip-class'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '"';
                // 'tooltip' section
                $value = $context->find('tooltip');
                $buffer .= $this->sectionFfb33b09a80b4b4bfb257c3df2325e2b($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('badge'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '			<!-- /section:basics/sidebar.layout.badge -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf19b645c02b374feac25bdf8e7b96da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' title="{{label-title}}"';
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
                
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('label-title'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc6243104285b86c81caa7c3ec6c16b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<span class="label {{label-class}}"{{#label-title}} title="{{label-title}}"{{/label-title}}>{{{label}}}</span>
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
                
                $buffer .= $indent . '			<span class="label ';
                $value = $this->resolveValue($context->find('label-class'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '"';
                // 'label-title' section
                $value = $context->find('label-title');
                $buffer .= $this->sectionCf19b645c02b374feac25bdf8e7b96da($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8cc52b974b979e859f669c8830629e44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 </span>
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
                
                $buffer .= $indent . '	 </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe761f2ef8d0ecbc27aac746d5ab37e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<b class="arrow fa fa-angle-down"></b>';
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
                
                $buffer .= '<b class="arrow fa fa-angle-down"></b>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbc0a914d0d5c3823fa48be3ee79b62d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		{{> layout.sidebar.item}}
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
                
                if ($partial = $this->mustache->loadPartial('layout.sidebar.item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '		');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5ec569619aa654b6b7059ed24bc6666(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! if we have submenu items, print them recursively }}
	<ul class="submenu">
	{{#submenu}}
		{{> layout.sidebar.item}}
	{{/submenu}}
	</ul>
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
                $buffer .= $indent . '	<ul class="submenu">
';
                // 'submenu' section
                $value = $context->find('submenu');
                $buffer .= $this->sectionDbc0a914d0d5c3823fa48be3ee79b62d($context, $indent, $value);
                $buffer .= $indent . '	</ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
