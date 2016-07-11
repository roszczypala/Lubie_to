<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_17b148922bcbe2b8019ae613b11983feff9b29fe5df50820e42855258bd82e72 extends Twig_Template
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
        $__internal_eb547db1f7864d2d0c24c3e4854b124ca02833865ab595ca24e3e9d94386c546 = $this->env->getExtension("native_profiler");
        $__internal_eb547db1f7864d2d0c24c3e4854b124ca02833865ab595ca24e3e9d94386c546->enter($__internal_eb547db1f7864d2d0c24c3e4854b124ca02833865ab595ca24e3e9d94386c546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_eb547db1f7864d2d0c24c3e4854b124ca02833865ab595ca24e3e9d94386c546->leave($__internal_eb547db1f7864d2d0c24c3e4854b124ca02833865ab595ca24e3e9d94386c546_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
