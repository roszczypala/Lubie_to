<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a9b496c6f567308e51842e68e76e9771c29b59b42cf1ff59796a027b80d0a459 extends Twig_Template
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
        $__internal_041f1845cb737a3e6e44c9c7ba7924770720409df16296129029c95bd5a40d98 = $this->env->getExtension("native_profiler");
        $__internal_041f1845cb737a3e6e44c9c7ba7924770720409df16296129029c95bd5a40d98->enter($__internal_041f1845cb737a3e6e44c9c7ba7924770720409df16296129029c95bd5a40d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_041f1845cb737a3e6e44c9c7ba7924770720409df16296129029c95bd5a40d98->leave($__internal_041f1845cb737a3e6e44c9c7ba7924770720409df16296129029c95bd5a40d98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
