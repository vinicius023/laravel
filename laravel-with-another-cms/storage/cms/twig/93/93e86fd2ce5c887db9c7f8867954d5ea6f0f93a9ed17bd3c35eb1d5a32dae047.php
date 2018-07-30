<?php

/* /home/ana/laravel-content/laravel-with-another-cms/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_d411c2ef5d72710360b6f4e882926c725d86edd157f99d3e6f79296bfd4e0fce extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css"));
        // line 13
        echo "\" rel=\"stylesheet\">
    ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "
  </head>
  <body>

\t";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "\t

  ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("jumbotron"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "

\t<p>OI TRETA</p>

  <section id=\"page\" class=\"container m-b-3\">
    ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 29
        echo "  </section>

    <script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js"));
        // line 39
        echo "\"></script>
    ";
        // line 40
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 41
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 42
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ana/laravel-content/laravel-with-another-cms/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 42,  83 => 41,  76 => 40,  73 => 39,  71 => 31,  67 => 29,  65 => 28,  58 => 23,  54 => 22,  50 => 20,  46 => 19,  40 => 15,  37 => 14,  34 => 13,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css'
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}

  </head>
  <body>

\t{% partial 'navbar' %}
\t

  {% partial 'jumbotron' %}


\t<p>OI TRETA</p>

  <section id=\"page\" class=\"container m-b-3\">
    {% page %}
  </section>

    <script src=\"{{ [
      'assets/vendor/jquery/dist/jquery.min.js',
      'assets/vendor/tether/dist/js/tether.min.js',
      'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
      'assets/vendor/wow/dist/wow.min.js',
      'assets/vendor/holderjs/holder.min.js',
      'assets/vendor/plyr/dist/plyr.js',
      'assets/js/scripts.js'
    ]|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
  </body>
</html>", "/home/ana/laravel-content/laravel-with-another-cms/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
