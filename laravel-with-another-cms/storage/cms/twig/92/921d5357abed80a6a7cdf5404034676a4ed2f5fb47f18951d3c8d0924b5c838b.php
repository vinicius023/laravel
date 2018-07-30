<?php

/* /home/ana/laravel-content/laravel-with-another-cms/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm */
class __TwigTemplate_781e2eaa18d001c2d8ff69341f6c5dea01ee193fe9db1fc4d5be9f2dda80b890 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('jumbotron'        );
        // line 2
        echo "  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
<div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div>";
    }

    public function getTemplateName()
    {
        return "/home/ana/laravel-content/laravel-with-another-cms/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put jumbotron %}
  <h1 class=\"display-3\">Hambern</h1>
  <p class=\"lead\">The template is created by Mattias \"Hambern\" Hamberg</p>
  <p>Please visit my homepage at <a href=\"http://hambergmedia.se\">hambergmedia.se</a></p>
{% endput %}

<div data-type=\"youtube\" data-video-id=\"Bf4HAse1DOQ\" data-plyr='{\"autoplay\":true}'></div>", "/home/ana/laravel-content/laravel-with-another-cms/themes/hambern-hambern-blank-bootstrap-4/pages/author.htm", "");
    }
}
