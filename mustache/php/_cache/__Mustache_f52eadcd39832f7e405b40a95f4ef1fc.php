<?php

class __Mustache_f52eadcd39832f7e405b40a95f4ef1fc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<!-- #section:pages/dashboard.members -->
';
        $buffer .= $indent . '<div class="clearfix">
';
        // 'page.members' section
        $value = $context->findDot('page.members');
        $buffer .= $this->section163111bb95d32dad94eb709087c099a0($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="space-4"></div>
';
        $buffer .= $indent . '<div class="center">
';
        $buffer .= $indent . '	<i class="ace-icon fa fa-users fa-2x green middle"></i>
';
        $buffer .= $indent . '	&nbsp;
';
        $buffer .= $indent . '	<a href="#" class="btn btn-sm btn-white btn-info">See all members &nbsp; <i class="ace-icon fa fa-arrow-right"></i></a>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="hr hr-double hr8"></div>
';
        $buffer .= $indent . '<!-- /section:pages/dashboard.members -->';

        return $buffer;
    }

    private function sectionF25d717b74d76bd9038094054ee9f814(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-warning label-sm">pending</span>									
				<div class="inline position-relative">
					<button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
						<i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
					</button>
					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
						<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve"><span class="green"><i class="ace-icon fa fa-check bigger-110"></i></span></a></li>
						<li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject"><span class="orange"><i class="ace-icon fa fa-times bigger-110"></i></span> </a></li>
						<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-110"></i></span> </a></li>
					</ul>
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
                
                $buffer .= $indent . '				<span class="label label-warning label-sm">pending</span>									
';
                $buffer .= $indent . '				<div class="inline position-relative">
';
                $buffer .= $indent . '					<button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
';
                $buffer .= $indent . '						<i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
';
                $buffer .= $indent . '					</button>
';
                $buffer .= $indent . '					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
';
                $buffer .= $indent . '						<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve"><span class="green"><i class="ace-icon fa fa-check bigger-110"></i></span></a></li>
';
                $buffer .= $indent . '						<li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject"><span class="orange"><i class="ace-icon fa fa-times bigger-110"></i></span> </a></li>
';
                $buffer .= $indent . '						<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-110"></i></span> </a></li>
';
                $buffer .= $indent . '					</ul>
';
                $buffer .= $indent . '				</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB157745b9821d050cc644861702b6f65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-danger label-sm">blocked</span>
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
                
                $buffer .= $indent . '				<span class="label label-danger label-sm">blocked</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d716bc905c8faa8d874c9c62e7a7009(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-success label-sm arrowed-in">approved</span>
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
                
                $buffer .= $indent . '				<span class="label label-success label-sm arrowed-in">approved</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30a149837a9a2f24faad807b6c361325(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
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
                
                $buffer .= $indent . '				<span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section163111bb95d32dad94eb709087c099a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<div class="itemdiv memberdiv">
		<div class="user">
			<img alt="{{name}}\'s avatar" src="{{path.assets}}/avatars/{{avatar}}" />
		</div>
		
		<div class="body">
			<div class="name"><a href="#">{{name}}</a></div>
			<div class="time"><i class="ace-icon fa fa-clock-o"></i> <span class="green">{{time}}</span></div>
			<div>
				{{#pending}}
				<span class="label label-warning label-sm">pending</span>									
				<div class="inline position-relative">
					<button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
						<i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
					</button>
					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
						<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Approve"><span class="green"><i class="ace-icon fa fa-check bigger-110"></i></span></a></li>
						<li><a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject"><span class="orange"><i class="ace-icon fa fa-times bigger-110"></i></span> </a></li>
						<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-110"></i></span> </a></li>
					</ul>
				</div>
				{{/pending}}
				{{#blocked}}
				<span class="label label-danger label-sm">blocked</span>
				{{/blocked}}
				{{#approved}}
				<span class="label label-success label-sm arrowed-in">approved</span>
				{{/approved}}
				{{#online}}
				<span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
				{{/online}}
			</div>
		</div>
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
                
                $buffer .= $indent . '	<div class="itemdiv memberdiv">
';
                $buffer .= $indent . '		<div class="user">
';
                $buffer .= $indent . '			<img alt="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '\'s avatar" src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '/avatars/';
                $value = $this->resolveValue($context->find('avatar'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '" />
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		<div class="body">
';
                $buffer .= $indent . '			<div class="name"><a href="#">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</a></div>
';
                $buffer .= $indent . '			<div class="time"><i class="ace-icon fa fa-clock-o"></i> <span class="green">';
                $value = $this->resolveValue($context->find('time'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</span></div>
';
                $buffer .= $indent . '			<div>
';
                // 'pending' section
                $value = $context->find('pending');
                $buffer .= $this->sectionF25d717b74d76bd9038094054ee9f814($context, $indent, $value);
                // 'blocked' section
                $value = $context->find('blocked');
                $buffer .= $this->sectionB157745b9821d050cc644861702b6f65($context, $indent, $value);
                // 'approved' section
                $value = $context->find('approved');
                $buffer .= $this->section8d716bc905c8faa8d874c9c62e7a7009($context, $indent, $value);
                // 'online' section
                $value = $context->find('online');
                $buffer .= $this->section30a149837a9a2f24faad807b6c361325($context, $indent, $value);
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '		</div>
';
                $buffer .= $indent . '	</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
