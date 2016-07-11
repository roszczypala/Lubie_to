<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_12de725178097f7dd7471c7d0cdf0661c8b96aeec1ea1d891ca59e22ca6d348d extends Twig_Template
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
        $__internal_afbc0bda5f109822bffaa98d1f8cddf33e5a9c9499ff85549446aefd45c2dc6d = $this->env->getExtension("native_profiler");
        $__internal_afbc0bda5f109822bffaa98d1f8cddf33e5a9c9499ff85549446aefd45c2dc6d->enter($__internal_afbc0bda5f109822bffaa98d1f8cddf33e5a9c9499ff85549446aefd45c2dc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_afbc0bda5f109822bffaa98d1f8cddf33e5a9c9499ff85549446aefd45c2dc6d->leave($__internal_afbc0bda5f109822bffaa98d1f8cddf33e5a9c9499ff85549446aefd45c2dc6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
