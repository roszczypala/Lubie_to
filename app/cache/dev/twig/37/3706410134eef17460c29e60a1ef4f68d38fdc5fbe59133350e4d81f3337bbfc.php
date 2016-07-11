<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9f0da8561251aa70d10884f4b6656d904ec9bae5513a1196bbc990af84689bc3 extends Twig_Template
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
        $__internal_ad99520d3b43beddfd14c10bca4b7e0f61946cff9bcad594510d9fef7b7d07db = $this->env->getExtension("native_profiler");
        $__internal_ad99520d3b43beddfd14c10bca4b7e0f61946cff9bcad594510d9fef7b7d07db->enter($__internal_ad99520d3b43beddfd14c10bca4b7e0f61946cff9bcad594510d9fef7b7d07db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ad99520d3b43beddfd14c10bca4b7e0f61946cff9bcad594510d9fef7b7d07db->leave($__internal_ad99520d3b43beddfd14c10bca4b7e0f61946cff9bcad594510d9fef7b7d07db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
