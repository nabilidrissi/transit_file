<?php

class __Mustache_afd4d19c334f3ef6afa108e06c3e4992 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<table class="table table-bordered table-striped">
';
        $buffer .= $indent . '	<thead class="thin-border-bottom">
';
        $buffer .= $indent . '		<tr>
';
        $buffer .= $indent . '			<th><i class="ace-icon fa fa-caret-right blue"></i>name</th>
';
        $buffer .= $indent . '			<th><i class="ace-icon fa fa-caret-right blue"></i>price</th>
';
        $buffer .= $indent . '			<th class="hidden-480"><i class="ace-icon fa fa-caret-right blue"></i>status</th>
';
        $buffer .= $indent . '		</tr>
';
        $buffer .= $indent . '	</thead>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<tbody>
';
        // 'page.domains' section
        $value = $context->findDot('page.domains');
        $buffer .= $this->sectionE3097ea40e7cc36f58eca463a79a3963($context, $indent, $value);
        $buffer .= $indent . '	</tbody>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function section79dd6ed024f8acff9552384164d38e5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				 <small><s class="red">{{old_price}}</s></small>
				 <b class="green">{{price}}</b>
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
                
                $buffer .= $indent . '				 <small><s class="red">';
                $value = $this->resolveValue($context->find('old_price'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</s></small>
';
                $buffer .= $indent . '				 <b class="green">';
                $value = $this->resolveValue($context->find('price'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</b>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3c27f1c98c40063cf545612927598d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				 <span class="label label-info arrowed-right arrowed-in">on sale</span>
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
                
                $buffer .= $indent . '				 <span class="label label-info arrowed-right arrowed-in">on sale</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section271f86d06e1751233eb7d8aebf73e80e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				 <span class="label label-success arrowed-in arrowed-in-right">approved</span>
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
                
                $buffer .= $indent . '				 <span class="label label-success arrowed-in arrowed-in-right">approved</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0d8750849fb8576edb1b68517011b1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				 <span class="label label-danger arrowed">pending</span>
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
                
                $buffer .= $indent . '				 <span class="label label-danger arrowed">pending</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2210e6f778755de967b6c262efbda20f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				 <span class="label arrowed"><s>out of stock</s></span>
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
                
                $buffer .= $indent . '				 <span class="label arrowed"><s>out of stock</s></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbad66b3acdd5a3c5a7386cde08ad15a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<span class="label label-warning arrowed arrowed-right">SOLD</span>
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
                
                $buffer .= $indent . '				<span class="label label-warning arrowed arrowed-right">SOLD</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3097ea40e7cc36f58eca463a79a3963(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<tr>
			<td>{{name}}</td>
			<td>
				{{#old_price}}
				 <small><s class="red">{{old_price}}</s></small>
				 <b class="green">{{price}}</b>
				{{/old_price}}
				{{^old_price}}
				 <b class="blue">{{price}}</b>
				{{/old_price}}
			</td>
			<td class="hidden-480">
				{{#on_sale}}
				 <span class="label label-info arrowed-right arrowed-in">on sale</span>
				{{/on_sale}}
				{{#approved}}
				 <span class="label label-success arrowed-in arrowed-in-right">approved</span>
				{{/approved}}
				{{#pending}}
				 <span class="label label-danger arrowed">pending</span>
				{{/pending}}
				{{#out_of_stock}}
				 <span class="label arrowed"><s>out of stock</s></span>
				{{/out_of_stock}}
				 {{#sold}}
				<span class="label label-warning arrowed arrowed-right">SOLD</span>
				{{/sold}}
			</td>
		</tr>
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
                
                $buffer .= $indent . '		<tr>
';
                $buffer .= $indent . '			<td>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</td>
';
                $buffer .= $indent . '			<td>
';
                // 'old_price' section
                $value = $context->find('old_price');
                $buffer .= $this->section79dd6ed024f8acff9552384164d38e5c($context, $indent, $value);
                // 'old_price' inverted section
                $value = $context->find('old_price');
                if (empty($value)) {
                    
                    $buffer .= $indent . '				 <b class="blue">';
                    $value = $this->resolveValue($context->find('price'), $context);
                    $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                    $buffer .= '</b>
';
                }
                $buffer .= $indent . '			</td>
';
                $buffer .= $indent . '			<td class="hidden-480">
';
                // 'on_sale' section
                $value = $context->find('on_sale');
                $buffer .= $this->sectionB3c27f1c98c40063cf545612927598d8($context, $indent, $value);
                // 'approved' section
                $value = $context->find('approved');
                $buffer .= $this->section271f86d06e1751233eb7d8aebf73e80e($context, $indent, $value);
                // 'pending' section
                $value = $context->find('pending');
                $buffer .= $this->sectionA0d8750849fb8576edb1b68517011b1b($context, $indent, $value);
                // 'out_of_stock' section
                $value = $context->find('out_of_stock');
                $buffer .= $this->section2210e6f778755de967b6c262efbda20f($context, $indent, $value);
                // 'sold' section
                $value = $context->find('sold');
                $buffer .= $this->sectionAbad66b3acdd5a3c5a7386cde08ad15a($context, $indent, $value);
                $buffer .= $indent . '			</td>
';
                $buffer .= $indent . '		</tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
