<?php

/* /Applications/MAMP/htdocs/CDDNation/GIT/LaravelCMS/themes/demo/partials/explain/ajax.htm */
class __TwigTemplate_a3e244871aa06bc6025c7fa254890529a89c23213538e55b88a5b87cbe154509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_d301ab1cd1f908514e59c973604782f519a9c522e022100f8f65533e0e085c74' => array($this, 'block___internal_d301ab1cd1f908514e59c973604782f519a9c522e022100f8f65533e0e085c74'),
            '__internal_69e7291675f4debcda02eff84c5303a2055370bf709eb0415bd5ac0d47323977' => array($this, 'block___internal_69e7291675f4debcda02eff84c5303a2055370bf709eb0415bd5ac0d47323977'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i>
        The HTML markup for this example:
    </p>
    <pre>";
        // line 9
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_d301ab1cd1f908514e59c973604782f519a9c522e022100f8f65533e0e085c74", $context, $blocks));
        // line 24
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i>
    The <code>calcresult</code> partial:
</p>

<pre>";
        // line 33
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_69e7291675f4debcda02eff84c5303a2055370bf709eb0415bd5ac0d47323977", $context, $blocks));
        // line 38
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i>
    The <code>onTest</code> PHP code:
</p>

<pre>function onTest()
{
    \$value1 = post('value1');
    \$value2 = post('value2');
    \$operation = post('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>


<hr />

<div class=\"text-center\">
    <p><a href=\"";
        // line 73
        echo $this->env->getExtension('CMS')->pageFilter("plugins");
        echo "\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>";
    }

    // line 9
    public function block___internal_d301ab1cd1f908514e59c973604782f519a9c522e022100f8f65533e0e085c74($context, array $blocks = array())
    {
        echo "<!-- The form -->
<form data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">";
        // line 23
        echo "{% partial \"calcresult\" %}";
        echo "</div>
";
    }

    // line 33
    public function block___internal_69e7291675f4debcda02eff84c5303a2055370bf709eb0415bd5ac0d47323977($context, array $blocks = array())
    {
        // line 34
        echo "{% if result != null %}";
        echo "
    The result is ";
        // line 35
        echo "{{ result }}";
        echo ".
";
        // line 36
        echo "{% else %}";
        echo "
    Click the <em>Calculate</em> button to find the answer.
";
        // line 38
        echo "{% endif %}";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/CDDNation/GIT/LaravelCMS/themes/demo/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  124 => 36,  120 => 35,  116 => 34,  113 => 33,  107 => 23,  89 => 9,  83 => 73,  46 => 38,  44 => 33,  33 => 24,  31 => 9,  30 => 6,  24 => 3,  21 => 1,  64 => 39,  56 => 33,  52 => 32,  19 => 1,);
    }
}
