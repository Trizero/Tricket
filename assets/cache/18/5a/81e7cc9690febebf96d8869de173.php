<?php

/* login_successo.twig */
class __TwigTemplate_185a81e7cc9690febebf96d8869de173 extends Twig_Template
{
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

  <title>login effetuato</title>
  <meta name=\"description\" content=\"\" />
  <meta name=\"author\" content=\"Mauro Bolis\" />

  <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0\" />

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel=\"shortcut icon\" href=\"/favicon.ico\" />
  <link rel=\"apple-touch-icon\" href=\"/apple-touch-icon.png\" />
</head>

<body>
\tBenvenuto ";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, 'nome'), "html");
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'cognome'), "html");
        echo "
</html>
";
    }

    public function getTemplateName()
    {
        return "login_successo.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
