<?php

/* /Applications/MAMP/htdocs/CDDNation/GIT/LaravelCMS/themes/demo/pages/home.htm */
class __TwigTemplate_109329c75baeda5873bee2ec16fb66e24e2d82b6575a2984c11456fb5274b93c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        );
        // line 4
        echo "    </div>
</div>

<div class=\"container\">
    
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/CDDNation/GIT/LaravelCMS/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  23 => 3,  19 => 1,);
    }
}
