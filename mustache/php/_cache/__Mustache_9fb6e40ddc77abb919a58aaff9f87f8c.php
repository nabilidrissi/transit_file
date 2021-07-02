<?php

class __Mustache_9fb6e40ddc77abb919a58aaff9f87f8c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="footer"><div class="footer-inner">
';
        $buffer .= $indent . '	<!-- #section:basics/footer -->
';
        $buffer .= $indent . '	<div class="footer-content">
';
        $buffer .= $indent . '		<span class="bigger-120"><span class="blue bolder">Ace</span> Application &copy; 2013-2014</span>
';
        $buffer .= $indent . '		&nbsp; &nbsp;
';
        $buffer .= $indent . '		<span class="action-buttons">
';
        $buffer .= $indent . '			<a href="#">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<a href="#">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '			
';
        $buffer .= $indent . '			<a href="#">
';
        $buffer .= $indent . '				<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
';
        $buffer .= $indent . '			</a>
';
        $buffer .= $indent . '		</span>
';
        $buffer .= $indent . '	</div>
';
        $buffer .= $indent . '	<!-- /section:basics/footer -->
';
        $buffer .= $indent . '</div></div>';

        return $buffer;
    }
}
