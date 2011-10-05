<?php

/* login.twig */
class __TwigTemplate_38ca6f92ebb241019b1c9d0c36b5cd2a extends Twig_Template
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
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titolo($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getContext($context, 'titolo'), "html");
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        if (((array_key_exists("login_errato", $context)) ? (twig_default_filter($this->getContext($context, 'login_errato'), false)) : (false))) {
            // line 11
            echo "\t\t<p style=\"color:#FF0000\"> Hai sbagliato il login! </p>
\t";
        }
        // line 13
        echo "\t<form name=\"login_form\" id=\"login_form\"  method=\"POST\">
\t\t
\t\t<p>
\t\t\tUsername <input type=\"text\" name=\"username\" id=\"username\" placeholder=\"username\" />
\t\t</p>
\t\t<p>
\t\t\tPassword <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"password\" />
\t\t</p>\t
\t\t
\t\t<input type=\"submit\" name=\"login\" id=\"login\" value=\"Login\" />\t
\t\t
\t</form>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
