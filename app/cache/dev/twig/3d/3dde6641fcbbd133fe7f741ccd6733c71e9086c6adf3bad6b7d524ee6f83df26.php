<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ae52ecf97cd0cf2f60db52f03ee524f08a67a54458992992a0b214a4ef5b1bc7 extends Twig_Template
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
        $__internal_f1a4a49b614719c3b732b77a56aadc12f762f040aa46fb3ea723ef3298783e0e = $this->env->getExtension("native_profiler");
        $__internal_f1a4a49b614719c3b732b77a56aadc12f762f040aa46fb3ea723ef3298783e0e->enter($__internal_f1a4a49b614719c3b732b77a56aadc12f762f040aa46fb3ea723ef3298783e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f1a4a49b614719c3b732b77a56aadc12f762f040aa46fb3ea723ef3298783e0e->leave($__internal_f1a4a49b614719c3b732b77a56aadc12f762f040aa46fb3ea723ef3298783e0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
