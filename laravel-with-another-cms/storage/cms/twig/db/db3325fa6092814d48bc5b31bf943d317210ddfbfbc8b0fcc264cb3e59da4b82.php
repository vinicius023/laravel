<?php

/* /home/ana/laravel-content/laravel-with-another-cms/themes/hambern-hambern-blank-bootstrap-4/pages/minha-primeira-pagina.htm */
class __TwigTemplate_1b91d34232a332bb078d93461a28e2c2c86272237dfd92db53f9e343558b9a71 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-6\" style=\"background-color: red; min-height:300px;\">DIV 1</div>
    <div class=\"col-6\" style=\"background-color: blue; min-height:300px;\">DIV 2</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ana/laravel-content/laravel-with-another-cms/themes/hambern-hambern-blank-bootstrap-4/pages/minha-primeira-pagina.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-6\" style=\"background-color: red; min-height:300px;\">DIV 1</div>
    <div class=\"col-6\" style=\"background-color: blue; min-height:300px;\">DIV 2</div>
</div>", "/home/ana/laravel-content/laravel-with-another-cms/themes/hambern-hambern-blank-bootstrap-4/pages/minha-primeira-pagina.htm", "");
    }
}
