<?php

/* template.twig */
class __TwigTemplate_a41bbfced0083f9fe2baa94aee8cae5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'titolo' => array($this, 'block_titolo'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\" />

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

  <title>";
        // line 10
        $this->displayBlock('titolo', $context, $blocks);
        echo "</title>
  <meta name=\"description\" content=\"\" />
  <meta name=\"author\" content=\"Mauro Bolis\" />

  <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0\" />

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel=\"shortcut icon\" href=\"/favicon.ico\" />
  <link rel=\"apple-touch-icon\" href=\"/apple-touch-icon.png\" />
</head>

<body>
\t<h2>Questo è Tricket!</h2>
\t<div style=\"margin: auto; width: 70%\">
\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "\t</div>
</body>
</html>
";
    }

    // line 10
    public function block_titolo($context, array $blocks = array())
    {
        echo "Titolo";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t
\t";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
