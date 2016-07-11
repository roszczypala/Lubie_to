<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ada8f0ce776a0b763211783f608aefb6d596ccfc77bf01b3688ba612cd7c1227 extends Twig_Template
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
        $__internal_cb1af64d99cf1dc1963ca9bca228fba5f5adb71a7000a2ffe4a967c768a1e7d1 = $this->env->getExtension("native_profiler");
        $__internal_cb1af64d99cf1dc1963ca9bca228fba5f5adb71a7000a2ffe4a967c768a1e7d1->enter($__internal_cb1af64d99cf1dc1963ca9bca228fba5f5adb71a7000a2ffe4a967c768a1e7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cb1af64d99cf1dc1963ca9bca228fba5f5adb71a7000a2ffe4a967c768a1e7d1->leave($__internal_cb1af64d99cf1dc1963ca9bca228fba5f5adb71a7000a2ffe4a967c768a1e7d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
